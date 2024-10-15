<?php

// Ejercicio 4: Desarrolla un programa que compruebe si una palabra o frase es un palíndromo (como las capicúas en
// los números. Ejemplos: reconocer, rallar, ‘dábale arroz a la zorra el abad’). Ignoraremos las tildes, pasaremos la cadena
// a minúsculas (strtolower()). Pista “strrev()” devuelve una cadena invertida. Cuidado con los espacios en blanco.

function palindromo(String $cadenaOriginal) {
    
     $cadenaOriginal = strtolower(($cadenaOriginal));
     $cadenaOriginal = str_replace(' ','',$cadenaOriginal);
     $cadenaInvertida = strrev($cadenaOriginal);

    if($cadenaInvertida == $cadenaOriginal) {
        echo "La palabra o frase es igual a la cadena invertida es decir es palindromo <br>";
        echo "Cadena invertida: $cadenaInvertida, Cadena original: $cadenaOriginal";
    } else {
        echo "Al darle la vuelta a la palabra o frase pasada no es igual a la original";
    }

    return $cadenaInvertida;




};

palindromo("dabale arroz a la zorra el abad");

