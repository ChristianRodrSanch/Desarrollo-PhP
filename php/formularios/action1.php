<?php

//  $nombre = $_GET['nombre']; // tengo que poner en el get exactamente el mismo nombre que uso en el HTML
//  $email = $_GET['email'];
//  $contraseña = $_GET['contraseña'];

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
$provincia = $_POST['provincia'];
$color= (isset  ($_POST['color'])) ? $_POST['color'] : "Ninguno";    // esto controlas que si es nulo o no 

 //$aficiones =[]; // esto no es necesario realmente declarar el array
$aficiones = (isset($_POST['aficiones'])) ? $_POST['aficiones'] : [];


 echo "El nombres es $nombre, el email $email, la contraseña es $contraseña, la provincia es $provincia, el color es $color";

 if(count($aficiones)) { 
    foreach($aficiones as $item){ // cualquier numero que NO sea 0 es true
        echo "$item.<br>";
    }
 }else{
        echo "<br> No elegiste ninuna afición";
 }
    
 echo "<br>";
 echo '<a href=uno.php';