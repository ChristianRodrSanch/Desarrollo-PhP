<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // 1.- Busquemos la cantidad de divisores de $num
    $num=465;
    $cantidadDivisores = 0;
    echo "Los divisores de $num son: <br>";
    for($i=1; $i<=$num; $i++) {
        
        if($num%$i==0){
        echo "$i, ";
        $cantidadDivisores++;
        }
    }
    echo "<br>el $num tiene un total de $cantidadDivisores divisores";
    //2.- ALGORITMO QUE ME DIGA SI UN NUMERO DADO ES PRIMO O NO
    echo "<hr>";
    $num2=13;
    $contarDiv = 0;
    for ($j=1; $j<=$num2; $j++){
        if($num2%$j==0){
            echo "$i, ";
            $contarDiv++;
        }
    }
    echo ($contarDiv==2) ? "<br> el $num2 SI es primo" : "<br> el $num2 NO es primo";
    echo "<hr>";
    $num2=100000000000000000000000000000000000000;
    $flag = true;
    for ($j=2; $j<$num2; $j++){
        if($num2%$j==0){
            $flag = false;
            break;
        }
    }
    echo ($contarDiv==2) ? "<br> el $num2 SI es primo" : "<br> el $num2 NO es primo";
    // 3.- quiero un programa que me diga entre el primero y el segundo incluidos y que los muestre
    $numero1 = 100;
    $numero2 = 453;
    $primos = true;
    
        
    
     

    ?>
</body>
</html>