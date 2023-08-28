<?php
    session_start();
    if(isset($_POST["txtIndice"])){
        $indice=$_POST["txtIndice"];
        $cant=$_POST["txtCant"];
        if($cant==""){
            echo"<script>alert('El campo cantidad tiene que ser un valor positivo no nulo')</script>";
            header("location:".$_SERVER["HTTP_REFERER"]."");
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