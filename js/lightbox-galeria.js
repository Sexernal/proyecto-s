document.addEventListener('DOMContentLoaded', function () {
    const lightbox = document.getElementById('lightbox-fotos');
    const lightboxImagen = document.getElementById('lightbox-imagen-fotos');
    const cerrarLightbox = document.querySelector('.cerrar-lightbox-fotos');
    const imagenesFotos = document.querySelectorAll('.carrusel-fotos img');

    imagenesFotos.forEach(imagen => {
        imagen.addEventListener('click', function () {
            lightboxImagen.src = this.src;
            lightbox.style.display = 'block';
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