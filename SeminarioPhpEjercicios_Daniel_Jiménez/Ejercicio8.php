<?php

//Ejercicio 8. Suma de dígitos
//Crea una función que sume los dígitos de un número

echo "Introduce un número:";
$numero = readline();
function sumarDigitos($numero){
    if (!is_numeric($numero) || $numero < 10 || 0 ) { // Valido que el número sea numérico y tenga al menos dos dígitos
        return "Número no válido";
    }
    $count = strlen($numero); // Obtengo la cantidad de dígitos del número
    $suma = 0; // Inicializo la variable suma
    for ($i=0; $i < $count; $i++){ // Recorro cada dígito del número
        $suma += intval($numero[$i]); // Convierto el carácter a entero y lo sumo a la variable suma
    }
    return $suma;
}

echo sumarDigitos($numero);
?>