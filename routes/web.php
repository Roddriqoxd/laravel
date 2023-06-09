<?php

use App\Http\Controllers\RegistrarMedidor;
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
    return view('login.login');
});

//---------------- Parte del login------------------

Route::get('/login', function () {
    return view('login.login');
    })->name('login');

Route::get('/register',function(){
    return view('login.registrar');
    })->name('register');

Route::post(
    '/register',
     [ControladoDeRegistro::class , 'registrar']
     )->name('register');

Route::post('/login',
     [ControladoDeRegistro::class, 'entrar']
    )->name('login');

Route::post('/logout', 
    [ControladoDeRegistro::class, 'destroy']
)->name('logout');

//-------------- Parte del contenido---------------


// ----------Registrar------------

Route::get(
    '/registrar',
    [ControladorTareas::class, 'create']
    )->name('afiliados.crearAfiliado');

Route::post(
    '/registrar',
    [ControladorTareas::class, 'store']
    )->name('afiliados.guardar');

// -------------Ver------------

Route::get(
    '/registrar/mostrar',
    [ControladorTareas::class, 'index']
    )->name('afiliados.mostrar');

// ---------------Registrar medidor-----------

Route::get(
    '/registrar/medidor',
    [RegistrarMedidor::class, 'index']
    )->name('medidores.crear');

// Route::post(
//     '/registrar',
//     [ControladorTareas::class, 'store']
//     )->name('afiliados.guardar');
