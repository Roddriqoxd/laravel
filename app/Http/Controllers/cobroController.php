<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cobroController extends Controller
{
    public function index(){

        return view('cobro.');

    }
    public function create(Request $request){

        $datos = $request->validate(
            [
                'codigo' => 'required',
                'deuda' => 'required',
                'precio' => 'required',
                'ubicacion' => 'required',
            ]
            );
            $registrar = Medidor::create($datos);
            return redirect()->route('afiliados.afiliado');

    }
}
