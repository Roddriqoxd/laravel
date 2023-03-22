@extends('vistaPadre.index')

@section("title","Registar")

@section("contenido")
    <style>
      .container-content{
        padding: 20px;
        width: 100%;
        height: 80vh;
      }
      .content-form{
        padding: 50px;
        width: 100%;
        height: 100%;
        padding-left: 11%;
        display: flex;
        flex-direction: column;
        justify-content: center;

      }
      .form-data{
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 20px;
      }
      .inputContainer {
          position: relative;
          height: 45px;
          width: 90%;
          margin-bottom: 17px;
        }
        .input {
          position: absolute;
          top: 0px;
          left: 0px;
          height: 100%;
          width: 100%;
          border: 1px solid #3863a3;
          border-radius: 7px;
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
          color: #68a5ff;
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
          margin-top: 30px;
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
        width: 90%;
        gap: 20px;
      }
      .message-error{
        display: flex;
        flex-direction: column;
        padding: 20px;
        width: 90%;
      }
    </style>
    <section class="container-content">
      <h2>Registrar nuevo usuario</h2>
      
      <section class="content-form">
        
        <form class="form-data" action="{{ route('afiliados.guardar') }}" method="POST">
          @csrf
          <div class="inputContainer">
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

          <input type="submit" class="submitBtn" value="Registrar">

        </form>
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
        
      </section>

    </section>

@endsection