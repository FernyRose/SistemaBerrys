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
        $r="SELECT p.idpedido, c.idcliente, c.nombre, p.fechapedido, p.importe FROM pedidos AS p INNER JOIN 
        clientes AS c ON p.idcliente=c.idcliente";
        $comando=mysqli_query($enlace,$r);
        while($row=mysqli_fetch_array($comando)){
            echo"
            <tr>
                <td class=''>".$row[0]."</td>
                <td class=''>".$row[1]."</td>
                <td class=''>".$row[2]."</td>
                <td class=''>".$row[3]."</td>
                <td class=''>".$row[4]."</td>
                <td class=''>boton</td>
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