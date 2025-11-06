<?php

//Ejercicio 26. Validador de datos con operador null coalescing
//Crea una función que reciba un array asociativo con datos de usuario (nombre, email, edad,
//ciudad) y utilice el operador null coalescing (??) para asignar valores por defecto cuando
//algún campo esté ausente o sea null.

function completarDtaosUsuario($usuario){
    //Asigno valores por defecto usando el operador null coalescing
    $nombre = $usuario['nombre'] ?? 'Desconocido';
    $email = $usuario['email'] ?? 'sin-email@example.com';
    $edad = $usuario['edad'] ?? 10;
    $ciudad = $usuario['ciudad'] ?? 'No especificada';
    return [
        'nombre' => $nombre,
        'email' => $email,
        'edad' => $edad,
        'ciudad' => $ciudad
    ];
}

$usuario1 = ['nombre' => 'Pepe', 'email' => 22];
$usuario2 = [];
print_r(completarDtaosUsuario($usuario1));
print_r(completarDtaosUsuario($usuario2));

?>




