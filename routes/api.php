<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Middleware;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|*/

/* Middlewares ver información del usuario logueado*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->get('inicio', 'AuthController@inicio');

/* Ruta iniciar sesión*/
Route::post('login', 'AuthController@logIn');

/* Middleware cerrar sesión*/
Route::middleware('auth:sanctum')->delete('logout', 'AuthController@logOut');

/* Ruta Registrar usuario*/
Route::post('registrar', 'AuthController@registrarUsuario')->middleware('checkrole');

/* Otorgar y revocar permisos*/
Route::put('otorgar/{id}', 'PermisosController@otorgarPermisos');
Route::put('revocar/{id}', 'PermisosController@revocarPermisos');

/* Rutas Personas*/
Route::get('personas/{id?}', 'PersonasController@getPersonas')->where("id", "[0-9]+");
Route::post('nuevapersona', 'PersonasController@createPersona')->middleware('checkrole','checkage');
Route::put('updatepersona/{id}', 'PersonasController@updatePersona')->middleware('checkrole', 'checkage');
Route::delete('deletepersona/{id}', 'PersonasController@deletePersona')->middleware('checkrole');

/* Rutas Productos*/
Route::get('productos/{id?}', 'ProductosController@getProductos')->where("id", "[0-9]+");
Route::post('productos', 'ProductosController@createProducto')->middleware('checkrole');
Route::put('updateproducto/{id}', 'ProductosController@updateProducto')->middleware('checkrole');
Route::delete('deleteproducto/{id}', 'ProductosController@deleteProducto')->middleware('checkrole');

/* Rutas Comentarios*/
Route::get('comentarios/{id?}', 'ComentariosController@getComentarios')->where("id", "[0-9]+");
Route::post('comentarios', 'ComentariosController@createComentario');
Route::put('/updatecomentario/{id}', 'ComentariosController@updateComentario');
Route::delete('/deletecomentario/{id}', 'ComentariosController@deleteComentario');

/* Rutas específicas*/
Route::get('productos/{id}/comentarios', 'ComentariosController@getComentariosPorProducto');
Route::get('personas/{id}/comentarios', 'ComentariosController@getComentariosPorPersona');
