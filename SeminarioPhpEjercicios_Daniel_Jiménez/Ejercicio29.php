<?php

//Ejercicio 29. Conversor de temperaturas con constantes mágicas
//Crea un programa que convierta temperaturas entre Celsius, Fahrenheit y Kelvin. Utiliza
//constantes para las fórmulas de conversión y constantes mágicas de PHP (__FUNCTION__,
//__LINE__) para mostrar información de depuración.
//Fórmulas:
//• Celsius a Fahrenheit: (C × 9/5) + 32
//• Celsius a Kelvin: C + 273.15
//• Fahrenheit a Celsius: (F - 32) × 5/9
//• Kelvin a Celsius: K - 273.15

define("C_TO_F_MULTIPLIER", 9/5);
define("C_TO_F_OFFSET", 32);
define("C_TO_K_OFFSET", 273.15);
define("F_TO_C_MULTIPLIER", 5/9);
define("F_TO_C_OFFSET", 32);
define("K_TO_C_OFFSET", 273.15);

function convertirTemperatura($valor, $de, $a){
    // Convierto a Celsius
    switch (strtolower($de)) {
        case 'celsius':
            $celsius = $valor;
            break;
        case 'fahrenheit':
            $celsius = ($valor - F_TO_C_OFFSET) * F_TO_C_MULTIPLIER;
            break;
        case 'kelvin':
            $celsius = $valor - K_TO_C_OFFSET;
            break;
        default:
            return "Unidad de origen no válida.";
    }

    // Convierto de Celsius a la unidad deseada
    switch (strtolower($a)) {
        case 'celsius':
            $resultado = $celsius;
            break;
        case 'fahrenheit':
            $resultado = ($celsius * C_TO_F_MULTIPLIER) + C_TO_F_OFFSET;
            break;
        case 'kelvin':
            $resultado = $celsius + C_TO_K_OFFSET;
            break;
        default:
            return "Unidad de destino no válida.";
    }
}
    echo "Introduce el valor de la temperatura:";
    $inputValor = readline();
    echo "Introduce la unidad de origen (Celsius, Fahrenheit, Kelvin):";
    $inputDe = readline();
    echo "Introduce la unidad de destino (Celsius, Fahrenheit, Kelvin):";
    $inputA = readline();
    $resultado = convertirTemperatura($inputValor, $inputDe, $inputA);

