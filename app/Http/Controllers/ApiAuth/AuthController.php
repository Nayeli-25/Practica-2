<?php

namespace App\Http\Controllers\ApiAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use Log;

class AuthController extends Controller
{
    public function registrarUsuario(Request $request)
    {
        $request->validate([
            'Nombre' => 'required',
            'email' => 'required|email',
            'Contraseña' => 'required|size:10',
        ]);
        $usuario= new User();
        $usuario -> Nombre = $request -> Nombre;
        $usuario -> email = $request -> email;
        $usuario -> Contraseña = Hash::make($request -> Contraseña);

        if ($usuario->save())
        return response()->json(["Nuevo usuario"=>$usuario],201);
    
    /**return response()->json(null,422);**/
    }

    public function inicio(Request $request)
    {
        if($request->user()->tokenCan('user:info') && $request->user()->tokenCan('admin:admin'))
            return response()->json(["Usuarios"=>User::all()],200);

        if($request->user()->tokenCan('user:info'))
            return response()->json(["Mi perfil"=> $request->user()],200);
    }

    public function logIn(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'Contraseña' => 'required|size:10',
        ]);
        
        $usuario = User::where('email', $request->email)->first();

        $token = $usuario->createToken($request->email, ['user:info', 'admin:admin'])->plainTextToken;
        return response()->json(['token' => $token], 200);

        if(!$usuario || !Hash::check($request->Contraseña, $usuario->Contraseña)){
            throw ValidationException::withMessages([
                'email | contraseña' => ['Datos incorrectos'],
            ]);
        }
    }

    public function logOut(Request $request)
    {
        return response()->json(["No se pudo iniciar sesión"=> $request->user()->tokens()->delete()],200);
    }
}
