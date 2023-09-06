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
    <script src="https://kit.fontawesome.com/53b117a021.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Imagenes/tecnm.png">
    <link rel="stylesheet" href="../style.css">
    <title>Sesion</title>
    <style>
        
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
        
        padding: 20px;
        border-radius: 12px;
        background: #f8f8ff;
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
      body{
          font-family: 'Inter', sans-serif !important;
        }
    </style>
</head>
<body>
  <?php
    session_start();
          error_reporting(0);
          if($_SESSION["usuario"]=="admin"){
            include "../Layouts/nav.php";
          }
          else{
            include "../Layouts/nav2.php";
          }
          
  ?>
  <div class="bg-image" 
    style="background-image: url('Imagenes/fondo5.jpg');
            height: 70vh">

    <div class="container-fluid2 mt-5">
        <div class="login shadow-lg">
        <h1 class="text-center text-primary p-1 subtitulo">Iniciar Sesion</h1>
        <form class="row g-2" id="frm" method="POST" action="../validarUsuario.php">
                <div class="col-12 p-2">
                  <label for="inputDes" class="form-label">Correo</label>
                  <input type="text" class="form-control" placeholder="Correo electrónico"  id="inputDes" name="correo" maxlength="50" required>
                </div>
                <div class="col-12 p-2">
                  <label for="inputDes" class="form-label">Contraseña</label>
                  <input type="password" class="form-control" placeholder="Contraseña"  id="inputDes" name="contrasena" maxlength="50" required>
                </div>
                  <div class="row-5 p-3">
                    <button type="submit" class="btn btn-primary w-100" onclick="" name="Registrar">Iniciar</button>
                  </div>
                  <div class="row-5 p-3 text-center">
                    <button type="button" class="btn btn-success w-100" onclick="cuenta()" name="Registrar">Crear cuenta</button>
                  </div>
        </form>
      </div> 
    </div>
    <script>
      function cuenta(){
        window.location.href="../Registro/registro.php";
      }
    </script>    
  </div>
</body>
<div class="pt-5">
  <?php
      include "../Layouts/footer.php";
  ?> 
</div>
</html>