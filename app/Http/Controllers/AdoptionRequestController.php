<?php

namespace App\Http\Controllers;

use App\Models\AdoptionRequest;
use Illuminate\Http\Request;

class AdoptionRequestController extends Controller
{
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
        $request->validate([
            'field_name' => 'required|string',  // Add validation rules as per your fields
        ]);

        AdoptionRequest::create($request->all());
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
        $adoptionRequest = AdoptionRequest::findOrFail($id);
        $adoptionRequest->update($request->all());
        return redirect()->route('adoption-request.index')->with('success', 'Adoption request updated successfully!');
    }

    // Remove the specified adoption request from the database
    public function destroy($id)
    {
        AdoptionRequest::findOrFail($id)->delete();
        return redirect()->route('adoption-request.index')->with('success', 'Adoption request deleted successfully!');
    }
}
