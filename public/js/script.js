// Toggle para abrir y cerrar el menú lateral
const menuButton = document.querySelector(".menu-button");
const sidebar = document.querySelector(".sidebar");
menuButton.addEventListener("click", () => {
    sidebar.classList.toggle("active");
});
