// Obtén la URL actual
var currentUrl = window.location.href;

// Obtén todos los enlaces de la barra de navegación
var menuLinks = document.querySelectorAll('.menu-link');

// Itera sobre los enlaces y verifica si la URL coincide con el enlace
menuLinks.forEach(function(link) {
    if (link.href === currentUrl) {
        link.classList.add('active'); // Agrega la clase "active" al enlace actual
    }
});
