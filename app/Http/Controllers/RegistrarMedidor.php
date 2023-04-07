<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrarMedidor extends Controller
{
    public function index(){

        return view('medidores.crearMedidor');

    }
}
