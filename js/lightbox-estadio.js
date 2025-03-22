document.addEventListener('DOMContentLoaded', function () {
    const lightbox = document.getElementById('lightbox-estadio');
    const lightboxImagen = document.getElementById('lightbox-imagen-estadio');
    const cerrarLightbox = document.querySelector('.cerrar-lightbox-estadio');

    const imagenesGaleria = document.querySelectorAll('.galeria-estadio .carrusel-item img');

    imagenesGaleria.forEach(imagen => {
        imagen.addEventListener('click', function () {
            lightbox.style.display = 'block';
            lightboxImagen.src = this.src;
        });
    });

    cerrarLightbox.addEventListener('click', function () {
        lightbox.style.display = 'none';
    });

    lightbox.addEventListener('click', function (e) {
        if (e.target !== lightboxImagen) {
            lightbox.style.display = 'none';
        }
    });
});