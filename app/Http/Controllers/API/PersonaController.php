<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function mostrarPersonas($id = null) {
        
        if($id){
            return response()->json(["persona" => Persona::find($id)], 200);
        }
        
        return response()->json(["personas" => Persona::all()], 200);
    }

    public function registrarPersona(Request $request) {
        
        $persona = new Persona();

        $persona->nombre = $request->nombre;
        $persona->apellido_paterno = $request->apellido_paterno;
        $persona->apellido_materno = $request->apellido_materno;

        if($persona->save()){
            return response()->json(["persona" => $persona], 201);
        }
        return response()->json([null, 400]);
    }

    public function editarPersona(Request $request, $id) {

        $persona = Persona::find($id);
        
        $persona->nombre = $request->nombre;
        $persona->apellido_paterno = $request->apellido_paterno;
        $persona->apellido_materno = $request->apellido_materno;

        if($persona->update()){
            return response()->json(["persona" => $persona], 201);
        }
        return response()->json([null, 400]);
    }

    public function eliminarPersona($id = null) {

        $persona = Persona::find($id);

        if($persona->delete()) {
            return response()->json(["personas" => Persona::all()], 200);
        }
        return response()->json([null, 400]);

    }
}
