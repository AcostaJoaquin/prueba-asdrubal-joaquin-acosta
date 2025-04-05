//script para cambiar el H1 de la front page
document.addEventListener("DOMContentLoaded", function() {
    const h1 = document.querySelector("h1");
    if (h1) {
        h1.textContent = "Se ha cambiado el H1";
    }
});