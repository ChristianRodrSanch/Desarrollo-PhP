
    
    <table border = 4 align="center" cellpadding=4 cellspacing=4>
        <?php
        // rellenamos con numeros aleatorios entre 1 y 30
        // enteros random_int() un array de 20 elementos
        // creamos otro array con sus cuadrados
        //y otro con sus cubos
        // mostramos en una tabla de tres columnas los tres arrays
        //primera columna el array original
        //segunda los uadrados
        //tercera los cubos
        $original = [];
        $cuadrado = [];
        $cubo = [];
        echo <<< TXT
            <tr>
                <td>original</td>
                <td>cuadrado</td>
                <td>cubo</td>
        TXT;

        for($i=0; $i< 20; $i++){
            
            $numero = random_int(1,30);
            $original = $numero;
            $cuadrado = $numero * $numero;
            $cubo = $numero * $numero * $numero;


           echo <<< TXT
                 <tr>
                  <td>$original</td>
                  <td>$cuadrado</td>
                  <td>$cubo</td>
                </tr>
           TXT;
        }

        // ahora que no se repitan los numeros 
        $original1 = [];
        $cuadrado1 = [];
        $cubo1 = [];
        $cont = 0;
       while($cont <= 20){
        $numeros = random_int(1,30);
        if($numeros !== )
       }
        
        ?>
    </table>



