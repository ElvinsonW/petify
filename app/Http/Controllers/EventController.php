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
        // Get today's date
        $today = Carbon::today();
    
        // Get the main event for today (if any)
        $mainEvent = Event::whereDate('start_date', $today)->first();
    
        // Get the next 5 closest upcoming events from tomorrow
        $upcomingEvents = Event::where('start_date', '>', $today)  // Events happening after today
                                ->orderBy('start_date', 'asc')  // Sort by nearest first
                                ->limit(5)  // Get only the next 5 events
                                ->get();
    
        // Get all events for the current month for calendar
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