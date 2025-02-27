<?php

namespace App\Livewire;

use App\Models\AdoptionPost;
use App\Models\AdoptionRequest;
use Livewire\Component;

class AdoptionRequestForm extends Component
{
    public $step = 1;  // Initialize with the first step
    public $slug, $description1, $description2, $description3, $description4, $description5;  // Store form data here

    public function mount($slug){
        $this->slug = $slug;
    }
    // Fungsi untuk memvalidasi input yang masuk
    public function validateData()
    {
        if ($this->step == 1) {
            // Validasi input yang masuk pada step 1
            $this->validate([
                'description1' => ['required']
            ]);

        } elseif ($this->step == 2) {
            // Validasi input yang masuk pada step 2
            $this->validate([
                'description2' => ['required']
            ]);
        } elseif ($this->step == 3) {
            // Validasi input yang masuk pada step 3
            $this->validate([
                'description3' => ['required']
            ]);
        } elseif ($this->step == 4) {
            // Validasi input yang masuk pada step 4
            $this->validate([
                'description4' => ['required']
            ]);
        } elseif ($this->step == 5) {
            // Validasi input yang masuk pada step 5
            $this->validate([
                'description5' => ['required']
            ]);
        }
    }

    // Function to go to the next step
    public function nextStep()
    {
        // Validasi data sebelum pergi ke step selanjutnya
        $this->validateData();
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
            'post_id' => AdoptionPost::where('slug',$this->slug)->firstOrFail()->id,
            'Q1' => $this->description1,
            'Q2' => $this->description2,
            'Q3' => $this->description3,
            'Q4' => $this->description4,
            'Q5' => $this->description5,
        ]);

        return redirect('/adoptions'. '/' . $this->slug)->with('requestSuccess', 'Form submitted successfully!');
    }

    public function render()
    {
        return view('livewire.adoption-request-form');
    }
}
