<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Datatables-1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="./main.scss">
    <script src="../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../Imagenes/tecnm.png">
    <title>Sesion</title>
    <style>
        .navbar-brand{
            width: 98vw;
            position: absolute;
            top: 0;
        }
        .navbar{
            text-shadow: #a4232c;
      }
      .navbar-brand img{
        display: block;
        margin: auto;
      }
      .container-fluid2{
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 10px;
      }
      .login{
        
        width: 560px;
        height: min-content;
        align-items: center;
        justify-content: center;
        padding: 20px;
        border-radius: 12px;
        background: #ffffff;
      }
      .login h1{
        font-size: 32px;
        margin-bottom: 25px;
        font: Arial;;
      }
      .login form{
        font-size: 18px;
      }
      .login form input{
        font-size: 15px;
        margin-top: 15px;
        max-width: auto;
      }
      .subtitulo{
        border-bottom: 0.1em solid #464649;
      }
    </style>
</head>
<body>
  <?php
          include "../Layouts/nav.php";
  ?>
    <div class="container-fluid2 mt-5">
        <div class="login shadow-lg">
        <h1 class="text-center text-primary p-1 subtitulo">Iniciar Sesion</h1>
        <form class="row g-2" id="frm" method="POST" action="registrarCliente.php">
                <div class="col-12 p-2">
                  <label for="inputDes" class="form-label">Correo</label>
                  <input type="text" class="form-control" id="inputDes" name="correo" maxlength="50" required>
                </div>
                <div class="col-12 p-2">
                  <label for="inputDes" class="form-label">Contraseña</label>
                  <input type="password" class="form-control" id="inputDes" name="contrasena" maxlength="50" required>
                </div>
                <div class="col-12 p-3">
                  <button type="submit" class="btn btn-success w-100" onclick="" name="Registrar">Registrar</button>
                </div>
        </form>
      </div> 
    </div>     
</body>
</html>