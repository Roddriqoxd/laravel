<?php

namespace App\Http\Controllers;

use App\Models\Afiliados;
use Illuminate\Http\Request;

class ControladorTareas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Afiliados::orderByDesc('id')->get();
        $parametros = [
            'datos' => $datos
        ];
        return view('afiliados.mostrar', $parametros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('afiliados.crearAfiliado');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = $request->validate(
            [
                'nombre' => 'required|max:60',
                'apellido_p' => 'required|max:60',
                'apellido_m' => 'required|max:60',
                'celular' => 'required',
                'fecha_registro' => 'nullable',
                'cod_medidor'  => 'required',
                'num_casa'  => 'required',
                'direccion'  => 'required'
            ]
            );

                $registrar = Afiliados::create($datos);
                return redirect()->route('afiliados.mostrar');
                // return view('afiliados.mostrar');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Afiliados  $afiliados
     * @return \Illuminate\Http\Response
     */
    public function show(Afiliados $afiliados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Afiliados  $afiliados
     * @return \Illuminate\Http\Response
     */
    public function edit(Afiliados $afiliados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Afiliados  $afiliados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Afiliados $afiliados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Afiliados  $afiliados
     * @return \Illuminate\Http\Response
     */
    public function destroy(Afiliados $afiliados)
    {
        //
    }
}
