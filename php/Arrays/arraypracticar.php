<?php
    $depredadores=["León","Trigre","Gepardo","Pantera"];
    $herviboros=["Vaca","Ñu","Cabra","Caballo","oveja"];
    
    $tipos=["Depredadores"=>$depredadores,"Heviboros"=>$herviboros];

    foreach ($tipos as $key => $value ) { // asignas depredador como claves y se las asignas a los valores
        $contVal = count($value);
        echo "<table border 1>";
    echo "<tr><th align='center' colspan='".count($value)."'>$key</th></tr>";   
    echo "<tr>";
    for($j=0; $j < count($value); $j++ ){
        echo "<th>$value[$j]</th>";

        }
        echo "</tr>";
        echo "</table>";
        echo "<br>";

    }