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
    $comando="INSERT INTO clientes (nombre,direccion,cp,ciudad,estado,telefonopersonal,telefonoprivado,correo,anosservicio,password) values('$nombre','$direccion',$cp,'$ciudad','$estado',$telp,$tele,'$correo',$anos,'$contrasena')";
    mysqli_query($enlace, $comando);
    //if(mysqli_query($enlace, $comando)){
    //    echo (mysqli_errno(mysqli_query($enlace,$comando)));
    //}
    mysqli_close($enlace);
?>