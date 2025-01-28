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
        $slug = $request->route('adoption');
        $post = AdoptionPost::where('slug',$slug)->firstOrFail();

        if($post->user_id !== auth()->id()) {
            return redirect()->route('adoption.index')->with('ownerError', 'You are not authorized to perform this action.');
        }

        return $next($request);
    }
}
