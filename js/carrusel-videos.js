document.addEventListener('DOMContentLoaded', function () {
    const videosCarrusel = document.querySelector('.carrusel-videos');
    if (videosCarrusel) {
        initCarrusel(videosCarrusel);
    }

    function initCarrusel(carrusel) {
        let currentIndex = 0;
        const items = carrusel.querySelectorAll('.carrusel-item');
        const totalItems = items.length;

        function showItem(index) {
            items.forEach((item, i) => {
                item.classList.remove('active');
                if (i === index) {
                    item.classList.add('active');
                    // Reiniciar y reproducir el video
                    const video = item.querySelector('video');
                    if (video) {
                        video.currentTime = 0;
                        video.play();
                        // Cambiar al siguiente video cuando termine
                        video.onended = () => {
                            nextItem();
                        };
                    }
                } else {
                    // Pausar video en items que no son activos
                    const video = item.querySelector('video');
                    if (video) {
                        video.pause();
                    }
                }
            });
        }

        function nextItem() {
            currentIndex = (currentIndex + 1) % totalItems;
            showItem(currentIndex);
        }

        function prevItem() {
            currentIndex = (currentIndex - 1 + totalItems) % totalItems;
            showItem(currentIndex);
        }

        // Agregar controles manuales
        const prevButton = carrusel.querySelector('.prev');
        const nextButton = carrusel.querySelector('.next');

        if (prevButton && nextButton) {
            prevButton.addEventListener('click', function() {
                // Pausar el video actual (si lo hay)
                const currentVideo = items[currentIndex].querySelector('video');
                if (currentVideo) {
                    currentVideo.pause();
                }
                prevItem();
            });

            nextButton.addEventListener('click', function() {
                const currentVideo = items[currentIndex].querySelector('video');
                if (currentVideo) {
                    currentVideo.pause();
                }
                nextItem();
            });
        }

        // Iniciar el carrusel
        showItem(currentIndex);
    }
});