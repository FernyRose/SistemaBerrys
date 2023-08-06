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
    <div class="container-fluid">
        <div class="row">
        <div class="col-12">
            <h1>Nuestra Ubicacion</h1>
        </div>
            <div class="col" id="map" style="width:100%; height:500px;">
            
            </div>
        </div>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMyOsp5r4pG7Uh7gGRp6QonZU2P91cOeg&callback=iniciarMap"></script>
</body>
</html>