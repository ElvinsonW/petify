<?php

namespace App\Livewire;
use App\Models\AdoptionRequest;
use Livewire\Component;

class AdoptionRequestForm extends Component
{
    public $step = 1;  // Initialize with the first step
    public $description1, $description2, $description3, $description4, $description5;  // Store form data here

    // Function to go to the next step
    public function nextStep()
    {
        if ($this->step < 5) {
            $this->step++;
        } 
    }

    // Function to go to the previous step
    public function previousStep()
    {
        if ($this->step > 1) {
            $this->step--;
        }
    }

    // Function to handle form submission (if needed)
    public function submitForm()
    {
        AdoptionRequest::create([
            'user_id' => auth()->user()->id,
            'Q1' => $this->description1,
            'Q2' => $this->description2,
            'Q3' => $this->description3,
            'Q4' => $this->description4,
            'Q5' => $this->description5,
        ]);

        // Flash a success message to the session
        session()->flash('message', 'Form submitted and saved successfully!');
        return redirect('/adoptions')->with('message', 'Form submitted successfully!');
    }

    public function render()
    {
        return view('livewire.adoption-request-form');
    }
}
