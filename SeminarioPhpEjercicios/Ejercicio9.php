<?php

//Ejercicio 9. Máximo común divisor (MCD)
//Crea una función que calcule el máximo común divisor de dos números naturales

echo "Introduce un número natural:";
$num1 = readline();
echo "Introduce otro número natural:";
$num2 = readline();

function maxComuDivi($num1, $num2){
    if (!is_numeric($num1) || !is_numeric($num2) || $num1 < 0 || $num2 < 0 ) {
        return "Número no válido";
    }
    while ($num2 != 0) {
        $temp = $num2;
        $num2 = $num1 % $num2;
        $num1 = $temp;
    }
    return $num1;
}
echo "El máximo común divisor es: ";
echo maxComuDivi($num1, $num2);

?>