<?php
    $arreglo=array();
    $carrito=array("cinco","seis","siete","ocho");
    array_push($arreglo,"uno","dos","tres","cuatro");
    $contador=count($arreglo);
        echo $contador;
        for($i=0;$i<$contador;$i++){
            echo $arreglo[$i];
        }
?>