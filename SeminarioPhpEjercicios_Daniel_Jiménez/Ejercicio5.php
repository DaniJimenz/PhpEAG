<?php

//Ejercicio 5. Contar ocurrencias con una letra
//Crea una función que cuente cuántas veces aparece una letra en un texto

echo "Introduce un texto: ";
$texto = readline();

echo "Introduce una letra a buscar: ";
$letra = readline();
function contarOcurrencias($texto, $letra)
{
    if (!is_string($texto) || !is_string($letra) || strlen($letra) != 1) {
        return "La entrada debe ser texto y una sola letra.";
    }
    $contador = 0; // Inicializo el contador en 0
    $longitud = strlen($texto); // Obtengo la longitud del texto
    for ($i = 0; $i < $longitud; $i++) { // Recorro el texto
        if ($texto[$i] === $letra) {
            $contador++; // Incremento el contador si encuentro la letra
        }
    }
    return $contador;
}
$resultado = contarOcurrencias($texto, $letra);
echo "La letra '$letra' aparece $resultado veces en el texto.";

?>


