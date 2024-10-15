<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            //6.- me dan dos numeros y quiero que me muestre todos los multiplos de 7 entre los dos
           $numero1 = 200;
           $numero2 = 400;
           $cont = 0;
           
            for($i=$numero1; $i <= $numero2; $i++) {
                if($i%7 ==0){
                    echo "$i,";
                    $cont++;
                }
        }

        echo "<br> Hay un total de $cont multiplos";
   ?>

</body>
</html>