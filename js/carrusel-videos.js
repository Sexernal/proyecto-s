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
                    // Si es un video, reiniciar la reproducción
                    const video = item.querySelector('video');
                    if (video) {
                        video.currentTime = 0;
                        video.play();
                        // Cambiar al siguiente video cuando termine
                        video.onended = () => {
                            nextItem();
                        };
                    }
                }
            });
        }

        function nextItem() {
            currentIndex = (currentIndex + 1) % totalItems;
            showItem(currentIndex);
        }

        // Iniciar el carrusel
        showItem(currentIndex);
    }
});