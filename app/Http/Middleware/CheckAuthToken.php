<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class CheckAuthToken extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {
        if (! $this->auth->guard(...$guards)->check()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return $next($request);
    }

}
