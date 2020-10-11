<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentarios;


class ComentariosController extends Controller
{
    public function getComentarios ()
    {
        $comentarios = Comentarios::all();
        return response()
        ->json($comentarios);
    }
    public function getComentariosPorProducto ($id)
    {
        $comentarios = Comentarios::where ('producto_id', $id) ->get();
    
        return response()
        ->json($comentarios);
    }
    public function createComentario (Request $request)
    {
        $comentario= new Comentarios();
        $comentario -> comentario = $request -> comentario;
        $comentario -> persona_id = $request -> persona_id;
        $comentario -> producto_id = $request -> producto_id;
        $comentario->save();
        return 'comentario creado';
    }
    public function getComentariosPorPersona ($id)
    {
        $comentarios = Comentarios::where ('persona_id', $id) ->get();
        return response()
        ->json($comentarios);
    }
}
