<?php

//Ejercicio 21. Invertir cadena
//Crea una función que invierta una cadena de texto. Por ejemplo, "hola" debería convertirse en "aloh".

echo "Introduce una cadena de texto: ";
$cadena = readline();
function invertirCadena($cadena) {
    if (!is_string($cadena)) { // Verifico si la entrada es una cadena de texto
        return "La entrada debe ser texto.";
    }
    $cadenaInvertida = ""; // Inicializo la cadena invertida
    $longitud = strlen($cadena); // Obtengo la longitud de la cadena
    for ($i = $longitud - 1; $i >= 0; $i--) { // Recorro la cadena desde el final hasta el principio
        $cadenaInvertida .= $cadena[$i]; // Concateno cada carácter a la nueva cadena
    }
    return $cadenaInvertida;
}
echo "La cadena invertida es: " .invertirCadena($cadena);
?>