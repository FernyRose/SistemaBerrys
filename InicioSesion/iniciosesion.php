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
        
        width: 760px;
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
    </style>
</head>
<body>
  <div
    class="p-0 text-center bg-image"
    style="
    background-image: url('../Imagenes/fondo2.jpg'); 
    backgorund-size: cover;
    min-height: 100vh;
    "
    >
    <nav class="navbar navbar-expand-lg navbar-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../Imagenes/tecnm.png"></a>
            <div class="collapse navbar-collapse m-x" id="top navbar">
              <div class="navbar-nav">
                <button type="button" class="btn btn-primary text-center">
                  Home
                </button>
              </div>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #4682B4">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav m-auto  fs-3 text-dark">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                    <a class="nav-link" href="#">Disabled</a>
                </div>
            </div>    
        </div>
    </nav>
    <div class="container-fluid2">
        <div class="login">
        <h1 class="text-center text-primary">Iniciar Sesion</h1>
        <form class="row g-2" id="frm" method="POST" action="registrarCliente.php">
                <div class="col-12">
                  <label for="inputDes" class="form-label">Correo</label>
                  <input type="text" class="form-control" id="inputDes" name="correo" maxlength="50" required>
                </div>
                <div class="col-12">
                  <label for="inputDes" class="form-label">Contraseña</label>
                  <input type="password" class="form-control" id="inputDes" name="contrasena" maxlength="50" required>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-success w-100" onclick="" name="Registrar">Registrar</button>
                </div>
        </form>
      </div> 
    </div>   
  </div>  
</body>
</html>