<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // if, if else
        // operadores logicos son los mismo que java -> &&(y) ||(o) !(negacion/distinto) == ===

        $num1=322;
        $num2=56;
        //ordenadr de menos a mayor -> 12, 56
        if($num1 < $num2) {
            echo "Los numeros ordenados son: $num1,$num2 "; 
        }elseif($num1 == $num2){
            echo "Los numeros son iguales: $num1,$num2";

        }else {
            echo "Los numero ordenados son: $num2,$num1";
        }
        // && || ===
        $numero1=100;
        $numero2="100";

        if($numero1 === $numero2){ // EL TRIPLE IGUAL COMPARA EL VALOR Y EL TIPO ES LA DIFERENCIA ENTRE EL == Y EL ===
            echo "<br> Los numero son iguales";
        }else{
            echo "<br> Los numer NO son iguales";
        }

        echo "<br>";
        // ----------- Bucle for() while do while
        for($i=0;$i<10;$i++){
            echo "$i, ";
        }
        // BREAK hace lo mismo
        echo "<hr>";
        for($i=0;;$i++){
            echo"$i, ";
            if($i==100) break ;
        }

        //// ++$num (primero hace el incremento y luego devuelve la variable incrementada), $num++ (devuelve el numero y luego incrementa)
        
        echo"<br>";

        $var =56;
        echo ++$var."<br>"; //incrementa y devuelve 57 si fuera $var++ devolveria primero el numero de la variable y luego incrementa la segunda devuelve ya incrementado es decir 57
    
        echo $var;
        // -------------------- operador ternario
        $pass = "secret0";
        if($pass == "secret0"){
            echo "<br> Login correcto";
        } else {
            echo "<br> Login incorrecto";
        }

        // se puede hacer ahora con operador ternario mas facil

        echo ($pass=='secret0') ? "<br> Login correcto" : "<br> Login incorrecto"; // es una forma de simplificar un if y else y ya
    ?>
    
</body>
</html>