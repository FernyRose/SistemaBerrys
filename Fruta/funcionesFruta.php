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
            </tr>
            ";
        }
    }
?>