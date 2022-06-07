<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;

class RolController extends Controller
{
    public function index(){
        $rol = Rol::all();

        return view('', compact($rol));
    }
    public function create(Request $request){

        if ($request->isMethod('post')){
            $rol = new Rol();
            $rol -> id_roles = $request -> id_roles;
            $rol -> descripcion = $request -> descripcion;
        
            $rol -> save();

    }    
}
    public function update(Request $request, $id){

        $rol = Rol::find($id);
        $rol -> id_roles = $request -> id_roles;
        $rol -> descripcion = $request -> descripcion;

    }
    public function delete($id){

        $rol = Rol::find($id);
        $rol -> delete();


    }
}
