<?php

namespace App\Http\Middleware;

use Closure;
use App\Can_posts;

class CanPostProducts
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
        $check=Can_posts::firstOrFail();
        if ($check["can_write"]<1) {
            return redirect()->route("nopermision");
        }
        return $next($request);
    }
}
