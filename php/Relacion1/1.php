<!DOCTYPE html>
<html lang="es
">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border = 4 align="center" cellpadding=4 cellspacing=4>
        <?php

        $num=3;
        for($i=1; $i<=10; $i++){
            $multiplicacion =$i*$num;
           echo <<< TXT
                 <tr>
                  <td>$num</td>
                  <td>X</td>
                  <td>$i</td>
                  <td>=</td>
                  <td>$multiplicacion</td>


                </tr>
           TXT;
        }

        ?>
    </table>




    
</body>
</html>