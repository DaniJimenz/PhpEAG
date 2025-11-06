<?php

//Ejercicio 22. Número perfecto
//Crea una función que, dado un número, devuelva true si es un número perfecto (la suma de
//sus divisores propios positivos es igual al número), o false en caso contrario.
//Ejemplo: 6 es un número perfecto porque sus divisores propios son 1, 2 y 3, y 1 + 2 + 3 = 6.

echo "Introduce un número: ";
$numero = (int)readline();
function esPerfecto($num) {
    if (!is_int($num) || $num <= 0) { // Verifico si la entrada es un número entero positivo
        return "No es un número entero positivo.";
    }
    $sumaDivisores = 0; // Inicializo la suma de los divisores
    for ($i = 1; $i < $num - 1; $i++) { // Recorro desde 1 hasta num-1
        if ($num % $i === 0) { // Verifico si i es un divisor propio de num
            $sumaDivisores += $i; // Si es divisor, lo sumo a la suma de divisores
        }
    }
    return $sumaDivisores === $num; // Devuelvo true si la suma de divisores es igual a num
}
if(esPerfecto($numero)){
    echo "El número $numero es perfecto.";
} else {
    echo "El número $numero no es perfecto.";
}
?>