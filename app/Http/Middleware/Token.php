<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Token
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $roshan = 20;

        if($roshan < 10) return redirect(route('namedRoute'));
        return $next($request);
    }
}
