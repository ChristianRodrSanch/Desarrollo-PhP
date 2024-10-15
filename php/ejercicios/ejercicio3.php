<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     //3.- Programa que me enseñe los primos entre dos numeros dados y me diga la cantidad, ambos mayor que 100

    $num1 = 100;
    $num2 = 1000;
    $cont = 0;
    echo "<hr>";
    echo "Los números primos entre $num1 y $num2 son:<br>";
    for ($cand = $num1; $cand <= $num2; $cand++) {
        $flag = true;
        for ($i = 2; $i < $cand; $i++) {
            if ($cand % $i == 0) {
                $flag = false;
                break;
            }
        }
        if ($flag) {
            echo "$cand, ";
            $cont++;
        }
    }
    ?>
</body>
</html>