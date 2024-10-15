<?php

/* Ejercicio 5: Crea una función llamada esPrimo() que determine si un número es primo o no. Luego, utiliza esa
función en una segunda función llamada numerosPrimos(int $numInf, int $numSup): array, para
encontrar todos los números primos dentro de un rango de dos números enteros dados como parámetros, dichos primos
se guardarán en un array. */



function esPrimo(int $numero) : bool
{
    $flag = true;

    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $flag = false;
            break;
        }
    }
    return $flag;
}

function numerosPrimos(int $numInf, int $numSup): array
{
    $arrayPrimos = [];

    for ($i = $numInf; $i <= $numSup; $i++) {
        if (esPrimo($i)) {
            $arrayPrimos[] = $i;
        }
    }
    return $arrayPrimos;
    
}
foreach (numerosPrimos(1, 20) as $primos) {
    echo "$primos. <br>";
}
numerosPrimos(1, 20);
