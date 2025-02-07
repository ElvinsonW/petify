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

    public function validateData()
    {
        if ($this->step == 1) {
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

            if ($this->image instanceof \Illuminate\Http\UploadedFile) {
                $this->image = $this->image->store('event_images', 'public');
            }
        } elseif ($this->step == 2) {
            $this->validate([
                'days.*.date' => ['required', 'date'],
                'sessions.*.*.time' => ['required', 'date_format:g:i a'],
                'sessions.*.*.title' => ['required', 'max:100'],
                'sessions.*.*.description' => ['required', 'max:255']
            ]);
        }
    }

    public function deleteImage()
    {
        if ($this->image && is_string($this->image) && Storage::disk('public')->exists($this->image)) {
            // dd('halo');
            Storage::disk('public')->delete($this->image);
        }

        $this->image = null; 
    }

    public function nextStep()
    {
        $this->validateData();
        
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

        // dd($this->days);
        foreach ($this->days as $dayIndex => $dayData) {
            $day = $event->days()->create([
                'date' => $dayData['date'],
            ]);
            
            if (isset($this->sessions[$dayIndex])) {
                foreach ($this->sessions[$dayIndex] as $sessionData) {
                    $day->schedules()->create([
                        'time' => $sessionData['time'],
                        'title' => $sessionData['title'],
                        'description' => $sessionData['description']
                    ]);
                }
            }
        }

        Storage::deleteDirectory('livewire-tmp'); 
        return redirect('/events')->with('message', 'Form submitted successfully!');
    }

    public function render()
    {
        return view('livewire.event-multistep-form');
    }
}