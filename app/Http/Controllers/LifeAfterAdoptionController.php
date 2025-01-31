<?php

namespace App\Http\Controllers;

use App\Models\LifeAfterAdoption;
use App\Models\LikedAdoptionPost;
use App\Models\LikedLifeAfterAdoption;
use App\Models\PetCategory;
use Illuminate\Http\Request;

class LifeAfterAdoptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $likedPost = LikedLifeAfterAdoption::where('user_id',auth()->user()->id)->get();
        
        $post = LifeAfterAdoption::all()->map(function($post){
            $post->like_count = LikedLifeAfterAdoption::where('laa_post_id',$post->id)->count();
            return $post;
        });
        return view('life-after-adoption.indexLaa',[
            "categories" => PetCategory::all(),
            "posts" => $post,
            "likedPosts" => $likedPost
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
