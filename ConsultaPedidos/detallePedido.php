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
<style>
    .subtitulo{
        border-bottom: 0.1em solid #F3C577;
    }
    </style>
<body>
<?php
      include "../Layouts/nav.php";
      include "../Conexion/conexion.php";
      $idpedido=$_GET["id"];
      $r="SELECT pe.idpedido, f.nombre, p.nombrePresentacion, e.calibre, e.calidad, pe.cantidad FROM 
      detallepedido AS pe INNER JOIN presentaciones AS p ON pe.idpresentacion = p.idpresentacion 
      inner join especificaciones AS e ON e.idespecificacion=p.idespecificacion inner join 
      fruta AS f ON f.idfruta = p.idfruta where pe.idpedido=".$idpedido;
      $comando=mysqli_query($enlace,$r);
?>     
    <div class=" row">
       <div class="container-fluid col-11 shadow-lg p-4 g-3 mt-3 rounded-3">
            <div class="pb-2 ">
                <h3 class="col-2 display-8 subtitulo">Detalle del pedido</h3>  
            </div>        
                    
                    <div class="col-12">
                        <table id="tablaPedidos" class="table table-striped table-bordered table-hover">
                        <tr class="m-5">
                            <th>idPedido</th>
                            <th>Fruta</th>
                            <th>Presentacion</th>
                            <th>Calibre</th>
                            <th>Calidad</th>
                            <th>Cantidad</th>
                        </tr>
                        <tr>
                            <?php
                                while($row=mysqli_fetch_array($comando)){
                            ?>
                                <td class=""><?php echo $row[0];?></td>
                                <td><?php echo $row[1];?></td>
                                <td><?php echo $row[2];?></td>
                                <td><?php echo $row[3];?></td>
                                <td><?php echo $row[4];?></td>
                                <td><?php echo $row[5];?></td>
                        </tr>
                            <?php
                                }   
                            ?>      
                        </table> 
                    </div>   
                <div class="col-3">
                <button type="button" id="" class="btn btn-primary">Surtir Pedido</button>
                </div>
            
        </div>
    </div>        
</body>
<script type="text/javascript" src="../Jquery/jquery-3.6.4.min.js"></script>
<script type="text/javascript" src=""></script>
<script src="../DataTables/datatables.min.js"></script>
<script type="text/javascript" src="../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</html>