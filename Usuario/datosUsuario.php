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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./main.scss">
    <title>Usuario</title>
    <style>
      body{
          font-family: 'Inter', sans-serif !important;
        }
        .subtitulo{
        border-bottom: 0.2em solid #F3C577;
        }
    </style>
</head>
  
<body class="">
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
      <div class="row-10 d-flex flex-row align-items-center justify-content-center">
        <div class="col-11 shadow-sm d-flex flex-row align-items-center justify-content-center">
          <div class="col-10 pb-3 ">
            <div class="col-3  subtitulo">
                <h2>Datos del Usuario</h2>
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
        </div>    
      </div>  
    </div>
</body>           
<footer class="fixed-bottom">
  
    <?php

        include "../Layouts/footer.php";
    ?>   
</footer>    


<script type="text/javascript" src="../Jquery/jquery-3.6.4.min.js"></script>
<script type="text/javascript" src="dataCliente.js"></script>
<script src="../DataTables/datatables.min.js"></script>
<script type="text/javascript" src="../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>

</html>