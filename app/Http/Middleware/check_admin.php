<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class check_admin
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
        if (Auth::guard($guard)->check()) {
        return redirect('/home');
    }
        return $next($request);
    }
}
