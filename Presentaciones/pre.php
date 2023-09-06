<?php
    include "../Conexion/conexion.php";
    $directorio="imagenes/";
    $archivo=$directorio.basename($_FILES["img"]["name"]);
    $ext=strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
    if($ext=="jpg" || $ext=="png" || $ext=="jpeg"){
        $idfruta=$_POST['comboFruta'];
        $idespe=$_POST['comboEspe'];
        $nombre=$_POST['inNom'];
        $precio=$_POST['inPre'];
        $exi=$_POST['inEx'];
        $nom=basename($_FILES["img"]["name"]);
        if(move_uploaded_file($_FILES["img"]["tmp_name"], $archivo)){
            $r="INSERT INTO presentaciones(idfruta,idespecificacion,nombrePresentacion,precio,existencias,img) 
            values($idfruta,$idespe,'$nombre',$precio,$exi,'$nom')";
            mysqli_query($enlace,$r);
            mysqli_close($enlace);
        }
        else{
            echo("<script>alert('Error al subir el archivo');</script>");
        }
    }
    else{
        echo("<script>alert('El tipo de archivo seleccionado no es compatible'); 
        location.href='registrarPre.php';</script>");
    }
?>