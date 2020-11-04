<?php

namespace App\Http\Middleware;

use Closure;

class VerificarEdad
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
        if($request->edad < 18) {
            return abort(400, "No eres mayor de edad.");
        }
        return $next($request);
    }
}
