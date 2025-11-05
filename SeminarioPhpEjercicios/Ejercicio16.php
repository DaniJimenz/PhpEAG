<?php

//Ejercicio 16. Producto de elementos de un array
//Crea una función que calcule el producto de todos los elementos en un array de números.

function productoArray($array) {

    if (!is_array($array)) {
        return "No es un array";
    }
    if (empty($array)){
        return "El array está vacío";
    }

    $producto = 1;

    foreach ($array as $numero) {
        $producto *= $numero;
    }
    return $producto;
}


echo "Introduce números separados por comas: ";
$array = readline();
$numero = array_map('intval', explode(',', $array));

$resultado = productoArray($numero);
echo "El producto de los elementos es: " . $resultado . "\n";

?>
