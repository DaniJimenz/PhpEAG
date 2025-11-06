<?php

//Ejercicio 15. Comparar arrays elemento a elemento
//Crear una función que reciba dos arrays de enteros y devuelva un array de booleanos que
//determine si los elementos, uno a uno, de ambos arrays son iguales.
//Ejemplo: comparar([1, 2, 3], [1, 2, 4]) → [true, true, false]

echo "Introduce los elementos del primer array separados por comas: ";
$array1 = readline();
echo "Introduce los elementos del segundo array separados por comas: ";
$array2 = readline();

$array1 = array_map('intval', explode(',', $array1)); // Convierto la entrada en un array de enteros
$array2 = array_map('intval', explode(',', $array2)); // Convierto la entrada en un array de enteros
function compararArrays($array1, $array2) {
    $resultado = []; // Inicializo un array para almacenar los resultados
    $longitud = min(count($array1), count($array2)); // Obtengo la longitud mínima de los dos arrays
    for ($i = 0; $i < $longitud; $i++) { // Recorro hasta la longitud mínima
        $resultado[] = ($array1[$i] === $array2[$i]); // Comparo los elementos y almaceno el resultado verdadero/falso
    }
    return $resultado;
}
$resultado = compararArrays($array1, $array2);
echo "Resultado de la comparación: " . implode(", ", array_map(function($val) { return $val ? 'true' : 'false'; }, $resultado));
// Imprimo los resultados separados por comas, convirtiendo booleanos a 'true'/'false'








?>
