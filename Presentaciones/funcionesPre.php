<?php
    include "../Conexion/conexion.php";
    $tipo=$_POST['tipo'];
    if($tipo=="Registrar")
    {
        $idfruta=$_POST['idfruta'];
        $idespe=$_POST['idespe'];
        $nombre=$_POST['nombre'];
        $precio=$_POST['precio'];
        $exi=$_POST['exi'];
        $r="INSERT INTO presentaciones(idfruta,idespecificacion,nombrePresentacion,precio,existencias) 
        values($idfruta,$idespe,'$nombre',$precio,$exi)";
        mysqli_query($enlace,$r);
        mysqli_close($enlace);
    }
    if($tipo=="cargarTabla")
    {
        $r="SELECT p.idpresentacion, p.nombrePresentacion, f.nombre, e.calibre, e.calidad, p.precio, p.existencias 
        FROM presentaciones AS p INNER JOIN especificaciones AS e ON p.idespecificacion=e.idespecificacion 
        INNER JOIN fruta AS f ON f.idfruta=e.idfruta";
        $comando=mysqli_query($enlace,$r);
        while($row=mysqli_fetch_array($comando)){
            echo"
            <tr>
                <td class='text-light'>".$row[0]."</td>
                <td class='text-light'>".$row[1]."</td>
                <td class='text-light'>".$row[2]."</td>
                <td class='text-light'>".$row[3]."</td>
                <td class='text-light'>".$row[4]."</td>
                <td class='text-light'>".$row[5]."</td>
                <td class='text-light'>".$row[6]."</td>
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
    if($tipo=="comboEspe")
    {
        $idfruta=$_POST['idfruta'];
        $r="SELECT idespecificacion FROM especificaciones WHERE idfruta=".$idfruta;
        $comando=mysqli_query($enlace,$r);
        echo"<option value=''>Seleccione...</option>";
        while($row=mysqli_fetch_array($comando)){
            echo"
            <option value='".$row[0]."'>".$row[0]."</option>
            ";
        }
    }
    if($tipo=="dataEspe")
    {
        $idespe=$_POST['idespe'];
        $r="SELECT calibre, calidad FROM especificaciones WHERE idespecificacion=$idespe";
        $comando=mysqli_query($enlace,$r);
        $row=mysqli_fetch_array($comando);
        $espeDat=array("calibre" => "$row[0]","calidad" => "$row[1]");
        $espeDat=json_encode($espeDat);
        echo $espeDat;
    }
?>