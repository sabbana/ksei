<?php

namespace App\Http\Middleware;

use Closure;

class ValidateToken
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
        if ($request->header('Authorization') !== config('ksei.accessToken')) {
            return response()->json(response_meta(401, false, 'Unauthorized Token!'));
        }
        return $next($request);
    }
}
