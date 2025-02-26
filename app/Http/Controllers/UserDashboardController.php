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
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{ 
    public function indexPost(string $username){
        $user = User::where('username',$username)->firstOrFail();
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

    public function indexAdoptionRequest(string $username){
        $user = User::where('username',$username)->firstOrFail();
        $otherRequests = AdoptionRequest::whereHas('adoption_post',fn(Builder $query) => 
            $query->where('user_id',$user->id)
        )->orderByRaw("
            CASE
                WHEN approval_status = 'Pending' THEN 1
                WHEN approval_status = 'Accepted' THEN 2
                WHEN approval_status = 'Rejected' THEN 3
                ELSE 4
            END
        ")->get();

        $myRequests = AdoptionRequest::where('user_id',$user->id)->orderByRaw("
            CASE
                WHEN approval_status = 'Pending' THEN 1
                WHEN approval_status = 'Accepted' THEN 2
                WHEN approval_status = 'Rejected' THEN 3
                ELSE 4
            END
        ")->get();

        return view('dashboard.user.adoption-request.adoptionRequestDashboard',[
            "requests" => [
                "other-request" => $otherRequests,
                "my-request" => $myRequests
            ],
            "user" => $user,
        ]);
    }

    public function indexLikedPost(string $username){
        $user = User::where('username',$username)->firstOrFail();
        return view('dashboard.user.liked-post.likedPostDashboard',[
            "posts" => [
                "adoptions" => LikedAdoptionPost::where('user_id',$user->id)->get(),
                "lifeAfterAdoption" => LikedLifeAfterAdoption::where('user_id',$user->id)->get(),
            ],
            "user" => $user
        ]);
    }

    public function indexPostRequest(string $username){
        $user = User::where('username',$username)->firstOrFail();
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

    public function indexAdoptionHistory(Request $request, string $username){
        $user = User::where('username',$username)->firstOrFail();
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
