<?php

//Ejercicio 1. Número máximo de un array
//Crea una función que obtenga el número máximo de un array de números
$array = [3, 5, 7, 2, 8, -1, 4]; //Array de ejemplo con el que probar la función
echo "El número máximo del array es: " . numeroMaximo($array);
function numeroMaximo($array) {
    $numMax = $array[0]; //Inicializamos la variable con el primer valor del array
    foreach ($array as $num) { //Recorro el array
        if ($num > $numMax) { //Comparo si el número actual es mayor que el máximo almacenado
            $numMax = $num; //Una vez que sea así, se actualiza el valor máximo
        }
    }
    return $numMax; //Devuelve el resultado
}

?>

