<?php
    include "../Conexion/conexion.php";
    $id=$_POST["txtId"];
    $r="UPDATE pedidos SET estado='Surtido' WHERE idpedido=$id";
    mysqli_query($enlace,$r);
    header("location:consultaPedidos.php");
?>