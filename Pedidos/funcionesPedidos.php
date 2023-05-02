<?php
session_start();
    include "../Conexion/conexion.php";
    
    $tipo=$_POST['tipo'];
    $id=$_POST['id'];
    if($tipo=="loadFruta")
    {
        $r="SELECT cajas.precio, clanche.precio FROM cajas INNER JOIN clanche ON cajas.idfruta=clanche.idfruta WHERE clanche.idfruta=$id";
        $comando= mysqli_query($enlace, $r);
        $row=mysqli_fetch_array($comando);
        $frutaDat=array("precio1" => "$row[0]","precio2" => "$row[1]");
        //$frutaDat=array("$row(0)", "$row(1)");
        $frutaDat=json_encode($frutaDat);
        echo $frutaDat;
    }
    if($tipo=='loadConcepto'){
        $concepto=$_POST["concepto"];
        if($concepto=="clanche"){
        echo"<option value='0' selected>Selecciona una cantidad</option>
        <option value='3'>3</option>
        <option value='4'>4</option>
        <option value='5'>5</option>
        <option value='6'>6</option>
        <option value='7'>7</option>
        <option value='8'>8</option>
        <option value='9'>9</option>
        <option value='10'>10</option>
        <option value='11'>11</option>";
        }
        else{
            echo"<option value='0' selected>Selecciona una cantidad</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            <option value='4'>4</option>
            <option value='5'>5</option>
            <option value='6'>6</option>
            <option value='7'>7</option>
            <option value='8'>8</option>
            <option value='9'>9</option>";
        }
    }
    if($tipo=='agregarTabla'){
        $idfruta=$_POST['id'];
        $cantidad=$_POST['cantidad'];
        $precio=$_POST['precio'];
        $importe=$_POST['importe'];
        $concepto=$_POST['concepto'];
        
        $_SESSION['carrito'][$_SESSION['n']][0]=$idfruta;
        $_SESSION['carrito'][$_SESSION['n']][1]=$precio;
        $_SESSION['carrito'][$_SESSION['n']][2]=$concepto;
        $_SESSION['carrito'][$_SESSION['n']][3]=$cantidad;
        $_SESSION['carrito'][$_SESSION['n']][4]=$importe;
        ++$_SESSION['n'];

        for($i=0; $i<$_SESSION['n']; $i++){
            echo "
            <tr>
                <td class='text-light'>".$_SESSION['carrito'][$i][0]."</td>
                <td class='text-light'>".$_SESSION['carrito'][$i][1]."</td>
                <td class='text-light'>".$_SESSION['carrito'][$i][2]."</td>
                <td class='text-light'>".$_SESSION['carrito'][$i][3]."</td>
                <td class='text-light'>".$_SESSION['carrito'][$i][4]."</td>
            </tr>
            ";
        }
    }
    if($tipo=='guardar'){
        $fruta="";
        for($i=0; $i<$_SESSION['n']; $i++){
            $idfruta=$_SESSION['carrito'][$i][0];
            if($idfruta=1){
                $fruta="Arandano";
            }
            else if($idfruta=2){
                $fruta="Frambueza";
            }
            else{
                $fruta="Zarzamora";
            }
            $precio=$_SESSION['carrito'][$i][1];
            $concepto=$_SESSION['carrito'][$i][2];
            $cantidad=$_SESSION['carrito'][$i][3];
            $importe=$_SESSION['carrito'][$i][4];
            $r="INSERT INTO pedidos(idcliente, fechapedido, importe, status) values(1,'01/05/23',$importe,'realizado')";
            mysqli_query($enlace,$r);
            $idpedido=mysqli_insert_id($enlace);
            $r="INSERT INTO detallepedido(idpedido,idconcepto,fruta,cantidad,precio) values($id,)";
        }
        unset($n);
        unset($carrito);
        session_destroy();
        session_start();
        $_SESSION['n']=0;
        echo"good";
    }
?>