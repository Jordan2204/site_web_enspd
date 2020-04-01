<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotRespcentinc
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @param  string|null  $guard
	 * @return mixed
	 */
	public function handle($request, Closure $next, $guard = 'respcentinc')
	{
	    if (!Auth::guard($guard)->check()) {
	        return redirect('respcentinc/login');
	    }

	    return $next($request);
	}
}