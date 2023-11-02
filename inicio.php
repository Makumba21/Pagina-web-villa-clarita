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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VILLA CLARITA</title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/normalize.css">
</head>

<body>
    <header class="header">
        <div class="contenedor">
            <nav class="nav container" id="nav">
                <a class="logo" href="inicio.php">
                    <img class="nav__logo" src="img/logot.png">
                </a>
                 <nav class="navegacion">
                    <a href="contacto.php" class="navegacion__enlace">Contactos</a>
                    <div class="navegacion__enlace">
                     <?php
                       echo $_SESSION["nomCliente"];
                     ?>
                    </div>
                </nav>
            </nav>
            
        </div>
        <div class="header__texto">
            <h2 class="no--margin">DISFRUTA LO NATURAL</h2>
            <h3 class="no--margin">Un verdadero descanso</h3>
        </div>
        <div class="circulo__img">
            <img class="circulo1" src="img/CIRCULO2.jpeg" alt="">
            <img class="circulo2" src="img/circulo7.jpeg" alt="">
            <img class="circulo3" src="img/circulo10.jpeg" alt="">
        </div>
    </header>
    <div class="contenedor">
        <h3 class="texto">NUESTROS SERVICIOS</h3>
        <!--- INICIO DE CARTA -->
        <div class="container__card">
            <div class="card__father">
                <div class="card">
                    <div class="card__front" style="background-image: url(img/PASADIA\ \(1\).jpeg);">
                        <div class="bg"></div>
                        <div class="body__card_front">
                            <h2>PASADIA</h2>
                        </div>
                    </div>
                    <div class="card__back">
                        <div class="body__card_back">
                            <div class="letra">
                                <h1>PASADIA</h1>
                                <p>¿Cansado del ruido de la ciudad y el humo de los autos? Te tenemos la solución, ven y respira aire puro mientras disfrutas de la naturaleza con los que más quieres en el centro recreacional Villa Clarita
                                </p>
                            </div>
                            <div class="boton">
                                <a href="pasadia.php">
                                    <input id="buu" type="button" value="Ver más">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card__father">
                <div class="card">
                    <div class="card__front" style="background-image: url(img/PISCINA.jpeg);">
                        <div class="bg"></div>
                        <div class="body__card_front">
                            <h2>PISCINAS</h2>
                        </div>
                    </div>
                    <div class="card__back">
                        <div class="body__card_back">
                            <div class="letra">
                                <h1>PISCINAS </h1>
                                <p>Que mejor descanso que un buen chapuzon en nuestras hermosas piscinas de agua natural y de agua tratada
                                </p>
                            </div>
                            <div class="boton">
                                <a href="pisinas.php">
                                    <input id="buu" type="button" value="Ver más">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card__father">
                <div class="card">
                    <div class="card__front" style="background-image: url(img/hospedaje2.jpeg);">
                        <div class="bg"></div>
                        <div class="body__card_front">
                            <h2>HOSPEDAJE</h2>
                        </div>
                    </div>
                    <div class="card__back">
                        <div class="body__card_back">
                            <div class="letra">
                                <h1>HOSPEDAJE </h1>
                                <p>Centro Recreacional Villa Clarita maneja confortables habitaciones rusticas para asegurarte un verdadero descanso para ti y tu familia
                                </p>
                            </div>
                            <div class="boton">
                                <a href="HOSPEDAJE.php">
                                    <input id="buu" type="button" value="Ver más">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIN DE CARTA  -->
        </div>
        <!--- INICIO DE CARTA -->
        <div class="container__card">
            <div class="card__father">
                <div class="card">
                    <div class="card__front" style="background-image: url(img/RESTAURANTE3.jpeg);">
                        <div class="bg"></div>
                        <div class="body__card_front">
                            <h2>RESTAURANTE</h2>
                        </div>
                    </div>
                    <div class="card__back">
                        <div class="body__card_back">
                            <div class="letra">
                                <h1>RESTAURANTE</h1>
                                <p>
                                    Te ofrecemos una variedad de platos exquisitos para tu
                                    paladar. Puedes escoger cualquier plato de nuestro menú, en caso de requerir un plato
                                    en especial nuestra chef está a su disposición
                                </p>
                            </div>
                            <div class="boton">
                                <a href="restaurante.php">
                                    <input id="buu" type="button" value="Ver más">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card__father">
                <div class="card">
                    <div class="card__front" style="background-image: url(img/RESTAURANTE.jpeg);">
                        <div class="bg"></div>
                        <div class="body__card_front">
                            <h2 class="letter">EVENTOS SOCIALES Y EMPRESARIALES</h2>
                        </div>
                    </div>
                    <div class="card__back">
                        <div class="body__card_back">
                            <div class="letra">
                                <h1>EVENTOS</h1>
                                <p>Nada mejor que tus eventos al aire libre y rodeado de la naturaleza. Nosotros somos los
                                    indicados para eso
                                </p>
                            </div>
                            <div class="boton">
                                <a href="eventos.php">
                                    <input id="buu" type="button" value="Ver más">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIN DE CARTA  -->
        </div>
    </div>
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