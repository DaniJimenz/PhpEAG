<?php

//Ejercicio 4.Palíndromo
//Crea una función que determine si una cadena de texto es un palíndromo
//Nota: Un palíndromo es una palabra o frase que se lee igual de izquierda a derecha que de
//derecha a izquierda, por ejemplo: "ana", "reconocer", "anilina".

echo "Introduce una cadena de texto: ";
$cadena = readline();
function esPalindromo($cadena) {
    if (!is_string($cadena)) { // Verifico es una cadena de texto
        return "La entrada debe ser texto.";
    }
    $longitud = strlen($cadena); // Obtengo la longitud de la cadena
    for ($i = 0; $i < $longitud / 2; $i++) { // Recorro la mitad de la cadena
        if ($cadena[$i] !== $cadena[$longitud - $i - 1]) {
            return false; // Si no son iguales, no es palíndromo
        }
    }
    return true;
}
if(esPalindromo($cadena)){
    echo "La cadena $cadena es un palíndromo.";
} else {
    echo "La cadena $cadena no es un palíndromo.";
}




?>

