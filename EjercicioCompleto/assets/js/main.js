'use strict';

let long = 0;
let arrayFinal = [];

do {
    tam = prompt("Introduce el tamaño del array / Diferente a 0");
    if ( long <= 0) {
        alert("El tamaño del array debe ser mayor que 0");
    }
} while (long <= 0);