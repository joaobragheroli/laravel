<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\Inicio::class, 'inicio'])->name('inicio');
Route::get('/teste', [App\Http\Controllers\Principal::class, 'teste']);
Route::get('/conectar', [App\Http\Controllers\Usuario::class, 'conectar']);
Route::get('/desconectar', [App\Http\Controllers\Usuario::class, 'desconectar']);




Route::get('/adocao', [App\Http\Controllers\adocao::class, 'adocao'])->name('adocao');
Route::get('/detalhesAnimal', [App\Http\Controllers\detalhesAnimal::class, 'detalhesAnimal'])->name('detalhesAnimal');
Route::get('/listarAnimais', [App\Http\Controllers\listarAnimais::class, 'listarAnimais'])->name('listarAnimais');
Route::get('/login', [App\Http\Controllers\login::class, 'login'])->name('login');
Route::get('/registro', [App\Http\Controllers\registro::class, 'registro'])->name('registro');



