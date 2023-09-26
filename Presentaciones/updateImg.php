<?php
    include "../Conexion/conexion.php";
    $nombre=$_POST["modalnombre"];
    $precio=$_POST["modalprecio"];
    $exi=$_POST["modalexi"];
    $idprese=$_POST["modalid"];
    $txtimg=$_POST["txtimg"];
    $directorio="imagenes/";
    $txtimg2=$directorio.$txtimg;
    $tempo=$_FILES["modalimg"]["tmp_name"];
    if(strlen($tempo)>0){
        
        $archivo=$directorio.basename($_FILES["modalimg"]["name"]);
        $ext=strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
        if($ext=="jpg" || $ext=="png" || $ext=="jpeg"){
            if(file_exists($txtimg2)){
                if(unlink($txtimg2)){
                    $nom=basename($_FILES["modalimg"]["name"]);
                    if(move_uploaded_file($_FILES["modalimg"]["tmp_name"], $archivo)){
                        $r="UPDATE presentaciones SET nombrePresentacion='$nombre', precio=$precio, existencias=$exi, img='$nom' WHERE idpresentacion=$idprese";
                        mysqli_query($enlace,$r);
                        mysqli_close($enlace);
                        echo("<script>alert('Cambios guardados correctamente'); 
                        location.href='registrarPre.php';</script>");
                    }
                    else{
                        echo("<script>alert('Error al subir la imagen'); 
                        location.href='registrarPre.php';</script>");
                    }
                }
                else{
                    echo("<script>alert('Error al actualizar la imagen'); 
                    location.href='registrarPre.php';</script>");
                }
            }else{
                $nom=basename($_FILES["modalimg"]["name"]);
                    if(move_uploaded_file($_FILES["modalimg"]["tmp_name"], $archivo)){
                        $r="UPDATE presentaciones SET nombrePresentacion='$nombre', precio=$precio, existencias=$exi, img='$nom' WHERE idpresentacion=$idprese";
                        mysqli_query($enlace,$r);
                        mysqli_close($enlace);
                        echo("<script>alert('cambios guardados correctamente'); 
                        location.href='registrarPre.php';</script>");
                    }
                    else{
                        echo("<script>alert('Error al subir la imagen'); 
                        location.href='registrarPre.php';</script>");
                    }
            }
        }
        else{
            echo("<script>alert('El tipo de archivo seleccionado no es compatible'); 
            </script>");
        }
    }
    else{
        $r="UPDATE presentaciones SET nombrePresentacion='$nombre', precio=$precio, existencias=$exi WHERE idpresentacion=$idprese";
        mysqli_query($enlace,$r);
        mysqli_close($enlace);
        echo("<script>alert('Cambios guardados correctamente');
        location.href='registrarPre.php';</script>");
    }
?>