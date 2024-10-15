<?php

    include 'utilidades.php';
    // reogemos los datos del formulario
    $email=htmlspecialchars(trim($_POST['email'])); //quitamos epsacion en blanco al incio y al final
    $pass=htmlspecialchars(trim($_POST['password']));
    $provincia= $_POST['provincia'];

    $aficiones_recogida=(isset($_POST['aficiones'])) ? $_POST['aficiones'] : -1; // esto es controlar que si es es nulo da un array vacio si hay algo pues lo pilla
    // vamos a obligar a que el email sea valido
    // el password tenga al menos 5 caracteres
    // las provincias esten en el array de provincias
    // las aficiones esten en el array de aficiones
    // y que al menos hayamos marcado una 


    $errores=[];
// validamos password
    if(strlen($pass)<5) {

        $errores[] = "El campo Password debe tener al menos 5 caracteres";
    }
 // validamos email
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) { // espera un valor que en este caso seria la cadena y un filtro  
        $errores[]= "El campo email debe guardar un email válido";
    }

// valiamos aficiones
if($aficiones_recogida == -1) {
    $errores[] = "Elija una afición";

} else {

        foreach($aficiones_recogida as $item) {
            if(!in_array($item ,$aficiones)) {
               $errores[] = "Aficcion NO valida";
               break;
            }
        }

}

// validamos provincias

if(!in_Array($provincia,$provincias)){
    $errores[]='Elija una provincia';
}

if(count($errores)){

    echo "<center><h3>** ERRORES **</h3></center>";
    echo "<ol>";
    
    foreach($errores as $item){
        echo "<li>$item</li>";
    }
    echo "</ol>";

} else {
    
    echo "<center><h3>** DATOS **</h3></center>";
    echo "<br>Email: </br>$email<br>";
    echo "<br>Password: </br>$pass<br>";
    echo "<br>Provincia: </br>$provincia<br>";
    echo "<br>Aficiones</br>";
    echo "<ol>";
        foreach($aficiones_recogida as $item) {
            echo "<li>$item</li>";
        }
    echo "</ol>";

}   


    echo "$email<br>";
    echo "$pass<br>";


















?>