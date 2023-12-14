<?php

    define('BASE_URL', 'http://localhost/Trabajo_int_CAC/');
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
   
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto integrador | Flavius</title>
    <link rel="shortcut icon" href="favicom.ico" type="image/x-icon">
    <LINK REL=StyleSheet HREF="./CSS/style1.css" TYPE="text/css" MEDIA=screen>
    <!-- fuentes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">









</head>

<body>
    <header>

        <section class="header">
            <div class="header__contenedorLogo__anclaLogo">
                <a href=https://buenosaires.gob.ar/educacion/codo-codo-40 target="_blank">
                    <img src="<?php echo BASE_URL; ?>assets/img/codoacodo.png" alt="Logo Codo a Codo 4.0">
                </a>
                <h1 class="header__contenedorLogo__h1">Conf Bs As</h1>
            </div>

            <nav class="header__nav">

                <ul class="header__nav__ul"></ul>
                <li class="header__nav__ul__li">
                    <a  class="header__nav__ul__li__a laconferencia" href="<?php echo BASE_URL; ?>index.php #conferencia">La conferencia</a>
                </li>
                <li class="header__nav__ul__li">
                    <a class="header__nav__ul__li__a" href="<?php echo BASE_URL; ?>index.php#oradores">Los oradores</a>
                </li>
                <li class="header__nav__ul__li">
                    <a class="header__nav__ul__li__a" href=" <?php echo BASE_URL; ?>index.php#lugar">El lugar y la fecha</a>
                </li>
                <li class="header__nav__ul__li">
                    <a class="header__nav__ul__li__a" href=" <?php echo BASE_URL; ?>index.php#formularioorador">Conviértete en orador</a>
                </li>
                <li class="header__nav__ul__li ">
                    <a class="header__nav__ul__li__a comprartickets" href="<?php echo BASE_URL; ?>pages/tickets.php">Comprar tickets</a>
                </li>

            </nav>
        </section>


<!--
        <section class="BSAS__contenedor" id="conferencia">

            <div class="BSAS__contenedor__texto">
                <h1>Conf Bs As</h1>
                <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque omnis, debitis possimus autem nam
                    nemo fuga delectus ipsa, repellat, facilis quas cupiditate. Culpa illum nam tempora unde iure
                    ratione?Lorem ipsum dolor sit amet.
                </p>
                <div class="BSAS__contenedor__a">
                    <a href="#" class="BSAS__a__izq">Quiero ser orador</a>
                    <a href="<?php echo BASE_URL; ?>pages/tickets.php" class="BSAS__a__der  ">Comprar tickets</a>
                </div>
            </div>
        </section>
-->
    </header>