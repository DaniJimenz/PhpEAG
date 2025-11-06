<?php

//Ejercicio 14. Mosaico Numérico
//Crea una función que dado un número n imprima el siguiente 'mosaico' (para n=6):

echo "Introduce un número para generar el mosaico:";
$n = readline();
function mosaico($n){
    for($i=1; $i<=$n; $i++){ // Bucle para las filas
        for($j=1; $j<=$i; $j++){ // Bucle para las columnas
            echo $i . " "; // Imprime el número de la fila actual
        }
        echo "\n"; // Salto de línea después de cada fila
    }
}

mosaico($n);