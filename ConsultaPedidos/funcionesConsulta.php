<?php
    include "../Conexion/conexion.php";
    $tipo=$_POST['tipo'];
    if($tipo=="cargarTabla")
    {
        $r="SELECT p.idpedido, c.idcliente, c.nombre, p.fechapedido, p.importe, p.Direccion FROM pedidos AS p INNER JOIN 
        clientes AS c ON p.idcliente=c.idcliente WHERE p.estado='Realizado'";
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
                <td class=''><a href='detallePedido.php?id=".$row[0]."'><button type='button' id='' class='btn btn-success' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                Editar
                </button></a></td>
            </tr>
            ";
        }
    }
?>