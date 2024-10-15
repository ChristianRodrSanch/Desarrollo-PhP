<?php

// $numeroDado = 2340;

// for($i=0;$i <sup strlen($numeroDado); $i++ ) {

//     echo pow($numeroDado,10);

// }

// incompleto no tengo mucha idea de como hacerlo he buscado por internet me sale para hacerlo strlen y pow pero no se como utilizarlo aqui


$numero =456789;

$longitud = strlen($numero); //6
echo "$numero<br>";
for($i=$longitud-1 ;$i >=0; $i-- ) { // longitud -1 es basicamente para que empieza el base 6 por que tenemos 6 numero y tienes que se potencia en base 5 en numero

    $potencia = (int) pow (10, $i);
    $des[] = (int) ($numero/$potencia);
    $numero%=$potencia; // $numero = $numero%$potencia

}

var_dump($des);

echo "<br>";
// vamos a escribir ahora para que se vean las operaciones

$indice = $longitud-1;

foreach($des as $cifra) {

        echo "$cifra X 10<sup>".$indice--."</sup> +";

}