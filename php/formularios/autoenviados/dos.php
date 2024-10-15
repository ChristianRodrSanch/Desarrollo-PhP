<?php
    session_start();
// include,include_once, require,require_once
// include_once lo que hace es comprobar que el codigo que esta trayendo esta incluido en otro archivos o no
// require si no encuentra el archivo para el codigo
     require '../utilidades.php';
    //require __DIR__."/.../utilidades.php";
    if(isset($_POST['btnGuardar'])) {
        //Procesamos el formulario
        // 1.- recogmos los datos y saneamos y limpiamos
        $email = limpiarCadenas($_POST['email']);
        $password = limpiarCadenas($_POST['password']);
        $provincia = limpiarCadenas($_POST['provincia']);
        $aficioneElegidas= limpiarCadenas($_POST['aficiones'])
        ? ($_POST['aficiones'])
        : -1 ;
        //2.- Validaciones (nombre al menos 3 caracteres, email valido alguna aficion y alguna prov)
        $errores = false;
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores = true;
            $_SESSION['errEmail'] = "*** El email NO es válido";
        }

        if(strlen($password) < 5 || strlen($password)> 15){

            $errores = true;
            $_SESSION['errPass'] = "*** El password debe tener entre 5 y 15 caracteres";
        }

        if(!in_array($provincia,$provincias)) {
            $errores = true;
            $_SESSION['errProv']= "*** Debes elegir una provincia";
        }

        if($aficionesElegidas == -1) {
            $errores=true;
            $_SESSION['errAfi']= "*** Debes elegir una afición";
        } else {
            // aficiones = [todas]
            // misAficiones[elegidas]
            foreach($aficionesElegidas as $item) {
                if(!in_array($item,$aficiones)) {
                    $errores=true;
                    $_SESSION['errAfi']= "*** Aficion erronea, intento de ataque";
                    break;
                }
            }
        }


        if($errores) {

            header("Location:dos.php ");

        } else {
            // muestro los datos
            echo "<br>Datos correctos<br>";
            echo "Emai: $email <br>";
            echo "Password: $password<br>";
            echo "Provincia: $provincia";
            foreach($aficionesElegidas as $item){

                echo "$item<br>"

            }
        }
        

    } else {
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous" />
    <title>Document</title>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?> class="max-w-sm mx-auto">
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu email:</label>
            <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required />
        </div>
        <div class="mb-5">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu contraseña:</label>
            <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        </div>
        <div class="mb-5">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecciona tu provincia</label>
            <select id="countries" name="provincia" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>----- Elige una provincia -----</option>
                <?php
                foreach ($provincia as $item) {
                    echo "<option>$item</option>\n";
                }
                ?>
            </select>
        </div>

        <div class="flex">
            <?php
            foreach ($aficiones as $item) {
                echo <<<TXT
                <div class="flex items-center me-4">
                    <input id="inline-checkbox" name="aficiones[]" type="checkbox" value="$item" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="inline-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">$item</label>
                </div>
                TXT;
            }
            ?>
        </div>

        <button name='btnGuardar' class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Guardar</button>
    </form>
</body>

</html>

<?php
    }
?>