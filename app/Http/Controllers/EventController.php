<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Cviebrock\EloquentSluggable\Services\SlugService;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('event.event');  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('event.createEvent');
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
    public function show(string $slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();

        return view('event.eventSingle', [
            'event' => $event,
        ]);
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

    public function createSlug(Request $request){
        $slug = SlugService::createSlug(Event::class, 'slug', $request->title,["unique" => true]);
        return response()->json(['slug' => $slug]);
    }
}