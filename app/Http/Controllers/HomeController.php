<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        return view('auth.login');
    }
    public function dashboard(){
        return view('dashboard');
    }
}
