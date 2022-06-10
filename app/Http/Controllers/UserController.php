<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $user = User::all();

        return view('user.users', compact('user'));
    }

    public function create(Request $request){

        if ($request->isMethod('post')){
            $user = new User();
            $user -> documento = $request -> documento;
            $user -> nombre = $request -> nombre;
            $user -> apellido = $request -> apellido;
            $user -> telefono = $request -> telefono;
            $user -> direccion = $request -> direccion;
            $user -> username = $request -> username;
            $user -> password = $request -> password;
            $user -> rol_id = $request -> rol_id == null ? 2 : $request -> rol_id;

            $user -> save();

            return redirect() -> route('login');
        }
        return view('auth.register');
    }
    public function update(Request $request, $id){

        $user = User::find($id);
        $user -> documento = $request -> documento;
            $user -> nombre = $request -> nombre;
            $user -> apellido = $request -> apellido;
            $user -> telefono = $request -> telefono;
            $user -> direccion = $request -> direccion;
            $user -> username = $request -> username;
            $user -> password = $request -> password;
            $user -> rol_id = $request -> rol_id ;

            $user -> save();

    }
    public function delete($id){

        $user = User::find($id);
        $user -> delete();


    }
}
