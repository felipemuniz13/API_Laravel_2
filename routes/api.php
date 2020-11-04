<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*

CRUD

1. get all          (GET)    /api/productos
2. creat a post     (POST)   /api/productos
3. get a single     (GET)    /api/productos/{id}
4. update a single  (PUT)    /api/productos/{id}
5. delete a single  (DELETE) /api/productos/{id}

*/

//PRODUCTOS
/*
Route::get("/productos/{id?}", 'API\ProductoController@mostrarProductos')->where("id", "[0-9]+");

Route::post("/productos", 'API\ProductoController@registrarProducto');

Route::put("/productos/{id}", 'API\ProductoController@editarProducto')->where("id", "[0-9]+");

Route::delete("/productos/{id}", 'API\ProductoController@eliminarProducto')->where("id", "[0-9]+");
*/

//PERSONAS
/*
Route::get("/personas/{id?}", 'API\PersonaController@mostrarPersonas')->where("id", "[0-9]+");

Route::post("/personas", 'API\PersonaController@registrarPersona');

Route::put("/personas/{id}", 'API\PersonaController@editarPersona')->where("id", "[0-9]+");

Route::delete("/personas/{id}", 'API\PersonaController@eliminarPersona')->where("id", "[0-9]+");*/



//COMENTARIOS
/*
Route::get("/comentarios/{id?}", 'API\ComentarioController@mostrarComentarios')->where("id", "[0-9]+");

Route::get("/comentarios/persona/{id}", 'API\ComentarioController@mostrarComentariosPorPersona')->where("id", "[0-9]+");

Route::post("/comentarios", 'API\ComentarioController@registrarComentario');

Route::put("/comentarios/{id}", 'API\ComentarioController@editarComentario')->where("id", "[0-9]+");

Route::delete("/comentarios/{id}", 'API\ComentarioController@eliminarComentario')->where("id", "[0-9]+");
*/

//REGISTRO
Route::post("/registro",'API\AutentificacionController@registro')->middleware('checar.edad');

//LOG-IN
Route::post("/login", 'API\AutentificacionController@iniciarSesion');

//LOG-OUT
Route::delete("/logout", 'API\AutentificacionController@cerrarSesion')->middleware('auth:sanctum');

//INFO-USER(S)
Route::get("/user", 'API\AutentificacionController@index')->middleware('auth:sanctum');