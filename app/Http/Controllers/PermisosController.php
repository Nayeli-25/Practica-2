<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PermisosController extends Controller
{
    public function otorgarPermisos(Request $request, $id)
    {
        $request = 'admin';
        $usuario = User::find($id);
        $usuario->Rol = $request;
        
        if($usuario->save())
            return response()->json("El usuario ahora es administrador",200);  
        
        return response()->json(null,400);
    }

    public function revocarPermisos(Request $request, $id)
    {
        $request = 'suscriptor';
        $usuario = User::find($id);
        $usuario->Rol = $request;
        
        if($usuario->save())
            return response()->json("El usuario ya no tiene permisos de administrador",200);  
        
        return response()->json(null,400);
    }
}
