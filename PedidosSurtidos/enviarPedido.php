<?php
    include "../Conexion/conexion.php";
    $id=$_POST["txtId"];
    $r="UPDATE pedidos SET estado='Enviado' WHERE idpedido=$id";
    mysqli_query($enlace,$r);
    header("location:pedidosSurtidos.php");
?>