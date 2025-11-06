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

function celsiusAFahrenheit($celsius) {
    debugInfo(__FUNCTION__, __LINE__);
    return ($celsius * C_TO_F_MULTIPLIER) + C_TO_F_OFFSET;
}

