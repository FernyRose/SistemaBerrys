<?php
    include "../Conexion/conexion.php";
    $tipo=$_POST['tipo'];
    if($tipo=="guardar")
    {
        $nom=$_POST['nombre'];
        $r="INSERT INTO fruta(nombre) values('$nom')";
        mysqli_query($enlace,$r);
        mysqli_close($enlace);
        echo"agrego";
    }
    if($tipo=="cargarTabla")
    {
        $r="SELECT * FROM fruta";
        $comando=mysqli_query($enlace,$r);
        while($row=mysqli_fetch_array($comando)){
            echo"
            <tr>
                <td class=''>".$row[0]."</td>
                <td class=''>".$row[1]."</td>
                <td class=''><button type='button' id='".$row[0]."' onclick='modalName(".$row[0].")' class='btn btn-success' data-btnNombre='".$row[1]."' data-btnid='".$row[0]."' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                Editar
                </button></td>
            </tr>
            ";
        }
    }
    if($tipo=="actualizar"){
        $id=$_POST["idfruta"];
        $nom=$_POST["nombre"];
        $r="UPDATE fruta SET nombre='$nom' WHERE idfruta='$id'";
        mysqli_query($enlace,$r);
    }
?>