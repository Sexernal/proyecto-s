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

    // Activar la pestaña de Alajuelense por defecto
    activateTab('alajuelense');

    // Manejar clics en los botones de pestaña
    tabButtons.forEach(button => {
        button.addEventListener('click', function () {
            const tabId = this.getAttribute('data-tab');
            activateTab(tabId);
        });
    });
});