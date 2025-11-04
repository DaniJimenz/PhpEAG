<?php

//Ejercicio 10. Fibonacci
//Crea una función que calcule el término n-ésimo de la sucesión de Fibonacci.

echo "Introduce un número natural:";
$numero = readline();

function fibonacci($numero){
    if (!is_numeric($numero) || $numero < 0 ) {
        return "Número no válido";
    }
    if ($numero == 0){
        return 0;
    }else if($numero == 1) {
        return 1;
    }else{
        return fibonacci($numero - 1) + fibonacci($numero -2);
    }
}
$resultado = fibonacci($numero);
echo " El término F($numero) de fibonacci es: $resultado";

?>