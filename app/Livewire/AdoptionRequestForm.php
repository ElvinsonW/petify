<?php

namespace App\Livewire;

use Livewire\Component;

class AdoptionRequestForm extends Component
{
    public $step = 1;  // Initialize with the first step
    public $description;  // Store form data here

    // Function to go to the next step
    public function nextStep()
    {
        if ($this->step < 5) {
            $this->step++;
        } else {
            // Handle form submission when on the last step
            $this->submitForm();
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
        // Process the form data here (e.g., store it in the database)
        session()->flash('message', 'Form submitted successfully!');
    }

    public function render()
    {
        return view('livewire.adoption-request-form');
    }
}
