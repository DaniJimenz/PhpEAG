<?php

//Ejercicio 12. Número Capicúa
//Crea una función que determine si un número dado es capicúa

echo "Introduce un número:";
$numero = readline();
function esCapicua($numero){
    $numero = strval($numero); // Convierto el número a cadena de texto para poder acceder a sus dígitos
    $longitud = strlen($numero); // Obtengo la longitud de la cadena

    for($i = 0; $i < $longitud / 2; $i++){ // Recorro la cadena desde el inicio hasta la mitad
        if($numero[$i] != $numero[$longitud - $i - 1]){ // Comparo el dígito en la posición i con el dígito en la posición simétrica desde el final
            return false;
        }
    }
    return true;
}
if (!is_numeric($numero) || $numero < 0) { // Valido que el número sea numérico y natural
    echo "Número no válido";
} else {
    if(esCapicua($numero)){
        echo "El número $numero es capicúa.";
    } else {
        echo "El número $numero no es capicúa.";
    }
}

