<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function mostrarProductos($id = null) {
        
        if($id){
            return response()->json(["producto" => Producto::find($id)], 200);
        }
        
        return response()->json(["productos" => Producto::all()], 200);
    }

    public function registrarProducto(Request $request) {
        
        $producto = new Producto();

        $producto->producto = $request->producto;
        $producto->precio = $request->precio;

        if($producto->save()){
            return response()->json(["producto" => $producto], 201);
        }
        return response()->json([null, 400]);
    }

    public function editarProducto(Request $request, $id) {

        $producto = Producto::find($id);
        
        $producto->producto = $request->producto;
        $producto->precio = $request->precio;

        if($producto->update()){
            return response()->json(["producto" => $producto], 201);
        }
        return response()->json([null, 400]);
    }

    public function eliminarProducto($id = null) {

        $producto = Producto::find($id);
        
        if($producto->delete()) {
            return response()->json(["productos" => Producto::all()], 200);
        }
        return response()->json([null, 400]);

        //PD. Para que funcione este metodo hay que eliminar primero todos los comentarios relacionados.

    }
}
