<?php
 /*
Ejercicio 7: Escribe una función llamada fibonacci() que calcule el enésimo término de la secuencia de
Fibonacci utilizando recursividad.
 */

function fibonacci(int $n) : int {

if($n == 0) {

return 0;
} else if($n == 1) {

    return 1;
} else {

return fibonacci($n - 1) + fibonacci ($n - 2);
}
    
}

function fibonacci1(int $num) : int{

return match(true){ // basicamente esto devuelve true y mira los caso
    $num == 0 =>0, // si el num es 0 devuelve 0
    $num == 1 =>1, // si el num es 1 devuelve 1
    default=> fibonacci1($num-1)+fibonacci1($num-2) // si el num ahora no corresponde con la anteriores haria esto 

    };
}


for($i=0; $i<=7; $i++){
    echo "$i ---->".fibonacci($i)."<br>";
}
