<?php

//Ejercicio 6. Contar ocurrencias de una subcadena
//Crea una función que cuente cuántas veces aparece una subcadena en un texto.

echo "Introduce un texto: ";
$texto = readline();

echo "Introduce una palabra a buscar: ";
$palabra = readline();
function contarSubcadena($texto, $palabra){
    if (!is_string($texto) || !is_string($palabra) || strlen($palabra) == 0) {
        return "La entrada debe ser texto y una palabra que no esté vacía.";
    }
    $contador = 0; // Inicializo el contador en 0
    $longitudTexto = strlen($texto); // Obtengo la longitud del texto
    $longitudPalabra = strlen($palabra); // Obtengo la longitud de la subcadena
    for ($i = 0; $i <= $longitudTexto - $longitudPalabra; $i++) { // Recorro el texto
        if (substr($texto, $i, $longitudPalabra) === $palabra) {
            $contador++; // Incremento el contador si encuentro la subcadena
        }
    }
    return $contador;
}

$resultado = contarSubcadena($texto, $palabra);
echo "La subcadena '$palabra' aparece $resultado vez/veces en el texto.";
?>