<?php

//Ejercicio 5. Contar ocurrencias con una letra
//Crea una función que cuente cuántas veces aparece una letra en un texto

echo "Introduce un texto:";
$texto = readline();
function contarLetras(){
     static $count = 0;



     return $count++;
}

?>


