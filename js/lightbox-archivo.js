document.addEventListener('DOMContentLoaded', function () {
    const lightbox = document.getElementById('lightbox-archivo');
    const lightboxImagen = document.getElementById('lightbox-imagen-archivo');
    const cerrarLightbox = document.querySelector('.cerrar-lightbox-archivo');
    
    // Seleccionar todas las imágenes dentro de la sección Archivo Histórico
    const imagenesArchivo = document.querySelectorAll('.archivo-historico img');

    imagenesArchivo.forEach(imagen => {
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