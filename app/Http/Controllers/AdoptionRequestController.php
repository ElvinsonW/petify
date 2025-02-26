<?php

namespace App\Http\Controllers;

use App\Models\AdoptionPost;
use App\Models\AdoptionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class AdoptionRequestController extends Controller
{
    // Constructor untuk memastikan hanya pengguna yang login yang bisa mengakses
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Show a listing of the adoption requests
    public function index()
    {

    }

    // Show the form for creating a new adoption request
    public function create(string $slug)
    {
        $post = AdoptionPost::where('slug', $slug)->firstOrFail();
        $hasRequest = AdoptionRequest::where('user_id', auth()->user()->id)
                                    ->where('post_id', $post->id)
                                    ->first();
        
        if ($hasRequest) {
            return redirect('/adoptions' . '/' . $slug)->with('adoptError', "You Already Submit The Request Once");
        }
        
        return view('adoption-request.createAdoptionRequest', ["slug" => $slug]);
    }

    // Store a newly created adoption request in the database
    public function store(Request $request, string $slug)
    {
        // Validasi inputan
        $request->validate([
            'description1' => 'required|string',
            'description2' => 'required|string',
            'description3' => 'required|string',
            'description4' => 'required|string',
            'description5' => 'required|string',
        ]);

        // Pastikan pengguna sudah login
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Please log in to submit the form.');
        }

        // Menyimpan data dengan menggunakan Mass Assignment
        AdoptionRequest::create([
            'user_id' => auth()->user()->id,
            'post_id' => $slug,
            'Q1' => $request->description1,
            'Q2' => $request->description2,
            'Q3' => $request->description3,
            'Q4' => $request->description4,
            'Q5' => $request->description5,
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('adoption-request.index')->with('success', 'Adoption request created successfully!');
    }

    // Show the form for editing the specified adoption request
    public function edit($id)
    {

    }

    // Update the specified adoption request in the database
    public function update(Request $request, $id)
    {
       
    }

    // Remove the specified adoption request from the database
    public function destroy($id)
    {
        
    }

    public function handleRequest(string $slug,string $id, string $action){
        dd("halo");
        $request = AdoptionRequest::findOrFail($id);
        
        DB::transaction(function () use ($request, $action) {
            $isAccepted = $action === "accept";
        
            // Update status approval pada request yang dipilih
            $request->update([
                "approval_status" => $isAccepted ? "Accepted" : "Rejected"
            ]);
            
            if ($isAccepted) {
                // Update status post
                $request->adoption_post->update(["status" => 1]);
        
                // Update pemilik hewan peliharaan
                $request->adoption_post->pet->update(["user_id" => $request->user_id]);
        
                // Tolak semua request lain pada post yang sama
                AdoptionRequest::where('post_id', $request->post_id)
                               ->where('id', '!=', $request->id)
                               ->update(["approval_status" => "Rejected"]);
            }

        });
        return redirect('/dashboard' . '/' . $request->adoption_post->user->username . '/adoption-requests')->with('adoptSuccess',"Adoption Successfully Done");

    }
}
