<?php

$usuarios = [

    'admin@gmail.com' =>
    ['$2y$10$OiJwTq9DZ.3Rb4L2WyEh8.zLnh91YggVElvJKiZKFTIbhul0TJug2',true], // esto es para indicar cual es el admin y cual no el TRUE O FALSE
    'user@gmail.com' =>
    ['$2y$10$OiJwTq9DZ.3Rb4L2WyEh8.zLnh91YggVElvJKiZKFTIbhul0TJug2',false],
    'use2@gmail.com' =>
     ['$2y$10$OiJwTq9DZ.3Rb4L2WyEh8.zLnh91YggVElvJKiZKFTIbhul0TJug2',false],


];

function sanearCadenas(String $cadena) : string{
    return htmlspecialchars(trim($cadena));
}
function isLongitudValida(String $cadena, int $min, int $max) : bool {

return !(strlen($cadena)<$min || strlen($cadena)>$max);

}

function pintarErrores(string $nombre) {

    if(isset($_SESSION[$nombre])) {
        echo "<p class='italic text-red-600 text-sm mt-2' > {$_SESSION[$nombre]}</p>";
        unset($_SESSION[$nombre]);
    }

}

function validarUsuario(String $email, int $password) : bool {
    global $usuarios;
    foreach($usuarios as $emailUsuario => $datosUsuario){
        if($emailUsuario == $email) {
            if(password_verify($password,$datosUsuario[0])){
                return true;
            }
        }
    }
}

 // echo password_hash("secret0",PASSWORD_BCRYPT); ESTO ES PARA QUE CREE UNA CONTRASEÑA ALEATORIA