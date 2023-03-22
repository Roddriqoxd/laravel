<?php

namespace App\Http\Controllers;

use App\Http\Requests\PedidoDeRegistro;
use App\Models\Afiliados;
use App\Models\User;
use Illuminate\Http\Request;

class ControladoDeRegistro extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Afiliados  $afiliados
     * @return \Illuminate\Http\Response
     */
    public function show(Afiliados $afiliados)
    {
        return view('login.registrar');
    }

    public function registrar(PedidoDeRegistro $request)
    {
        

        $user = User::create( $request -> validate());
        return view('login.login');
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
