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
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
    <style>
        .subtitulo{
            border-bottom: 0.2em solid #F3C577;
        }
    </style>
</head>
<body>
<?php
    include "../Layouts/nav.php";
?>    
    <div class="row pt-5">
        <div class="container-fluid col-10 p-5 shadow-lg">
            <div class="col-5  pb-2 subtitulo">  
                <h3>Pedidos por realizar</h3>
            </div>
            <div class="row pt-3 container-fluid g-3 mt-3">
                <table id="tablaPedidos" class="table table-bordered table-striped compact mb-0">
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
        </div>
    </div>    
</body>
<div class="pt-3">
    <?php
        include "../Layouts/footer.php";
    ?> 
</div>
<script type="text/javascript" src="../Jquery/jquery-3.6.4.min.js"></script>
<script type="text/javascript" src="metodosConsulta.js"></script>
<script src="../DataTables/datatables.min.js"></script>
<script type="text/javascript" src="../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</html>