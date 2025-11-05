<?php

//Ejercicio 11. Números primos relativos
//Crea una función que determine si dos números son primos relativos

echo "Introduce el primer número natural:";
$numero1 = readline();
echo "Introduce el segundo número natural:";
$numero2 = readline();

function mcd($a, $b){
    while ($b != 0) {
        $temporal = $b;
        $b = $a % $b;
        $a = $temporal;
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
