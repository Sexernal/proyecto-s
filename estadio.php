<?php require_once "./parte_superior.php" ?>

<!-- Sección del Estadio Ricardo Saprissa -->
<section id="estadio" class="estadio">
    <div class="estadio-container">
        <h2>Estadio Ricardo Saprissa</h2>

        <!-- Información General -->
        <div class="informacion-general">
            <h3>Información General</h3>
            <div class="contenido">
                <!-- Imagen del estadio -->
                <img src="imagen/estadio/estadio" alt="Estadio Ricardo Saprissa" class="imagen-estadio">

                <!-- Sección 1: Introducción -->
                <div class="seccion-texto">
                    <p>
                        El Estadio Ricardo Saprissa Aymá, conocido cariñosamente como "La Cueva del Monstruo", es un 
                        recinto futbolístico propiedad del Deportivo Saprissa. Inaugurado el 27 de agosto de 1972, está 
                        ubicado en el cantón de Tibás, en la provincia de San José, Costa Rica. Este emblemático estadio 
                        lleva el nombre de Ricardo Saprissa Aymá, uno de los fundadores del equipo, un salvadoreño de 
                        origen español que vivió gran parte de su vida en Costa Rica.
                    </p>
                </div>

                <!-- Sección 2: Inauguración -->
                <div class="seccion-texto">
                    <p>
                        La construcción del estadio tomó seis años, y su inauguración fue un evento histórico. Ese día, 
                        se develó una placa en honor a Ricardo Saprissa Aymá y se disputó una cuadrangular internacional 
                        con la participación del Deportivo Saprissa, la Liga Deportiva Alajuelense, el Comunicaciones de 
                        Guatemala y el Madureira de Brasil. En el primer partido, Saprissa empató 1-1 con Comunicaciones, 
                        con goles de Peter Sandoval (Comunicaciones) y Eduardo ‘Flaco’ Chavarría (Saprissa). 
                        Posteriormente, Saprissa se coronó campeón de la cuadrangular al vencer a Alajuelense (3-0) y a 
                        Madureira (2-1).
                    </p>
                </div>

                <!-- Sección 3: Actualidad -->
                <div class="seccion-texto">
                    <p>
                        Actualmente, el estadio tiene una capacidad aproximada de 21,000 espectadores, lo que lo convierte 
                        en el segundo más grande de Costa Rica. Además de ser el hogar del Saprissa, ha sido sede de 
                        importantes eventos internacionales, como el Mundial Femenino Sub-17 en 2014.
                    </p>
                </div>
            </div>
        </div>

        <!-- Galería de Fotos -->
        <div class="galeria-estadio">
            <h3>Galería de Fotos</h3>
            <div class="carrusel-fotos">
                <!-- Foto 1 -->
                <div class="carrusel-item active">
                    <img src="imagen/estadio/foto1.jpg" alt="Estadio por fuera">
                    <div class="carrusel-desc">
                        <p>Vista exterior del Estadio Ricardo Saprissa.</p>
                    </div>
                </div>
                <!-- Foto 2 -->
                <div class="carrusel-item">
                    <img src="imagen/estadio/foto2.jpg" alt="Tribunas llenas">
                    <div class="carrusel-desc">
                        <p>Las tribunas llenas de aficionados en un partido importante.</p>
                    </div>
                </div>
                <!-- Agrega más fotos aquí -->
                <!-- Botones de navegación -->
                <button class="prev">Anterior</button>
                <button class="next">Siguiente</button>
            </div>
        </div>

        <!-- Datos Curiosos -->
        <div class="datos-curiosos">
            <h3>Datos Curiosos</h3>
            <ul>
                <li>Capacidad: 23,000 espectadores.</li>
                <li>Inauguración: 1972.</li>
                <li>Ubicación: San José, Costa Rica.</li>
                <li>Apodo: "La Cueva del Monstruo".</li>
                <li>Récord de asistencia: 25,000 personas (en un partido contra Alajuelense).</li>
            </ul>
        </div>

        <!-- Mapa de Ubicación -->
        <div class="mapa-ubicacion">
            <h3>Ubicación</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.982715999999!2d-84.076372685222!3d9.935548992899999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e3f5b7d7b7b5%3A0x1b8b9b9b9b9b9b9b!2sEstadio%20Ricardo%20Saprissa!5e0!3m2!1ses!2scr!4v1620000000000!5m2!1ses!2scr"
                width="100%"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>

        <!-- Eventos Destacados -->
        <div class="eventos-destacados">
            <h3>Eventos Destacados</h3>
            <ul>
                <li>Final de la Copa Interclubes de la Concacaf 2005.</li>
                <li>Concierto de Juanes en 2010.</li>
                <li>Partido histórico contra el Real Madrid en 1976.</li>
            </ul>
        </div>
    </div>
</section>

<!-- Lightbox para Estadio -->
<div id="lightbox-estadio" class="lightbox">
    <span class="cerrar-lightbox-estadio">&times;</span>
    <img class="lightbox-contenido" id="lightbox-imagen-estadio">
</div>

<?php require_once "./parte_inferior.php" ?>