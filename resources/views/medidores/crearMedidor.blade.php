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
        <h3 class="cabecera-title">REGISTRAR MEDIDOR</h3>
        <hr>
      </section>
        
        <form class="form-data" action="{{ route('medidor.guardar') }}" method="POST">
          @csrf
          
          <div class="modal-body">

            <div class="form-floating mb-3">
              <input autofocus type="text" class="form-control rounded-0 " name="codigo">
              <label for="floatingInput">Codigo medidor</label>
            </div>

            <div class="row">

              <div class="form-floating mb-3 col-md-6">
                <input type="date" class="form-control rounded-0"  name="fecha" id="fecha" onchange="sumar()">
                <label class="px-4" for="floatingInput">Ultima fecha de pago</label>
              </div>

              <div class="form-floating mb-3 col-md-6">
                <input type="text" class="form-control rounded-0" name="deuda" id="deuda" value="" readonly>
                <label class="px-4" for="floatingInput">Deuda Bs.</label>
              </div>

              <input type="hidden" name="precio" value="1">

              <script>
                
                function sumar(){
                 
                  var fecha = document.getElementById('fecha').value;
                  var año = fecha.split('-')[0];
                  var mes = fecha.split('-')[1];
                  var mesActual = new Date().getMonth()+1;
                  var añoActual = new Date().getFullYear();
                  var deuda = deuda(parseInt(mes),parseInt(año), mesActual ,añoActual,)

                  function deuda(m1,a1,m2,a2){
                    if(a1 == a2){
                      return (m2-m1)*15;
                    }
                    if(a1<a2){
                      return ((12-m1)*15)+((image.png)*15);
                    }
                  }

                  document.getElementById('deuda').value = deuda;
                  console.log(fecha);
                  console.log(año);
                  console.log(deuda);
                }

               </script>

            </div>

            <div class="form-floating mb-3">
              <input autofocus type="text" class="form-control rounded-0 " name="ubicacion">
              <label for="floatingInput">Ubicación</label>
            </div> 

          </div>
          <div class="modal-footer rounded-0">
            <button type="submit" class="btn btn-primary">Siguiente</button>

          </div>

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