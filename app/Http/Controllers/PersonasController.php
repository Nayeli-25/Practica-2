<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personas;

class PersonasController extends Controller
{
    public function getPersonas ()
    {
        $personas = Personas::all();
        return response()
        ->json($personas);
    }
    public function createPersona(Request $request)
    {
        $persona = new Personas;

        $persona->nombre = $request->nombre;

        $persona->save();
        return 'persona agregada';
    }
}
