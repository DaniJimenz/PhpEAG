<?php

//Ejercicio 25. Clasificador de notas con match
//Crea una función que utilice la expresión match de PHP 8 para clasificar una nota numérica
//(0-10) en su correspondiente calificación textual.

echo "Introduce una nota del 0 al 10: ";
$nota = (float)readline();

function clasificarNota($nota) {
    if (!is_numeric($nota) || $nota < 0 || $nota > 10) { // Verifico si la entrada es un número entre 0 y 10
        return "La nota debe ser un número entre 0 y 10.";
    }
    return match (true) { // Uso match para clasificar la nota
        $nota >= 9 && $nota <= 10 => "Sobresaliente",
        $nota >= 7 && $nota < 9 => "Notable",
        $nota >= 5 && $nota < 7 => "Aprobado",
        $nota >= 0 && $nota < 5 => "Suspenso",
    };
}
$clasificacion = clasificarNota($nota);
echo "La calificación para un $nota es de: $clasificacion.";

?>