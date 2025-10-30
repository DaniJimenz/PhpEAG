<?php

//Ejercicio 7. Capitalizar Palabras
//Crea una función que ponga en mayúscula la primera letra de cada palabra de un texto

echo "Introduce una cadena de texto en minúscula:";
$texto = readline();


function mayusculas($texto){
    if($texto != strtolower($texto) || is_numeric($texto)){
        return "Texto no válido";
    }
    $textoMayusculas = ucwords($texto);
    return $textoMayusculas;
}

echo mayusculas($texto);

?>
