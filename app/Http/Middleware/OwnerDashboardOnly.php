<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OwnerDashboardOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $owner = User::where('username',$request->route('username'))->firstOrFail();
        if($owner->id != auth()->user()->id){
            return redirect('/dashboard'. '/' . $owner->username . '/posts')->with('userError',"Only the Owner Can Access This Page!");
        }

        return $next($request);
    }
}
