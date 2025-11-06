<?php

//Ejercicio 16. Producto de elementos de un array
//Crea una función que calcule el producto de todos los elementos en un array de números.

function productoArray($array) {

    if (!is_array($array)) { // Verifica si la entrada es un array
        return "No es un array";
    }
    if (empty($array)){ // Verifica si el array está vacío
        return "El array está vacío";
    }

    $producto = 1; // Inicializa el producto en 1

    foreach ($array as $numero) { // Recorro cada número en el array
        $producto *= $numero; // Multiplico el número actual al producto
    }
    return $producto;
}

echo "Introduce números separados por comas: ";
$array = readline();
$numero = array_map('intval', explode(',', $array)); // Convierte la entrada en un array de enteros

$resultado = productoArray($numero);
echo "El producto de los elementos es: " . $resultado . "\n";

?>
