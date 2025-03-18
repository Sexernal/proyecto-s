<?php require_once "./parte_superior.php" ?>


<!-- Sección de Rivalidades -->
<section id="rivalidades" class="rivalidades">
    <div class="rivalidades-container">
        <h2>Las Rivalidades</h2>

        <!-- Submenús -->
        <div class="submenu-rivalidades">
            <button class="tab-button active" data-tab="alajuelense">Alajuelense</button>
            <button class="tab-button" data-tab="herediano">Herediano</button>
            <button class="tab-button" data-tab="cartagines">Cartaginés</button>
        </div>

        <!-- Contenido de Alajuelense -->
        <div id="alajuelense" class="tab-content active">
            <div class="tarjeta-rivalidad">
                <img src="imagen/rivalidades/alajuelense.jpg" alt="Alajuelense">
                <h3>Alajuelense</h3>
                <p>
                    La rivalidad entre Saprissa y Alajuelense es una de las más intensas del fútbol costarricense. 
                    Conocido como el "Clásico Nacional", este enfrentamiento ha dado lugar a partidos memorables 
                    y momentos históricos.
                </p>
                <video controls>
                    <source src="videos/rivalidades/alajuelense.mp4" type="video/mp4">
                    Tu navegador no soporta el elemento de video.
                </video>
                <a href="https://es.wikipedia.org/wiki/Clásico_Nacional_(Costa_Rica)" class="boton" target="_blank">Más información</a>
            </div>
        </div>

        <!-- Contenido de Herediano -->
        <div id="herediano" class="tab-content">
            <div class="tarjeta-rivalidad">
                <img src="imagen/rivalidades/herediano.jpg" alt="Herediano">
                <h3>Herediano</h3>
                <p>
                    La rivalidad con Herediano es otra de las más destacadas. Conocido como el "Clásico Moderno", 
                    este enfrentamiento siempre genera expectación y pasión entre los aficionados.
                </p>
                <video controls>
                    <source src="videos/rivalidades/herediano.mp4" type="video/mp4">
                    Tu navegador no soporta el elemento de video.
                </video>
                <a href="https://es.wikipedia.org/wiki/Cl%C3%A1sico_del_Buen_F%C3%BAtbol_Costa_Rica" class="boton" target="_blank">Más información</a>
            </div>
        </div>

        <!-- Contenido de Otros -->
        <div id="cartagines" class="tab-content">
            <div class="tarjeta-rivalidad">
                <img src="imagen/rivalidades/cartagines.jpg" alt="Cartaginés">
                <h3>Cartaginés</h3>
                <p>
                    Aunque no es tan intensa como las anteriores, la rivalidad con Cartaginés también tiene su 
                    lugar en la historia del Saprissa. Los partidos entre ambos equipos suelen ser muy competitivos.
                </p>
                <video controls>
                    <source src="videos/rivalidades/cartagines.mp4" type="video/mp4">
                    Tu navegador no soporta el elemento de video.
                </video>
                <a href="https://es.wikipedia.org/wiki/Cartaginés" class="boton" target="_blank">Más información</a>
            </div>
        </div>
    </div>
</section>


<?php require_once "./parte_inferior.php" ?>