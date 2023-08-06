<?php
    include "../Conexion/conexion.php";
    $tipo=$_POST['tipo'];
    if($tipo=="Registrar")
    {
        $idfruta=$_POST['comboFruta'];
        $idespe=$_POST['comboEspe'];
        $nombre=$_POST['inNom'];
        $precio=$_POST['inPre'];
        $exi=$_POST['inExi'];
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
                <td class=''>".$row[0]."</td>
                <td class=''>".$row[1]."</td>
                <td class=''>".$row[2]."</td>
                <td class=''>".$row[3]."</td>
                <td class=''>".$row[4]."</td>
                <td class=''>".$row[5]."</td>
                <td class=''>".$row[6]."</td>
                <td class=''><button type='button' id='".$row[0]."' onclick='modalData(".$row[0].")' class='btn btn-success' data-nombre='".$row[1]."' data-precio='".$row[5]."' data-exi='".$row[6]."' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                Editar
                </button></td
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
    if($tipo=="comboEspe")
    {
        $idfruta=$_POST['idfruta'];
        $r="SELECT idespecificacion FROM especificaciones WHERE idfruta=".$idfruta;
        $comando=mysqli_query($enlace,$r);
        echo"<option selected>Seleccione...</option>";
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
    if($tipo=="actualizar"){
        $nombre=$_POST["nombre"];
        $precio=$_POST["precio"];
        $exi=$_POST["exi"];
        $idprese=$_POST["idprese"];
        $r="UPDATE presentaciones SET nombrePresentacion='$nombre', precio=$precio, existencias=$exi WHERE idpresentacion=$idprese";
        mysqli_query($enlace,$r);
    }
?>