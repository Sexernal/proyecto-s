document.addEventListener('DOMContentLoaded', function () {
    console.log('Cargando accordion');

    const dataAccordion = [
        {
            title: "Chope ya esta en Saprissa.",
            desc: "En su primer entrenamiento junto a su asistente técnico Gilberto Martínez están preparándose para su primer prueba de fuego contra San Carlos.",
            videoId: "zmgdz4syZRY" // Reemplaza con el ID de YouTube
        },
        {
            title: "GANO el monstruo morado saco su casta de campeón en la cueva y golea.",
            desc: "En el debut de Paulo Cesar dirigiendo a saprissa golea y muestra una cara diferente de la que venía mostrando saprissa.",
            videoId: "2jyXCttLxS0" // Reemplaza con el ID de YouTube
        },
        {
            title: "Ariel Francisco Rodríguez la leyenda viviente del deportivo saprissa",
            desc: "Con su doblete ante San Carlos El samurái se convirtió en el segundo máximo goleador en liga de la historia del saprissa solo por detrás de el caballero del fútbol.",
            videoId: "ABuAWv5mXYA" // Reemplaza con el ID de YouTube
        },
    ];

    (function () {
        let ACCORDION = {
            init: function () {
                let _self = this;
                this.insertData(_self);
                this.eventhandler(_self);
            },

            insertData: function (_self) {
                dataAccordion.map(function (item, index) {
                    document.querySelector('.accordion').insertAdjacentHTML('beforeend', _self.tplAccordionItem(item));
                });
            },

            eventhandler: function (_self) {
                let arrayRefs = document.querySelectorAll('.accordion-button');
                for (let x = 0; x < arrayRefs.length; x++) {
                    arrayRefs[x].addEventListener('click', function (event) {
                        _self.showTab(event.currentTarget); // Usamos currentTarget en lugar de target
                    });
                }
            },

            tplAccordionItem: function (item) {
                return (`
                    <div class='accordion-item'>
                        <button class='accordion-button'>
                            <span>${item.title}</span>
                            <span class="arrow">▼</span>
                        </button>
                        <div class='accordion-content'>
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/${item.videoId}" frameborder="0" allowfullscreen></iframe>
                            <p>${item.desc}</p>
                        </div>
                    </div>
                `);
            },

            showTab: function (refItem) {
                // Cierra todos los accordions abiertos
                document.querySelectorAll('.accordion-item').forEach(item => {
                    if (item !== refItem.parentElement) {
                        item.classList.remove('tab-active');
                        item.querySelector('.accordion-content').style.display = 'none';
                        item.querySelector('.arrow').style.transform = 'rotate(0deg)';
                    }
                });

                // Abre o cierra el accordion clickeado
                refItem.parentElement.classList.toggle('tab-active');
                const content = refItem.nextElementSibling;
                const arrow = refItem.querySelector('.arrow');

                if (refItem.parentElement.classList.contains('tab-active')) {
                    content.style.display = 'block';
                    arrow.style.transform = 'rotate(180deg)';
                } else {
                    content.style.display = 'none';
                    arrow.style.transform = 'rotate(0deg)';
                }
            },
        };
        ACCORDION.init();
    })();
});