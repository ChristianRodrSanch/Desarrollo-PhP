<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /* Dados un numero y una cantidad mostraremos una cantida de numeros 
            multiplos de 7 a partir del numero dado
            ejemplo si el numero es 8 y la cantidad 4 mostrare 14,21,28,36 */

        $numeroDado = 8;
        $cantidad = 4;
        $cont = 1;
        echo "<hr> Los primeros $cantidad numeros multiplos de 7 a partir de $numeroDado son: <br>";
        for($i=$numeroDado; $cont <= $cantidad; $i++) {
                
            /* si pusiesemos if($i%7) devolveria lo que seria true ya que cuenta el 0 como falso y si lo encontramos con exclamacion
                seria le negacion es decir ya si te devolveria 0    */
            if($i%7 ==0){
                    echo "$i,";
                    $cont++;
                }
        }

    ?>
</body>
</html>