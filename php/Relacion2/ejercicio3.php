<?php
// Ejercicio 3: Desarrolla un programa que reciba un string y que devuelva el número de veces que aparece cada vocal
// en el. Comprobaremos que la longitud del string sea mayor que 5.

function vocales(String $palabra){
     $vocales = ["a" => 0, "e" => 0, "i" => 0, "o" => 0, "u" => 0 ];

     if(strlen($palabra) > 5) {
       for($i=0; $i < strlen($palabra);$i++) {
        $letra = strtolower($palabra[$i]);
            if(isset($vocales[$letra])) {
                $vocales[$letra]++;
            }
        }
        
        foreach($vocales as $vocal => $cantidad) {
            echo "La vocal " . strtoupper($vocal) . " aparece " . $cantidad . " veces.\n <br>";
        }
    }else {
        echo "La longituda de la cadena es menor a 5 caracteres"; 
    }



};



vocales("holaaaaa");