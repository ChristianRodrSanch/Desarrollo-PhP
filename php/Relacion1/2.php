<?php
    $num = $_GET['num'];
 if($num > 1  &&  $num!= null){
    $flag = true;
 $contarDiv = 0;
    for ($i=2; $i < $num; $i++){
        if($num%$i ==0){
            $flag = false;
            break;

         }
    }
    if($flag){
        echo "El numero " .$num. " es PRIMO";
        
    }else {
        echo "El numero " .$num. " NO es PRIMO";
    }
}

    
 ?>