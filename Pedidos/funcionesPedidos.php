<?php
    include "../Conexion/conexion.php";
    $tipo=$_POST['tipo'];

    if($tipo=="loadFruta")
    {
        $r="SELECT precio FROM fruta WHERE idfruta=".$_POST['id'];
        $comando= mysqli_query($enlace, $r);
        $row=mysqli_fetch_array($comando);
        $frutaDat=array(
            'precio' => $row['precio']
        );
        $frutaDat=json_encode($frutaDat);
        echo $frutaDat;
    }
?>