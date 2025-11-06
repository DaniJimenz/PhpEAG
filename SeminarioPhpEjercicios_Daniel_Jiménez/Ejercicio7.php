<?php

//Ejercicio 7. Capitalizar Palabras
//Crea una función que ponga en mayúscula la primera letra de cada palabra de un texto

echo "Introduce una cadena de texto en minúscula:";
$texto = readline();
function mayusculas($texto){
    if($texto != strtolower($texto) || is_numeric($texto)){ // Valido que el texto esté en minúsculas y no sea numérico
        return "Texto no válido";
    }
    $textoMayusculas = ucwords($texto); // Utilizo la función ucwords para poner en mayúscula la primera letra de cada palabra
    return $textoMayusculas; // Devuelvo el texto modificado
}

echo mayusculas($texto);

?>
