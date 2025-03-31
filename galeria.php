<?php require_once "./parte_superior.php" ?>

<!-- Sección de Fotos y Videos -->
<section id="galeria" class="galeria">
    <div class="galeria-container">
        <!-- Carrusel de Fotos -->
        <div class="fotos-container">
            <h2>Fotos</h2>
            <div class="carrusel-fotos">
                <!-- Foto 1 -->
                <div class="carrusel-item active">
                    <img src="imagen/hexa2.jpg" alt="Hexacampeonato">
                    <div class="carrusel-desc">
                        <p>La hazaña histórica del hexacampeonato del Saprissa se cumplió en 1978; es la racha más larga de títulos consecutivos en el fútbol nacional.</p>
                    </div>
                </div>
                <!-- Foto 2 -->
                <div class="carrusel-item">
                    <img src="imagen/mundial.jpg" alt="Mundial de clubes">
                    <div class="carrusel-desc">
                        <p>GRANDE SOLO UNO Y FUE A JAPÓN.</p>
                    </div>
                </div>
                <!-- Foto 3 -->
                <div class="carrusel-item">
                    <img src="imagen/bolaños2.jpg" alt="Bolañitos querido">
                    <div class="carrusel-desc">
                        <p>Christian Bolaños elegido Balón de Bronce como tercer mejor jugador del Mundial de Clubes 2005 con Saprissa.</p>
                    </div>
                </div>
                <!-- Foto 4 -->
                <div class="carrusel-item">
                    <img src="imagen/ligaSosCagon.avif" alt="Liga que cagona que sos">
                    <div class="carrusel-desc">
                        <p>Gol de Gerald Drummond en el Morera Soto para remontar la final de 1998, partido donde Saprissa se quedó con 2 menos por las expulsiones.</p>
                    </div>
                </div>
                <!-- Foto 5 -->
                <div class="carrusel-item">
                    <img src="imagen/sangre4.jpg" alt="Nos vemos en la cueva">
                    <div class="carrusel-desc">
                        <p>NUNCA NOS DEJEN CON SANGRE EN EL OJO.</p>
                    </div>
                </div>
                <!-- Foto 6 -->
                <div class="carrusel-item">
                    <img src="imagen/tetra.png" alt="La 40 era inevitable">
                    <div class="carrusel-desc">
                        <p>El 26 de mayo del 2024, Saprissa ganó su título número 40 al remontarle 3-1 a la liga y conquistar su cuarto título consecutivo.</p>
                    </div>
                </div>
                <!-- Foto 7 -->
                <div class="carrusel-item">
                    <img src="imagen/EsParaVos.jpg" alt="30">
                    <div class="carrusel-desc">
                        <p>Gol de Hanzell Arauz al 41 en la final del verano 2014 para sellar el título número 30.</p>
                    </div>
                </div>
                <!-- Botones de navegación -->
                <button class="prev">Anterior</button>
                <button class="next">Siguiente</button>
            </div>
        </div>

        <!-- Carrusel de Videos -->
        <div class="videos-container">
            <h2>Videos</h2>
            <div class="carrusel-videos">
                <!-- Video 1 -->
                <div class="carrusel-item active">
                    <video controls>
                        <source src="videos/bolañitos.mp4" type="video/mp4">
                        Tu navegador no soporta el elemento de video.
                    </video>
                    <div class="carrusel-desc">
                        <p>Gol de Bolañitos para darle el primer triunfo a un equipo centroamericano en la historia de los Mundiales de Clubes.</p>
                    </div>
                </div>
                <!-- Video 2 -->
                <div class="carrusel-item">
                    <video controls>
                        <source src="videos/LaBala.mp4" type="video/mp4">
                        Tu navegador no soporta el elemento de video.
                    </video>
                    <div class="carrusel-desc">
                        <p>Gol de La Bala Gómez en 2005 para hacer a Saprissa campeón de Concacaf, convirtiéndolo en el equipo más ganador de la región.</p>
                    </div>
                </div>
                <!-- Video 3 -->
                <div class="carrusel-item">
                    <video controls>
                        <source src="videos/Gerald.mp4" type="video/mp4">
                        Tu navegador no soporta el elemento de video.
                    </video>
                    <div class="carrusel-desc">
                        <p>Uno de los goles más recordados de Saprissa en finales.</p>
                    </div>
                </div>
                <!-- Video 4 -->
                <div class="carrusel-item">
                    <video controls>
                        <source src="videos/La30.mp4" type="video/mp4">
                        Tu navegador no soporta el elemento de video.
                    </video>
                    <div class="carrusel-desc">
                        <p>El gol que marcó la diferencia en el clásico más importante de la historia: "La 30 era inevitable".</p>
                    </div>
                </div>
                <!-- Botones de navegación -->
                <button class="prev">Anterior</button>
                <button class="next">Siguiente</button>
            </div>
        </div>
    </div>
</section>

<!-- Lightbox para Fotos -->
<div id="lightbox-fotos" class="lightbox">
    <span class="cerrar-lightbox-fotos">&times;</span>
    <img class="lightbox-contenido" id="lightbox-imagen-fotos">
</div>

<?php require_once "./parte_inferior.php" ?>