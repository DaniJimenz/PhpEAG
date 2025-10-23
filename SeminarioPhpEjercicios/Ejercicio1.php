<?php

//Ejercicio 1. Número máximo de un array
//Crea una función que obtenga el número máximo de un array de números
$array = [3, 5, 7, 2, 8, -1, 4];
$numMax = $array[0];
echo "El número máximo del array es: " . numeroMaximo($array);
function numeroMaximo($array) {
    $numMax = $array[0];
    foreach ($array as $num) {
        if ($num > $numMax) {
            $numMax = $num;
        }
    }
    return $numMax;
}

?>

