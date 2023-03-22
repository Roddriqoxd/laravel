<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/atlasian.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200&display=swap');

        body{
            background-color: #3863a3;
            font-family: 'Poppins', sans-serif; 
        }
        .container-main{
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .signupFrm {
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
        }
        .form {
          background-color: white;
          width: 400px;
          padding: 20px 40px;
          box-shadow: 0 10px 25px rgba(92, 99, 105, .2);
          display: flex;
          justify-content: space-between;
          align-items: center;
          flex-direction: column;
        }

        .title {
          font-size: 25px;
          margin-bottom: 50px;
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
          color: #3863a3;
          font-size: 16px;
          transition: 0.5s;
          z-index: 0;
        }
        .submitBtn {
          display: block;
          margin: auto;
          padding: 10px 20px;
          border: none;
          background-color: #3863a3;
          color: white;
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

    </style>
  </head>
  <body>

    <section class="container-main">

        <div class="signupFrm">
            <form action="/register" method="POST" class="form">
                @csrf
              <i class="gg-atlasian"></i><label class="title">OTB patito</label>

              <div class="inputContainer">
                <input type="email" name="email" class="input" placeholder="a" required>
                <label for="" class="label">Email</label>
              </div>

              <div class="inputContainer">
                <input type="password" name="password" class="input" placeholder="a" required>
                <label for="" class="label">Passwrod</label>
              </div>

              <div class="inputContainer">
                <input type="password" class="input" name="password_confirmation" placeholder="a" required>
                <label for="" class="label">Confirmar password</label>
              </div>
        
              <input type="submit" class="submitBtn" value="Registrar">
            </form>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
