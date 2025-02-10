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
        // Mencari Post yang sesuai dengan slug yang dikirim
        $adoptionPost = AdoptionPost::where('slug',$slug)->firstOrFail();

        // Simpan id dari user 
        $user_id = auth()->user()->id;
        
        // Cek apakah sudah pernah dilike
        if ($isLike = LikedAdoptionPost::where('user_id', auth()->user()->id)
                                       ->where('adoption_post_id', $adoptionPost->id)
                                       ->exists()
        ){
            return redirect('/adoptions')->with('likeError',"You can't like the same post twice.");
        }

        // Jika belum di like, maka simpan ke dalam database
        LikedAdoptionPost::create([
            "user_id" => $user_id,
            "adoption_post_id" => $adoptionPost->id
        ]);
    }

    public function unlike(string $slug)
    {
        // Mencari Post yang sesuai dengan slug yang dikirim
        $adoptionPost = AdoptionPost::where('slug',$slug)->firstOrFail();

        // Cek apakah Post yang dicari ada
        if($adoptionPost){
            // Hapus post dari database like
            LikedAdoptionPost::where('user_id', auth()->user()->id)
                             ->where('adoption_post_id', $adoptionPost->id)
                             ->delete();
        }
        return redirect('adoptions')->with('likeError',"Post doesnt exist.");
    }
}
