<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckPostOwnership;
use App\Models\AdoptionPost;
use App\Models\LikedAdoptionPost;
use App\Models\Pet;
use App\Models\PetCategory;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Ramsey\Uuid\Type\Integer;

class AdoptionPostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth'); // Memastikan user telah ter autentikasi
        $this->middleware(CheckPostOwnership::class)->only(['edit', 'destroy']); // Memastikan hanya user yang membuat post tersebut yang dapat mengedit dan menghapus post nya
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Filter berdasarkan beberapa parameter
        $filters = ["search","like","category"]; 

        // Mendapatkan post yang telah diliked oleh user
        $likedPosts = LikedAdoptionPost::where('user_id',auth()->user()->id)->get();

        // Mengembalikan view yang sesuai dan beberapa parameter
        return view('adoption.indexAdoptionPost',[
            "adoptions" => AdoptionPost::filter(request($filters))->paginate(9)->withQueryString(),
            "categories" => PetCategory::all(),
            "likedPosts" => $likedPosts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        // Mengembalikan view yang sesuai 
        return view("adoption.createAdoptionPost", ["categories" => PetCategory::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi input yang diberikan oleh user
        $petValidatedData = $request->validate([
            'name' => ['required','max:20'],
            'breed' => ['required','max:100'],
            'pet_category_id' => ['required'],
            'gender' => ['required'],
        ]);

        $postValidatedData = $request->validate([
            'name' => ['required','max:20'],
            'slug' => ['required','unique:adoption_posts'],
            'age' => ['required',"numeric" ,"min:0.01"],
            'location' => ['required','max:255'],
            'vaccinated' => ['required'],
            'weight' => ['required','numeric', 'min:0.01'],
            'description' => ['required', 'max:255'],
            'requirement' => ['max:255']
        ]);

        $request->validate([
            'images' => ['required', 'array', 'min:1', 'max:3'],
            'images.*' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:1024'],
        ]);

        $petValidatedData['user_id'] = auth()->user()->id;
        $pet = Pet::create($petValidatedData);
        
        $postValidatedData['user_id'] = auth()->user()->id;
        $postValidatedData['vaccinated'] = $postValidatedData['vaccinated'] == "yes" ? 1 : 0;
        $postValidatedData['pet_id'] = $pet->id;
        
        // Menyimpan image ke storage local
        if($request->file('images')){
            $idx = 1;
            foreach($request->file('images') as $file) {
                $postValidatedData['image_' . $idx] = $file->store('adoption-post-image');
                $idx++;
            }
        }
        
        // Memasukkan Adoption Post ke Database
        AdoptionPost::create($postValidatedData);

        // Setelah selesai, ngedirect user ke page Adoptions dan mengirim pesan berhasil
        return redirect('adoptions')->with('createSuccess','Adoption Post Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        // Mencari Post yang sesuai dengan slug
        $adoptionPost = AdoptionPost::where('slug', $slug)->firstOrFail();

        // Memeriksa apakah post ini diliked oleh user
        $isLike = LikedAdoptionPost::where('user_id', auth()->user()->id)
            ->where('adoption_post_id', $adoptionPost->id)
            ->exists();

        // Mengembalikan view yang sesuai dengan beberapa parameter
        return view('adoption.showAdoptionPost', [
            'adoption' => $adoptionPost,
            'isLiked' => $isLike, 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        // Mencari Post yang sesuai dengan slug yang dikirim 
        $adoptionPost = AdoptionPost::where('slug',$slug)->firstOrFail();

        // Mengembalikan view yang sesuai dengan beberapa parameter
        return view('adoption.editAdoptionPost',
            [
                "adoption" => $adoptionPost,
                "categories" => PetCategory::all()
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        // Mencari Post yang sesuai dengan slug yang dikirim
        $adoptionPost = AdoptionPost::where('slug',$slug)->firstOrFail();

        // Rules input yang dikirimkan oleh user
        $petRules = [
            'name' => ['required','max:20'],
            'breed' => ['required','max:100'],
            'pet_category_id' => ['required'],
            'gender' => ['required'],
        ];

        $postRules = [
            'name' => ['required','max:20'],
            'age' => ['required',"numeric" ,"min:0.01"],
            'location' => ['required','max:255'],
            'vaccinated' => ['required'],
            'weight' => ['required','numeric', 'min:0.01'],
            'description' => ['required'],
            'requirement' => ['nullable','max:255']
        ];

        $request->validate([
            'images' => ['array', 'min:1', 'max:3'],
            'images.*' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:1024'],
        ]);

        // Cek apakah user menginput satu atau lebih image
        if (!$request->file('images') && empty($request->existing_images)) {
            return redirect()->back()->withErrors(['images' => 'You must upload at least one image or retain an existing image.']);
        }

        // Cek apakah post memiliki slug yang berbeda, jika berbeda maka cek ulang
        if($request->slug != $slug){
            $postRules['slug'] = ['required','unique:adoption_posts'];
        }
        
        // Cek apakah input sudah sesuai dengan rules
        $petValidatedData = $request->validate($petRules);
        $postValidatedData = $request->validate($postRules);

        // mengubah vaccinated dari yes / no menjadi 1 / 0
        $postValidatedData['vaccinated'] = $postValidatedData['vaccinated'] == "yes" ? 1 : 0;
        
        $idx = 0;

        // Berapa image sebelumnya yang tidak diubah oleh user
        if($request->existing_images){
            $idx = count($request->existing_images);
        }
        
        // Memasukkan data image yang tidak diubah oleh user
        for($i=0 ; $i<$idx ; $i++){
            if($request->existing_images[$i]){
                $postValidatedData['image_' . $i+1] = $request->existing_images[$i];
            }
        }

        // Hapus image yang diubah oleh user dari storage lokall
        for($i=$idx ; $i<=2 ; $i++){
            $filePath = $adoptionPost->{'image_' . ($i + 1)} ?? null;
                if ($filePath) {
                    Storage::delete($filePath);
                } else {
                    Log::warning("No file to delete for image_" . ($i + 1));
                }
        }

        // Cek dan Memasukkan image baru yang di 
        if($request->file('images')){
            foreach($request->file('images') as $file){
                $idx++;
                $postValidatedData['image_' . $idx] = $file->store('adoption-post-image');
            }
        }

        // Update post
        $adoptionPost->pet->update($petValidatedData);
        $adoptionPost->update($postValidatedData);

        // Direct user ke Halaman Adoption dan mengirim pesan berhasil
        return redirect('adoptions')->with('updateSuccess',"Update Successful!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        // Mencari post yang sesuai dengan slug yang dikirim
        $post = AdoptionPost::where('slug',$slug)->firstOrFail();

        // Hapus semua image dari storage lokal
        for ($i = 1; $i <= 3; $i++) {
            $property = "image_" . $i;
            if (!empty($post->$property)) {
                Storage::delete($post->$property);
            }
        }
        
        // Hapus post dari database
        $post->delete();
    
        // Direct user ke Halaman Adoption dan mengirim pesan berhasil
        return redirect('adoptions')->with('deleteSuccess', "Post deleted successfully!");

    }

    // Fungsi untuk secara otomatis membuat slug
    public function createSlug(Request $request){
        $slug = SlugService::createSlug(AdoptionPost::class, 'slug', $request->name,["unique" => true]);
        return response()->json(['slug' => $slug]);
    }
}
