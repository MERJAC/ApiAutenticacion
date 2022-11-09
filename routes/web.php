<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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



Route::view('/', 'index')->name('index');
Route::view('/eventos', 'eventos')->name('eventos');
Route::view('/suscribirse', 'suscribirse')->name('suscribirse');
Route::view('/contacto', 'contacto')->name('contacto');
Route::view('/favoritos', 'favoritos')->name('favoritos');
Route::view('/login', 'login')->name('loin');

Route::post('CrearUsuario', [UserController::class, 'Create']); 
Route::post('Authentificar', [UserController::class, 'Authenticate']); 