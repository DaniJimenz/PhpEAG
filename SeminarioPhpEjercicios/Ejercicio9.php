<?php

//Ejercicio 9. Máximo común divisor (MCD)
//Crea una función que calcule el máximo común divisor de dos números naturales

echo "Introduce un número natural:";
$num1 = readline();
echo "Introduce otro número natural:";
$num2 = readline();
function maxComuDivi($num1, $num2){
    if (!is_numeric($num1) || !is_numeric($num2) || $num1 < 0 || $num2 < 0 ) { // Valido que los números sean numéricos y naturales
        return "Número no válido";
    }
    while ($num2 != 0) { // Aplico el algoritmo de Euclides para calcular el MCD
        $temp = $num2; // Almaceno el valor de num2 en una variable temporal
        $num2 = $num1 % $num2; // Actualizo num2 con el residuo de la división de num1 entre num2
        $num1 = $temp; // Actualizo num1 con el valor almacenado en la variable temporal
    }
    return $num1;
}
echo "El máximo común divisor es: ";
echo maxComuDivi($num1, $num2); // Muestro el resultado

?>