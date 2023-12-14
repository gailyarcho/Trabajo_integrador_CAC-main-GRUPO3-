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
    <LINK REL=StyleSheet HREF="<?php echo BASE_URL; ?>CSS/style1.css" TYPE="text/css" MEDIA=screen>
    <!-- fuentes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
     <!--estilos bootstrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--animaciones-->
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
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
                <h2 class="header__contenedorLogo__h2">Conf Bs As</h2>
            </div>

            <nav class="header__nav">

                <ul class="header__nav__ul"></ul>
                <li class="header__nav__ul__li">
                    <a  class="header__nav__ul__li__a laconferencia" href="<?php echo BASE_URL; ?>index.php #conferencia">La conferencia</a>
                </li>
                <li class="header__nav__ul__li">
                    <a class="header__nav__ul__li__a" href="<?php echo BASE_URL; ?>index.php #oradores">Los oradores</a>
                </li>
                <li class="header__nav__ul__li">
                    <a class="header__nav__ul__li__a" href=" <?php echo BASE_URL; ?>index.php #lugar">El lugar y la fecha</a>
                </li>
                <li class="header__nav__ul__li">
                    <a class="header__nav__ul__li__a" href=" <?php echo BASE_URL; ?>index.php #formularioorador">Conviértete en orador</a>
                </li>
                <li class="header__nav__ul__li ">
                    <a class="header__nav__ul__li__a comprartickets" href="<?php echo BASE_URL; ?>pages/tickets.php">Comprar tickets</a>
                </li>
<!--     login    -->
<?php 
                        #si existe un inicio de sesion, me muestra quien esta logueado
                        if (isset($_SESSION['usuario'])) {
                            // Usuario logueado: mostrar opción para cerrar sesión
                        ?>  <!-- 
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php #echo $_SESSION['usuario']; ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
                                </ul>
                             </li>-->
                            <li class="nav-item">
                                <a class="nav-link active" href="<?php echo BASE_URL; ?>includes/cerrar.php">Cerrar Sesión de: <span><?php echo $_SESSION['usuario']; ?></span></a> 
                            </li>
                        <?php 
                        } else {
                            // Usuario no logueado: mostrar opción para iniciar sesión
                        ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo BASE_URL; ?>includes/login.php">LogIn</a>
                            </li>
                        <?php 
                        }
                        ?>

            </nav>
        </section>



    </header>