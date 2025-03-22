document.addEventListener('DOMContentLoaded', function () {
    const carrusel = document.querySelector('.galeria-estadio .carrusel-fotos');
    if (carrusel) {
        initCarrusel(carrusel, 5000); // Cambia cada 5 segundos
    }

    function initCarrusel(carrusel, intervalTime) {
        let currentIndex = 0;
        const items = carrusel.querySelectorAll('.carrusel-item');
        const totalItems = items.length;
        let autoChangeInterval;

        function showItem(index) {
            items.forEach((item, i) => {
                item.classList.remove('active');
                if (i === index) {
                    item.classList.add('active');
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

        function startAutoChange() {
            if (intervalTime) {
                autoChangeInterval = setInterval(() => {
                    nextItem();
                }, intervalTime);
            }
        }

        // Agregar controles manuales
        const prevButton = carrusel.querySelector('.prev');
        const nextButton = carrusel.querySelector('.next');

        if (prevButton && nextButton) {
            prevButton.addEventListener('click', () => {
                clearInterval(autoChangeInterval);
                prevItem();
                startAutoChange();
            });
            nextButton.addEventListener('click', () => {
                clearInterval(autoChangeInterval);
                nextItem();
                startAutoChange();
            });
        }

        // Iniciar el carrusel
        showItem(currentIndex);
        startAutoChange();
    }
});