<?php

//Ejercicio 2. Sumatoria de un array
//Crea una función que obtenga la sumatoria de un array de números
$array = [2, 4, 7, 9, -4, 1, 3];
echo "La sumatoria del array es: " . sumatoriaArray($array);
function sumatoriaArray($array) {
    $suma = 0;
    foreach ($array as $num) {
        $suma += $num;
    }
    return $suma;
}

?>
