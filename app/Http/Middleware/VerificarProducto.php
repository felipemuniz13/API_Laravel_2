<?php

namespace App\Http\Middleware;

use Closure;

class VerificarProducto
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
        $producto = $request->producto; 
        $resultado = DB::table('productos')->select('producto')->where($producto);
        
        if($resultado){
            return abort(400, 'Producto ya creado');
        }
        return $next($request);
    }
}
