<?php

//Ejercicio 12. Número Capicúa
//Crea una función que determine si un número dado es capicúa

echo "Introduce un número:";
$numero = readline();

function esCapicua($numero){
    $numero = strval($numero);
    $longitud = strlen($numero);

    for($i = 0; $i < $longitud / 2; $i++){
        if($numero[$i] != $numero[$longitud - $i - 1]){
            return false;
        }
    }
    return true;
}
if (!is_numeric($numero) || $numero < 0) {
    echo "Número no válido";
} else {
    if(esCapicua($numero)){
        echo "El número $numero es capicúa.";
    } else {
        echo "El número $numero no es capicúa.";
    }
}

