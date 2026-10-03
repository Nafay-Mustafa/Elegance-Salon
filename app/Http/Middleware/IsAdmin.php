<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
   public function handle(Request $request, Closure $next)
{
    // Agar login nahi hai to login pe bhejo
    if (!Auth::check()) {
        return redirect('/login');
    }

    // Sirf tumhara email admin hoga
    if (Auth::user()->email == 'admin@elegancesalon.com') {
        return $next($request);
    }

    // Baki sab ko wapas home pe
    return redirect('/')->with('error', 'You are not admin!');
}
}
