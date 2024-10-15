<?php

$provincias = [
    'Almería',
    'Cadiz',
    'Córdoba',
    'Granada',
    'Huelva',
    'Jaén',
    'Malaga',
    'Sevilla',
];
$aficiones = [
    'Ciclismo',
    'Cine',
    'Lectura',
    'Otras'
];

function limpiarCadenas(String $nombre) : String{

return htmlspecialchars(trim($nombre));


}