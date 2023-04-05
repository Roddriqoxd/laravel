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
        overflow: auto;
      }
      .content-cabecera{
        padding-bottom: 10px;
        height: 10%;
      }
      .content-form{
        padding-left: 20%;
        padding-right: 20%;
        padding-top: 5%;
        width: 100%;
        height: 90%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        overflow: auto;
        background-color: #e1e1e1;
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
      .inputContainer {
          position: relative;
          height: 45px;
          width: 100%;
          margin-bottom: 17px;
        }
        .input {
          position: absolute;
          top: 0px;
          left: 0px;
          height: 100%;
          width: 100%;
          border: 1px solid #000000af;
          border-radius: 2px;
          font-size: 16px;
          padding: 0 20px;
          outline: none;
          background: none;
          z-index: 1;
        }
        ::placeholder {
          color: transparent;
        }
        .label {
          position: absolute;
          top: 15px;
          left: 15px;
          padding: 0 4px;
          background-color: white;
          color: #636363;
          font-size: 16px;
          transition: 0.5s;
          z-index: 0;
        }
        .submitBtn {
          display: block;
          margin: auto;
          padding: 15px 30px;
          border: none;
          background-color: #3863a3;
          color: white;
          border-radius: 6px;
          cursor: pointer;
          font-size: 16px;
        }

        .submitBtn:hover {
          background-color: #3863a3;
          transform: translateY(-2px);
        }
        .input:focus + .label {
          top: -7px;
          left: 3px;
          z-index: 10;
          font-size: 14px;
          font-weight: 600;
          color: #3863a3;
        }
        .input:focus {
        border: 2px solid #3863a3;
        }
      .input:not(:placeholder-shown)+ .label {
        top: -7px;
        left: 3px;
        z-index: 10;
        font-size: 14px;
        font-weight: 600;
      }
      .double-content{
        display: flex;
        width: 100%;
        gap: 20px;
      }
      .message-error{
        display: flex;
        flex-direction: column;
        padding: 20px;
        width: 90%;
      }
      .cabecera-title{
        font-weight: bold;
      }
      .modal-body{
        display: flex;
        flex-direction: column;
        gap: 5px;
      }
    </style>
    <section class="container-content">

      <section class="content-cabecera">
        <h3 class="cabecera-title">Registrar nuevo usuario</h3>
      </section>

      
      {{-- <section class="content-form"> --}}
        
        <form class="form-data" action="{{ route('afiliados.guardar') }}" method="POST">
          @csrf
          {{-- <div class="inputContainer">
            <input type="text" class="input" placeholder="a" name="nombre" value="{{ old('nombre') }}">
            <label for="" class="label">Nombre</label>
          </div>

          <section class="double-content">
            <div class="inputContainer">
              <input type="text" class="input" placeholder="a" name="apellido_p" value="{{ old('apellido_p') }}">
              <label for="" class="label">Apellido paterno</label>
            </div>

            <div class="inputContainer">
              <input type="text" class="input" placeholder="a" name="apellido_m" value="{{ old('apellido_m') }}">
              <label for="" class="label">Apellido materno</label>
            </div>
          </section>

          <section class="double-content">
            <div class="inputContainer">
              <input type="tel" name="celular" class="input" placeholder="a">
              <label for="" class="label">Telefono/Celular</label>
            </div>

            <div class="inputContainer">
              <input type="date" name="fecha_registro" class="input" placeholder="a">
              <label for="" class="label">Fecha de registro</label>
            </div>
          </section>

          <div class="inputContainer">
            <input type="text" name="direccion" class="input" placeholder="a">
            <label for="" class="label">Direccion</label>
          </div>

          <section class="double-content">
            <div class="inputContainer">
              <input type="text" name="num_casa" class="input" placeholder="a">
              <label for="" class="label">Nro Casa</label>
            </div>

            <div class="inputContainer">
              <input type="text" class="input" name="cod_medidor" placeholder="a">
              <label for="" class="label">Codigo de medidor</label>
            </div>
          </section>

          <section class="double-content">
            <input type="submit" class="submitBtn" value="Registrar">
          </section> --}}
          
          <div class="modal-body">

            <div class="form-floating mb-3">
              <input autofocus type="text" class="form-control rounded-0 " name="nombre" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Nombre completo</label>
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

              <div class="form-floating mb-3 col-md-6">
                <input type="date" class="form-control rounded-0" name="fecha_registro" id="floatingInput" placeholder="name@example.com">
                <label class="px-4" for="floatingInput">Fecha de ingreso</label>
              </div>

            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-0" name="direccion" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Dirección</label>
            </div>   

            <div class="row">

              <div class="form-floating mb-3 col-md-6">
                <input type="text" class="form-control rounded-0" name="num_casa" id="floatingInput" placeholder="name@example.com">
                <label class="px-4" for="floatingInput">Nro. Casa</label>
              </div>

              <div class="form-floating mb-3 col-md-6">
                <input type="text" class="form-control rounded-0" name="cod_medidor" id="floatingInput" placeholder="name@example.com">
                <label class="px-4" for="floatingInput">Codigo de medidor</label>
              </div>

            </div>

          </div>
          <div class="modal-footer rounded-0">
            <button data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" type="button" onclick="submit()" class="btn btn-primary">Añadir</button>
            <script>
              submit(){
                document.getElementById('form').submit();
                document.getElementById('añadir').click();
              }
            </script>
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