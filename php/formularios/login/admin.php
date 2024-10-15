<?php
session_start();
// A esta página solo podré entra si estoy logeado
// Y soy administrado
if (!isset($_SESSION['usuario'])) {
    header("Location:login.php");
    die();
}

if (!$_SESSION['perfil']) {
    header("Location:sitio.php");
    die();
}
$email = $_SESSION['usuario']; // Cuando vemos que no es ni usuario inválido ni un usuario no admin, guardamos la variable del email

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDNK tailwin css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- CDN FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>

<body class="p-12 bg-red-200">

    <h1 class="text-center text-2x1 font-bold"> Sitio del Administrador</h1>
    <p class="font-bold"> Usuario : <?php echo  $email ?></p>


</body>

</html>