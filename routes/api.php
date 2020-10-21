<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ComentariosController;

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

Route::get('foo', function () {
    return 'Hello World';
});

/* Rutas Personas*/
Route::get('personas/{id?}', [PersonasController::class, 'getPersonas'])->where("id", "[0-9]+");
Route::post('personas', [PersonasController::class, 'createPersona']);
Route::put('/updatepersona/{id}', [PersonasController::class, 'updatePersona']);
Route::delete('/deletepersona/{id}', [PersonasController::class, 'deletePersona']);

/* Rutas Productos*/
Route::get('productos/{id?}', [ProductosController::class, 'getProductos'])->where("id", "[0-9]+");
Route::post('productos', [ProductosController::class, 'createProducto']);
Route::put('/updateproducto/{id}', [ProductosController::class, 'updateProducto']);
Route::delete('/deleteproducto/{id}', [ProductosController::class, 'deleteProducto']);

/* Rutas Comentarios*/
Route::get('comentarios/{id?}', [ComentariosController::class, 'getComentarios'])->where("id", "[0-9]+");
Route::post('comentarios', [ComentariosController::class, 'createComentario']);
Route::put('/updatecomentario/{id}', [ComentariosController::class, 'updateComentario']);
Route::delete('/deletecomentario/{id}', [ComentariosController::class, 'deleteComentario']);

/* Rutas específicas*/
Route::get('productos/{id}/comentarios', [ComentariosController::class, 'getComentariosPorProducto']);
Route::get('personas/{id}/comentarios', [ComentariosController::class, 'getComentariosPorPersona']);


