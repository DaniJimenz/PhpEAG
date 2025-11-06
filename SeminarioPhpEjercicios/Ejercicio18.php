<?php

//Ejercicio 18. Número primo
//Crea una función que determine si un número es primo.
//Nota: Un número primo es un número natural mayor que 1 que solo es divisible por 1 y por sí mismo.

echo "Introduce un número: ";
$numero = (int)readline();
function esPrimo($num) {
    if (!is_int($num) || $num <= 1) { // Verifico si la entrada es un número entero mayor que 1
        return "Error: La entrada debe ser un número entero mayor que 1.";
    }
    for ($i = 2; $i < $num - 1; $i++) { // Recorro desde 2 hasta num-1
        if ($num % $i === 0) { // Verifico si el número es divisible por i
            return false; // Si es divisible, no es primo
        }
    }
    return true; // Si no es divisible por ningún número, es primo
}
if(esPrimo($numero)){ // Llamo a la función y verifico el resultado
    echo "El número $numero es primo.";
} else {
    echo "El número $numero no es primo.";
}

?>