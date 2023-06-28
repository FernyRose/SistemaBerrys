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
    <title>Document</title>
    
</head>
<body>
<?php
      include "../Layouts/nav2.php";
?>    
    <div class="container-fluid">  
      <h3>Pedidos por realizar</h3>
    </div>
    <center>
    <div class="container-fluid g-3 mt-3">
    <table id="tablaPedidos" class="table table-striped">
        <thead>
        <tr>
            <th>idPedido</th>
            <th>idCliente</th>
            <th>Nombre Cliente</th>
            <th>Fecha Pedido</th>
            <th>Importe</th>
            <th>Opciones</th>
        </tr>
        </thead>
        <tbody id="addpedido">      
        </tbody>
    </table> 
    </div>
    </center>
</body>
<script type="text/javascript" src="../Jquery/jquery-3.6.4.min.js"></script>
<script type="text/javascript" src="metodosConsulta.js"></script>
<script src="../DataTables/datatables.min.js"></script>
</html>