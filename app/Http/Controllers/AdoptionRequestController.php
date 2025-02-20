<?php

namespace App\Http\Controllers;

use App\Models\AdoptionRequest;
use Illuminate\Http\Request;

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
        $adoptionRequests = AdoptionRequest::all();
        return view('adoption-requests.index', compact('adoptionRequests'));
    }

    // Show the form for creating a new adoption request
    public function create()
    {
        return view('adoption-request.createAdoptionRequest');
    }

    // Store a newly created adoption request in the database
    public function store(Request $request)
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
        $adoptionRequest = AdoptionRequest::findOrFail($id);
        return view('adoption-requests.edit', compact('adoptionRequest'));
    }

    // Update the specified adoption request in the database
    public function update(Request $request, $id)
    {
        // Validasi inputan
        $request->validate([
            'description1' => 'required|string',
            'description2' => 'required|string',
            'description3' => 'required|string',
            'description4' => 'required|string',
            'description5' => 'required|string',
        ]);

        // Mencari request adopsi yang akan diupdate
        $adoptionRequest = AdoptionRequest::findOrFail($id);
        $adoptionRequest->update([
            'Q1' => $request->description1,
            'Q2' => $request->description2,
            'Q3' => $request->description3,
            'Q4' => $request->description4,
            'Q5' => $request->description5,
        ]);

        return redirect()->route('adoption-request.index')->with('success', 'Adoption request updated successfully!');
    }

    // Remove the specified adoption request from the database
    public function destroy($id)
    {
        // Hapus data request adopsi
        AdoptionRequest::findOrFail($id)->delete();
        return redirect()->route('adoption-request.index')->with('success', 'Adoption request deleted successfully!');
    }
}
