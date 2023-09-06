<?php
include "../Conexion/conexion.php";
    $id=$_POST["txtid"];
    $r="SELECT pe.idpedido, f.nombre, p.nombrePresentacion, e.calibre, e.calidad, pe.cantidad, p.precio FROM 
      detallepedido AS pe INNER JOIN presentaciones AS p ON pe.idpresentacion = p.idpresentacion 
      inner join especificaciones AS e ON e.idespecificacion=p.idespecificacion inner join 
      fruta AS f ON f.idfruta = p.idfruta where pe.idpedido=".$id;
      $comando=mysqli_query($enlace,$r);
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
    </style>
</head>
<?php 
      if(isset($_SESSION["usuario"])){
        if($_SESSION["usuario"]=="admin"){
          include "../Layouts/nav.php";
        } 
      }
      else{
        include "../Layouts/nav2.php";
      }
?>
  
    <div class="container-fluid">
      <br>
      <div class="row-10 d-flex flex-row align-items-center justify-content-center">
        <div class="row">
        <h3>Detalle del pedido</h3>
            <div class="col-12">
            <table id="tablaPedidos" class="table table-striped">
            <tr>
                <th>idPedido</th>
                <th>Fruta</th>
                <th>Presentacion</th>
                <th>Calibre</th>
                <th>Calidad</th>
                <th>Cantidad</th>
                <th>Precio</th>
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
                    <td><?php echo $row[6];?></td>
            </tr>
                <?php
                    }   
                ?>      
            </table> 
            </div>
            <div class="col-12">
                <h3>Estado del pedido</h3>
                <div class="col">
                    <p>El pedido ah sido realizado y enviado al equipo de selectos del sur para ser surtido</p>
                </div>
            </div>
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
<script type="text/javascript" src="dataCliente.js"></script>
<script src="../DataTables/datatables.min.js"></script>
<script type="text/javascript" src="../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>

</html>