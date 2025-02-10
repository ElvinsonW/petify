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
                          ->get(); 
    
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