<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorTareas;
use App\Http\Controllers\ControladoDeRegistro;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login.login');
});

Route::get(
    '/register', function () {
    return view('login.registrar');
});

Route::post(
    '/register',
     [ControladoDeRegistro::class , 'registrar']);

Route::get(
    '/registrar',
    [ControladorTareas::class, 'create']
    )->name('afiliados.crearAfiliado');

Route::post(
    '/registrar/guardar',
    [ControladorTareas::class, 'store']
    )->name('afiliados.guardar');

Route::get(
    '/registrar/mostrar',
    [ControladorTareas::class, 'index']
    )->name('afiliados.mostrar');