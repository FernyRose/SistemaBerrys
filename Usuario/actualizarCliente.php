<?php
    session_start();
    include "../Conexion/conexion.php";
    $id=$_SESSION["idcliente"];
    $nombre=$_POST["txtNombre"];
    $direccion=$_POST["txtDir"];
    $estado=$_POST["txtEstado"];
    $ciudad=$_POST["txtCiudad"];
    $telefono=$_POST["txtTel"];
    $telefono2=$_POST["txtTelp"];
    $cp=$_POST["txtCp"];
    $correo=$_POST["txtCorreo"];
    $anos=$_POST["txtAs"];
    $r="UPDATE clientes SET nombre='$nombre', direccion='$direccion', cp=$cp, ciudad='$ciudad', estado='$estado',
    telefonopersonal='$telefono', telefonoprivado='$telefono2', correo='$correo', anosservicio='$anos' WHERE idcliente=$id";
    mysqli_query($enlace,$r);

        $_SESSION["nombre"]=$nombre;
        $_SESSION["direccion"]=$direccion;
        $_SESSION["cp"]=$cp;
        $_SESSION["ciudad"]=$ciudad;
        $_SESSION["estado"]=$estado;
        $_SESSION["tel"]=$telefono;
        $_SESSION["telp"]=$telefono2;
        $_SESSION["correo"]=$correo;
        $_SESSION["as"]=$anos;
    header("location:".$_SERVER["HTTP_REFERER"]."");
?>