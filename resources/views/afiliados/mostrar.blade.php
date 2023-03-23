@extends('vistaPadre.index')

@section("title","Registar")

@section("contenido")
    <style>
      .container-content{
        display: flex;
        flex-direction: column;
        width: 70%;
        padding: 20px;
      }
    </style>
    
    @auth
    <section class="container-content">

      <label>Lista de afiliados</label>
    

      <table class="table">
        <thead>
          <tr>
            <th scope="hjcol">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Celular</th>
            <th scope="col">Direccion</th>
            <th scope="col">Numero de casa</th>
            <th scope="col">Editar</th>
          </tr>
        </thead>
        <tbody>
          @foreach ( $datos as $dato )
          <tr>
            <td scope="col">{{ $dato->id }}</td>
            <td scope="col">{{ $dato->nombre }}</td>
            <td scope="col">{{ $dato->apellido_p }} {{ $dato->apellido_m }}</td>
            <td scope="col">{{ $dato->celular }}</td>
            <td scope="col">{{ $dato->direccion }}</td>
            <td scope="col">{{ $dato->num_casa }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>

    </section>

@endsection
    @endauth


