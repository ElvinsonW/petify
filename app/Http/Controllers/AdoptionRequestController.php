<?php

namespace App\Http\Controllers;

use App\Models\AdoptionPost;
use App\Models\AdoptionRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

use function PHPUnit\Framework\isEmpty;

class AdoptionRequestController extends Controller
{
    // Constructor untuk memastikan hanya pengguna yang login yang bisa mengakses
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Show a listing of the adoption requests
    public function index()
    {

    }

    // Show the form for creating a new adoption request
    public function create(string $slug)
    {
        $post = AdoptionPost::where('slug', $slug)->firstOrFail();
        $hasRequest = AdoptionRequest::where('user_id', auth()->user()->id)
                                    ->where('post_id', $post->id)
                                    ->first();
        
        if ($hasRequest) {
            return redirect('/adoptions' . '/' . $slug)->with('adoptError', "You Already Submit The Request Once");
        }
        
        return view('adoption-request.createAdoptionRequest', ["slug" => $slug]);
    }

    public function show(string $username, string $id){
        $user = User::where('username',$username)->firstOrFail();
        $request = AdoptionRequest::find($id);
        $currUser = auth()->user()->id;

        
        if(!$request){
            return redirect('/dashboard' . '/' . $username . '/adoption-requests')->with('requestError','Adoption Request Not Found!');
        }

        if($currUser == $request->adoption_post->user_id || $currUser == $request->user_id){
            return view('dashboard.User.showAdoptionRequest',["request" => $request, "user" => $user]);
        }
        return redirect('/dashboard' . '/' . $username . '/adoption-requests?request=other-request')->with('requestError','Only The Owner Can Access!');

    }

    // Show the form for editing the specified adoption request
    public function edit($id)
    {

    }

    // Update the specified adoption request in the database
    public function update(Request $request, $id)
    {
       
    }

    // Remove the specified adoption request from the database
    public function destroy($id)
    {
        
    }

    public function handleRequest(string $slug,string $id, string $action){
        $request = AdoptionRequest::findOrFail($id);
        
        DB::transaction(function () use ($request, $action) {
            $isAccepted = $action === "accept";
        
            // Update status approval pada request yang dipilih
            $request->update([
                "approval_status" => $isAccepted ? "Accepted" : "Rejected"
            ]);
            
            if ($isAccepted) {
                // Update status post
                $request->adoption_post->update(["status" => 1]);
                $request->user->addPoint(20);
                $request->adoption_post->user->addPoint(10);
        
                // Update pemilik hewan peliharaan
                $request->adoption_post->pet->update(["user_id" => $request->user_id]);
        
                // Tolak semua request lain pada post yang sama
                AdoptionRequest::where('post_id', $request->post_id)
                               ->where('id', '!=', $request->id)
                               ->update(["approval_status" => "Rejected"]);
            }

        });
        return redirect('/dashboard' . '/' . $request->adoption_post->user->username . '/adoption-requests?request=other-request')->with('adoptSuccess',"Adoption Successfully Done");

    }
}
