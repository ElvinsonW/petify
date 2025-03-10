<?php

namespace App\Http\Controllers;

use App\Models\AdoptionPost;
use App\Models\AdoptionRequest;
use App\Models\LifeAfterAdoption;
use App\Models\LikedAdoptionPost;
use App\Models\LikedLifeAfterAdoption;
use App\Models\Pet;
use App\Models\PetCategory;
use Illuminate\Http\Request;

class LifeAfterAdoptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Filter berdasarkan beberapa parameter
        $filters = ['category', 'pet'];

        // Mencari post yang diliked oleh user
        $likedPost = LikedLifeAfterAdoption::where('user_id',auth()->user()->id)->get();

        // Mencari pet_id dari user yang telah diadopsi oleh orang lain
        $petIds = AdoptionPost::where('user_id',auth()->user()->id)
                                ->where('status',1)
                                ->pluck('pet_id')
                                ->toArray();

        // Mencari pet berdasarkan id yand ada dan menambahkan total post dari tiap pet
        $pets = Pet::whereIn('id',$petIds)->get()->map( function($pet) {
            $pet->total_posts = LifeAfterAdoption::where('pet_id',$pet->id)->count();
            return $pet;
        });

        // Mengembalikan view yang sesuai dan beberapa parameter
        return view('life-after-adoption.indexLaa',[
            "categories" => PetCategory::all(),
            "posts" => LifeAfterAdoption::filter(request($filters))->get(),
            "likedPosts" => $likedPost,
            "pets" => $pets, 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mencari pet yang telah diadopsi oleh user
        $petIds = AdoptionRequest::where('user_id', auth()->user()->id)
                                ->where('approval_status', "Accepted")
                                ->whereHas('adoption_post')
                                ->with('adoption_post')
                                ->get()
                                ->pluck('adoption_post.pet_id');

        $pets = Pet::where('user_id',auth()->user()->id)
                    ->whereIn('id',$petIds)
                    ->get();

        // Mengembalikan view yang sesuai dan beberapa parameter
        return view('life-after-adoption.createLaa',[
            "pets" => $pets
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input yang dikirim oleh user
        $validatedData = $request->validate([
            "pet_id" => ["required", "exists:pets,id"],
            "image" => ["required", "image", "mimes:jpeg,png,jpg,gif,svg", "max:1024"], // "file" is redundant
            "description" => ["nullable"]
        ]);        

        // Simpan image di local storage
        $validatedData['image'] = $request->file('image')->store('life-after-adoption-image', 'public');

        // Simpan user id
        $validatedData["user_id"] = auth()->user()->id;

        // Simpan Post ke dalam Database
        $laaPost = LifeAfterAdoption::create($validatedData);

        $laaPost->user->addPoint(15);

        // Direct user ke halaman Life After Adoption dan kirim pesan berhasil
        return redirect('life-after-adoption')->with('createSuccess', "Life After Adoption Post Successfully Requested");
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
