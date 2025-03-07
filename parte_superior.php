<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="imagen/mounstro.png">
    <title>Moradictos</title>
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>

    <!-- Menú de navegación -->
    <nav class="navbar">
        <div class="navbar-container">
            <!-- Logo -->
            <a href="#" class="logo">
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
                <li><a href="#inicio">Inicio</a></li>
                <li class="dropdown">
                    <a href="#historia">Historia del Saprissa</a>
                    <ul class="submenu">
                        <li><a href="#fundacion">Fundación</a></li>
                        <li><a href="#titulos">Títulos</a></li>
                        <li><a href="#jugadores-historicos">Jugadores Históricos</a></li>
                    </ul>
                </li>
                <li><a href="#noticias">Noticias de la S</a></li>
                <li><a href="#galeria">Fotos y Videos</a></li>
                <li class="dropdown">
                    <a href="#plantilla">Plantilla Actual</a>
                    <ul class="submenu">
                        <li><a href="#jugadores">Jugadores</a></li>
                        <li><a href="#cuerpo-tecnico">Cuerpo Técnico</a></li>
                    </ul>
                </li>
                <li><a href="#hinchada">La Hinchada</a></li>
                <li class="dropdown">
                    <a href="#rivalidades">Las Rivalidades</a>
                    <ul class="submenu">
                        <li><a href="#alajuelense">Alajuelense</a></li>
                        <li><a href="#herediano">Herediano</a></li>
                        <li><a href="#otros">Otros</a></li>
                    </ul>
                </li>
                <li><a href="#estadio">Estadio Ricardo Saprissa</a></li>
                <li><a href="#canticos">Cánticos y Porras</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>

            <!-- Contenido adicional en columnas (solo en escritorio) -->
            <div class="contenido-adicional">
                <div class="columna">
                    <a href="#curiosidades">Curiosidades y Datos</a>
                    <a href="#archivo">Archivo Histórico</a>
                    <a href="#redes">Redes Sociales</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Sección de Inicio -->
    <section id="inicio" class="inicio">
        <!-- Banner destacado -->
        <div class="banner">
            <img src="imagen/mundial.jpg" alt="Banner Saprissa">
            <div class="banner-texto">
                <h1>¡Bienvenidos a la casa de Moradictos!</h1>
                <p>La casa del equipo más grande de Centroamérica.</p>
            </div>
        </div>

        <!-- Breve resumen sobre el equipo -->
        <div class="resumen">
            <h2>¿Quiénes somos?</h2>
            <p>
                El Deportivo Saprissa, fundado en 1935, es el equipo más grande y exitoso de Costa Rica y Centroamérica.
                Con 40 títulos nacionales y múltiples participaciones en torneos internacionales, son el orgullo
                de la afición morada.
            </p>
            <a href="#historia" class="boton">Conoce nuestra historia</a>
        </div>

        <!-- Enlaces rápidos -->
        <div class="enlaces-rapidos">
            <h2>Explora nuestra página</h2>
            <div class="botones">
                <a href="#noticias" class="boton">Noticias</a>
                <a href="#plantilla" class="boton">Plantilla Actual</a>
                <a href="#galeria" class="boton">Galería</a>
            </div>
        </div>
    </section>

    <script src="./js/script.js"></script>
</body>

</html>