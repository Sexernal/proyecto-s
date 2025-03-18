document.addEventListener('DOMContentLoaded', function () {
    const carruselVideos = document.querySelector('.carrusel-videos');
    if (carruselVideos) {
        initCarrusel(carruselVideos); // Inicializar el carrusel sin intervalo automático
    }

    function initCarrusel(carrusel) {
        let currentIndex = 0;
        const items = carrusel.querySelectorAll('.carrusel-item');
        const totalItems = items.length;

        // Función para mostrar un slide específico
        function showItem(index) {
            // Ocultar todos los slides
            items.forEach((item, i) => {
                item.classList.remove('active');
                if (i === index) {
                    item.classList.add('active');
                }
            });

            // Pausar todos los videos
            items.forEach(item => {
                const video = item.querySelector('video');
                if (video) {
                    video.pause();
                }
            });

            // Reproducir automáticamente el video del slide actual (excepto el primero)
            if (index > 0) {
                const currentVideo = items[index].querySelector('video');
                if (currentVideo) {
                    currentVideo.play();
                }
            }
        }

        // Función para avanzar al siguiente slide
        function nextItem() {
            currentIndex = (currentIndex + 1) % totalItems;
            showItem(currentIndex);
        }

        // Función para retroceder al slide anterior
        function prevItem() {
            currentIndex = (currentIndex - 1 + totalItems) % totalItems;
            showItem(currentIndex);
        }

        // Agregar eventos a los botones de navegación
        const prevButton = carrusel.querySelector('.prev');
        const nextButton = carrusel.querySelector('.next');

        if (prevButton && nextButton) {
            prevButton.addEventListener('click', () => {
                prevItem();
            });
            nextButton.addEventListener('click', () => {
                nextItem();
            });
        }

        // Agregar eventos para reproducir automáticamente el siguiente video cuando termine el actual
        items.forEach((item, index) => {
            const video = item.querySelector('video');
            if (video) {
                video.addEventListener('ended', () => {
                    if (index < totalItems - 1) {
                        nextItem(); // Avanzar al siguiente slide cuando el video termine
                    }
                });
            }
        });

        // Iniciar el carrusel
        showItem(currentIndex);
    }
});