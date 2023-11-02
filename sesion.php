<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/yo.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/normalize.css">
    
</head>
<body>
<header class="header2">
        <div class="contenedor">
            <div class="barra">
                <a class="logo" href="inicio.php">
                    <img src="img/logot.png" alt="">
                </a>
                <nav class="navegacion">
                    <a href="inicio.php" class="navegacion__enlace">INICIO</a>
                    
                </nav>
            </div>
        </div>
    </header>

    <form  method="post" class="formu">
        <div>
            <h2>Inicio De Sesion</h2>
           
        </div>
        <input class="inpute"  id="nombre" type="text" name="name" placeholder="Nombre completo" > 

        <input class="inpute" id="contraseña" type="password" name="password" placeholder="Contraseña" >
        <input class="registrir"  id="enviarr"    type="submit" name="register">
        <br>
        <br>
        <br>

        <div class="si" >

            <a href="registro.php" >¿No tienes cuenta? Registrate aqui</a>
        </div>
     </form>
    

     <?php
            include("controlador/controlador.php");

          ?>
</body>
</html>