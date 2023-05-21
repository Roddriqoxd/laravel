<?php

namespace App\Http\Controllers;

use App\Models\Medidor;
use Illuminate\Http\Request;

class RegistrarMedidor extends Controller
{
    public function index(){

        return view('medidores.crearMedidor');

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
