<?php
session_start();
if (empty( $_SESSION ["idCliente"])) {
    header("location: sesion.php");
}

?>

<!DOCTYPE html>
<html lang="eS  ">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOSPEDAJE</title>
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
            <h1>HOSPEDAJE</h1>
            <!-- 1 -->
            <div class="alli">
                <div>
                    <img class="allimg" src="img/habitacion 3.jpeg" alt="">
                </div>
                <div class="lit">
                    <p>Hermosa habitacion confortable rustica campestre, se encuentra en un primer piso.</p>
                    <p> Es una habitacion familiar para 4 o maximo 5 personas.</p>

                    <p>Cuenta con:</p>
                    <ul>
                        <li> Cama doble</li>
                        <li> Camarote</li>
                        <li>Cama auxiliar </li>
                        <li>Ventilador </li>
                        <li>Aire acondicionado</li>
                        <li>Baño privado</li>
                    </ul>
                </div>
            </div>
            <!-- 2 -->
            <div class="alli" id="copall">
                <div class="lit">
                    <p>Hermosa habitacion confortable rustica campestre, se encuentra en un primer piso.</p>
                    <p> Es una habitacion familiar para 4 o maximo 5 personas.</p>

                    <p>Cuenta con:</p>
                    <ul>
                        <li> Cama doble</li>
                        <li> Camarote</li>
                        <li>Cama auxiliar </li>
                        <li>Ventilador </li>
                        <li>Aire acondicionado</li>
                        <li>Baño privado</li>
                    </ul>
                </div>
                <div>
                    <img class="allimg" src="img/hab4.jpeg" alt="">
                </div>
            </div>
            <!-- 3 -->
            <div class="alli">
                <div>
                    <img class="allimg" src="img/hab5.jpeg" alt="">
                </div>
                <div class="lit">
                    <p>Hermosa habitacion confortable rustica campestre, se encuentra en un primer piso.</p>
                    <p> Es una habitacion 2 personas.</p>

                    <p>Cuenta con:</p>
                    <ul>
                        <li> Cama doble</li>
                        <li>TV</li>
                        <li>Ventilador </li>
                        <li>Baño privado</li>
                    </ul>
                </div>
            </div>
            <!-- 4 -->
            <div class="alli" id="copall">
                <div class="lit">
                    <p>Hermosa habitacion confortable rustica campestre, se encuentra en un primer piso.</p>
                    <p> Es una habitacion para 2 o 3 personas.</p>

                    <p>Cuenta con:</p>
                    <ul>
                        <li> Cama doble</li>
                        <li> Cama sencilla</li>
                        <li>TV </li>
                        <li>Ventilador </li>
                        <li>Baño privado</li>
                    </ul>
                </div>
                <div>
                    <img class="allimg" src="img/hab6.jpeg" alt="">
                </div>
            </div>
            <!-- 5 -->
            <div class="alli">
                <div>
                    <img class="allimg" src="img/hab6.jpeg" alt="">
                </div>
                <div class="lit">
                    <p>Hermosa habitacion confortable rustica campestre, se encuentra en un primer piso.</p>
                    <p> Es una habitacion para 2 o 3 personas.</p>

                    <p>Cuenta con:</p>
                    <ul>
                        <li> Cama doble</li>
                        <li> Cama sencilla</li>
                        <li>TV </li>
                        <li>Ventilador </li>
                        <li>Baño privado</li>
                    </ul>
                </div>
            </div>
            <!-- 6 -->
            <div class="alli" id="copall">
                <div class="lit">
                    <p>Hermosa habitacion confortable en Bahareque rustica campestre, se encuentra en un primer piso.
                    </p>
                    <p> Es una habitacion para 2 o 3 personas.</p>

                    <p>Cuenta con:</p>
                    <ul>
                        <li> Cama doble</li>
                        <li> Cama sencilla</li>
                        <li>TV </li>
                        <li>Ventilador </li>
                        <li>Baño privado</li>
                    </ul>
                </div>
                <div>
                    <img class="allimg" src="img/hab6.jpeg" alt="">
                </div>
            </div>
            <!-- 7 -->
            <div class="alli">
                <div>
                    <img class="allimg" src="img/hab8.jpeg" alt="">
                </div>
                <div class="lit">
                    <p>Hermosa habitacion confortable rustica campestre, se encuentra en un segundo piso.</p>
                    <p> Es una habitacion familiar para 4 o maximo 5 personas.</p>

                    <p>Cuenta con:</p>
                    <ul>
                        <li> Cama doble</li>
                        <li> Camarote</li>
                        <li>Cama auxiliar </li>
                        <li>Ventilador </li>
                        <li>Aire acondicionado</li>
                        <li>Baño privado</li>
                    </ul>
                </div>
            </div>
            <!-- 8 -->
            <div class="alli" id="copall">
                <div class="lit">
                    <p>Hermosa habitacion confortable rustica campestre, se encuentra en un primer piso.</p>
                    <p> Es una habitacion familiar para 4 o maximo 5 personas.</p>
                    
                    <p>Cuenta con:</p>
                    <ul>
                        <li> Cama doble</li>
                        <li> Camarote</li>
                        <li>Cama auxiliar </li>
                        <li>Ventilador </li>
                        <li>Baño privado</li>
                    </ul>
                </div>
                <div>
                    <img class="allimg" src="img/hab9.jpeg" alt="">
                </div>
            </div>
            <!-- 9 -->
            <div class="alli" >
                <div>
                    <img class="allimg" src="img/hab10.jpeg" alt="">
                </div>
                <div class="lit">
                    <p>Hermosa habitacion doble familiar, confortable rustica campestre, se encuentra en un segundo
                        piso.</p>
                    <p> Es una habitacion familiar para maximo 10 personas.</p>

                    <p>Cuenta con:</p>
                    <ul>
                        <li> 2 Camas dobles</li>
                        <li> 2 Camarotes</li>
                        <li>2 Camas auxiliares </li>
                        <li>2 Ventiladores </li>
                        <li>Aire acondicionado</li>
                        <li>Baño privado</li>
                    </ul>
                </div>
            </div>
            <!-- 10 -->
            <div class="alli" id="copall">
                <div class="lit">
                    <h1>PAQUETE ENAMORADOS</h1>
                    <p>Villa Clarita te ofrece un espectacular paquete... Si buscas celebrar una fecha especial con tu
                        pareja en un lugar espectacular, lleno de naturaleza, para poder descansar, te tenemos un
                        excelente plan...</p>
                        <p> Este espectacular paquete para parejas</p>
                        
                        <p>Cuenta con:</p>
                        <ul>
                            <li>Hospedaje por 1 noche</li>
                            <li> Cena y bebida para 2</li>
                            <li>Servicios de piscinas</li>
                            <li>Decoracion de la habitacion </li>
                            <li>Champaña en la habitacion</li>
                            <li>Parqueadero</li>
                        </ul>
                    </div>
                    <div>
                        <img class="allimg" src="img/hab11.jpeg" alt="">
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