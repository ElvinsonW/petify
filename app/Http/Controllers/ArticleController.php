<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filters = ["category"];
        return view("article.indexArticle",[
            "articles" => Article::filter(request($filters))->paginate(9)->withQueryString(),
            "categories" => ArticleCategory::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("article.createArticle", ["categories" => ArticleCategory::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required','max:255'],
            'slug' => ['required','unique:articles'],
            'image' => ['image','file','max:1024'],
            'article_category_id' => ['required'],
            'content' => ['required']
        ]);

        $validatedData['user_id'] = auth()->user()->id;    

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('articles-image','public');
        }
        
        Article::create($validatedData);
        return redirect('/articles');
    }

    /**
     * Display the specified resource.  
     */
    public function show(string $slug)
    {
        $article = Article::where('slug',$slug)->firstOrFail();
        return view('article.showArticle',["article" => $article]);
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

    public function createSlug(Request $request){
        $slug = SlugService::createSlug(Article::class, 'slug', $request->title,["unique" => true]);
        return response()->json(['slug' => $slug]);
    }
}
