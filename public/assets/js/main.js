document.addEventListener('DOMContentLoaded', function () {
    const burgerButton = document.querySelector('.burger-button');
    const headerMenu = document.querySelector('.header-menu');

    if (!burgerButton || !headerMenu) {
        console.log('Burger menu : bouton ou menu introuvable');
        return;
    }

    function openMenu() {
        burgerButton.classList.add('is-open');
        headerMenu.classList.add('is-open');
        burgerButton.setAttribute('aria-expanded', 'true');
        burgerButton.setAttribute('aria-label', 'Fermer le menu de navigation');
    }

    function closeMenu() {
        burgerButton.classList.remove('is-open');
        headerMenu.classList.remove('is-open');
        burgerButton.setAttribute('aria-expanded', 'false');
        burgerButton.setAttribute('aria-label', 'Ouvrir le menu de navigation');
    }

    function toggleMenu() {
        const isOpen = headerMenu.classList.contains('is-open');

        if (isOpen) {
            closeMenu();
        } else {
            openMenu();
        }
    }

    burgerButton.addEventListener('click', toggleMenu);

    const menuLinks = headerMenu.querySelectorAll('a');

    menuLinks.forEach(function (link) {
        link.addEventListener('click', closeMenu);
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            closeMenu();
        }
    });
});