<?php


// Ejercicio 9: Crea una función llamada calcularPromedio() que reciba un array de números y devuelva su promedio,
// pero sin utilizar funciones predefinidas como array_sum() o count()


function calcularPromedio($numeros) {

$suma = 0;
$contador = 0;

foreach($numeros as $numero) {
$suma += $numero;
$contador++;
}

    if($contador > 0) {

        return $suma / $contador;
    } else {

        return 0;
    }

}

$arrayNumeros = [5, 10, 15, 20 ];
$promedio = calcularPromedio($arrayNumeros);
echo "El promedio es: " . $promedio;
