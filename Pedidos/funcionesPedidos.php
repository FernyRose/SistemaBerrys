<?php
session_start();
    include "../Conexion/conexion.php";
    $fechaActual = date('d-m-Y');
    $idCliente=$_SESSION["idcliente"];
    $importe=$_POST["txtTotal"];
    $status="Realizado";
    if(isset($_POST["txtDir"])){
        $estado=$_POST["comboEstado"];
        $ciudad=$_POST["comboCiudad"];
        $direccion=$_POST["txtDir"];
        $cp=$_POST["txtCp"];
        $dirCompleta=$estado." ".$ciudad." ".$cp." ".$direccion;
        $r="INSERT INTO pedidos(idcliente,fechapedido,importe,Direccion,estado) VALUES($idCliente,'$fechaActual',$importe,'$dirCompleta','$status')";
        mysqli_query($enlace, $r);
        $id=mysqli_insert_id($enlace);
        for($i=0; $i<$_SESSION['n']; $i++){
            $idpre=$_SESSION["carrito"][$i][0];
            $cant=$_SESSION["carrito"][$i][1];
            $pre=$_SESSION["carrito"][$i][2];
            $r="INSERT INTO detallepedido(idpedido,idpresentacion,cantidad,precio) VALUES($id,$idpre,$cant,$pre)";
            mysqli_query($enlace, $r);
            $r="UPDATE presentaciones SET existencias=existencias-$cant WHERE idpresentacion=$idpre";
            mysqli_query($enlace, $r);
        }
        unset($_SESSION["carrito"]);
        unset($_SESSION["carrito2"]);
        unset($_SESSION["n"]);
        unset($_SESSION["n2"]);
    }
    else{
        $dirCompleta="".$_SESSION["estado"]." ".$_SESSION["ciudad"]." ".$_SESSION["cp"]." ".$_SESSION["direccion"]."";
        $r="INSERT INTO pedidos(idcliente,fechapedido,importe,Direccion,estado) VALUES($idCliente,'$fechaActual',$importe,'$dirCompleta','$status')";
        mysqli_query($enlace, $r);
        echo mysqli_error($enlace);
        $id=mysqli_insert_id($enlace);
        for($i=0; $i<$_SESSION['n']; $i++){
            $idpre=$_SESSION["carrito"][$i][0];
            $cant=$_SESSION["carrito"][$i][1];
            $pre=$_SESSION["carrito"][$i][2];
            $r="INSERT INTO detallepedido(idpedido,idpresentacion,cantidad,precio) VALUES($id,$idpre,$cant,$pre)";
            mysqli_query($enlace, $r);
            $r="UPDATE presentaciones SET existencias=existencias-$cant WHERE idpresentacion=$idpre";
            mysqli_query($enlace, $r);
        }
        unset($_SESSION["carrito"]);
        unset($_SESSION["carrito2"]);
        unset($_SESSION["n"]);
        unset($_SESSION["n2"]);
    }
    header("location:pedidos3.php");
?>