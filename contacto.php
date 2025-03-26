<?php require_once "./parte_superior.php" ?>

<!-- Sección de Contacto -->
<section id="contacto" class="contacto">
    <div class="contacto-container">
        <h2>Contacto</h2>
        <p>¿Tienes preguntas, sugerencias o quieres colaborar? ¡Contáctanos!</p>

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
            <a href="https://wa.me/506TU_NUMERO" class="boton whatsapp" target="_blank">
                <img src="imagen/redes/warap2.webp" alt="WhatsApp"> WhatsApp
            </a>
            <p>Respuesta rápida ⚡</p>
        </div>
    </div>
</section>

<?php require_once "./parte_inferior.php" ?>