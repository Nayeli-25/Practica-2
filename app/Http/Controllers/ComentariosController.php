<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentarios;


class ComentariosController extends Controller
{
    public function getComentarios ($id=null)
    {
        if ($id)
            return response()->json(["Comentario"=>Comentarios::find($id)],200);
        return response()->json(["Comentarios"=>Comentarios::all()],200);
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
    public function getComentariosPorProducto ($id)
    {
        $comentarios = Comentarios::where ('producto_id', $id) ->get();
        return response()->json($comentarios);
    }
    public function getComentariosPorPersona ($id)
    {
        $comentarios = Comentarios::where ('persona_id', $id) ->get();
        return response()->json($comentarios);
    }
}
