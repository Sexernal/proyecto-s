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

<!-- validacion correo -->
<script>
document.getElementById('form-contacto').addEventListener('submit', function(e) {
    e.preventDefault();
    const formData = new FormData(this);
    const boton = this.querySelector('button[type="submit"]');
    
    // Mostrar carga
    boton.textContent = 'Enviando...';
    boton.disabled = true;

    fetch('enviar.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        // Crear notificación
        const notificacion = document.createElement('div');
        notificacion.className = `notificacion ${data.success ? 'exito' : 'error'}`;
        notificacion.textContent = data.message;
        document.body.appendChild(notificacion);

        // Ocultar después de 5 segundos
        setTimeout(() => {
            notificacion.style.opacity = '0';
            setTimeout(() => notificacion.remove(), 500);
        }, 5000);

        // Resetear si fue exitoso
        if (data.success) this.reset();
    })
    .catch(() => {
        alert('Error de conexión');
    })
    .finally(() => {
        boton.textContent = 'Enviar Mensaje';
        boton.disabled = false;
    });
});
</script>
</body>

</html>