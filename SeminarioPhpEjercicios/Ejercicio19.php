<?php

//Ejercicio 19. Eliminar vocales
//Crea una función que, dada una cadena de texto, elimine todas las vocales de la cadena.
//Ejemplo: eliminarVocales("Hola Mundo") → "Hl Mnd"
//Quiero que me compruebe si la cadena introducida es correcta

echo "Introduce una cadena de texto: ";
$cadena = readline();
function eliminarVocales($texto) {
    $vocales = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U']; // Defino las vocales a eliminar
    return str_replace($vocales, '', $texto); // Reemplazo las vocales por una cadena vacía
}
if (empty($cadena)) { // Verifico si la entrada es una cadena que no esté vacía
    echo "La cadena de texto no puede estar vacía.";
}else{
    echo "Cadena sin vocales: " . eliminarVocales($cadena);
}

?>