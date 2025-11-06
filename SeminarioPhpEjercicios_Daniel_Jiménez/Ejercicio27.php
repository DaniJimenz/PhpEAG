<?php

//Ejercicio 27. Validador de datos con operador null coalescing
//Crea una función que reciba un array asociativo con datos de usuario (nombre, email, edad,
//ciudad) y utilice el operador null coalescing (??) para asignar valores por defecto cuando
//algún campo esté ausente o sea null.

function completarDatosUsuario($usuario)
{
    //Asigno valores por defecto usando el operador null coalescing
    $codigoPostal = $usuario['codigo'] ?? null;
    if ($codigoPostal?->numero) {
        return $codigoPostal->numero;
    }else{
        return 'Código postal no disponible';
    }
}

$usuario1 = [
    'nombre' => 'Pepe',
    'direccion' => [
        'calle' => 'Calle Keops',
        'codigo' => [
            'numero' => '28080',
            'ciudad' => 'Madrid'
        ]
    ]
];

echo completarDatosUsuario($usuario1);

