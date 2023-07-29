<?php
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
    }
    echo json_encode($data);
?>