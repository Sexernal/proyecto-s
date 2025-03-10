document.addEventListener('DOMContentLoaded', function () {
    console.log('Cargando accordion');

    const dataAccordion = [
        {
            title: "Chope ya esta en Saprissa",
            desc: "En su primer entrenamiento junto a su asistente tecnico Gilberto Martinez preparandose para su primera prueba de fuego contra San carlos",
            videoId: "zmgdz4syZRY" // Reemplaza con el ID de YouTube
        },
        {
            title: "GANO el mounstro morado saco su casta de campeon en la cueva y golea",
            desc: "Entrevista exclusiva con Juan Pérez, el nuevo delantero del Saprissa.",
            videoId: "2jyXCttLxS0" // Reemplaza con el ID de YouTube
        },
        {
            title: "🏆 Saprissa avanza en la Copa",
            desc: "El equipo morado logró su pase a la siguiente ronda de la Copa después de vencer a...",
            videoId: "VIDEO_ID_3" // Reemplaza con el ID de YouTube
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