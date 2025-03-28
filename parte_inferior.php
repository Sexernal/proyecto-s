<script src="./js/hamburger.js"></script>
<script src="./js/accordion.js"></script>
<script src="./js/carrusel-fotos.js"></script>
<script src="./js/carrusel-videos.js"></script>
<script src="./js/tabs.js"></script>
<script src="./js/lightbox.js"></script>
<script src="./js/lightbox-plantilla.js"></script>
<script src="./js/carrusel-estadio.js"></script>
<script src="./js/lightbox-estadio.js"></script>

<!-- Script para el desplazamiento suave -->
<script>
    // Desplazamiento suave para los enlaces del menú
    document.querySelectorAll('.navbar-menu a').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href'); // Obtiene el enlace
            if (targetId.startsWith('#')) {
                e.preventDefault(); // Evita el comportamiento predeterminado solo para enlaces internos
                const targetSection = document.querySelector(targetId); // Selecciona la sección
                if (targetSection) {
                    // Desplaza suavemente a la sección
                    targetSection.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
</script>

<footer class="footer-saprissa">
    <div class="footer-content">
        <!-- Logo y texto -->
        <div class="footer-brand">
            <img src="imagen/mounstro.png" alt="Saprissa" width="40">
            <span>Moradictos</span>
        </div>

        <!-- Enlaces en línea -->
        <div class="footer-links">
            <a href="index.php">Inicio</a>
            <a href="archivo_historico.php">Archivo Historico</a>
            <a href="plantilla.php">Plantilla</a>
            <a href="contacto.php">Contacto</a>
        </div>

        <!-- Redes sociales -->
        <div class="footer-social">
            <a href="https://www.facebook.com/SaprissaOficial" target="_blank"><img src="imagen/redes/face" alt="FB" width="20"></a>
            <a href="https://twitter.com/SaprissaOficial" target="_blank"><img src="imagen/redes/twitter" alt="TW" width="20"></a>
            <a href="https://www.instagram.com/deportivo_saprissa/" target="_blank"><img src="imagen/redes/insta3.png" alt="IG" width="20"></a>
            <a href="https://www.youtube.com/@SaprissaCanalOficial" target="_blank"><img src="imagen/redes/youtube.webp" alt="YT" width="20"></a>
        </div>

        <!-- Copyright -->
        <p class="footer-copy">© 2025 Moradictos. Orgullosamente Morados.</p>
    </div>
</footer>
</body>

</html>