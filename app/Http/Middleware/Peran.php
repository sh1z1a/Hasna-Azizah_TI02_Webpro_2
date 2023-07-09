<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
//use auth
use Illuminate\Support\Facades\Auth;

class Peran
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $peran): Response
    {
        if(Auth::check()){
            $peran = explode('-', $peran);
            foreach($peran as $group){
                if(Auth::user()->role == $group){
                    return $next($request);
                }
            }

        }
        return redirect('/after_register');
    }
}
