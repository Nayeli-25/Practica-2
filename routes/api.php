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


/* Rutas Personas*/
Route::get('/personas/{id?}', 'PersonasController@getPersonas')->where("id", "[0-9]+");
Route::post('personas', 'PersonasController@createPersona');
Route::put('/updatepersona/{id}', 'PersonasController@updatePersona');
Route::delete('/deletepersona/{id}', 'PersonasController@deletePersona');

/* Rutas Productos*/
Route::get('productos/{id?}', 'ProductosController@getProductos')->where("id", "[0-9]+");
Route::post('productos', 'ProductosController@createProducto');
Route::put('/updateproducto/{id}', 'ProductosController@updateProducto');
Route::delete('/deleteproducto/{id}', 'ProductosController@deleteProducto');

/* Rutas Comentarios*/
Route::get('comentarios/{id?}', 'ComentariosController@getComentarios')->where("id", "[0-9]+");
Route::post('comentarios', 'ComentariosController@createComentario');
Route::put('/updatecomentario/{id}', 'ComentariosController@updateComentario');
Route::delete('/deletecomentario/{id}', 'ComentariosController@deleteComentario');

/* Rutas específicas*/
Route::get('productos/{id}/comentarios', 'ComentariosController@getComentariosPorProducto');
Route::get('personas/{id}/comentarios', 'ComentariosController@getComentariosPorPersona');


