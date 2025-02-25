<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\ArticleEventCategory;
use App\Models\ArticleRequest;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Filter berdasarkan beberapa parameter    
        $filters = ["category","search"];   

        // Mengambalikan view yang sesuai dan beberapa parameter
        return view("article.indexArticle",[
            "articles" => Article::filter(request($filters))->paginate(9)->withQueryString(),
            "categories" => ArticleEventCategory::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mengambalikan view yang sesuai dan beberapa parameter
        return view("article.createArticle", ["categories" => ArticleEventCategory::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input yang dikirim oleh user
        $validatedData = $request->validate([
            'title' => ['required','max:255'],
            'slug' => ['required','unique:articles'],
            'image' => ['image','file','max:1024'],
            'article_category_id' => ['required'],
            'content' => ['required']
        ]);

        // Simpan user_id dari user yang login saat ini
        $validatedData['user_id'] = auth()->user()->id;    

        // Simpan image ke storage lokal dan validatedData
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('articles-image','public');
        }
        
        // Simpan Artikel ke dalam Database
        ArticleRequest::create($validatedData);

        // Direct user ke Halaman Artikel dengan pesan berhasil
        return redirect('/articles')->with('createSuccess','Article Post Successfully Requested');
    }

    /**
     * Display the specified resource.  
     */
    public function show(string $slug)
    {
        // Mencari Article Post yang sesuai dengan slug yang dikirim
        $article = Article::where('slug',$slug)->firstOrFail();

        if($article){
            // Mengembalikan view yang sesuai dan article post yang terpilih
            return view('article.showArticle',["article" => $article]);
        }
        return redirect('/articles')->with('articleError','Post Not Found!');
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

    // Fungsi untuk membuat slug secara otomatis
    public function createSlug(Request $request){
        $slug = SlugService::createSlug(Article::class, 'slug', $request->title,["unique" => true]);
        return response()->json(['slug' => $slug]);
    }
}
