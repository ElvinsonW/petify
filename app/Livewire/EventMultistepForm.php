<?php

namespace App\Livewire;

use App\Models\Event;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class EventMultistepForm extends Component
{
    use WithFileUploads;

    public $step = 1;
    public $event_category_id, $title, $slug, $location, $ticket, $start_date, $end_date, $image, $description;
    public $dayLength;
    public $days = [];
    public $sessions = [];
    public $categories = [];

    public function mount($categories, $event = null)
    {
        $this->categories = $categories;
        $this->event_category_id = $event->event_category_id ?? '';
    }

    // Fungsi untuk memvalidasi input yang masuk
    public function validateData()
{
    if ($this->step == 1) {
        $this->validate([
            'event_category_id' => ['required'],
            'title' => ['required', 'max:100'],
            'slug' => ['required', Rule::unique('events')->ignore($this->event->id ?? null)],
            'location' => ['required', 'max:100'],
            'ticket' => ['required', 'numeric', 'min:0'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date', 'after_or_equal:start_date'],
            'image' => ($this->image instanceof \Illuminate\Http\UploadedFile) ? ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:1024'] : ['nullable'],
            'description' => ['required']
        ]);

        if ($this->image instanceof \Illuminate\Http\UploadedFile) {
            $this->image = $this->image->store('event-images', 'public');
        }

        if ($this->start_date && $this->end_date) {
            $this->start_date = Carbon::parse($this->start_date);
            $this->end_date = Carbon::parse($this->end_date);
            $this->dayLength = $this->start_date->diffInDays($this->end_date) + 1;
        }

        if ($this->start_date && $this->end_date) {
            $this->start_date = Carbon::parse($this->start_date)->format('Y-m-d');
            $this->end_date = Carbon::parse($this->end_date)->format('Y-m-d');
        }

        $this->days = collect(range(0, $this->dayLength - 1))->map(function ($i) {
            return ['date' => Carbon::parse($this->start_date)->addDays($i)->format('Y-m-d')];
        })->toArray();
    } elseif ($this->step == 2) {
        $this->validate([
            'days' => ['required', 'array'],
            'days.*.date' => ['required', 'date'],
            'sessions' => ['nullable', 'array'],
            'sessions.*.*.time' => ['required', 'date_format:H:i'],
            'sessions.*.*.title' => ['required', 'max:100'],
            'sessions.*.*.description' => ['required']
        ]);
    }
}

    
    // Fungsi untuk menghapu image dari local storage
    public function deleteImage()
    {
        // Cek kondisi untuk menghapus image 
        if ($this->image && is_string($this->image) && Storage::disk('public')->exists($this->image)) {
            // Hapus image dari local storage
            Storage::disk('public')->delete($this->image);
        }

        // Kembalikan variable menjadi null
        $this->image = null; 
    }

    // Fungsi untuk pergi ke step selanjutnya
    public function nextStep()
    {
        // Validasi data sebelum pergi ke step selanjutnya
        $this->validateData();
        

        if ($this->step < 2) {
            // Tambahkan step jika belum step terakhir untuk lanjut ke step selanjutnya
            $this->step++;
        } else {
            // Submit form jika sudah pada step terakhir
            $this->submitForm();
        }
    }

    // Fungsi untuk kembali ke step sebelumnya
    public function previousStep()
    {
        if ($this->step > 1) {
            // Kurangi step untuk kembali ke step sebelumnya
            $this->step--;
        }
    }

    // Fungsi untuk submit form dan menyimpan data ke dalam database
    public function submitForm()
    {
        $this->validateData();
        // Simpan event ke dalam database
        $event = Event::create([
            'title' => $this->title,
            'slug' => $this->slug,
            'location' => $this->location,
            'ticket' => $this->ticket,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'image' => $this->image, 
            'description' => $this->description,
            'user_id' => auth()->user()->id,
            'event_category_id' => $this->event_category_id
        ]);

        // Looping untuk setiap hari dan menimpannya ke dalam database
        foreach ($this->days as $dayIndex => $dayData) {
            // simpan setiap data dari day ke dalam database
            $day = $event->days()->create([
                'date' => $dayData['date'],
            ]);
            
            // Cek apakah terdapat session pada hari ini
            if (isset($this->sessions[$dayIndex])) {
                // Looping untuk setiap hari pada hari ini
                foreach ($this->sessions[$dayIndex] as $sessionData) {
                    // Simpan setiap session ke dalam database
                    $day->sessions()->create([
                        'time' => $sessionData['time'],
                        'title' => $sessionData['title'],
                        'description' => $sessionData['description']
                    ]);
                }
            }
        }

        Storage::deleteDirectory('livewire-tmp'); 

        // Direct ke Halaman Event dan beri pesan berhasil
        return redirect('/events')->with('createSuccess', 'Event Post Successfully Requested');
    }

    public function render()
    {
        // Mengembalikan view yang sesuai
        return view('livewire.event-multistep-form');
    }
}