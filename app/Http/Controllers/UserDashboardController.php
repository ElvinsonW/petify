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
        $userId = auth()->user()->id;
        $filters = ['search'];
        return view('dashboard.user.post-dashboard.postDashboardUser',[
            "posts" => [
               "adoption" => AdoptionPost::filter(request($filters))->where('user_id',$userId)->get(),
               "article" => Article::filter(request($filters))->where('user_id',$userId)->get(),
               "event" => Event::where('user_id',$userId)->get(),
            ],
        ]);
    }

    public function indexAdoptionRequest(){
        $requests = AdoptionRequest::whereHas('post_id',fn(Builder $query) => 
            $query->where('user_id',auth()->user()->id)
        );
        return view('dashboard.user.adoptionRequestDashboard',[
            "requests" => $requests
        ]);
    }

    public function indexLikedPost(){
        $userId = auth()->user()->id;
        return view('dashboard.user.liked-post.likedPostDashboard',[
            "posts" => [
                "adoptions" => LikedAdoptionPost::where('user_id',$userId)->get(),
                "lifeAfterAdoption" => LikedLifeAfterAdoption::where('user_id',$userId)->get()
            ]
        ]);
    }

    public function indexPostRequest(){
        $userId = auth()->user()->id;
        return view('dashboard.user.post-request.postRequestDashboard',[
            "requests" => [
                "adoptions" => AdoptionPostRequest::filter(request(['search']))->where('user_id',$userId)->get(),
                "articles" => ArticleRequest::filter(request(['search']))->where('user_id',$userId)->get(),
                "events" => Event::where('user_id',$userId)
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
            ]
        ]);
    }
}
