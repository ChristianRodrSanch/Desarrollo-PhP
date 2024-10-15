<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = 4 align="center" cellpadding=4 cellspacing=4>
    <?php
                    // una tabla que cuando le pases el numero y vaya por linea multiplicandolo
        $num = 20;
        $num2 = 0;
        
        do{
            $resultado = $num * $num2;

            echo "<tr>";
            echo "<td>".$num."</td>";
            echo "<td> X </td>";
            echo "<td>".$num2."</td>";
            echo "<td> = </td>";
            echo "<td>".$resultado."</td>";
            echo "</tr>";
            $num2++;

            
        }while($num2 <= $num); 

        // PARA CASOS DONDE NECESITO USAR MUCHOS ECHO O CONCATENAR COMO ARRIBA SE PUEDE UTILIZAR

    ?>
    
    <table border = 4 align="center" cellpadding=4 cellspacing=4>
        <?php

        $num=10;
        for($i=1; $i<=$num; $i++){
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

