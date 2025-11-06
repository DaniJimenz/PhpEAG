<?php

//Ejercicio 3. Conversión de millas a Kilómetros
//Crea una función que dada una distancia en millas calcule su correspondiente en KM
//Nota 1 milla = 1.60934 KM
echo "Introduce el número de millas a convertir a kilometros: ";
$millas = readline();
function millasAKM($millas) {
    if ($millas < 0){ //Validación para que no se ingresen millas negativas
        return "La distancia no puede ser negativa";
    }
    $km = $millas * 1.60934; //Conversión de millas a kilómetros
    return $millas . " millas equivalen a $km kilómetros."; //Devuelve el resultado
}
echo millasAKM($millas);
?>


