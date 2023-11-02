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
    <title>EVENTOS</title>
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
    <main>
        <!-- 
        <div class="evet">
            <p>Eventos sociales y empresariales:</p>

                <p>Manejamos la organización de eventos de clase empresariales 
                   y sociales como son: 
                   <li>Bautizos</li> 
                   <li>Cumpleaños</li> 
                   <li>Quinceaños</li>
                   <li>Bodas</li></p>
                
                Contamos con manejo especial y detallado para tus eventos</p>
        </div>
        <div class="ift">
            <div>
                <img class="ft" src="img/eve1.jpeg" alt="">
            </div>
            <div>           
                <img class="ft" src="img/eve2.jpeg" alt="">
            </div>
            <div>
                <img class="ft" src="img/eve3.jpeg" alt="">
            </div>
            <div>
                <img class="ft" src="img/eve4.jpeg" alt="">
            </div>
        </div> -->
        <span class="titli"><h1>EVENTOS</h1></span>
        <div class="content">
    
            <div class="texto-1">
    
                <div id="conteItemCarrusel">
                    <!-- primera imagen -->
                    <div class="itemCarrusel" id="itemCarrusel1">
                        <div class="tarjetaCarrusel" id="tarjetaCarrusel1"><img src="img/eve1.jpeg" alt="">
                        
                        </div>
                        <div class="flechasCarrusel">
                            <a href="#itemCarrusel5" onclick="stopDefAction(event)">
                                <svg xmlns="http://www.w3.org/2000/svg" height="2em"
                                    viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        svg {
                                            fill: #ffffff
                                        }
                                    </style>
                                    <path
                                        d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160zm352-160l-160 160c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L301.3 256 438.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0z" />
                                </svg>
                            </a>
                            <a href="#itemCarrusel2" >
                                <svg xmlns="http://www.w3.org/2000/svg" height="2em"
                                    viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        svg {
                                            fill: #ffffff
                                        }
                                    </style>
                                    <path
                                        d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- segunda imagen -->
                    <div class="itemCarrusel" id="itemCarrusel2">
                        <div class="tarjetaCarrusel" id="tarjetaCarrusel2"><img src="img/eve2.jpeg" alt=""></div>
                        <div class="flechasCarrusel">
                            <a href="#itemCarrusel1" onclick="stopDefAction(event)">
                                <svg xmlns="http://www.w3.org/2000/svg" height="2em"
                                    viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        svg {
                                            fill: #ffffff
                                        }
                                    </style>
                                    <path
                                        d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160zm352-160l-160 160c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L301.3 256 438.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0z" />
                                </svg>
                            </a>
                            <a href="#itemCarrusel3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="2em"
                                    viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        svg {
                                            fill: #ffffff
                                        }
                                    </style>
                                    <path
                                        d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- tercera imagen -->
                    <div class="itemCarrusel" id="itemCarrusel3">
                        <div class="tarjetaCarrusel" id="tarjetaCarrusel3"> <img src="img/eve3.jpeg" alt=""></div>
                        <div class="flechasCarrusel">
                            <a href="#itemCarrusel2" >
                                <svg xmlns="http://www.w3.org/2000/svg" height="2em"
                                    viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        svg {
                                            fill: #ffffff
                                        }
                                    </style>
                                    <path
                                        d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160zm352-160l-160 160c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L301.3 256 438.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0z" />
                                </svg>
                            </a>
                            <a href="#itemCarrusel4" >
                                <svg xmlns="http://www.w3.org/2000/svg" height="2em"
                                    viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        svg {
                                            fill: #ffffff
                                        }
                                    </style>
                                    <path
                                        d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- cuarta imagen -->
                    <div class="itemCarrusel" id="itemCarrusel4">
                        <div class="tarjetaCarrusel" id="tarjetaCarrusel4"> <img src="img/eve4.jpeg" alt=""></div>
                        <div class="flechasCarrusel">
                            <a href="#itemCarrusel3" onclick="stopDefAction(event)">
                                <svg xmlns="http://www.w3.org/2000/svg" height="2em"
                                    viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        svg {
                                            fill: #ffffff
                                        }
                                    </style>
                                    <path
                                        d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160zm352-160l-160 160c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L301.3 256 438.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0z" />
                                </svg>
                            </a>
                            <a href="#itemCarrusel5" onclick="stopDefAction(event)">
                                <svg xmlns="http://www.w3.org/2000/svg" height="2em"
                                    viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        svg {
                                            fill: #ffffff
                                        }
                                    </style>
                                    <path
                                        d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- quinta imagen -->
                    <div class="itemCarrusel" id="itemCarrusel5">
                        <div class="tarjetaCarrusel" id="tarjetaCarrusel5"> <img src="img/eve5.jpeg" alt=""></div>
                        <div class="flechasCarrusel">
                            <a href="#itemCarrusel4" onclick="stopDefAction(event)">
                                <svg xmlns="http://www.w3.org/2000/svg" height="2em"
                                    viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        svg {
                                            fill: #ffffff
                                        }
                                    </style>
                                    <path
                                        d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160zm352-160l-160 160c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L301.3 256 438.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0z" />
                                </svg>
                            </a>
                            <a href="#itemCarrusel1" onclick="stopDefAction(event)">
                                <svg xmlns="http://www.w3.org/2000/svg" height="2em"
                                    viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        svg {
                                            fill: #ffffff
                                        }
                                    </style>
                                    <path
                                        d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
    
            </div>
            <div class="pr evet texto-1">
                <p >Eventos sociales y empresariales:</p>

                <p  >Manejamos la organización de eventos de clase empresariales 
                   y sociales como son: </p>
                   <li  >Bautizos</li> 
                   <li >Cumpleaños</li> 
                   <li  >Quinceaños</li>
                   <li  >Bodas</li>
                
               <p  > Contamos con manejo especial y detallado para tus eventos</p>
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