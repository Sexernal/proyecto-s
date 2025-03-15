document.addEventListener('DOMContentLoaded', function () {
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabContents = document.querySelectorAll('.tab-content');

    // Función para activar una pestaña
    function activateTab(tabId) {
        tabButtons.forEach(btn => btn.classList.remove('active'));
        tabContents.forEach(content => content.classList.remove('active'));

        const tabButton = document.querySelector(`.tab-button[data-tab="${tabId}"]`);
        const tabContent = document.getElementById(tabId);

        if (tabButton && tabContent) {
            tabButton.classList.add('active');
            tabContent.classList.add('active');
        }
    }

    // Activar la pestaña basada en el identificador de la URL
    const urlParams = new URLSearchParams(window.location.hash.replace('#plantilla?', ''));
    const tabId = urlParams.get('tab');

    if (tabId) {
        activateTab(tabId);
    } else {
        // Activar la primera pestaña por defecto
        activateTab('jugadores');
    }

    // Manejar clics en los botones de pestaña
    tabButtons.forEach(button => {
        button.addEventListener('click', function () {
            const tabId = this.getAttribute('data-tab');
            activateTab(tabId);
        });
    });
});