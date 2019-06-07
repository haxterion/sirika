<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Supplier
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
    if (Auth::check() && Auth::user()->role == 'supplier') {
        return $next($request);
    }
    elseif (Auth::check() && Auth::user()->role == 'operator') {
        return redirect('/pembelian');
    }
    else {
        return redirect('/pesanan');
    }
    }
}
