<?php
    include "../Conexion/conexion.php";
    $id=$_POST["txtId"];
    $r="UPDATE pedidos SET estado='Entregado' WHERE idpedido=$id";
    mysqli_query($enlace,$r);
    header("location:pedidosEnviados.php");
?>