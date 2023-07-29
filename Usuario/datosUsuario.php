<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link href="../DataTables/datatables.min.css" rel="stylesheet"/>
    <script src="https://kit.fontawesome.com/53b117a021.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./main.scss">
    <title>Usuario</title>
</head>
<body class="body bg-light">
<?php 
      if($_SESSION["usuario"]=="admin"){
        include "../Layouts/nav.php";
      }
      else{
        include "../Layouts/nav2.php";
      }
?>
      
  <div class="container-fluid">
    <br>
    <div class="container">
        <h3>Datos del Usuario</h3>
    </div>
    <br>
    <div class="row">
        <?php
            if($_SESSION["usuario"]=="admin"){
                include "admin.php";
            }
            else{
                include "cliente.php";
            }
        ?>
    </div>
  </div>       
</body>
<script type="text/javascript" src="../Jquery/jquery-3.6.4.min.js"></script>
<script type="text/javascript" src="metodosFruta.js"></script>
<script src="../DataTables/datatables.min.js"></script>
<script type="text/javascript" src="../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</html>