<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;

class HanyaAdmin
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
        $user = User::with('roles')->find(Auth::id());
if ($user->roles()->where('name', '=', 'admin')->first())
  {
    return $next($request);
  } else {
    abort(401, 'This action is unauthorized.');
  }
    }
}
