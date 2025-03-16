document.addEventListener('DOMContentLoaded', function () {
    // Seleccionar elementos del lightbox
    const lightbox = document.getElementById('lightbox-plantilla');
    const lightboxImagen = document.getElementById('lightbox-imagen-plantilla');
    const lightboxTexto = document.getElementById('lightbox-texto-plantilla');
    const cerrarLightbox = document.querySelector('.cerrar-lightbox-plantilla');

    // Seleccionar todas las imágenes de la galería de Plantilla Actual
    const imagenesGaleria = document.querySelectorAll('.imagen-galeria-plantilla');

    // Abrir lightbox al hacer clic en una imagen
    imagenesGaleria.forEach(imagen => {
        imagen.addEventListener('click', function () {
            // Obtener la tarjeta padre de la imagen
            const tarjeta = this.closest('.tarjeta');

            // Obtener el contenido de la tarjeta (nombre, posición, número, edad, etc.)
            const nombre = tarjeta.querySelector('h3').textContent;

            // Obtener todos los párrafos dentro de la tarjeta
            const parrafos = tarjeta.querySelectorAll('p');
            let texto = `<strong>${nombre}</strong><br>`;

            // Recorrer los párrafos y agregarlos al texto
            parrafos.forEach(p => {
                texto += `${p.textContent}<br>`;
            });

            // Mostrar la imagen en el lightbox
            lightboxImagen.src = this.src;

            // Mostrar el texto en el lightbox
            lightboxTexto.innerHTML = texto;

            // Mostrar el lightbox
            lightbox.style.display = 'block';
        });
    });

    // Cerrar lightbox al hacer clic en la "X"
    cerrarLightbox.addEventListener('click', function () {
        lightbox.style.display = 'none';
    });

    // Cerrar lightbox al hacer clic fuera de la imagen
    lightbox.addEventListener('click', function (e) {
        if (e.target !== lightboxImagen && e.target !== lightboxTexto) {
            lightbox.style.display = 'none';
        }
    });
});