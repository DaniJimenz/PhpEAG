<?php

//Ejercicio 10. Fibonacci
//Crea una función que calcule el término n-ésimo de la sucesión de Fibonacci.

echo "Introduce un número natural:";
$numero = readline();
function fibonacci($numero){
    if (!is_numeric($numero) || $numero < 0 ) { // Valido que el número sea numérico y natural
        return "Número no válido";
    }
    if ($numero == 0){
        return 0; // El término 0 de la sucesión de Fibonacci es 0
    }else if($numero == 1) { //
        return 1; // El término 1 de la sucesión de Fibonacci es 1
    }else{
        return fibonacci($numero - 1) + fibonacci($numero -2); // Llamada recursiva para calcular el término n-ésimo de la sucesión de Fibonacci
    }
}
$resultado = fibonacci($numero);
echo "El término F $numero de fibonacci es: $resultado";

?>