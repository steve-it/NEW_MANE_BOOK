<?php

namespace App\Http\Middleware;

use Illuminate\Http\Response;

use Closure;

class Stop
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
        if ( time() > strtotime('2018-03-14 00:00:00.0') )  {
            return response()->view('errors.503', [], 503);
        }

        return $next($request);
    }
}
