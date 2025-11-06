<?php

//Ejercicio 28. Calculadora interactiva
//Crea un programa que simule una calculadora interactiva. El programa debe solicitar al
//usuario dos números y una operación (+, -, *, /) usando readline() o simulando entrada de
//datos, y mostrar el resultado. Debe validar que los números sean válidos y manejar la división por cero.

echo "Introduce el primer número: ";
$numero1 = (float)readline();
echo "Introduce la operación (+, -, *, /): ";
$operacion = readline();
echo "Introduce el segundo número: ";
$numero2 = (float)readline();
function calculadora($numero1, $numero2, $operacion) {
    if (!is_numeric($numero1) || !is_numeric($numero2)) { // Verifico si ambos números son válidos
        return "Ambos valores deben ser números válidos.";
    }
    switch ($operacion) { // Uso switch para determinar la operación
        case '+':
            return "$numero1 + $numero2 = " .($numero1 + $numero2);
        case '-':
            return "$numero1 - $numero2 = " .($numero1 - $numero2);
        case '*':
            return "$numero1 * $numero2 = " .($numero1 * $numero2);
        case '/':
            if ($numero2 == 0) { // Verifico división por cero
                return "División por cero no válida";
            }
            return "$numero1 / $numero2 = " . ($numero1 / $numero2);
        default:
            return "Operación no válida. Usa +, -, *, o /.";
    }
}
$resultado = calculadora($numero1, $numero2, $operacion);
echo "Resultado: " . $resultado;


?>
