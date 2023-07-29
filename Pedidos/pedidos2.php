<!DOCTYPE html>
    <?php
    include "../Conexion/conexion.php";
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
  error_reporting(0);
  if($_SESSION["usuario"]=="admin"){
    include "../Layouts/nav.php";
  }
  else{
    include "../Layouts/nav2.php";
  }
  $r="SELECT p.nombrepresentacion, f.nombre, e.calibre, e.calidad, p.precio FROM presentaciones AS p INNER JOIN
  especificaciones AS e ON p.idespecificacion=e.idespecificacion INNER JOIN fruta AS f
  ON p.idfruta=f.idfruta";
   
?>
<body>
    <div class="container-fluid">
        <div class="row">
        <?php
            $comando= mysqli_query($enlace, $r);
            while($row=mysqli_fetch_array($comando)){
                $nombrePre=$row[0];
                $nombreFruta=$row[1];
                $calibre=$row[2];
                $calidad=$row[3];
                $precio=$row[4];
                $existencias; 
                echo"<div class='col'>
                <label for='img1' class='form-label'>".$nombrePre." ".$nombreFruta." ".$calibre." ".$calidad."</label>
                <img src='../Imagenes/LogoP.png' alt='' width='200' height='200' id='img1'>
                <span>$".$precio."</span>
                <button class='btn btn-success'>Agregar al carrito</button>
            </div>";
            }
        ?>
        </div>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>
</body>
<script type="text/javascript" src="../Jquery/jquery-3.6.4.min.js"></script>
<script type="text/javascript" src="metodosPedidos.js"></script>
</html>