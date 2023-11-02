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
    <title>RESTAURANTE</title>
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

    <div class="cur">
        <h2>MENU</h2>
        <h3>PLATOS A LA CARTA $20.000</h3>
        <div class="curs">
            <div class="cu">
                <img src="img/bandeja paisa.jpeg" alt="">
            </div>
            <div class="curso">
                <h1>BANDEJA PAISA</h1>
                <p>Arroz,frijol,carne molida,huevo frito,tajada,chorizo,arepa,aguacate,chicharron</p>
                <h1>CERDO AHUMADO (250gr)</h1>
                <p>Lomo de cerdo ahumado acompañado de arroz,papas a la francesa,ensalada.</p>
                <h1>CHULETA DE CERDO (250gr)</h1>
                <p>Chuleta de cerdo tipo Valluna(apanada),acompañado de arroz,papas a la francesa,ensalada.</p>
                <h1>PECHUGA A LA PLANCHA (250gr)</h1>
                <p>Acompañado de arroz,papas a la francesa,ensalada.</p>
                <h1>POLLO AL BROASTER (500gr)</h1>
                <p>Acompañado de arroz,papas a la francesa,ensalada,tasa de sopa.</p>
                <h1>SANCOCHO DE POLLO (500gr)</h1>
                <p>Sopa,pierna pernil,cocido,(platano,papa,yuca,mazorca,auyama) acompañado de arroz y ensalada.</p>
            </div>
        </div>
        <h3>PLATOS ESPECIALES $25.000</h3>
        <div class="curs">
            <div class="cu">
                <img class="especiales" src="img/carne1.jpeg" alt="">
            </div>
            <div class="curso">
                <h1>CERDO HAWAIANO (250gr)</h1>
                <p>Lomo de cerdo a la placha,bañado en salsa de piña,acompañado de arroz,papa a la francesa,ensalada.
                </p>
                <h1>COSTILLAS DE CERDO EN SALSA BBQ (250gr)</h1>
                <p>Acompañado de arroz,croquetas de yuca,papas a la francesa,ensalada.</p>
                <h1>CHURRASCO ARGENTINO (250gr)</h1>
                <p>Acompañado de arroz,croquetas de yuca,papas a la francesa,ensalada.</p>
                <h1>MOJARRA FRITA (500gr)</h1>
                <p>Acompañado de arroz,pataconas,ensalada.</p>
                <h1>MOJARRA SUDADA (500gr)</h1>
                <p>Acompañado de arroz,papa al vapor,yuca al vapor,ensalada.</p>
                <h1>PARRILLADA (250gr)</h1>
                <p>Acompañado de pataconas,croquetas de yuca,papas a la francesa,chorizo,res,cerdo,pollo,chicarron.</p>
                <h1>POLLO EN CHAMPIÑONES (250gr)</h1>
                <p>Pechuga de pollo bañada en salsa de champiñones,acompañado de arroz,papas a la francesa,ensalada.</p>
            </div>
        </div>
        <h3>BEBIDAS</h3>
        <div class="curs">
            <div class="cu">
                <img class="bebidas" src="img/cervezas.jpg" alt="">
            </div>
            <div class="curso">
                <h1>CERVEZAS:</h1>
                <p>Aguila..........................................................$4.000</p>

                <p> Aguila Ligth..........................................................$4.500</p>

                <p>Club Colombia..........................................................$5.000</p>

                <h1>JUGOS NATURALES EN AGUA</h1>
                <p>Vaso..........................................................$3.000</p>

                <p> Jarra Basica..........................................................$6.500</p>

                <p>Jarra Familiar..........................................................$10.000</p>

                <h1>GASEOSAS</h1>
                <p>Postobon personal..........................................................$3.000</p>

                <p>Coca-Cola personal....................................................$3.500</p>

                <p> Postobon 2.5L..........................................................$7.000</p>

                <p>Coca-Cola 2.5L...........................................$8.500</p>

                <p>Postobon 3.0L..................................................$8.000</p>

                <p>Coca-Cola 3.0L.................................................$10.000</p>
                <h1>AGUA EN BOTELLA</h1>
                <p>Agua Pet.................................................$3.000</p>
                <h3>ADICIONALES</h3>
                <p>Taza de sopa................................................$3.000</p>

                <p>Taza de frijol..............................................$6.000</p>

                <p>Porcion de arroz..................................................$3.000</p>

                <p>Porcion de pataconas...........................................................$4.000</p>

                <p>Porcion de papas a la francesa..............................................$4.000</p>

                <p>Porcion de chicharron.................................................$5.000</p>
            </div>
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