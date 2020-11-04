<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comentario;

class ComentarioController extends Controller
{
    public function mostrarComentarios($id = null) {
        
        if($id){
            return response()->json(["comentario" => Comentario::find($id)], 200);
        }
        
        return response()->json(["comentarios" => Comentario::all()], 200);
    }

    public function mostrarComentariosPorPersona($id = null) {

        $comentario = Comentario::where("persona_id", $id)->get();

        if($comentario) {
            return response()->json($comentario);
        }
        return response()->json(null, 400);
    }

    public function registrarComentario(Request $request) {
        
        $comentario = new Comentario();

        $comentario->titulo = $request->titulo;
        $comentario->contenido = $request->contenido;
        $comentario->persona_id = $request->persona_id;
        $comentario->producto_id = $request->producto_id;

        if($comentario->save()){
            return response()->json(["comentario" => $comentario], 201);
        }
        return response()->json([null, 400]);
    }

    public function editarComentario(Request $request, $id) {

        $comentario = Comentario::find($id);
        
        $comentario->titulo = $request->titulo;
        $comentario->contenido = $request->contenido;
        $comentario->persona_id = $request->persona_id;
        $comentario->producto_id = $request->producto_id;

        if($comentario->update()){
            return response()->json(["comentario" => $comentario], 201);
        }
        return response()->json([null, 400]);
    }

    public function eliminarComentario(Request $request, $id) {

        $comentario = Comentario::find($id);

        if($comentario->delete()) {
            return response()->json(["comentarios" => Comentario::all()], 200);
        }
        return response()->json([null, 400]);

    }
}
