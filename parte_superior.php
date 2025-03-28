<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="imagen/mounstro.png">
    <title>Moradictos</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/modulos/menu.css">
    <link rel="stylesheet" href="./css/modulos/inicio.css">
    <link rel="stylesheet" href="./css/modulos/historia.css">
    <link rel="stylesheet" href="./css/modulos/noticias.css">
    <link rel="stylesheet" href="./css/modulos/galeria.css">
    <link rel="stylesheet" href="./css/modulos/plantilla.css">
    <link rel="stylesheet" href="./css/modulos/ultra.css">
    <link rel="stylesheet" href="./css/modulos/rivalidades.css">
    <link rel="stylesheet" href="./css/modulos/estadio.css">
    <link rel="stylesheet" href="./css/modulos/canticos.css">
    <link rel="stylesheet" href="./css/modulos/contacto.css">
    <link rel="stylesheet" href="./css/modulos/curiosidades.css">
    <link rel="stylesheet" href="./css/modulos/archivo.css">
    <link rel="stylesheet" href="./css/modulos/footer.css">
</head>

<body>

    <!-- Menú de navegación -->
    <nav class="navbar">
        <div class="navbar-container">
            <!-- Logo -->
            <a href="index.php" class="logo">
                <img src="imagen/mounstro.png" alt="Logo Saprissa">
            </a>

            <!-- Botón de hamburguesa (para móviles) -->
            <div class="hamburger" id="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>

            <!-- Menú principal -->
            <ul class="navbar-menu" id="navbar-menu">
                <li><a href="index.php">Inicio</a></li>
                <li class="dropdown">
                    <a href="historia.php">Historia del Saprissa</a>
                    <ul class="submenu">
                        <li><a href="#fundacion">Fundación</a></li>
                        <li><a href="#titulos">Títulos</a></li>
                        <li><a href="#jugadores-historicos">Jugadores Históricos</a></li>
                    </ul>
                </li>
                <li><a href="noticias.php">Noticias de la S</a></li>
                <li><a href="galeria.php">Fotos y Videos</a></li>
                <li class="dropdown">
                    <a href="plantilla.php">Plantilla Actual</a>
                </li>
                <li><a href="ultra-morada.php">Ultra Morada</a></li>
                <li class="dropdown">
                    <a href="rivalidades.php">Las Rivalidades</a>
                    <ul class="submenu">
                        <li><a href="#alajuelense">Alajuelense</a></li>
                        <li><a href="#herediano">Herediano</a></li>
                        <li><a href="#cartagines">Cartaginés</a></li>
                    </ul>
                </li>
                <li><a href="estadio.php">Estadio Ricardo Saprissa</a></li>
                <li><a href="canticos.php">Cánticos y Porras</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <!-- Nuevo elemento "Otros" con submenú -->
                <li class="dropdown">
                    <a href="#otros">Otros</a>
                    <ul class="submenu">
                        <li><a href="curiosidades.php">Curiosidades y Datos</a></li>
                        <li><a href="archivo_historico.php">Archivo Histórico</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>