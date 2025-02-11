<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Carbon\Carbon;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $today = Carbon::today();

        // Get the main event for today (event that starts and ends today)
        $mainEvent = Event::whereDate('start_date', '<=', $today) // Start date is before or today
                          ->whereDate('end_date', '>=', $today) // End date is after or today
                          ->get(); // Use ->get() to return all events for today (if there are multiple)

        $twoWeeks = Carbon::today()->addWeeks(2);
        
        // Get the next 5 closest upcoming events from tomorrow
        $upcomingEvents = Event::where('start_date', '>', $today)  // Events happening after today
                                ->where('start_date', '<=', $twoWeeks)
                                ->orderBy('start_date', 'asc')  // Sort by nearest first
                                ->get();

        // Get all events for the current month for the calendar
        $calendarEvents = Event::whereMonth('start_date', $today->month)
                               ->whereYear('start_date', $today->year)
                               ->get();

        return view('event.event', compact('mainEvent', 'upcomingEvents', 'calendarEvents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('event.eventForm2');
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
        // Fetch the event by its slug
        $event = Event::where('slug', $slug)->firstOrFail();

        // Return the event details to the view
        return view('event.eventSingle', compact('event'));
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
        $slug = SlugService::createSlug(Event::class, 'slug', $request->title, ["unique" => true]);

        // Return the generated slug as JSON
        return response()->json(['slug' => $slug]);
    }
}
