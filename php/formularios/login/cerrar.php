<?php
session_start();
session_destroy();
header("Location:login.php");

// basicamente es iniciar la sesion y luego destruir es cerrar todas las sesiones