document.addEventListener('DOMContentLoaded', function () {
    // Seleccionar elementos del lightbox
    const lightbox = document.getElementById('lightbox');
    const lightboxImagen = document.getElementById('lightbox-imagen');
    const cerrarLightbox = document.querySelector('.cerrar-lightbox');

    // Seleccionar todas las imágenes de la galería
    const imagenesGaleria = document.querySelectorAll('.imagen-galeria');

    // Abrir lightbox al hacer clic en una imagen
    imagenesGaleria.forEach(imagen => {
        imagen.addEventListener('click', function () {
            lightbox.style.display = 'block';
            lightboxImagen.src = this.src;
        });
    });

    // Cerrar lightbox al hacer clic en la "X"
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