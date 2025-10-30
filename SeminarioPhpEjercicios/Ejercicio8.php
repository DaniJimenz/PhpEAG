<?php

//Ejercicio 8. Suma de dígitos
//Crea una función que sume los dígitos de un número

echo "Introduce un número:";
$numero = readline();

function sumarDigitos($numero){
    if (!is_numeric($numero) || $numero < 10 || 0 ) {
        return "Número no válido";
    }
    $count = strlen($numero);
    $suma = 0;
    for ($i=0; $i < $count; $i++){
        $suma += intval($numero[$i]);
    }
    return $suma;
}

echo sumarDigitos($numero);
?>