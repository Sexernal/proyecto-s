

<script src="./js/hamburger.js"></script>
    <script src="./js/accordion.js"></script>
    <script src="./js/carrusel-fotos.js"></script>
    <script src="./js/carrusel-videos.js"></script>
    <script src="./js/tabs.js"></script>
    <script src="./js/lightbox.js"></script>
    <script src="./js/lightbox-plantilla.js"></script>

    <!-- Script para el desplazamiento suave -->
    <script>
        // Desplazamiento suave para los enlaces del menú
        document.querySelectorAll('.navbar-menu a').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
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
</body>
</html>