<?php require_once "./parte_superior.php" ?>

<!-- Sección de Contacto -->
<section id="contacto" class="contacto">
    <div class="contacto-container">
        <h2>Contacto</h2>
        <p>¿Tienes preguntas, sugerencias o quieres colaborar? ¡Contáctanos!</p>

        <!-- MOSTRAR MENSAJE TOAST (éxito/error) -->
        <?php if (isset($_GET['mensaje']) && $_GET['mensaje'] === 'exito'): ?>
            <div class="toast-message success" id="toast-alert">
                ¡Mensaje enviado con éxito!
            </div>
        <?php elseif (isset($_GET['mensaje']) && $_GET['mensaje'] === 'error'): ?>
            <div class="toast-message error" id="toast-alert">
                Hubo un error al enviar el mensaje. Intenta más tarde.
            </div>
        <?php endif; ?>

        <!-- Tarjetas de Opciones de Contacto -->
        <div class="tarjetas-contacto">
            <!-- Tarjeta 1: Formulario -->
            <div class="tarjeta">
                <h3>Formulario</h3>
                <form id="form-contacto" action="enviar.php" method="POST">
                    <div class="form-group">
                        <input type="text" 
                               name="nombre" 
                               placeholder="Nombre (mínimo 3 letras)" 
                               required 
                               minlength="3" 
                               pattern="[A-Za-záéíóúÁÉÍÓÚñÑ\s]+" 
                               title="Solo letras y espacios (no números o caracteres especiales)">
                    </div>
                    <div class="form-group">
                        <input type="email" 
                               name="email" 
                               placeholder="Correo electrónico" 
                               required
                               title="Ingresa un correo válido (ejemplo@dominio.com)">
                    </div>
                    <div class="form-group">
                        <textarea name="mensaje" 
                                  placeholder="Escribe tu mensaje aquí (mínimo 10 caracteres)..." 
                                  rows="5" 
                                  required
                                  minlength="10"
                                  title="El mensaje debe tener al menos 10 caracteres"></textarea>
                    </div>
                    <button type="submit" class="boton">Enviar Mensaje</button>
                </form>
            </div>

            <!-- Tarjeta 2: Redes Sociales -->
            <div class="tarjeta">
                <h3>Redes Sociales</h3>
                <div class="redes-sociales">
                    <a href="https://facebook.com/SaprissaOficial" target="_blank" class="red-social">
                        <img src="imagen/redes/face" alt="Facebook"> /SaprissaOficial
                    </a>
                    <a href="https://twitter.com/SaprissaOficial" target="_blank" class="red-social">
                        <img src="imagen/redes/twitter" alt="Twitter"> @SaprissaOficial
                    </a>
                    <a href="https://www.instagram.com/deportivo_saprissa/?hl=es" target="_blank" class="red-social">
                        <img src="imagen/redes/insta2.jpg" alt="Instagram"> @SaprissaOficial
                    </a>
                </div>
            </div>
        </div>

        <!-- Botón de WhatsApp -->
        <div class="whatsapp-container">
            <h3>Chat Directo</h3>
            <a href="https://wa.me/506NUM_INVENTADO" class="boton whatsapp" target="_blank">
                <img src="imagen/redes/warap2.webp" alt="WhatsApp"> WhatsApp
            </a>
            <p>Respuesta rápida ⚡</p>
        </div>
    </div>
</section>

<!-- Script para hacer desaparecer el toast a los 3 segundos -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const toast = document.getElementById('toast-alert');
    if (toast) {
        setTimeout(() => {
            toast.classList.add('fade-out');
        }, 3000);

        // Opcional: removerlo del DOM tras la animación
        setTimeout(() => {
            if (toast.parentNode) {
                toast.parentNode.removeChild(toast);
            }
        }, 4000);
    }
});
</script>

<?php require_once "./parte_inferior.php" ?>