document.addEventListener('DOMContentLoaded', function () {
    const lightbox = document.getElementById('lightbox-curiosidades');
    const lightboxImagen = document.getElementById('lightbox-imagen-curiosidades');
    const cerrarLightbox = document.querySelector('.cerrar-lightbox-curiosidades');
    
    // Seleccionar todas las imágenes de las tarjetas de curiosidades
    const imagenesCuriosidades = document.querySelectorAll('.tarjeta-curiosidad img');

    imagenesCuriosidades.forEach(imagen => {
        imagen.addEventListener('click', function () {
            lightboxImagen.src = this.src;
            lightbox.style.display = 'block';
        });
    });

    // Cerrar el lightbox al hacer clic en la "X"
    cerrarLightbox.addEventListener('click', function () {
        lightbox.style.display = 'none';
    });

    // Cerrar lightbox al hacer clic fuera de la imagen
    lightbox.addEventListener('click', function (e) {
        if (e.target !== lightboxImagen) {
            lightbox.style.display = 'none';
        }
    });
});
