<?php


// Ejercicio 8: usort() es una función php que ordena un array según sus valores usando una función de comparación
// definida por el usuario, es decir una función anónima. Crea una función llamada ordenarPorLongitud() que reciba un
// array de cadenas de texto y lo ordene de acuerdo a la longitud de las cadenas, de mayor a menor, utilizando una función
// anónima en usort().

$array = ["PHP","JavaScript","Python","Go"];


function ordenarPorLongitud(array &$array){
usort($array, function($a,$b) {
    return strlen($b) - strlen($a);
    
});
}


var_dump($lenguajes);

ordenarPorLongitud($lenguajes);