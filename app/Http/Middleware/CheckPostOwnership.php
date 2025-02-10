<?php

namespace App\Http\Middleware;

use App\Models\AdoptionPost;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPostOwnership
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next, ): Response
    {
        // Dapatkan slug dari route
        $slug = $request->route('adoption');

        // Mencari post yang sesuai dengan slug yang didapat
        $post = AdoptionPost::where('slug',$slug)->firstOrFail();

        // Cek apakah user merupakan pembuat dari post
        if($post->user_id !== auth()->id()) {
            return redirect()->route('adoption.index')->with('ownerError', 'You are not authorized to perform this action.');
        }

        return $next($request);
    }
}
