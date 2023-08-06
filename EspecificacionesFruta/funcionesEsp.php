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
                <td class=''><button type='button' id='".$row[0]."' onclick='modalData(".$row[0].")' class='btn btn-success' data-calibre='".$row[2]."' data-calidad='".$row[3]."' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                Editar
                </button></td>
            </tr>
            ";
        }
    }
    if($tipo=="comboFrutas")
    {
        $r="SELECT * FROM fruta";
        $comando=mysqli_query($enlace,$r);
        echo "<option selected>Seleccione...</option>";
        while($row=mysqli_fetch_array($comando)){
            echo"
            <option value='".$row[0]."'>".$row[1]."</option>
            ";
        }
    }

    if($tipo=="actualizar"){
        $id=$_POST["idespe"];
        $calibre=$_POST["calibre"];
        $calidad=$_POST["calidad"];
        $r="UPDATE especificaciones SET calibre='$calibre', calidad='$calidad' WHERE idespecificacion='$id'";
        mysqli_query($enlace,$r);
    }
?>