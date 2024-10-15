<?php

// 4.- Hacer un ejercicio que dado un número mayor que 1000 me de todos los números primos
// menores que él dado.


$numDado = 1000 ;
$contador = 0;

for($i=2;$i < $numDado;$i++) {
    $flag = true;
    for($j=2; $j < $i; $j++) {
        if($i % $j == 0) {
            $flag = false;
            break;
        }
    }
    if($flag){
        echo "$i,";
        $contador++;
    }






}