<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */

     public function handle(Request $request, Closure $next){
        if (!Session()->has('loginId')) {
            return redirect('connexion')->with('fail, You have to login first');
        }
// Flêcher le middleware after
        return $next($request);
     }
}
