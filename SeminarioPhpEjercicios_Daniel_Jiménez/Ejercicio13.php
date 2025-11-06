<?php

//Ejercicio 13. Generador de tabla HTML
//Crea una función que dada una cadena de texto con formato Emmet devuelva su correspondiente
//etiqueta HTML, teniendo en cuenta sólo los atributos de clase e id.
//Ejemplos:
//in: a -> out: <a></a>
//in: div.oferta -> out: <div class="oferta"></div>
//in: div.coche#VWPolo -> out: <div class="coche" id="VWPolo"></div>

echo "Introduce una cadena con formato Emmet: ";
$emmet = readline();

function generarEtiquetaHTML($emmet)
{
    if (!is_string($emmet) || empty($emmet)) { // Verifico si la entrada es una cadena de texto no vacía
        return "La entrada debe ser una cadena de texto no vacía.";
    }
    $tag = '';
    $class = '';
    $id = '';

}