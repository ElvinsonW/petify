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

            LifeAfterAdoption::where('id', $post_id)
                             ->increment('like_count',1);
        } else {
            return redirect('life-after-adoption')->with('likeError',"You can't like the same post twice.");
        }
    }

    public function unlike(string $post_id){
        $user_id = auth()->user()->id;

        $isExist = LikedLifeAfterAdoption::where('user_id',$user_id)
                                         ->where('laa_post_id',$post_id)
                                         ->exists();

        if($isExist){
            LikedLifeAfterAdoption::where('user_id',$user_id)
                ->where('laa_post_id',$post_id)
                ->delete();
    
            LifeAfterAdoption::where('id', $post_id)
                             ->decrement('like_count',1);
        } else {
            return redirect('life-after-adoption')->with('likeError',"You can't unlike non existing post");
        }

    }

    public function likeCount(string $post_id){
        $like_count = LifeAfterAdoption::find($post_id)->like_count;
        return response()->json([
            'like_count' => $like_count,
        ]);
    }
}
