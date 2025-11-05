<?php

//Ejercicio 14. Mosaico Numérico
//Crea una función que dado un número n imprima el siguiente 'mosaico' (para n=6):

echo "Introduce un número para generar el mosaico:";
$n = readline();
function mosaico($n){
    for($i=1; $i<=$n; $i++){
        for($j=1; $j<=$i; $j++){
            echo $i . " ";
        }
        echo "\n";
    }
}

mosaico($n);