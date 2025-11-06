<?php

//Ejercicio 17. Filtrar números pares
//Crea una función que dada un array de números, devuelva un nuevo array con solo los
//números pares.
//Ejemplo: filtrarPares([1, 2, 3, 4, 5, 6]) → [2, 4, 6]

echo "Introduce números separados por comas: ";
$input = readline();
$arrayNumeros = array_map('intval', explode(',', $input)); // Convierto la entrada en un array de enteros
function filtrarPares($array) {
    if (!is_array($array)) { // Verifico si la entrada es un array
        return "Error: La entrada debe ser un array.";
    }
    if (empty($array)) { // Verifico si el array está vacío
        return "Error: El array no debe estar vacío.";
    }
    $pares = []; // Inicializo un array para almacenar los números pares
    foreach ($array as $numero) { // Recorro cada número en el array
        if ($numero % 2 === 0) { // Verifico si el número es par
            $pares[] = $numero; // Agrego el número par al array de pares
        }
    }
    return $pares;
}

$resultado = filtrarPares($arrayNumeros);
echo "Números pares: " . implode(", ", $resultado); // Imprimo los números pares separados por comas
// Implode sirve para unir los elementos de un array en una sola cadena de texto (string)
?>