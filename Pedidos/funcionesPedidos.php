<?php
session_start();
    include "../Conexion/conexion.php";

    $fechaActual = date('d-m-Y');
    $idCliente=$_SESSION["idCliente"];
    $importe=0;
    $status="";

    if($tipo=='agregarCarrito'){
        
        $idprese=$_POST['idprese'];
        $cantidad=$_POST['cantidad'];
        $precio=$_POST['precio'];

        $_SESSION['carrito'][$_SESSION['n']][0]=$idfruta;
        $_SESSION['carrito'][$_SESSION['n']][1]=$idespe;
        $_SESSION['carrito'][$_SESSION['n']][2]=$idprese;
        $_SESSION['carrito'][$_SESSION['n']][3]=$precio;
        $_SESSION['carrito'][$_SESSION['n']][4]=$cantidad;
        $_SESSION['carrito'][$_SESSION['n']][5]=$importe;
        ++$_SESSION['n'];

        $_SESSION['carrito2'][$_SESSION['n2']][0]=$textFruta;
        $_SESSION['carrito2'][$_SESSION['n2']][1]=$textEsp;
        $_SESSION['carrito2'][$_SESSION['n2']][2]=$textPre;
        $_SESSION['carrito2'][$_SESSION['n2']][3]=$precio;
        $_SESSION['carrito2'][$_SESSION['n2']][4]=$cantidad;
        $_SESSION['carrito2'][$_SESSION['n2']][5]=$importe;
        ++$_SESSION['n2'];

        for($i=0; $i<$_SESSION['n2']; $i++){
            echo "
            <tr>
                <td class=''>".$_SESSION['carrito2'][$i][0]."</td>
                <td class=''>".$_SESSION['carrito2'][$i][1]."</td>
                <td class=''>".$_SESSION['carrito2'][$i][2]."</td>
                <td class=''>".$_SESSION['carrito2'][$i][3]."</td>
                <td class=''>".$_SESSION['carrito2'][$i][4]."</td>
                <td class=''>".$_SESSION['carrito2'][$i][5]."</td>
            </tr>
            ";
        }
    }
    if($tipo=='Guardar'){
        $r="INSERT INTO pedidos(idcliente, fechapedido, importe, status) values(1,'01/05/23',1234,'realizado')";
        mysqli_query($enlace,$r);
        $idpedido=mysqli_insert_id($enlace);

        for($i=0; $i<$_SESSION['n']; $i++){
            $idfruta=$_SESSION['carrito'][$i][0];
            $idespe=$_SESSION['carrito'][$i][1];
            $idprese=$_SESSION['carrito'][$i][2];
            $precio=$_SESSION['carrito'][$i][3];
            $cantidad=$_SESSION['carrito'][$i][4];
            $importe=$_SESSION['carrito'][$i][5];
            $r="INSERT INTO detallepedido(idpedido,idpresentacion,cantidad,precio) values($idpedido,$idprese,$cantidad,$precio)";
            mysqli_query($enlace,$r);
        }
        unset($n);
        unset($carrito);
        unset($n2);
        unset($carrito2);
        session_destroy();
        session_start();
        $_SESSION['n']=0;
        $_SESSION['n2']=0;
        echo"good";
    }
?>