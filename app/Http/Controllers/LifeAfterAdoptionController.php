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
        $filters = ['category'];

        $likedPost = LikedLifeAfterAdoption::where('user_id',auth()->user()->id)->get();

        $petIds = AdoptionPost::where('user_id',auth()->user()->id)
                            ->pluck('pet_id')
                            ->toArray();

        $pets = Pet::whereIn('id',$petIds)->get();


        return view('life-after-adoption.indexLaa',[
            "categories" => PetCategory::all(),
            "posts" => LifeAfterAdoption::filter($filters)->get(),
            "likedPosts" => $likedPost,
            "pets" => $pets, 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
