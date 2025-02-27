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
        // Mulai query dari model FindMyPet
        $query = FindMyPet::query();
    
        // Filter berdasarkan kategori, jika ada
        if ($request->has('category') && $request->category !== 'all') {
            $query->where('pet_category_id', $request->category);
        }
    
        // Filter berdasarkan Collar & Tag (Yes/No/Any)
        if ($request->has('collar_tag') && $request->collar_tag !== 'Any') {
            $query->where('color_tag', $request->collar_tag);
        }
    
        // Filter berdasarkan city (jika ada)
        if ($request->has('city') && $request->city !== '') {
            $query->where('city', 'like', '%' . $request->city . '%');
        }

        // Filter berdasarkan search (name pet)
        if ($request->has('search') && $request->search !== '') {
            $searchTerm = $request->search;
            $query->where(function ($query) use ($searchTerm) {
                $query->where('name', 'like', '%' . $searchTerm . '%')
                      ->orWhere('breed', 'like', '%' . $searchTerm . '%');
            });
        }      
    
        // Ambil data pets setelah difilter
        $pets = $query->paginate(10);  // Menambahkan pagination untuk membatasi jumlah hasil per halaman
    
        // Ambil semua kategori untuk ditampilkan di sidebar
        $categories = PetCategory::all();
    
        // Kirim data ke view
        return view('find-my-pet.FindMyPet', [
            'pets' => $pets,
            'categories' => $categories,
            'selectedCategory' => $request->category,
        ]);
    }
    






    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ambil semua kategori pet dari database
        $categories = PetCategory::all();

        // Kirim data kategori ke view
        return view('find-my-pet.findMyPetForm', compact('categories')); 

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
            'pet_category_id' => ['required', 'exists:pet_categories,id'], // Perbaikan: pastikan id kategori ada
            'color_tag' => 'required|string',
            'attach' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'city' => 'required|string',
            'gender' => 'required|string',
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
            'pet_category_id' => $request->pet_category_id, // Pastikan menggunakan pet_category_id yang valid
            'color_tag' => $request->color_tag,
            'image' => $imagePath,
            'description' => $request->description,
            'gender' => $request->gender,
            'city' => $request->city,
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
