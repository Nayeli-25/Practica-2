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
        
        if ($comentario->save())
            return response()->json(["Nuevo comentario"=>$comentario],201);
        
        return response()->json(null,400);
    }

    public function updateComentario(Request $request, $id)
    {
        $ComentarioActualizado = Comentarios::find($id);
        $ComentarioActualizado -> comentario = $request -> comentario;
        $ComentarioActualizado -> persona_id = $request -> persona_id;
        $ComentarioActualizado -> producto_id = $request -> producto_id;
        
        if ($ComentarioActualizado->save())
            return response()->json(["Nuevos datos del comentario"=>$ComentarioActualizado],200);

        return response()->json(null,400);
    }
   
    public function deleteComentario($id){

        $ComentarioEliminado = Comentarios::findOrFail($id);
        
        if($ComentarioEliminado ->delete())
            return response()->json("Comentario eliminado correctamente",200);

        return response()->json(null,400);
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
