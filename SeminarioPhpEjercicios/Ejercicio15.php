<?php

//Ejercicio 15. Comparar arrays elemento a elemento
//Crear una función que reciba dos arrays de enteros y devuelva un array de booleanos que
//determine si los elementos, uno a uno, de ambos arrays son iguales.

function compararArrays($array1, $array2)
{
    if (!is_array($array1) || !is_array($array2)) {
        return "Error: Ambos parámetros deben ser arrays.";
    }
    if (empty($array1) || empty($array2)) {
        return "Error: Ambos arrays deben contener al menos un elemento.";
    }
    if (count($array1) !== count($array2)) {
        return "Error: Ambos arrays deben tener la misma longitud.";
    }
    $resultado = [];
    for ($i = 0; $i < count($array1); $i++) {
        $resultado[] = ($array1[$i] === $array2[$i]);
}
    return $resultado;
}

echo "Introduce los elementos del primer array separados por comas: ";
$input1 = readline();
$array1 = explode(",", $input1);

echo "Introduce los elementos del segundo array separados por comas: ";
$input2 = readline();
$array2 = explode(",", $input2);

$resultado = compararArrays($array1, $array2);



?>
