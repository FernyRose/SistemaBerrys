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
    <title>Document</title>
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

      <nav class="navbar navbar-expand-lg navbar-dark py-4">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../Imagenes/Logo.jpg"></a>
            <div class="collapse navbar-collapse m-x" id="top navbar">
              <div class="navbar-nav">
                <button type="button" class="btn btn-primary text-center">
                  Sign up
                </button>
              </div>
            </div>
        </div>
      </nav>
      <nav class="navbar navbar-expand-lg navbar-light py-1" style="background-color: #000000;">
          <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav m-auto  fs-3 text-dark">
                      <a class="nav-link active text-light mx-3" aria-current="page" href="#">Home</a>
                      <a class="nav-link text-light mx-3" href="#">Productos</a>
                      <a class="nav-link text-light mx-3" href="#">Hacer Pedido</a>
                      <a class="nav-link text-light mx-3" href="#">Quienes Somos</a>
                  </div>
              </div>    
          </div>
      </nav>
      
    <div class="container-fluid2 shadow-lg">  
      <div class="login">

        <form class="row g-4 container-fluid" id="frm" method="POST">
                <div class="col-md-5">
                  <label for="inputNom" class="form-label">Nombre</label>
                  <input type="text" placeholder="Nombre Fruta" class="form-control" id="inNom" name="nombre" maxlength="50" required>
                </div>
                  <button class="btn btn-primary" type="button" id="btnAgregar" class="btn btn-danger" onclick="" name="Registrar">Agregar a la lista</button>
                
        </form>
      
      <form action="">
        <div class="col-md-4 m-5">
                <table id="tablaPedidos" class="table table-bordered table-striped mb-0">
                  <thead>
                  <tr class="m-5">
                      <th>idFruta</th>
                      <th>Nombre</th>
                  </tr>    
                  </thead>
                  <tbody id="addfruta">
                  <tr>
                          <th>1</th>
                        </tr> 
                  </tbody>
                </table> 
                <button type="button" class="btn btn-success m-5" id="btnGuardar" onclick="" name="Registrar">Guardar</button>
        </div>
      </form>
      </div>
    </div>
    </div>    
</body>
<script type="text/javascript" src="../Jquery/jquery-3.6.4.min.js"></script>
<script type="text/javascript" src="metodosFruta.js"></script>
</html>