<?php

//Ejercicio 11. Números primos relativos
//Crea una función que determine si dos números son primos relativos

echo "Introduce el primer número:";
$numero1 = readline();
echo "Introduce el segundo número:";
$numero2 = readline();
function mcd($a, $b){ // Máximo común divisor usando el algoritmo de Euclides
    while ($b != 0) { // Mientras b no sea cero
        $temporal = $b; // Guardo el valor de b en una variable temporal
        $b = $a % $b; // Actualizo b con el resto de a dividido por b
        $a = $temporal; // Actualizo a con el valor temporal
    }
    return $a;
}
function sonPrimosRelativos($numero1, $numero2){
    if (!is_numeric($numero1) || !is_numeric($numero2) || $numero1 < 0 || $numero2 < 0) {
        return "Número no válido";
    }
    return mcd($numero1, $numero2) == 1;
}

$resultado = sonPrimosRelativos($numero1, $numero2);
if ($resultado === "Número no válido") {
    echo $resultado;
} else if ($resultado) {
    echo "Los números $numero1 y $numero2 son primos relativos.";
} else {
    echo "Los números $numero1 y $numero2 no son primos relativos.";
}

?>
