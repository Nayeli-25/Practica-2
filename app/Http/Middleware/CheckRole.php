<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $usuario = User::where('email', $request->email)->first();
        
        if ($usuario->Rol='suscriptor')
            return response()->json( 'Requieres permisos para realizar esta acción',400);
        
        return $next($request);
    }
}
