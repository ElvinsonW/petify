<?php

namespace App\Http\Controllers;

use App\Models\LifeAfterAdoption;
use App\Models\LikedLifeAfterAdoption;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\Request;

class LikedLifeAfterAdoptionController extends Controller
{
    public function like(string $post_id){
        $user_id = auth()->user()->id;

        $existingLike = LikedLifeAfterAdoption::where('user_id', $user_id)
                            ->where('laa_post_id', $post_id)
                            ->exists();

        if (!$existingLike) {
            LikedLifeAfterAdoption::create([
                "user_id" => $user_id,
                "laa_post_id" => $post_id,
            ]);
        } else {
            return redirect('life-after-adoption')->with('likeError',"You can't like the same post twice.");
        }
    }

    public function unlike(string $post_id){
        LikedLifeAfterAdoption::where('user_id',auth()->user()->id)
            ->where('laa_post_id',$post_id)
            ->delete();
    }

    public function likeCount(string $post_id){
        $like_count = LikedLifeAfterAdoption::where('laa_post_id',$post_id)->count();
        return response()->json([
            'like_count' => $like_count,
        ]);
    }
}
