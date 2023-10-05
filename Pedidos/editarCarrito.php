<?php
    session_start();
    include "../Conexion/conexion.php";
    $r="SELECT existencias FROM presentaciones WHERE idpresentacion=";

    if(isset($_POST["txtIndice"])){
        $indice=$_POST["txtIndice"];
        $cant=$_POST["txtCant"];
        if($cant=="" || $cant<1){
            echo"<script>alert('El campo cantidad tiene que ser un valor positivo no nulo');
            location.href='verCarrito.php';</script>";
            //header("location:".$_SERVER["HTTP_REFERER"]."");
            exit();
        }
        if($cant>$_SESSION["carrito2"][$indice][7]){
            echo"<script>alert('La cantidad es mayor a las existencias'); 
            location.href='verCarrito.php';</script>";
            //header("location:".$_SERVER["HTTP_REFERER"]."");
            exit();
        }
        $_SESSION["carrito2"][$indice][4]=$cant;
    }
    else if(isset($_POST["txtIndice2"])){
        $indice=$_POST["txtIndice2"];
        unset($_SESSION["carrito2"][$indice]);
        unset($_SESSION["carrito"][$indice]);
        $_SESSION["carrito2"]=array_values($_SESSION["carrito2"]);
        $_SESSION["carrito"]=array_values($_SESSION["carrito"]);
        --$_SESSION["n2"];
        --$_SESSION["n"];

    }
    header("location:".$_SERVER["HTTP_REFERER"]."");
?>