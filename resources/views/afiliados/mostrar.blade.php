@extends('vistaPadre.index')

@section("title","Registar")

@section("contenido")
    <style>
      .container-content{
        display: flex;
        flex-direction: column;
        width: 85%;
        padding: 20px;
        height: 100vh;
      }
      .content-cabecera{
        display: flex;
        padding-bottom: 10px;
        height: 10%;
        justify-content: space-between;
      }
      .content-btn{
        padding-right: 3%;
      }
      .btn{
        background-color: #3863a3;
        color: white;
      }
      .btn:hover{
        background-color: #3863a3;
        color: white;
        font-weight: bold;
      }
      .content-form{
        padding-left: 1%;
        padding-right: 1%;
        width: 100%;
        height: 90%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
      }
      .table-container{
        border: 1px solid;
      }
      .title{
        color: black;
      }
      .table{
        background-color: white;
      }
      .modal{
        overflow: auto;
      }
      .cabecera-title{
        font-weight: bold;
      }
      .overflow{
        width: 200px;
      white-space: nowrap;
      text-overflow: ellipsis;
      overflow: hidden;
      }
    </style>
    
    @auth
  <section class="container-content">

      <section class="content-cabecera">
        <h3 class="cabecera-title">Afiliados</h3>
        
        <div class="content-btn">

            <button type="button" id="añadir" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Añadir+
            </button>

            <div class="modal fade rounded-0 " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-xl rounded-0">
                <form class="modal-content rounded-0" id="form" action="{{ route('afiliados.guardar') }}" method="POST">
                  @csrf
                  <div class="modal-header bg-primary-subtle rounded-0">
                    <h1 class="modal-title fs-5 " id="staticBackdropLabel">Añadir nuevo afiliado</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="nombre" id="floatingInput" placeholder="name@example.com">
                      <label for="floatingInput">Nombre completo</label>
                    </div>  

                    <div class="row">

                      <div class="form-floating mb-3 col-md-6">
                        <input type="text" class="form-control "  name="apellido_p" id="floatingInput" placeholder="name@example.com">
                        <label class="px-4" for="floatingInput">Apellido paterno</label>
                      </div>

                      <div class="form-floating mb-3 col-md-6">
                        <input type="text" class="form-control" name="apellido_m" id="floatingInput" placeholder="name@example.com">
                        <label class="px-4" for="floatingInput">Apellido materno</label>
                      </div>

                    </div>

                    <div class="row">

                      <div class="form-floating mb-3 col-md-6">
                        <input type="text" class="form-control " name="celular" id="floatingInput" placeholder="name@example.com">
                        <label class="px-4" for="floatingInput">Telefono / Celular</label>
                      </div>

                      <div class="form-floating mb-3 col-md-6">
                        <input type="date" class="form-control" name="fecha_registro" id="floatingInput" placeholder="name@example.com">
                        <label class="px-4" for="floatingInput">Fecha de ingreso</label>
                      </div>

                    </div>

                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="direccion" id="floatingInput" placeholder="name@example.com">
                      <label for="floatingInput">Dirección</label>
                    </div>   

                    <div class="row">

                      <div class="form-floating mb-3 col-md-6">
                        <input type="text" class="form-control " name="num_casa" id="floatingInput" placeholder="name@example.com">
                        <label class="px-4" for="floatingInput">Nro. Casa</label>
                      </div>

                      <div class="form-floating mb-3 col-md-6">
                        <input type="text" class="form-control" name="cod_medidor" id="floatingInput" placeholder="name@example.com">
                        <label class="px-4" for="floatingInput">Codigo de medidor</label>
                      </div>

                    </div>

                  </div>
                  <div class="modal-footer rounded-0">
                    <button type="button" class="btn btn-danger bg-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" onclick="submit()" class="btn btn-primary">Añadir</button>
                    <script>
                      submit(){
                        document.getElementById('form').submit();
                        document.getElementById('añadir').click();
                      }
                    </script>
                  </div>
                </form>
              </div>
            </div>

        </div>
      </section>
      
      <section class="content-form">

      <table class="table">
        <thead class="title">
          <tr>
            <th class="col">#</th>
            <th class="col">Nombre</th>
            <th class="col">Apellidos</th>
            <th class="col">Celular</th>
            <th class="col">Direccion</th>
            <th class="col">Nro. Casa</th>
            <th class="col">Editar</th>
          </tr>
        </thead>
        <tbody class="content">
          @foreach ( $datos as $dato )
          <tr>
            <td class="col">{{ $dato->id }}</td>
            <td class="col"><div class="overflow">{{ $dato->nombre }}</div></td>
            <td class="col"><div class="overflow">{{ $dato->apellido_p }} {{ $dato->apellido_m }}</div></td>
            <td class="col">{{ $dato->celular }}</td>
            <td class="col"><div class="overflow">{{ $dato->ubicacion }}</div></td>
            <td class="col">{{ $dato->num_casa }}</td>
            <td class="col">
              <button class="btn bg-warning">Ver</button>
              <button class="btn bg-success">Editar</button>
              <button class="btn bg-danger">Eliminar</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

    </section>

  </section>

@endsection
    @endauth


