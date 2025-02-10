<?php

namespace App\Http\Controllers;

use App\Models\LifeAfterAdoption;
use App\Models\LikedLifeAfterAdoption;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\Request;

class LikedLifeAfterAdoptionController extends Controller
{
    public function like(string $post_id){
        // Simpan id dari user
        $user_id = auth()->user()->id;

        // Cek apakah Post sudah diliked oleh user
        $existingLike = LikedLifeAfterAdoption::where('user_id', $user_id)
                                              ->where('laa_post_id', $post_id)
                                              ->exists();

        if (!$existingLike) {
            // Simpan post ke dalam database
            LikedLifeAfterAdoption::create([
                "user_id" => $user_id,
                "laa_post_id" => $post_id,
            ]);

            // Tambahkan jumlah like dari post
            LifeAfterAdoption::where('id', $post_id)
                             ->increment('like_count',1);
        } else {
            // Direct ke Life After Adoption dan kirim pesan gagal
            return redirect('life-after-adoption')->with('likeError',"You can't like the same post twice.");
        }
    }

    public function unlike(string $post_id){
        // Simpan id dari user
        $user_id = auth()->user()->id;

        // Cek apakah terdapat post dalam database
        $isExist = LikedLifeAfterAdoption::where('user_id',$user_id)
                                         ->where('laa_post_id',$post_id)
                                         ->exists();

        if($isExist){
            // Hapus post yang dinginkan dari database
            LikedLifeAfterAdoption::where('user_id',$user_id)
                ->where('laa_post_id',$post_id)
                ->delete();
            
            
            // Kurangi jumlah like dari post
            LifeAfterAdoption::where('id', $post_id)
                             ->decrement('like_count',1);
        } else {
            // Direct ke Halaman Life After Adoption dan pesan kesalahan
            return redirect('life-after-adoption')->with('likeError',"You can't unlike non existing post");
        }

    }

    public function likeCount(string $post_id){
        // Mencari total like dari post yang dinginkan
        $like_count = LifeAfterAdoption::find($post_id)->like_count;

        // Kembalikan pesan berisi total like dari post
        return response()->json([
            'like_count' => $like_count,
        ]);
    }
}
