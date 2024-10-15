<?php
    session_start();
    require 'utilidades.php';
    
   

    if(isset($_POST['email'])){
        // Si estoy aqui he enviado el formulario
        // 1.- recojo y limpio los datos
        $email = sanearCadenas($_POST['email']);
        $pass = sanearCadenas($_POST['password']);

        // 2.- Hacemos las validaciones pertinentes
        $errores = false;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errores = true;
            $_SESSION['errEmail'] = "*** Error, debe introducir un email valido.";
        }

        if(!isLongitudValida($pass,5,15)) {
            $errores = true;
            $_SESSION['errPass']= "***Error, la contraseña debe tener entre 5 y 15 caracteres";
        }

        // Si no hemos pasado las validaciones vuelvo a cargar el form para ver errores
        if($errores) {
            header("Location:".$_SERVER['PHP_SELF']);
            die();
        }

        // Si se ha llegado hasta aqui se confirma que los campos son correctos 
        // Procedemos a validar los usuarios

            // La primera será el email del usuario, el segundo la contraseña y el perfil
        foreach($usuarios as  $emailUsuario =>$datoUsuario){
            if($emailUsuario == $email) {       // Verificamos el email
                if(password_verify($pass, $datoUsuario[0])){ // Verificamos la contraseña
                    
                    $_SESSION['usuario'] = $email;
                    $_SESSION['perfil'] = $usuarios[$email][1];
                    header("Location:sitio.php"); 
                    die();
                }
            } 
        }
        

        // Si llego hasta aqui es porque login es invalido
        $_SESSION['errLogin'] = "*** Error email o password incorrectos.";
        header("Location:".$_SERVER['PHP_SELF']);
        die();
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- CDN FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>
<body>
<form class="max-w-sm mx-auto" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
  <div class="mb-5">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
    <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tu email..." />
    <?php
        pintarErrores('errEmail'); // Muestra errores de email
        pintarErrores('errLogin'); // Muestra errores de login
    ?>
  </div>
  <div class="mb-5">
    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
    <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
    <?php
        pintarErrores('errPass'); // Error de contraseña
    ?>
  </div>
  
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>
</body>

</html>
