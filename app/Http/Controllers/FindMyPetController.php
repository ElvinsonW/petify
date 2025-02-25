<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class FindMyPetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('find-my-pet.FindMyPet');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('find-my-pet.findMyPetForm'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // This method can be used to store event data if necessary
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // This method can be used for editing event data
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // This method can be used to update event data
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // This method can be used to delete an event
    }

    /**
     * Generate a unique slug for an event.
     */
    public function createSlug(Request $request)
    {
        // Generate a unique slug for the event title
        $slug = SlugService::createSlug(FindMyPet::class, 'slug', $request->title, ["unique" => true]);

        // Return the generated slug as JSON
        return response()->json(['slug' => $slug]);
    }
}
