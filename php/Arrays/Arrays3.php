<?php   
$andalucia=["Almeria","Granada","Málaga","Jaén","Sevilla","Córdoba","Huelva","Cádiz"];

$extremadura=["Badajoz","Cáceres"];

$valencia=["Alicante","Valencia","Castellón"];

$madrid=["Madrid"];

$comunidades= ["Andalucìa" => $andalucia,"Extremadura" => $extremadura,"Valencia" => $valencia,"Madrid"=>$madrid];

foreach($comunidades as $key => $value){
    $ContVal = count($value);
    echo "<table border 1>";
    echo "<tr><th align='center' colspan='".count($value)."'>$key</th></tr>";   
    echo "<tr>";
    for ($j = 0; $j < count($value); $j++){
        echo "<th>$value[$j]</th>";

        }
        echo "</tr>";
        echo "</table>";
        echo "<br>";
    
    }