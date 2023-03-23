<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/atlasian.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/189cbc8fac.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <style>

      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200&display=swap');
      
      body{
        display: flex;
        flex-direction: row;
        font-family: 'Poppins', sans-serif; 
      }
      .container-nav{
        background-color: #3863a3;
        width: 15%;
        height: 100vh;
        box-shadow: 0 10px 25px rgba(92, 99, 105, .2);
        padding: 30px;
      }
      .gg-atlasian{
        color: white;
        font-size: 20px;
      }
      .nav-logo{
        display: flex;
        padding: 10px;
        gap: 10px;
        color: white;
      }
      .container-ruters{
        display: flex;
        flex-direction: column;
        height: 80%;
        justify-content: space-around;
        padding-top: 20px;
      }
      .routes-content{
        color: white;
        gap: 10px;
      }
      .fas{
        padding-right: 8px;
        color: #5683c7
      }
      .btn-routes{
        text-decoration: none;
        color: white;
      }
      .submitBtn{
        
      }
    </style>

    <nav class="container-nav">

      <section class="nav-logo">
        <i class="gg-atlasian"></i>
      <label for="">OTB PATITAS</label>
      </section>

      <section class="container-ruters">

        <section class="routes-content">
          <i class="fas fa-user"></i>
        <a class="btn-routes" href="{{ route('afiliados.mostrar') }}">Afiliados</a>
        </section>     
        
        <section class="routes-content">
          <i class="fas fa-user"></i>
        <a class="btn-routes" href="{{ route('afiliados.crearAfiliado') }}">Registrar</a>
        </section>     

        <section class="routes-content">
          <i class="fas fa-user"></i>
        <a class="btn-routes" href="">Registrar</a>
        </section>

      </section>  
      @auth
      <section class="routes-content">
        <label for="">{{ Auth::user()->name }}</label>
        <form action="{{ route('logout') }}" method="POST">
          @csrf
          <input type="submit" class="btn-link" value="Salir">
        </form>
        </section>
      @endauth

    </nav>

    @yield('contenido')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
  </html>