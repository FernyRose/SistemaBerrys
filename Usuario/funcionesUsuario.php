<?php
    session_start();
    include "../Conexion/conexion.php";
    $tipo=$_POST["tipo"];
    if($tipo=="dataUsuario"){
        $id=$_POST["id"];
        $r="SELECT * FROM CLIENTES WHERE idcliente=$id";
        $comando=mysqli_query($enlace,$r);
        $row=mysqli_fetch_array($comando);
        $data=array($row[0]=>"id",
                    $row[1]=>"nombre",
                    $row[2]=>"direccion",
                    $row[3]=>"cp",
                    $row[4]=>"ciudad",
                    $row[5]=>"estado",
                    $row[6]=>"tel",
                    $row[7]=>"telp",
                    $row[8]=>"correo",
                    $row[9]=>"as",
                    $row[10]=>"contra");
                    echo json_encode($data);
    }
    if($tipo=="llenarTabla"){
        $id=$_SESSION["idcliente"];
        $r="SELECT * FROM pedidos WHERE idcliente=$id";
        $comando=mysqli_query($enlace,$r);
        while($row=mysqli_fetch_array($comando)){
            echo"<tr>
                    <td>".$row[0]."</td>
                    <td>".$row[2]."</td>
                    <td>".$row[3]."</td>
                    <td>".$row[4]."</td>
                    <td>".$row[5]."</td>
                    <td>
                    <form action='detallePedido.php' method='POST'>
                        <input type='hidden' name='txtid' id='txtid' value='$row[0]'></input>
                        <button type='submit' class='btn btn-primary'>Ver detalles</button>
                    </form>
                    </td>
                </tr>";
        }
    }
    if($tipo=="contra"){
        $contraA=$_POST["contraActual"];
        $contraN=$_POST["contraNueva"];
        $idcliente=$_SESSION['idcliente'];
        $r="SELECT * FROM clientes AS c WHERE c.password='$contraA' AND c.idcliente=$idcliente";
        $comando=mysqli_query($enlace ,$r);
        $cliente=mysqli_fetch_array($comando);
        $num=0;
        
        if($cliente!=Null){
            $r="UPDATE clientes SET password='$contraN' WHERE idcliente=$idcliente";
            mysqli_query($enlace ,$r);
            $num=1;
            $data=array("bandera"=>$num);
        }
        else{
            $data=array("bandera"=>$num);
        }
        echo json_encode($data);
    }
?>