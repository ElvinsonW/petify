<?php

namespace App\Http\Controllers;

use App\Models\AdoptionPost;
use App\Models\AdoptionPostRequest;
use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdoptionPostRequestController extends Controller
{
    public function index(){
        $filters = ["status"];

        return view('dashboard.admin.adoptionDashboardAdmin',[
            "requests" => AdoptionPostRequest::filter(request($filters))
                          ->orderByRaw("
                                CASE 
                                    WHEN approval_status = 'pending' THEN 1 
                                    WHEN approval_status = 'accepted' THEN 2 
                                    WHEN approval_status = 'rejected' THEN 3 
                                    ELSE 4 
                                END
                            ")
                          ->orderBy('updated_at')
                          ->get(),
            "total_pending_requests" => AdoptionPostRequest::where('approval_status','Pending')->count(),
            "total_accepted_requests" => AdoptionPostRequest::where('approval_status','Accepted')->count(),
            "total_rejected_requests" => AdoptionPostRequest::where('approval_status','Rejected')->count(),
        ]);
    }

    public function show(string $slug){
        $adoption = AdoptionPostRequest::where('slug',$slug)->firstOrFail();

        if($adoption){
            return view('adoption.showAdoptionPost',[
                "adoption" => $adoption,
                "isLiked" => false
            ]);
        }
    }

    public function handleRequest(string $slug, string $action){
        $request = AdoptionPostRequest::where('slug',$slug)->firstOrFail();

        if($request){
            $isAccepted = $action == "accept";
            $data = [
                "approval_status" => $isAccepted ? "Accepted" : "Rejected"
            ];
            $request->update($data);
    
            if($isAccepted){

                $petData = [
                    "user_id" => $request->user_id,
                    "pet_category_id" => $request->pet_category_id,
                    "name" => $request->name,
                    "breed" => $request->breed,
                    "gender" => $request->gender,
                    "image_1" => $request->image_1,
                    "image_2" => $request->image_2,
                    "image_3" => $request->image_3,
                ];

                if($request->pet_id == 0){
                    $pet = Pet::create($petData);
                } else{
                    $pet = Pet::find($request->pet_id);
                    $pet->update($petData);
                }

                $postData = [
                    "user_id" => $request->user_id,
                    "pet_id" => $request->pet_id == 0 ? $pet->id : $request->pet_id,
                    "name" => $request->name,
                    "slug" => $request->slug,
                    "location" => $request->location,
                    "vaccinated" => $request->vaccinated,
                    "weight" => $request->weight,
                    "age" => $request->age,
                    "status" => $request->adoption_status,
                    "description" => $request->description,
                    "requirement" => $request->requirement,
                ];
                
                AdoptionPost::create($postData);
            } else {
                for($i = 1 ; $i <= 3 ; $i++){
                    $property = 'image_' . $i;
                    if(!empty($request->$property)){
                        Storage::delete($request->$property);
                    }
                }
            }
            return redirect('/dashboard/adoption-post-requests');
        }

    }
}
