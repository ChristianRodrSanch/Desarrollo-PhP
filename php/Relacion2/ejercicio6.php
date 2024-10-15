<?php

// Ejercicio 6: Escribe una función llamada intercambiar() que reciba dos variables por referencia e intercambie
// sus valores.

// function intercambiar(int $refer1, int $refer2) {

//     $valorAux1 = $refer1;
//     echo "Los valores originales son $refer1 y $refer2 <br>";
//     $refer1 = $refer2;
//     $refer2 = $valorAux1;

//     echo "Los valores intercambiados son $refer1 y $refer2";


// }


// intercambiar(10,20);

// como esta rriba no lo hace por que luego desde fuera no lo cambia solamente lo hace dentro de la funcon el valor real sigue siendo el mismo


function intercambiar(&$refer1, &$refer2) { // pasar por referencia es &

    $valorAux1 = $refer1;
    $refer1 = $refer2;
    $refer2 = $valorAux1;


}
echo "Los valores originales son el valo a = $refer1 y el valor b = $refer2 <br>";
intercambiar($a,$b);
echo "<br>Los valores intercambiados son a = $refer1 y b = $refer2";
