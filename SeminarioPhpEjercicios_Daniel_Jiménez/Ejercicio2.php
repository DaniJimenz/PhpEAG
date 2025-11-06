<?php

//Ejercicio 2. Sumatoria de un array
//Crea una función que obtenga la sumatoria de un array de números
$array = [2, 4, 7, 9, -4, 1, 3]; //Array de ejemplo con el que probar la función
echo "La sumatoria del array es: " . sumatoriaArray($array); //Llamo a la función y muestro el resultado
function sumatoriaArray($array) {
    $suma = 0; //Inico la variable suma en 0
    foreach ($array as $num) { //Se recorre el array
        $suma += $num; //Se suma cada elemento al total
    }
    return $suma; //Devuelve el resultado
}

?>
