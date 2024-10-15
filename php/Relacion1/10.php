<?php


    $a = 1;
    $b = -4;
    $c = 4;
    $D =  $b** 2- 4*$a*$c; // el discriminante es lo que me determina una parte de la ecuacion de segundo grado que seria la parte de b^2 - 4*c*a esto lo pasaria luego a que me hiciera la raiz cuadrada

     
    do{
        if($D > 0 ) {
            $x1 = (-$b + sqrt($D))/ (2*$a);
            $x2 = (-$b - sqrt($D))/ (2*$a);

            echo "Las soluciones son: $x1 y $x2";

        }elseif ($D == 0) {

            $x = -$b / (2* $a);
            echo "Solo tiene una solucion y es $x";
        } else {

            echo "No tiene solucion real";
        }
    }while ($a == 0);  // como no pide que lo pidamos por consola pues utilizo un Do while para que mientras sea igual a 0 no lo haga