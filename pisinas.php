<?php
session_start();
if (empty( $_SESSION ["idCliente"])) {
    header("location: sesion.php");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PISCINAS</title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/normalize.css">

</head>

<body>
    <header class="barra2">
        <div class="contenedor">
            <div class="barra">
                <a class="logo" href="inicio.php">
                    <img src="img/logot.png" alt="">
                </a>
                <nav class="navegacion">
                    <a href="contacto.php" class="navegacion__enlace">Contactos</a>
                    <div class="navegacion__enlace">
                     <?php
                       echo $_SESSION["nomCliente"];
                     ?>
                    </div>
                </nav>

            </div>


        </div>

    </header>
    <main class="poscaja">
        <div class="caja">
            <h1>SERVICIO DE PISCINAS</h1>
            <div class="all">
                <div >
                    <img class="alimg" src="img/piscinas1.jpeg" alt="">
                </div>
                <div class="pitext">
                    <p></p>
                </div>
            </div>

            <div class="all" id="copall">
                <div class="pitext">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora cupiditate illum animi dicta, libero aut vitae labore ipsam dolores ullam eos totam fugit maxime laborum sequi molestias. Adipisci, minima quaerat.</p>
                </div>
                <div >
                    <img class="alimg" src="img/piscinas2.jpeg" alt="">
                </div>
            </div>

            <div class="all">
                <div>
                    <img class="alimg" src="img/pisinas10.jpeg" alt="">
                </div>
                <div class="pitext">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non ad delectus iste repellendus deleniti veniam maiores est autem nisi nobis, sequi vero tempore. Non assumenda ducimus ullam inventore alias harum?</p>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="contenedor">
            <div class="barra">
                <a class="logo" href="inicio.php">
                    <img src="img/logot.png" alt="">
                </a>
                <nav class="navegacion">
                <a href="controlador/controlador_sesion_cerrada.php" class="navegacion__enlace">CERRAR SESION</a>
                    
                </nav>
            </div>
        </div>
    </footer>
</body>

</html>