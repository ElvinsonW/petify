<?php

namespace App\Http\Controllers;

use App\Models\AdoptionPost;
use App\Models\AdoptionPostRequest;
use App\Models\AdoptionRequest;
use App\Models\Article;
use App\Models\ArticleRequest;
use App\Models\Event;
use App\Models\LifeAfterAdoption;
use App\Models\LikedAdoptionPost;
use App\Models\LikedLifeAfterAdoption;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{ 
    public function indexPost(){
        $user = auth()->user();
        $filters = ['search'];
        return view('dashboard.user.post-dashboard.postDashboardUser',[
            "posts" => [
                "adoption" => AdoptionPost::filter(request($filters))->where('user_id',$user->id)->get(),
                "article" => Article::filter(request($filters))->where('user_id',$user->id)->get(),
                "event" => Event::where('user_id',$user->id)->get(),
            ],
            "user" => $user
        ]);
    }

    public function indexAdoptionRequest(){
        $user = auth()->user();
        $requests = AdoptionRequest::whereHas('adoption_post',fn(Builder $query) => 
            $query->where('user_id',$user->id)
        )->get();


        return view('dashboard.user.adoptionRequestDashboard',[
            "requests" => $requests,
            "user" => $user,
        ]);
    }

    public function indexLikedPost(){
        $user = auth()->user();
        return view('dashboard.user.liked-post.likedPostDashboard',[
            "posts" => [
                "adoptions" => LikedAdoptionPost::where('user_id',$user->id)->get(),
                "lifeAfterAdoption" => LikedLifeAfterAdoption::where('user_id',$user->id)->get(),
            ],
            "user" => $user
        ]);
    }

    public function indexPostRequest(){
        $user = auth()->user();
        return view('dashboard.user.post-request.postRequestDashboard',[
            "requests" => [
                "adoptions" => AdoptionPostRequest::filter(request(['search']))->where('user_id',$user->id)->get(),
                "articles" => ArticleRequest::filter(request(['search']))->where('user_id',$user->id)->get(),
                "events" => Event::where('user_id',$user->id)
                                ->orderByRaw('
                                    CASE
                                        WHEN approval_status = "Pending" THEN 1
                                        WHEN approval_status = "Accepted" THEN 2
                                        WHEN approval_status = "Rejected" THEN 3
                                        ELSE 4
                                    END
                                ')
                                ->orderBy('id')
                                ->get(),
            ],
            "user" => $user,
        ]);
    }

    public function indexAdoptionHistory(Request $request){
        $user = auth()->user();
        return view('dashboard.User.adoptionHistoryDashboard',[
            "adoptions" => AdoptionRequest::where('user_id',$user->id)
                                            ->where('approval_status',"Accepted")
                                            ->get(),
            "lifeAfterAdoptions" => LifeAfterAdoption::whereHas("pet", 
                                        fn(Builder $query) =>
                                            $query->where("name",$request->name)
                                    )->get(),
            "user" => $user
        ]);
    }
}
