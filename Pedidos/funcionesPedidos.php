<?php
    include "../Conexion/conexion.php";
    $tipo=$_POST['tipo'];

    if($tipo=="loadFruta")
    {
        $r="SELECT precio FROM fruta WHERE idfruta=".$_POST['id'];
        $comando= mysqli_query($enlace, $r);
        $row=mysqli_fetch_array($comando);
        $frutaDat=array(
            'precio' => $row['precio']
        );
        $frutaDat=json_encode($frutaDat);
        echo $frutaDat;
    }
    if($tipo=='loadConcepto'){
        $concepto=$_POST["id"];
        if($concepto==1){
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
?>