<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleRequest;
use Illuminate\Http\Request;

class ArticleRequestController extends Controller
{
    public function index() {
        $filters = ["status"];

        return view('dashboard.articleDashboardAdmin',[
            "requests" => ArticleRequest::filter(request($filters))->orderByRaw('
                CASE
                    WHEN approval_status = "pending" THEN 1
                    WHEN approval_status = "accepted" THEN 2
                    WHEN approval_status = "rejected" THEN 3
                    ELSE 4
                END
            ')->get(), 
            "total_pending_requests" => ArticleRequest::where('approval_status','Pending')->count(),
            "total_accepted_requests" => ArticleRequest::where('approval_status','Accepted')->count(),
            "total_rejected_requests" => ArticleRequest::where('approval_status','Rejected')->count(),
        ]);
    }

    
    public function show(string $slug) {
        $article = ArticleRequest::where('slug',$slug)->firstOrFail();
        if($article){
            return view('article.showArticle',[
                "article" => $article
            ]);
        }
    }

    public function handleRequest(string $slug, string $action) {
        $request = ArticleRequest::where('slug',$slug)->firstOrFail();
        if($request){
            $isAccepted = $action == "accept";
            
            $data = [
                "approval_status" => $isAccepted  ? "Accepted" : "Rejected"
            ];
            
            $request->update($data);

            if($isAccepted){
                $articleData = [
                    'title' => $request->title,
                    'slug' => $request->slug,
                    'image' => $request->image,
                    'article_category_id' => $request->article_category_id,
                    'content' => $request->content,
                    "user_id" => $request->user_id
                ];
    
                Article::create($articleData);
            }

            return redirect('/dashboard/article-requests');
        }
    }
}
