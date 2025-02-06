<?php

namespace App\Http\Controllers;

use App\Models\AdoptionPost;
use App\Models\LifeAfterAdoption;
use App\Models\LikedAdoptionPost;
use App\Models\LikedLifeAfterAdoption;
use App\Models\Pet;
use App\Models\PetCategory;
use Illuminate\Http\Request;

class LifeAfterAdoptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filters = ['category', 'pet'];

        $likedPost = LikedLifeAfterAdoption::where('user_id',auth()->user()->id)->get();

        $petIds = AdoptionPost::where('user_id',auth()->user()->id)
                            ->pluck('pet_id')
                            ->toArray();

        $pets = Pet::whereIn('id',$petIds)->get()->map( function($pet) {
            $pet->total_posts = LifeAfterAdoption::where('pet_id',$pet->id)->count();
            return $pet;
        });

        return view('life-after-adoption.indexLaa',[
            "categories" => PetCategory::all(),
            "posts" => LifeAfterAdoption::filter(request($filters))->get(),
            "likedPosts" => $likedPost,
            "pets" => $pets, 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $petIds = AdoptionPost::where('user_id',auth()->user()->id)
                              ->pluck('pet_id')
                              ->toArray();

        $pets = Pet::whereIn('id',$petIds)->get();
        return view('life-after-adoption.createLaa',[
            "pets" => $pets
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            "pet_id" => ["required", "exists:pets,id"],
            "image" => ["required", "image", "mimes:jpeg,png,jpg,gif,svg", "max:1024"], // "file" is redundant
            "description" => ["nullable", "max:255"]
        ]);        

        // Store the uploaded image in "storage/app/public/life-after-adoption-image"
        $validatedData['image'] = $request->file('image')->store('life-after-adoption-image', 'public');

        // Assign the authenticated user's ID
        $validatedData["user_id"] = auth()->id(); // Shorter and cleaner

        // Create a new record in the database
        LifeAfterAdoption::create($validatedData);

        return redirect('life-after-adoption')->with('createSuccess', "Post Successfully created");
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
