<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RotaController; //cadastro//
use App\Http\Controllers\UsuarioController;
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

Route::get('/', [UsuarioController::class, 'index']) ->name('usuario-index');
Route::get('/cadastro' , [UsuarioController::class , 'cadastro'])->name('usuario-cadastro');
Route::post('/usuario', [UsuarioController::class, 'store'])->name('usuario-store');

Route::get('/cadastro.html', function(){
    
    return view('cadastro',[RotaController::class]);
});

Route::get('/home', function(){
    return view('home',[HomeController::class]);
});

Route::get('/login', function(){
    return view('login',[LoginController::class]);
});
