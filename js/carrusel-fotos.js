document.addEventListener('DOMContentLoaded', function () {
    const fotosCarrusel = document.querySelector('.carrusel-fotos');
    if (fotosCarrusel) {
        initCarrusel(fotosCarrusel, 5000); // Cambia cada 5 segundos
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

        function startAutoChange() {
            if (intervalTime) {
                autoChangeInterval = setInterval(() => {
                    nextItem();
                }, intervalTime);
            }
        }

        // Iniciar el carrusel
        showItem(currentIndex);
        startAutoChange();
    }
});