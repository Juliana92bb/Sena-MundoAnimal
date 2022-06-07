<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        $product = Producto::all();

        return view('', compact($product));

    }

    public function create(Request $request){

        if ($request->isMethod('post')){
            $product = new Producto();
            $product -> id_productos = $request -> id_productos;
            $product -> nombre = $request -> nombre;
            $product -> imagen = $request -> imagen;
            $product -> descripcion = $request -> descripcion;
            $product -> precio = $request -> precio;
            $product -> iva = $request -> iva;
            $product -> existencias = $request -> existencias;
            $product -> categoria_id = $request -> categoria_id;
            $product -> proveedor_id = $request -> proveedor_id;

            $product -> save();

        }
        
}
    public function update(Request $request, $id){

        $product = Producto::find($id);
        $product -> id_productos = $request -> id_productos;
            $product -> nombre = $request -> nombre;
            $product -> imagen = $request -> imagen;
            $product -> descripcion = $request -> descripcion;
            $product -> precio = $request -> precio;
            $product -> iva = $request -> iva;
            $product -> existencias = $request -> existencias;
            $product -> categoria_id = $request -> categoria_id;
            $product -> proveedor_id = $request -> proveedor_id;

            $product -> save();

    }
    public function delete($id){

        $product = Producto::find($id);
        $product -> delete();


    }
}
