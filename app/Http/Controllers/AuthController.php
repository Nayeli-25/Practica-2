<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use Log;

class AuthController extends Controller
{
    public function registrarUsuario(Request $request)
    {
        $request->validate([
            'persona_id'=>'required',
            'Nombre' => 'required',
            'email' => 'required|email',
            'Contraseña' => 'required',
        ]);

        $usuario= new User();
        $usuario->persona_id = $request->persona_id;
        $usuario->Nombre = $request->Nombre;
        $usuario->email = $request->email;
        $usuario->Contraseña = Hash::make($request->Contraseña);
        $usuario->Rol='suscriptor';

        if ($usuario->save())
        return response()->json(['Nuevo usuario'=>$usuario],201);
    
    return response()->json('No se registró el usuario',422);
    }

    public function logIn(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'Contraseña' => 'required',
        ]);
        
        $usuario = User::where('email', $request->email)->first();

        if(!$usuario || !Hash::check($request->Contraseña, $usuario->Contraseña)){
            throw ValidationException::withMessages([
                'email | contraseña' => ['Datos erroneos']
            ]);
        }
        if ($usuario->Rol='suscriptor'){
            $token = $usuario->createToken($request->email, ['user:info'])->plainTextToken;
            return response()->json(['token' => $token], 200);
        }
        else{
            $token = $usuario->createToken($request->email, ['admin:admin'])->plainTextToken;
            return response()->json(['token' => $token], 200);
        }
    }
    
    public function inicio(Request $request)
    {
        if($request->user()->tokenCan('admin:admin'))
            return response()->json(['Usuarios'=>User::all()],200);

        if($request->user()->tokenCan('user:info'))
            return response()->json(["Mi perfil"=> $request->user()],200);
        
        return response()->json('No se ha iniciado sesión',422);
    }

    public function logOut(Request $request)
    {
        return response()->json(["Se cerró la sesión"=> $request->user()->tokens()->delete()],200);
    }
}
