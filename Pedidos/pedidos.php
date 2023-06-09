<!DOCTYPE html>
    <?php 
      $_SESSION['n']=0;
      $arreglo[][]=0;
      $_SESSION['carrito']=$arreglo;
      $_SESSION['n2']=0;
      $arreglo2[][]=0;
      $_SESSION['carrito2']=$arreglo2;
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    </style>
</head>
<body>

  <div
      class="p-0 text-center bg-image"
      style="
      background-image: url('../Imagenes/fondo2.jpg'); 
      background-size: cover;
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
                          <a class="nav-link text-light mx-3" href="#">Pedidos</a>
                          <a class="nav-link text-light mx-3" href="#">Productos</a>
                          <a class="nav-link text-light mx-3" href="#">Perfil</a>
                      </div>
                  </div>    
              </div>
        </nav>
    
    <div class="container-fluid2">
      <div class="login">

          
      <form class="row g-4 container-fluid" id="frm" method="POST" action="registrarCliente.php">
              <div class="col-md-4">
                <label for="inputId" class="form-label">idPedido</label>
                <input type="text" class="form-control" id="inputId" name="nombre" maxlength="20" required>
              </div>
              <div class="col-md-4">
                <label for="inFruta" class="form-label">Frutas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <select name="inFruta" id="inFruta">
                  
                  
                </select>
              </div>
              <div class="col-md-4">
              <label for="inEsp" class="form-label">Especificaciones</label>
                <select name="inEsp" id="inEsp">
                  
                  
                </select>
              </div>
              <div class="col-md-4">
              <label for="inPre" class="form-label">Presentacion</label>
                <select name="inPre" id="inPre">
                  
                  
                </select>
              </div>
              <div class="col-md-4">
                <label for="inputDes" class="form-label">Precio</label>
                <input type="text" class="form-control" id="inPrecio" name="ciudad" maxlength="50" required>
              </div>
              <div class="col-md-4">
                <label for="inCant" class="form-label">Cantidad</label>
                <select name="inCant" id="inCant">
                  <option value="1">1 (uno)</option>
                  <option value="2">2 (dos)</option>
                  <option value="3">3 (tres)</option>
                  <option value="4">4 (cuatro)</option>
                  <option value="5">5 (cinco)</option>
                </select>
              </div>
              <div class="col-md-4">
                <label for="inImporte" class="form-label">Importe</label>
                <input type="text" class="form-control" id="inImporte" maxlength="50" required value="0">
              </div>
              <div class="col-12">
                <button type="button" id="btnAgregar" class="btn btn-danger" onclick="" name="Agregar">Agregar a la lista</button>
              </div>
            </form>
            <form action="">
              <div class="col-md-4">
                <table>
                  <tr>
                      <th>Fruta</th>
                      <th>Especificacion</th>
                      <th>Presentacion</th>
                      <th>Precio</th>
                      <th>Cantidad</th>
                      <th>Importe</th>
                  </tr>
                  <tbody id="addPedido">

                  </tbody>
                </table> 
                <button type="button" id="btnGuardar" class="btn btn-success" onclick="" name="Guardar">Guardar</button>
              </div>
      </form>
      </div>
      </div>
    </div>  
  
</body>
<script type="text/javascript" src="../Jquery/jquery-3.6.4.min.js"></script>
<script type="text/javascript" src="metodosPedidos.js"></script>
</html>