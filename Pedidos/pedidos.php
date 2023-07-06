<!DOCTYPE html>
    <?php
    session_start(); 
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
    <script src="https://kit.fontawesome.com/53b117a021.js" crossorigin="anonymous"></script>
    <title>Document</title>
    
    <style>
      .login{
        
        width: 690px;
        height: 89vh;
        padding: 20px;
        border-radius: 12px;
        background: #e6eaeb;
      }
      .login2{
        height: min-content;
        width: 690px;
        background: #ffffff;
        border-radius: 15px;
      }
    </style>

</head>


<?php
  include "../Layouts/nav.php";  
?>
<body>

  <div
      class="p-0 text-center bg-image"
      style="
      background-image: url('../Imagenes/fondo2.jpg'); 
      background-size: cover;
      min-height: 97.5vh;
      "
      >
    
      <div class="container-fluid2 row">
        <div class="col-6 login">
            <form class="row g-4 container-fluid mt-3" id="frm" method="POST" action="registrarCliente.php">
                  <h1>
                    Datos del Pedido
                  </h1>  
                  <div class="row">
                      <label for="inputId" class="form-label col-1">IdPedido</label>
                      <input type="text" placeholder="Id-Pedido" class="form-control form-control-sm col-2" id="inputId" name="nombre" maxlength="20" required>
                    </div>
                  |<div class="row m-5">
                        <div class="col-md-4">
                          <label for="inFruta" class="form-label row">Frutas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                          <select name="inFruta" id="inFruta">
                            
                            
                          </select>
                        </div>
                        <div class="col-md-4">
                          <label class="row" for="inConcepto" class="form-label center">Concepto</label>
                          <input class="mb-3" type="radio" name="concepto" id="inClanche">Clanche
                          <input class="mb-3" type="radio" name="concepto" id="inCaja">Caja
                        </div>
                    </div>
                    <div class="row">    
                        <div class="col-md-4">
                          <label for="inputDes" class="form-label">Cantidad</label>
                          <select name="cantidad" placeholder="Cantidad" id="inConcepto">
                            <option value="0" selected>Selecciona la Cantidad</option>
                          </select>
                        </div>
                        <div class="col-md-4">
                          <label for="inputDes" class="form-label">Precio</label>
                          <input type="text" class="form-control" placeholder="Precio $" id="inPrecio" name="ciudad" maxlength="50" required>
                        </div>
                        <div class="col-md-4">
                          <label for="inCant" class="form-label row">Cantidad</label>
                          <select name="inCant" id="inCant">
                            <option value="1">1 (uno)</option>
                            <option value="2">2 (dos)</option>
                            <option value="3">3 (tres)</option>
                            <option value="4">4 (cuatro)</option>
                            <option value="5">5 (cinco)</option>
                          </select>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                      <label for="inImporte" class="form-label">Importe</label>
                      <input type="text" class="form-control" id="inImporte" maxlength="50" required value="0">
                    </div>
                    <div class="col-12">
                      <button type="button" id="btnAgregar" class="btn btn-danger" onclick="" name="Agregar">Agregar a la lista</button>
                    </div>
                  </form>
        </div>
              <div class="shadow-lg col-sm-12 col-md-12 col-lg-12 login2 m-5"> 
                <form action="">
                  <div class="col-md rounded-5">
                    <table class="table table-bordered table-striped mb-0">
                      <thead>  
                        <tr>
                            <th>Fruta</th>
                            <th>Especificacion</th>
                            <th>Presentacion</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Importe</th>
                        </tr>
                      </thead>  
                      <tbody id="addPedido">
                        <tr>
                          <th>1</th>
                        </tr>
                        <tr>
                        <th>1</th>
                        </tr>
                        <tr>
                        <th>1</th>
                        </tr>
                        <tr>
                        <th>1</th>
                        </tr>
                        <tr>
                        <th>1</th>
                        </tr>
                        <tr>
                        <th>1</th>
                        </tr>
                      </tbody>
                    </table>
                    <div class="p-3">
                      <button type="button" id="btnGuardar" class="btn btn-success" onclick="" name="Guardar">Guardar</button>
                    </div>                   
                    </div>
                </form>
              </div>   
        
        
      </div>
  
</body>
<script type="text/javascript" src="../Jquery/jquery-3.6.4.min.js"></script>
<script type="text/javascript" src="metodosPedidos.js"></script>
</html>