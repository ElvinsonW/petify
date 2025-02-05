<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class EventMultistepForm extends Component
{
    use WithFileUploads;

    public $step = 1;

    // Properti untuk setiap step
    public $title, $location, $ticket, $start_date, $end_date, $image, $description;
    public $days = [];
    public $sessions = [];

    public function validateData()
    {
        if ($this->step == 1) {
            $this->validate([
                'title' => ['required', 'max:100'],
                'location' => ['required', 'max:100'],
                'ticket' => ['required', 'numeric', 'min:0'],
                'start_date' => ['required', 'date'],
                'end_date' => ['required', 'date', 'after_or_equal:start_date'],
                'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:1024'],
                'description' => ['required', 'max:255']
            ]);
        } elseif ($this->step == 2) {
            $this->validate([
                'days.*.date' => ['required', 'date'],
                'sessions.*.*.time' => ['required', 'date_format:H:i'],
                'sessions.*.*.title' => ['required', 'max:100'],
                'sessions.*.*.description' => ['required', 'max:255']
            ]);
        }
    }

    public function nextStep()
    {
        // $this->validateData(); // Validasi sebelum lanjut ke langkah berikutnya
        // dd($this->step);
        if ($this->step < 2) {
            $this->step++;
        } else {
            $this->submitForm();
        }
    }

    public function previousStep()
    {
        if ($this->step > 1) {
            $this->step--;
        }
    }

    public function submitForm()
    {
        // Simpan data di database (contoh)
        // Event::create([...]);

        session()->flash('message', 'Form submitted successfully!');
    }

    public function render()
    {
        return view('livewire.event-multistep-form');
    }
}
