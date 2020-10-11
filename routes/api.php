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

Route::get('personas', [PersonasController::class, 'getPersonas']);
Route::post('personas', [PersonasController::class, 'createPersona']);

Route::get('productos', [ProductosController::class, 'getProductos']);
Route::post('productos', [ProductosController::class, 'createProducto']);

Route::get('comentarios', [ComentariosController::class, 'getComentarios']);
Route::post('comentarios', [ComentariosController::class, 'createComentario']);

Route::get('productos/{id}/comentarios', [ComentariosController::class, 'getComentariosPorProducto']);
Route::get('personas/{id}/comentarios', [ComentariosController::class, 'getComentariosPorPersona']);


