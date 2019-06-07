<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Operator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    function handle($request, Closure $next)
    {
    if (Auth::check() && Auth::user()->role == 'operator') {
        return $next($request);
    }
    elseif (Auth::check() && Auth::user()->role == 'supplier') {
        return redirect('/pengiriman');
    }
    else {
        return redirect('/supplier');
    }
    }
}
