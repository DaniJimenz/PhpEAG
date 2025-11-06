<?php

//Ejericicio 20. Factorial
//Crea una función que calcule el factorial de un número.Nota: El factorial de un número n (representado como n!) es el producto de todos los
//números enteros positivos desde 1 hasta n. Por ejemplo, 5! = 5 × 4 × 3 × 2 × 1 = 120

echo "Introduce un número: ";
$num = (int)readline();
function factorial($num) {
    if (!is_int($num) || $num < 0) { // Verifico si no es negativo
        return "Error: La entrada debe ser un número entero no negativo.";
    }
    $resultado = 1; // Inicializo el resultado en 1
    for ($i = 1; $i <= $num; $i++) { // Recorro desde 1 hasta num
        $resultado *= $i; // Multiplico el resultado por i
    }
    return $resultado;
}
echo "El factorial de $num es: " .factorial($num);

?>