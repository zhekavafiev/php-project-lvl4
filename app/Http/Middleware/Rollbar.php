<?php

namespace App\Http\Middleware;

use Closure;

class Rollbar
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
        \Rollbar\Rollbar::init(config('services.rollbar'));
        return $next($request);
    }
}
