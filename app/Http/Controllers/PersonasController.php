<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personas;

class PersonasController extends Controller
{
    public function getPersonas ($id = null)
    {
        if ($id)
            return response()->json(["Persona"=>Personas::find($id)],200);

        return response()->json(["Personas"=>Personas::all()],200);
    }
    
    public function createPersona(Request $request)
    {
        $persona = new Personas;

        $persona->Nombre = $request->Nombre;
        $persona->Apellido = $request->Apellido;

        if ($persona->save())
            return response()->json(["Nueva persona"=>$persona],201);
        
        return response()->json(null,400);
    }
    
    public function updatePersona(Request $request, $id)
    {
        $PersonaActualizada = Personas::find($id);
        $PersonaActualizada->Nombre = $request->Nombre;
        $PersonaActualizada->Apellido = $request->Apellido;
        
        if ($PersonaActualizada->save())
            return response()->json(["Nuevos datos de la persona"=>Personas::find($id)],200);

        return response()->json(null,400);
    }
   
    public function deletePersona($id){

        $PersonaEliminada = Personas::findOrFail($id);
        
        if($PersonaEliminada ->delete())
            return response()->json("Persona eliminada correctamente",200);

        return response()->json(null,400);
    }
}
