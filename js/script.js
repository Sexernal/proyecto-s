// Mostrar/ocultar menú en móviles
const hamburger = document.getElementById("hamburger");
const navbarMenu = document.getElementById("navbar-menu");
const contenidoAdicional = document.querySelector(".contenido-adicional");

hamburger.addEventListener("click", () => {
    console.log("Botón de hamburguesa clickeado"); // Verifica en la consola
    navbarMenu.classList.toggle("active");
    contenidoAdicional.classList.toggle("active");
});