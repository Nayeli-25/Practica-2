<?php

namespace App\Http\Controllers;
use App\Models\Productos;


use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function getProductos ($id=null)
    {
        if ($id)
            return response()->json(["Producto"=>Productos::find($id)],200);
        return response()->json(["Productos"=>Productos::all()],200);
    }
    public function createProducto(Request $request)
    {
        $producto = new Productos;

        $producto->Producto = $request->Producto;

        $producto->save();
        return 'producto creado';
    }
}
