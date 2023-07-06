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
</head>
<?php
  include "../Layouts/nav.php";  
?>
<body>
    <div class="container-fluid">
        <div class="row">
        <div class="col">
            <label for="img1" class="form-label">Box engasse</label>
            <img src="../Imagenes/LogoP.png" alt="" width="200" height="200" id="img1">
            <span>$250</span>
            <button class="btn btn-success">Agregar al carrito</button>
        </div>
        <div class="col">
            <span>Box engasse</span>
            <img src="../Imagenes/LogoP.png" alt="" width="200" height="200">
            <span>$250</span>
            <button class="btn btn-success">Agregar al carrito</button>
        </div>
        <div class="col">
            <span>Box engasse</span>
            <img src="../Imagenes/LogoP.png" alt="" width="200" height="200">
            <span>$250</span>
            <button class="btn btn-success">Agregar al carrito</button>
        </div>
        <div class="col">
            <span>Box engasse</span>
            <img src="../Imagenes/LogoP.png" alt="" width="200" height="200">
            <span>$250</span>
            <button class="btn btn-success">Agregar al carrito</button>
        </div>
        </div>
</div>
</body>
<script type="text/javascript" src="../Jquery/jquery-3.6.4.min.js"></script>
<script type="text/javascript" src="metodosPedidos.js"></script>
</html>