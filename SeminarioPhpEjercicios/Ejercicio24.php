<?php

//Ejercicio 24. Calculadora de descuentos con constantes
//Crea un programa que utilice constantes para definir diferentes tipos de descuentos
//(DESCUENTO_ESTUDIANTE, DESCUENTO_JUBILADO, DESCUENTO_VIP) y una
//función que calcule el precio final de un producto aplicando el descuento correspondiente según el tipo de cliente.

define("DESCUENTO_ESTUDIANTE", 0.15);
define("DESCUENTO_JUBILADO", 0.20);
define("DESCUENTO_VIP", 0.25);
function calcularPrecioFinal($precio, $tipoCliente) {
    if (!is_numeric($precio) || $precio < 0) {
        return "Error: El precio debe ser un número no negativo.";
    }
    switch (strtolower($tipoCliente)) {
        case "estudiante":
            $descuento = DESCUENTO_ESTUDIANTE;
            break;
        case "jubilado":
            $descuento = DESCUENTO_JUBILADO;
            break;
        case "vip":
            $descuento = DESCUENTO_VIP;
            break;
        default:
            return "Error: Tipo de cliente no válido.";
    }
    $precioFinal = $precio * (1 - $descuento);
    return $precioFinal;
}
echo "Introduce el precio del producto: ";
$precio = (float)readline();
echo "Introduce el tipo de cliente (estudiante, jubilado, vip): ";
$tipoCliente = readline();
$precioFinal = calcularPrecioFinal($precio, $tipoCliente);
if (is_numeric($precioFinal)) {
    echo "El precio final para un cliente $tipoCliente es: $" . $precioFinal;
}

?>
