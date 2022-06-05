<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// las rutas las lee laravel en fora de espagueti si una no cincide continua con la siguiente
Route::get('/', HomeController::class);

Route::get('login', [LoginController::class, 'index'])->name("login");
Route::get('register', [LoginController::class, 'create'])->name('create-user');
Route::post('auth', [LoginController::class, 'auth'])->name("login-auth");
Route::post('register', [LoginController::class, 'create'])->name("register");
Route::get('users', [UserController::class, ' index'])->name("users");

/*
Route::get('cursos/{curso}/{categoria}', function ($curso,$categoria= null) {
    return ("bienvenido al curso $curso, de la categoria $categoria");
});
Route::get('/', function () {
    //return view('welcome');

});*/
