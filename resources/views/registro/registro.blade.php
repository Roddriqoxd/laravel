@extends('vistaPadre.index')

@section("title","Registar")

@section("contenido")
    <style>
        
      .container-content{
        display: flex; flex-direction: column; width: 85%; padding: 20px; height: 100vh; overflow: auto;
      }

      .content-cabecera{
        padding-bottom: 10px; height: 10%;
      }

      .cabecera-title{
        font-weight: bold;
      }
/* --------Estilos del contenido principal----- */
      
       .content-body{
        width: 100%;
        height: 90%;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        overflow: auto;
      }

      .seleccion-tipo-registro{
        width: 250px;
        height: 400px;
        /* border: solid 1px #0b1423; */
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: center;
        text-decoration: none;
        color: rgb(17, 101, 122);
        background-color: #d0e1ff
      }
      .fa-solid{
        font-size: 200px;
      }

      .content-text{
        font-size: 30px;
        display: flex;
        justify-content: center;
      }

    </style>
    <section class="container-content">

      <section class="content-cabecera">
        <h3 class="cabecera-title">Registrar medidor</h3>
        <hr>
      </section>
      
        {{---------- contenido principal--------------}}

        <section class="content-body">
          @csrf
          
            <a href="{{ route( 'medidor.guardar') }}" class="seleccion-tipo-registro">
                <div class="content-img">
                    <i class="fa-solid fa-user"></i>
                </div>
                <label class="content-text" for="">Segundo <br> medidor</label>
            </a>
            <a href="{{ route( 'medidor.guardar') }}" class="seleccion-tipo-registro">
                <div class="content-img">
                    <i class="fa-solid fa-hand-holding-droplet"></i>
                </div>
                <label class="content-text" for="">Medidor y <br> afiliado</label>
            </a>
            <a href="" class="seleccion-tipo-registro">
                <div class="content-img">
                    <i class="fa-solid fa-faucet-drip"></i>
                </div>
                <label class="content-text" for="">Cambio de <br> nombre</label>
            </a>

        </section>

      </section>

    </section>

@endsection