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

class AdoptionPostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth'); // Ensure the user is authenticated
        $this->middleware(CheckPostOwnership::class)->only(['edit', 'destroy']); // Check ownership for specific actions
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filters = ["category","like","search"];
        return view('adoption.indexAdoptionPost',[
            "adoptions" => AdoptionPost::filter(request($filters))->paginate(9)->withQueryString(),
            "categories" => PetCategory::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("adoption.createAdoptionPost", ["categories" => PetCategory::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
        
        if($request->file('images')){
            $idx = 1;
            foreach($request->file('images') as $file) {
                $postValidatedData['image_' . $idx] = $file->store('adoption-post-image');
                $idx++;
            }
        }
        
        AdoptionPost::create($postValidatedData);
        return redirect('/adoptions')->with('createSuccess','Adoption Post Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $adoptionPost = AdoptionPost::where('slug', $slug)->firstOrFail();

        $isLike = LikedAdoptionPost::where('user_id', auth()->user()->id)
            ->where('adoption_post_id', $adoptionPost->id)
            ->exists();

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
        $adoptionPost = AdoptionPost::where('slug',$slug)->firstOrFail();
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
        $adoptionPost = AdoptionPost::where('slug',$slug)->firstOrFail();
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

        if (!$request->file('images') && empty($request->existing_images)) {
            return redirect()->back()->withErrors(['images' => 'You must upload at least one image or retain an existing image.']);
        }

        if($request->slug != $slug){
            $postRules['slug'] = ['required','unique:adoption_posts'];
        }
        
        $petValidatedData = $request->validate($petRules);
        $postValidatedData = $request->validate($postRules);

        $postValidatedData['vaccinated'] = $postValidatedData['vaccinated'] == "yes" ? 1 : 0;
        
        $idx = 0;
        if($request->existing_images){
            $idx = count($request->existing_images);
        }
        
        for($i=0 ; $i<$idx ; $i++){
            if($request->existing_images[$i]){
                $postValidatedData['image_' . $i+1] = $request->existing_images[$i];
            }
        }

        for($i=$idx ; $i<=2 ; $i++){
            $filePath = $adoptionPost->{'image_' . ($i + 1)} ?? null;
                if ($filePath) {
                    Storage::delete($filePath);
                } else {
                    Log::warning("No file to delete for image_" . ($i + 1));
                }
        }

        if($request->file('images')){
            foreach($request->file('images') as $file){
                $idx++;
                $postValidatedData['image_' . $idx] = $file->store('adoption-post-image');
            }
        }


        $petRules['user_id'] = 1;
        $postRules['user_id'] = 1;

        $adoptionPost->pet->update($petValidatedData);
        $adoptionPost->update($postValidatedData);

        return redirect('adoptions')->with('updateSuccess',"Update Successful!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function createSlug(Request $request){
        $slug = SlugService::createSlug(AdoptionPost::class, 'slug', $request->name,["unique" => true]);
        return response()->json(['slug' => $slug]);
    }
}
