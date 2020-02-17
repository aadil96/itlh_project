<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {   
        // dd($guard);
        if (Auth::guard('client')->check())
        {
            // dd($guard);
            return redirect()->route('client.home');
        }

        if (Auth::guard($guard)->check())
        {
            // dd($guard);
            return redirect('/home');
        }


        return $next($request); 
    }
}   