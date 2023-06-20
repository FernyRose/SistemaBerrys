<?php
    include "../Conexion/conexion.php";
    $tipo=$_POST['tipo'];
    if($tipo=="Registrar")
    {
        $idfruta=$_POST['idfruta'];
        $calibre=$_POST['calibre'];
        $calidad=$_POST['calidad'];
        $r="INSERT INTO especificaciones(idfruta,calibre,calidad) values($idfruta,'$calibre','$calidad')";
        mysqli_query($enlace,$r);
        mysqli_close($enlace);
    }
    if($tipo=="cargarTabla")
    {
        $r="SELECT e.idespecificacion, f.nombre, e.calibre, e.calidad FROM fruta AS f INNER JOIN especificaciones AS e ON f.idfruta=e.idfruta";
        $comando=mysqli_query($enlace,$r);
        while($row=mysqli_fetch_array($comando)){
            echo"
            <tr>
                <td class=''>".$row[0]."</td>
                <td class=''>".$row[1]."</td>
                <td class=''>".$row[2]."</td>
                <td class=''>".$row[3]."</td>
            </tr>
            ";
        }
    }
    if($tipo=="comboFrutas")
    {
        $r="SELECT * FROM fruta";
        $comando=mysqli_query($enlace,$r);
        while($row=mysqli_fetch_array($comando)){
            echo"
            <option value='".$row[0]."'>".$row[1]."</option>
            ";
        }
    }
?>