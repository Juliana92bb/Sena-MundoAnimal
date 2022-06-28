<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    public function index(){
        $proveedor = Proveedor::all();

        return view('', compact('proveedor'));
    }

    public function create(Request $request){

        if ($request->isMethod('post')){
            $proveedor = new Proveedor();
            $proveedor -> id_proveedor = $request -> id_proveedor;
            $proveedor -> nombre_p = $request -> nombre_p;
            $proveedor -> apellido_p = $request -> apellido_p;
            $proveedor -> telefono_p = $request -> telefono_p;

            $proveedor -> save();

        }
    }
    public function update(Request $request, $id){

        $proveedor = Proveedor::find($id);
        $proveedor -> id_proveedor = $request -> id_proveedor;
        $proveedor -> nombre_p = $request -> nombre_p;
        $proveedor -> apellido_p = $request -> apellido_p;
        $proveedor -> telefono_p = $request -> telefono_p;

        $proveedor -> save();

    }
    public function delete($id){

        $proveedor = Proveedor::find($id);
        $proveedor -> delete();


    }
}
