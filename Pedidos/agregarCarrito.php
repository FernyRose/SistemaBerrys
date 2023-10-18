<?php
    session_start();
    if(!isset($_SESSION['carrito'])){
        //carrito principal
        $_SESSION['n']=0;
        $arreglo[][]=0;
        $_SESSION['carrito']=$arreglo;

        //carrito secundario
        $_SESSION['n2']=0;
        $arreglo2[][]=0;
        $_SESSION['carrito2']=$arreglo;

        //variables de carrito principal
        $idPre=$_POST["txtIdpre"];
        $cantidad=$_POST["comboCant"];
        $precio=$_POST["txtPrecio"];

        //variables de carrito secundario
        $fruta=$_POST["txtFruta"];
        $calibre=$_POST["txtCalibre"];
        $calidad=$_POST["txtCalidad"];
        $nomPre=$_POST["txtNomPre"];
        $id=$idPre;
        $exi=$_POST["txtExi"];

        //llenado carrito principal
        $_SESSION['carrito'][$_SESSION['n']][0]=$idPre;
        $_SESSION['carrito'][$_SESSION['n']][1]=$cantidad;
        $_SESSION['carrito'][$_SESSION['n']][2]=$precio;
        ++$_SESSION['n'];

        //llenado carritto secundario
        $_SESSION['carrito2'][$_SESSION['n2']][0]=$nomPre;
        $_SESSION['carrito2'][$_SESSION['n2']][1]=$fruta;
        $_SESSION['carrito2'][$_SESSION['n2']][2]=$calibre;
        $_SESSION['carrito2'][$_SESSION['n2']][3]=$calidad;
        $_SESSION['carrito2'][$_SESSION['n2']][4]=$cantidad;
        $_SESSION['carrito2'][$_SESSION['n2']][5]=$precio;
        $_SESSION['carrito2'][$_SESSION['n2']][6]=$id;
        $_SESSION['carrito2'][$_SESSION['n2']][7]=$exi;
        ++$_SESSION['n2'];
    }
    else{
        //variables de carrito principal
        $idPre=$_POST["txtIdpre"];
        $cantidad=$_POST["comboCant"];
        $precio=$_POST["txtPrecio"];

        //variables de carrito secundario
        $fruta=$_POST["txtFruta"];
        $calibre=$_POST["txtCalibre"];
        $calidad=$_POST["txtCalidad"];
        $nomPre=$_POST["txtNomPre"];
        $id=$idPre;
        $exi=$_POST["txtExi"];

        //llenado carrito principal
        $_SESSION['carrito'][$_SESSION['n']][0]=$idPre;
        $_SESSION['carrito'][$_SESSION['n']][1]=$cantidad;
        $_SESSION['carrito'][$_SESSION['n']][2]=$precio;
        ++$_SESSION['n'];

        //llenado carritto secundario
        $_SESSION['carrito2'][$_SESSION['n2']][0]=$nomPre;
        $_SESSION['carrito2'][$_SESSION['n2']][1]=$fruta;
        $_SESSION['carrito2'][$_SESSION['n2']][2]=$calibre;
        $_SESSION['carrito2'][$_SESSION['n2']][3]=$calidad;
        $_SESSION['carrito2'][$_SESSION['n2']][4]=$cantidad;
        $_SESSION['carrito2'][$_SESSION['n2']][5]=$precio;
        $_SESSION['carrito2'][$_SESSION['n2']][6]=$id;
        $_SESSION['carrito2'][$_SESSION['n2']][7]=$exi;
        ++$_SESSION['n2'];
    }
    header("location:".$_SERVER["HTTP_REFERER"]."");
?>