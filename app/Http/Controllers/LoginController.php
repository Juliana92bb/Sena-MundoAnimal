<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Rol;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function auth(Request $request){

        if (auth()->attempt(['username' => $request->username, 'password' => $request->password])) {
            echo "Oda";
        }else {
            echo "adio";
        }
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
}
