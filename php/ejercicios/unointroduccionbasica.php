<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><center>Página PHP</center></h1>
    <?php   // asi empiezo a abrir el modo php...........
    echo "<b>Hola Mundo</b><br>";
    echo "<i>Linea 2</i><br>";
    echo 'Hola mundo';   // para String normal da igual usar comillas simples que dobles .............

    //Variables ...................
   /*
    Las variables siempre empiezan por $
   */
     $num=12;
     $nombre="usuario";
     echo '<br>';
     echo "El numero es: ".$num. " y el nombre es: ".$nombre .PHP_EOL; // el .PHP_EOL hace que a la hora de depurar el codigo en pagina se ves mejor con salto de linea tambien se puede usar \n provoca salto de linea y puede dar problemas es mejor el anterior | // donde el + en java era para concatenar aqui es un punto "."
     echo 'El numero es: $num'; // si pones comillas simples el codigo lo coge tal cual es decir saldria $num cuando pones comilla doble
     // para escapar de los caracteres especiales se usa \ delante de la variable es decir 
     echo "El valor de \$num es $num";
     echo "<br>;";
     echo 'El valor de $num es '.$num;    // esto es lo mismo que el de arriba.
     // si quiero que salga el nombre entre comillas dobles se puede poner de varias formas.
     echo "El nombre es \"$nombre\"";
     echo 'El nombre es "'.$nombre.'"';
     echo "<br>";
     echo "El nombre es '$nombre'";
     //.......................
     echo '<br>';
     $num1=45;
     echo "El tipo de \$num1 es: ".gettype($num1); // esto devuelve el tipo de dato que se le haya asignado a la variable
     // casting 
     $nombre = "50Pedro";
     echo '<br>';
     echo "El tipo de \$num1 es: ".gettype($nombe);
     $valor=$nombre+$num1;
     echo "<br El valor de \$valor es $valor y el tipo es: ".gettype($valor); // esto aunque sea una cadena nombre detecta el numero lo suma lanza un Warning por que dice que hay algo que no esta del todo bien ahora para que coja y haga el casting primero tiene que estar el numero a sumar en la variable que es una cadena es decir es 50Pedro pero no Pedro50

     $valor1= "4509A";
     $numero=(int) $valor1;
     echo "<br>";
     echo "El tipo de \$numero=$numero es: ".gettype($numero); // no tiene problemas al castear esto pero si pone AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA4509
     echo "<hr>";
     if() {
        echo "cierto";
     }else {
            
        echo "falso";
     }

    ?>
</body>
</html>