<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Rol;

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
        return view('auth.register');
    }
}
