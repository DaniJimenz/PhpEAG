<?php

//Ejercicio 11. Números primos relativos
//Crea una función que determine si dos números son primos relativos

echo "Introduce el primer número natural:";
$numero1 = readline();
echo "Introduce el segundo número natural:";
$numero2 = readline();

function primosRelativos($numero1, $numero2){
    if (!is_numeric($numero1) || !is_numeric($numero2) || $numero1 < 0 || $numero2 < 0 ) {
        return "Número no válido";
    }

}


