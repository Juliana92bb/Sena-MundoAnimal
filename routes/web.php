<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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
// las rutas las lee laravel en forma de espagueti si una no cincide continua con la siguiente
Route::get('/', HomeController::class)->name("index");

//Login
Route::get('login', [LoginController::class, 'index'])->name("login")->middleware('guest');
Route::post('auth', [LoginController::class, 'auth'])->name("login-auth");
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('index', [RegisterController::class, 'index'])->name('forge-password');
Route::post('send', [RegisterController::class, 'email'])->name('send-email');
Route::get('temp', [RegisterController::class, 'urltemp'])->name('url-temp');
Route::get('forge-password', [RegisterController::class, 'forge'])->name('forge');
Route::post('form', [RegisterController::class, 'form'])->name('form');

//dashboard
Route::get('dashboard', [HomeController::class, 'dashboard'])->name("dashboard")->middleware('auth');

//User
Route::prefix('users')->group(function () {
    Route::get('list', [UserController::class, 'index'])->name("list-users");
    Route::get('register', [UserController::class, 'create'])->name('create-user');
    Route::put('update/{id}', [UserController::class, 'update'])->name("update-user");
    Route::delete('delete/{id}', [UserController::class, 'delete'])->name('delete-user');
});

