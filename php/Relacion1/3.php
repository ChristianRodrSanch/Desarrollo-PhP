<?php



$cantidadNumeros= 20;
if($cantidadNumeros > 0 && $cantidadNumeros < 500 ){
    $contadorPrimos = 0;
    $numero = 2;

while($contadorPrimos < $cantidadNumeros) {
    $flag = true;
    for($i = 2; $i <= $cantidadNumeros; $i++) {
        if($numero % $i == 0) {
        $flag = false;
        break;
    }
    }

        if($flag) {
            echo "$numero, ";
            $contadorPrimos++;
        }

        $numero++;
    }

}





?>
