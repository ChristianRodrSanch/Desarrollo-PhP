<?php

// Ejercicio 1: Un comercio realiza descuentos con la siguiente regla:
// • Si la compra no alcanza los 100€, no se realiza ningún descuento.
// • Si la compra está entre 100€ y 499,99€, se descuenta un 10%.
// • Si la compra supera los 500€, se descuenta un 15%.
// Dado el monto bruto de una compra, indicar cuánto debe pagar el cliente. Hacer una función “precioFinal(doble
// $valor): float

function precioFinal(float $valor){

    if($valor < 100) {
        echo "No alcanza el precio minimo para aplicar descuento se quedaria en: $valor";
    } elseif ($valor >= 100 and $valor <= 499.99){
        $valor = $valor - ($valor * 0.10);
        echo "La compra supera  un descuento del 10% que quedaria en: $valor ";

    }elseif ($valor > 500) {
        $valor = $valor - ($valor * 0.15);
        echo "La compra supera los 500 euros se aplicara el descuento de 15% quedaria en: $valor ";
    }
    return $valor;

}

precioFinal(590);