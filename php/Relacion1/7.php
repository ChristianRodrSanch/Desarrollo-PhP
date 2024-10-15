<?php


$numeroDado = 4;
$contadorNumeros = 0;


for($i = 1; $i <= $numeroDado; $i++) {

    if($numeroDado % $i  == 0) { // no es $i % $numeroDado es al reves ya que el $numeroDado tiene que ver si $i es divisible  por el
        echo "$i, ";
        $contadorNumeros++;  
    }
   
}

echo "<br>";
echo "El $numeroDado tiene un total de $contadorNumeros divisores";