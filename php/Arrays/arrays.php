
    <?php
/* recordatorios un array es un tipo de variable especial permitiendo guardar varios valores en la misma variable
*/
    $provincias=['Sevilla','Almeria','Granada','Huelva'];
    $valores=array("uno","do","tres",);// Es lo mismo que la forma de arriba son similares pero esta en desuso

    echo "El tipo de provincias es: ".gettype($provincias)."<br>";
    print_r($provincias); // solo pra arrays
    echo "<br>";
    var_dump($provincias); // para cualquier variable u objeto

    //numero de  elementos de un array 

        echo"<br> El array provincias tiene " .count($provincias). " elementos";

        echo "<hr>";
        for($i=0; $i<count($provincias);$i++) { // asi es como recorres el array y muestras su elementos
            echo $provincias[$i]."<br>";
        }

        // podemos acceder una provincia concreta
        echo "<br> La provincia de indice 2 es: {{$provincias[2]}"; // siempre que queramos imprimir cosas de array en vez de concatenar o si lo vas a meter entre comillas doble con sus llaves

        // ---------------------------------------------
        echo "<hr>";
        $provincias="Madrid";
        $provincias="Barcelona";
        
        print_r($provincias);
        
        echo "<hr>";
        $provincias[0] = "Hilais";
        print_r($provincias);

        // ------------
        echo "<hr>";
        $provincias[7] ="Cordoba";  
        
        var_dump($provincias);
        echo "<hr> Recorriendo el array elemento a elemento: <br>";

        foreach($provincias as $prov) {
            echo "$prov<br>";
        }
        
        //---------------------------------------

        echo "<hr> Recorriendo el array elemento a elemento mostrando su valor y indice: <br>";

        foreach($provincias as $prov =>$valor) {
            echo "indice = $indice, valor=$valor<br>";
        }

        //------ Array asociativos

        $nombres= [
                'usuario1'=>'Juan',
                'usuario2'=>'Pedro',
                'usuario3'=>'Ana'
        ];

        echo "<hr><hr><hr>";
        echo $nombres['usuario1'];
        $nombres['usuario4']='Lola';
        echo "<br>";
        print_r($nombres);
        $nombres[] ='Lolita';
        echo "<br>";

        print_r($nombres);
        $nombres[] ='Juanito';
        echo "<br>";
        print_r($nombres);
        $nombres['usuario23'] ='Zacarias';

        echo "<hr>";
        foreach($nombres as $indice =>$valor) {
            echo "indice = $indice, valor=$valor<br>";
        }

        // como es un archivo php donde no metemos <html></html> ...
        // es inecesario cerrarlo con ?> 