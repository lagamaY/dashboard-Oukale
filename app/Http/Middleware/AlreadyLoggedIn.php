<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AlreadyLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */

     public function handle(Request $request, Closure $next){
        if (Session()->has('loginId') && (url('connexion')==$request->url() || url('enregistrement')==$request->url())) {
            return back();
        }
// Flêcher le middleware after
        return $next($request);
     }
}
