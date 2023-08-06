<?php
    include "Conexion/conexion.php";
    session_start();
    $usuario=$_POST["correo"];
    $contrasena=$_POST["contrasena"];
    $query="SELECT * FROM clientes AS c WHERE c.correo='$usuario' AND c.password='$contrasena'";
    $comando=mysqli_query($enlace ,$query);
    $cliente=mysqli_fetch_array($comando);

    if($cliente!=NULL){
        $usuario="cliente";
        $_SESSION["usuario"]=$usuario;
        $_SESSION["idcliente"]=$cliente[0];
        $_SESSION["nombre"]=$cliente[1];
        $_SESSION["direccion"]=$cliente[2];
        $_SESSION["cp"]=$cliente[3];
        $_SESSION["ciudad"]=$cliente[4];
        $_SESSION["estado"]=$cliente[5];
        $_SESSION["tel"]=$cliente[6];
        $_SESSION["telp"]=$cliente[7];
        $_SESSION["correo"]=$cliente[8];
        $_SESSION["as"]=$cliente[9];
        $_SESSION["contra"]=$contrasena;

        header("location:index.php");
    }
    else{
        $query="SELECT * FROM administradores AS a WHERE a.nombre='$usuario' AND a.contrasena='$contrasena'";
        $comando=mysqli_query($enlace ,$query);
        $cliente=mysqli_fetch_array($comando);
        if($cliente!=NULL){
            $usuario="admin";
            $_SESSION["idadmin"]=$cliente[0];
            $_SESSION["nombre"]=$cliente[1];
            $_SESSION["usuario"]=$usuario;
            $_SESSION["contra"]=$contrasena;

            header("location:index.php");
        }
        else{
            echo "<script>alert('El usuario o contrasena son incorrectos');
                location.href='InicioSesion/iniciosesion.php';
                </script>";
        }
    }
?>