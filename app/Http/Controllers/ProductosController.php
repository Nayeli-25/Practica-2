<?php

namespace App\Http\Controllers;
use App\Models\Productos;


use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function getProductos ()
    {
        $productos = Productos::all();
        return response()
        ->json($productos);
    }
    public function createProducto(Request $request)
    {
        $producto = new Productos;

        $producto->nombre = $request->name;

        $producto->save();
        return 'producto creado';
    }
}
