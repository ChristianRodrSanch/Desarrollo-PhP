<?php

$numeroDado1 = 0;

$numeroDado2 = 100;

$multiplos3 = 0;

for($i = $numeroDado1; $i <= $numeroDado2; $i++ ) {

    if($i % 3 == 0) {
        echo "$i, "; // Aqui muestro los numero que son multiplos de 3
        $multiplos3++; // y aqui voy incrementando el contador;
    }



}