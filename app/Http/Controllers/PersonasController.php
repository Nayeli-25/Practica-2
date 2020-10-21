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
            
        return response()->json(["personas"=>Personas::all()],200);
    }
    public function createPersona(Request $request)
    {
        $persona = new Personas;

        $persona->Nombre = $request->Nombre;
        $persona->Apellido = $request->Apellido;

        $persona->save();
        return 'persona agregada';
    }
}
