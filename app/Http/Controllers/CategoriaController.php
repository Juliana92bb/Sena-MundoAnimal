<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index(){
        $categoria = Categoria::all();

        return view('', compact($categoria));
    }
    public function create(Request $request){

        if ($request->isMethod('post')){
            $categoria = new Categoria();
            $categoria -> id_categoria = $request -> id_categoria;
            $categoria -> nombre_c = $request -> nombre_c;

            $categoria -> save();

    }
}
    public function update(Request $request, $id){

        $categoria = Categoria::find($id);
        $categoria -> id_categoria = $request -> id_categoria;
        $categoria -> nombre_c = $request -> nombre_c;

        $categoria -> save();
    }
    public function delete($id){

        $categoria = Categoria::find($id);
        $categoria -> delete();


    }
}
