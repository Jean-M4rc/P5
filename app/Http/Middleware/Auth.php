<?php

namespace App\Http\Middleware;

use Closure;

class Auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->guest()){

            flash("Vous devenez vous connecter pour voir cette page.")->error();

            return redirect('/');

        }
        
        return $next($request);
    }
}
