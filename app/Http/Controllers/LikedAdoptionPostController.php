<?php

namespace App\Http\Controllers;

use App\Models\AdoptionPost;
use App\Models\LikedAdoptionPost;
use Illuminate\Http\Request;

class LikedAdoptionPostController extends Controller
{
    public function index()
    {
        
    }

    public function like(string $slug)
    {
        $adoptionPost = AdoptionPost::where('slug',$slug)->firstOrFail();

        $user_id = auth()->user()->id;
        // $user_id = 1;
        
        if ($isLike = LikedAdoptionPost::where('user_id', auth()->user()->id)
                      ->where('adoption_post_id', $adoptionPost->id)
                      ->exists()
        ){
            return response()->json(['message' => 'Already liked'], 200);
        }

        LikedAdoptionPost::create([
            "user_id" => $user_id,
            "adoption_post_id" => $adoptionPost->id
        ]);
    }

    public function unlike(string $slug)
    {
        $adoptionPost = AdoptionPost::where('slug',$slug)->firstOrFail();
        LikedAdoptionPost::where('user_id', auth()->user()->id)
            ->where('adoption_post_id', $adoptionPost->id)
            ->delete();
    }
}
