<?php
    include "../Conexion/conexion.php";
    $nombre=$_POST['nombre'];
    $direccion=$_POST['direccion'];
    $cp=$_POST['cp'];
    $ciudad=$_POST['ciudad'];
    $estado=$_POST['estado'];
    $telp=$_POST['telp'];
    $tele=$_POST['tele'];
    $anos=$_POST['anos'];
    $correo=$_POST['correo'];
    $contrasena=$_POST['contrasena'];
    $comando="INSERT INTO clientes values('$nombre','$direccion',$cp,'$ciudad','$estado',$telp,$tele,$correo,'$anos','$contrasena')";
    mysqli_query($enlace, $comando);
    mysqli_close($enlace);
?>