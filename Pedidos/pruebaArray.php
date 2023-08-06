<?php
    $array[0][0]="cero";
    $array[0][1]="uno";
    $array[0][2]="dos";
    $array[1][0]="tres";
    $array[1][1]="cuatro";
    $array[1][2]="cinco";
    $array[2][0]="seis";
    $array[2][1]="siete";
    $array[2][2]="ocho";
    var_dump($array);
    unset($array[1]);
    echo "<br>";
    var_dump($array);
    echo "<br>";
    $array=array_values($array);
    var_dump($array);
?>