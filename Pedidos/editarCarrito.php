<?php
    session_start();
    if(isset($_POST["txtIndice"])){
        $indice=$_POST["txtIndice"];
        $cant=$_POST["txtCant"];
        $_SESSION["carrito2"][$indice][4]=$cant;
    }
    else if(isset($_POST["txtIndice2"])){
        $indice=$_POST["txtIndice2"];
        unset($_SESSION["carrito2"][$indice]);
        $_SESSION["carrito2"]=array_values($_SESSION["carrito2"]);
        --$_SESSION["n2"];
    }
    header("location:".$_SERVER["HTTP_REFERER"]."");
?>