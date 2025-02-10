<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class EventMultistepForm extends Component
{
    use WithFileUploads;

    public $step = 1;
    public $title, $slug, $location, $ticket, $start_date, $end_date, $image, $description;
    public $days = [];
    public $sessions = [];

    // Fungsi untuk memvalidasi input yang masuk
    public function validateData()
    {
        if ($this->step == 1) {
            // Validasi input yang masuk pada step 1
            $this->validate([
                'title' => ['required', 'max:100'],
                'slug' => ['required', 'unique:events'],
                'location' => ['required', 'max:100'],
                'ticket' => ['required', 'numeric', 'min:0'],
                'start_date' => ['required', 'date'],
                'end_date' => ['required', 'date', 'after_or_equal:start_date'],
                'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:1024'],
                'description' => ['required', 'max:255']
            ]);

            // Cek apakah image memiliki tipe data UploadedFile
            if ($this->image instanceof \Illuminate\Http\UploadedFile) {
                // Simpan image di dalam local storage
                $this->image = $this->image->store('event_images', 'public');
            }
        } elseif ($this->step == 2) {
            // Validasi input yang masuk dalam step 2
            $this->validate([
                'days.*.date' => ['required', 'date'],
                'sessions.*.*.time' => ['required', 'date_format:g:i a'],
                'sessions.*.*.title' => ['required', 'max:100'],
                'sessions.*.*.description' => ['required', 'max:255']
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
            'user_id' => auth()->user()->id
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

        // dd($this->days);
        foreach ($this->days as $dayIndex => $dayData) {
            $day = $event->days()->create([
                'date' => $dayData['date'],
            ]);
            
            if (isset($this->sessions[$dayIndex])) {
                foreach ($this->sessions[$dayIndex] as $sessionData) {
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
        return redirect('/events')->with('message', 'Form submitted successfully!');
    }

    public function render()
    {
        // Mengembalikan view yang sesuai
        return view('livewire.event-multistep-form');
    }
}