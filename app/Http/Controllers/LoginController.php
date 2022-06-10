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
        $credenciales = $request->only('username', 'password');
        if ((Auth::attempt($credenciales))){
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }else {
            return redirect()->route('login');

        }
    }
    public function logout(){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
