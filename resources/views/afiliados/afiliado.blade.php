@extends('vistaPadre.index')

@section("title","Crear medidor")

@section("contenido")
    <style>
      .container-content{
        display: flex;
        flex-direction: column;
        width: 85%;
        padding: 20px;
        height: 100vh;
        overflow: auto;
      }
      .content-cabecera{
        padding-bottom: 10px;
        height: 10%;
      }

      .form-data{
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 100%;
        background-color: white;
        padding: 20px;
        border-radius: 5px;
      }

    </style>
    <section class="container-content">

      <section class="content-cabecera">
        <h3 class="cabecera-title">REGISTRAR AFILIADO</h3>
        <hr>
      </section>
        
      <form class="form-data" action="{{ route('afiliados.guardar') }}" method="POST">
        @csrf
        
        <div class="modal-body">

          <div class="form-floating mb-3">
            <input autofocus type="text" class="form-control rounded-0 " name="nombre" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Nombre(s)</label>
          </div>  

          <div class="row">

            <div class="form-floating mb-3 col-md-6">
              <input type="text" class="form-control rounded-0"  name="apellido_p" id="floatingInput" placeholder="name@example.com">
              <label class="px-4" for="floatingInput">Apellido paterno</label>
            </div>

            <div class="form-floating mb-3 col-md-6">
              <input type="text" class="form-control rounded-0" name="apellido_m" id="floatingInput" placeholder="name@example.com">
              <label class="px-4" for="floatingInput">Apellido materno</label>
            </div>

          </div>

          <div class="row">

            <div class="form-floating mb-3 col-md-6">
              <input type="text" class="form-control rounded-0" name="celular" id="floatingInput" placeholder="name@example.com">
              <label class="px-4" for="floatingInput">Telefono / Celular</label>
            </div>
            <?php $fcha = date("Y-m-d");?>
            <div class="form-floating mb-3 col-md-6">
              <input type="date" readonly class="form-control rounded-0" name="fecha_registro" value="" id="fechaActual">
              <label class="px-4" for="floatingInput">Fecha de ingreso</label>
            </div>

            <script>

                    window.onload = function(){
                      var fecha = new Date(); 
                      var mes = fecha.getMonth()+1; 
                      var dia = fecha.getDate(); 
                      var ano = fecha.getFullYear(); 
                      if(dia<10)
                        dia='0'+dia; 
                      if(mes<10)
                        mes='0'+mes 
                      document.getElementById('fechaActual').value=ano+"-"+mes+"-"+dia;
                    }

            </script>

          </div>

          <input type="hidden" name="cod_medidor" value="2">

          <div class="row">

            <div class="form-floating mb-3 col-md-6">
              <input type="text" class="form-control rounded-0" name="num_casa" id="floatingInput" placeholder="name@example.com">
              <label class="px-4" for="floatingInput">Nro. Casa</label>
            </div>

          </div>

        </div>
        <div class="modal-footer rounded-0">
          <button data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" type="submit" class="btn btn-primary">Añadir</button>
        </div>


    {{-- ENVIAR EL DATO CON JAVASCRIP --}}
        <section class="message-error">
          @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
        </section>
      </form>

      </section>

    </section>

@endsection