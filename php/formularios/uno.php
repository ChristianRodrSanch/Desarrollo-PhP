<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- method = GET y method = POST -->
     <!-- si uso GET cuand envies el formulario sale todo en la URL por eso es conveniente para los datos personale GET no renta --> 
    <form method="POST" action="uno.php"> <!--  cuando use los $_GET tiene que haber en METHOD GET si es POST pues $_POST -->
        <input type="text" placeholder="Tu nombre ..." name="nombre" /> <br><br> <!-- todos los campos tienen que tener su nombre haciendo que podamos acceder a el-->
        <input type="email" placeholder="Tu email...." name="email"/> <br><br>
        <input type="password" placeholder="Tu contraseña...." name="contraseña"/> <br><br>


        <br> <br>

        <Select name="provincia">
        <option> Almeria</option>
        <option> Granada</option>
        <option> Sevilla </option>
        </Select>

        <br><br>
        Elige un color: <br><br>
        <input type="radio" name="color" value="Blanco"> Blanco <br>
        <input type="radio" name="color" value="Negro"> Negro <br>
        <input type="radio" name="color" value="Azul"> Azul <br>
        <input type="radio" name="color" value="Amarillo"> Amarillo <br>
        <!-- IMPORTANTE SI NO MARCAS NINGUN CHECK BOX O RADIO NO ENVIA NINGUN DATO -->

        Elige una aficcion <br>

        <input type="checkbox" name="aficiones[]" value="Bici"> Ciclismo </input> <br>
        <input type="checkbox" name="aficiones[]" value="Cine"> Cine </input> <br>
        <input type="checkbox" name="aficiones[]" value="Php"> PHP </input> <br>
        <input type="checkbox" name="aficiones[]" value="Historia"> Historia </input> <br>



        <input type='submit' />
    


    </form>   
</body>
</html>