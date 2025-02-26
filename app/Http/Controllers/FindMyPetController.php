<?php

namespace App\Http\Controllers;

use App\Models\FindMyPet;
use App\Models\PetCategory;
use Illuminate\Http\Request;

class FindMyPetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Filter berdasarkan beberapa parameter (category dan pet)
        $filters = ['category', 'pet'];

        // Ambil data berdasarkan filter kategori jika ada
        $pets = FindMyPet::when($request->has('category'), function ($query) use ($request) {
            return $query->where('pet_category_id', $request->category);  // Filter berdasarkan pet_category_id
        })
        ->when($request->has('pet'), function ($query) use ($request) {
            return $query->where('name', 'like', '%' . $request->pet . '%');  // Filter berdasarkan nama pet jika ada
        })
        ->paginate(10);  // Pagination untuk membatasi jumlah hasil per halaman

        // Ambil semua kategori untuk ditampilkan di sidebar
        $categories = PetCategory::all();

        // Kirim data ke view find-my-pet.index
        return view('find-my-pet.FindMyPet', [
            'pets' => $pets,  // Kirim data pets yang sudah difilter
            'categories' => $categories,  // Kirim data kategori
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('find-my-pet.findMyPetForm'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi inputan dari form
        $request->validate([
            'name' => 'required|string|max:255',
            'breed' => 'required|string|max:255',
            'last_seen' => 'required|string|max:255',
            'date_lost' => 'required|date',
            'color' => 'required|string|max:255',
            'category_pet' => 'required|string',
            'color_tag' => 'required|string',
            'attach' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
        ]);

        // Menyimpan gambar jika ada
        $imagePath = $request->file('attach')->store('uploads/pets', 'public');

        // Menyimpan data ke dalam database
        FindMyPet::create([
            'user_id' => auth()->id(),  // Menyimpan ID pengguna yang sedang login
            'name' => $request->name,
            'breed' => $request->breed,
            'last_seen' => $request->last_seen,
            'date_lost' => $request->date_lost,
            'color' => $request->color,
            'category_pet' => $request->category_pet,
            'color_tag' => $request->color_tag,
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        // Mengarahkan kembali ke form dengan pesan sukses
        return redirect()->route('find-my-pet.index')->with('success', 'Missing pet post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        // Implementasi jika ingin menampilkan data berdasarkan slug
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Implementasi jika ingin mengedit data berdasarkan ID
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Implementasi untuk memperbarui data berdasarkan ID
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Implementasi untuk menghapus data berdasarkan ID
    }
}
