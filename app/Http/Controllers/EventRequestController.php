<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\DaySession;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventRequestController extends Controller
{
    public function index() {
        $filters = ['status'];
        return view('dashboard.admin.eventDashboardAdmin',[
            "requests" => Event::filter(request($filters))
                                ->orderByRaw("
                                    CASE
                                        WHEN approval_status = 'pending' THEN 1
                                        WHEN approval_status = 'accepted' THEN 2
                                        WHEN approval_status = 'rejected' THEN 3
                                        ELSE 4
                                    END
                                ")
                                ->orderBy('id')
                                ->get(),
            "total_pending_requests" => Event::where('approval_status','Pending')->count(),
            "total_accepted_requests" => Event::where('approval_status','Accepted')->count(),
            "total_rejected_requests" => Event::where('approval_status','Rejected')->count(),
        ]);
    }

    public function show(string $slug) {
        $request = Event::where('slug',$slug)->firstOrFail();

        return view('event.eventSingle',[
            "event" => $request
        ]);
    }

    public function handleRequest(string $slug, string $action){
        $request = Event::where('slug',$slug)->firstOrFail();

        if($request){
            $isAccept = $action == "accept";
            
            $data = [
                "approval_status" => $isAccept ? "Accepted" : "Rejected"
            ];

            $request->update($data);

            
            if(!$isAccept){
                Storage::delete($request->image);

                $dayIds = Day::where('event_id',$request->id)->pluck('id')->toArray();
                DaySession::whereIn('day_id',$dayIds)->delete();
                Day::where('event_id',$request->id)->delete();
            } else {
                $request->user->addPoint(10);
            }

            return redirect('/dashboard/event-requests');
        }

    }
}
