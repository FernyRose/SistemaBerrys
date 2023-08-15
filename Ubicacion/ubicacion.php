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
    <link rel="stylesheet" href="../Imagenes/tecnm.png">
    <title>Sesion</title>

    <style>
        .subtitulo{
        border-bottom: 0.1em solid #464649;
        
      }
      h1{
        font-family: 'Roboto', sans-serif !important;
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
<script>
        function iniciarMap(){
            var coord = {lat:19.699084,lng: -103.457284};
            var map = new google.maps.Map(document.getElementById('map'),{
            zoom: 16,
            center: coord
        });
        var marker = new google.maps.Marker({
        position: coord,
        map: map
        });
}
    </script>
    <div class="row-md-12 p-5">
        <div class=" d-flex flex-row align-items-center justify-content-center">
            <div class="container-fluid">
                <div class="row col-12">
                    <div class="col-4 pb-5">
                        <h1 class="subtitulo">Nuestra Ubicacion</h1>
                    </div>
                    <div class="col-12 shadow-lg" id="map" style="width:100%; height:450px;">
                        
                    </div>
                </div>
            </div>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMyOsp5r4pG7Uh7gGRp6QonZU2P91cOeg&callback=iniciarMap"></script>
        </div>
    </div>
    </body>
<div class="pt-3">
    <?php
        include "../Layouts/footer.php";
    ?> 
</div>
</html>