<?php
$usuarios=[
    'usu1'=>'user45@gmail.com',
    'usu2'=>'user4235@gmail.com',
    'usu3'=>'user4225@gmail.com',
    'usu4'=>'user1145@gmail.com',
    'usu5'=>'user09145@gmail.com',
    'usu6'=>'user7845@gmail.com',
    'userAdmin@gmail.com',
];

// algunas funciones utiles con arrays

echo "La dimension de usuarios es: ".count($usuarios);
echo "<br>";
$claves=array_keys($usuarios); // guarda un array con todas las claves tiene que ser KEYS con s
print_r($usuarios);
$valores=array_values($usuarios);
echo "<br>";
print_r($valores);

//---------------- convertir un array en un string

$prueba=["clave1","clave2","manolo","maria"];
$cadena=implode("::",$prueba); // coje el implode el array lo convierte en un string y los separa con dos puntos por que lo hemos puesto pero puedes ponerle coma

echo "<br>$cadena";
var_dump($usuarios);
$cadena = "PASSWORD1::PASSWORD2::PASSWORD3::JUAN";
$cadenaA=explode("::",$cadena);
echo "<br>";
print_r($cadenaA);