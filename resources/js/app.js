import './bootstrap';
document.addEventListener("DOMContentLoaded", () => {

    const elements = document.querySelectorAll('.reveals');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Si l'élément atteint 150px du bas → ajoute la classe
                entry.target.classList.add('visible');
            } else {
                // Si l'élément sort de la zone → retire la classe
                entry.target.classList.remove('visible');
            }
        });
    }, {
        root: null,                     // viewport
        threshold: 0,                    // dès qu'une partie de l'élément est visible
        rootMargin: "0px 0px -650px 0px" // déclenchement 150px avant le bas
    });

    elements.forEach(el => observer.observe(el));

});

document.getElementById('produitss').addEventListener('click', () => {
            window.location.href = "/produits";
        });

        document.getElementById('Service').addEventListener('click', () => {
            window.location.href = "/services";
        });