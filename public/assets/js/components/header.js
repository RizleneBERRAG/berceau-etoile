const header = document.querySelector('[data-header]');
const menuButton = document.querySelector('[data-menu-button]');
const mobileMenu = document.querySelector('[data-mobile-menu]');

if (header) {
    window.addEventListener('scroll', () => {
        header.classList.toggle('is-scrolled', window.scrollY > 20);
    });
}

if (menuButton && mobileMenu) {
    menuButton.addEventListener('click', () => {
        const isOpen = mobileMenu.classList.toggle('is-open');

        menuButton.classList.toggle('is-active', isOpen);
        menuButton.setAttribute('aria-expanded', String(isOpen));
        document.body.classList.toggle('menu-open', isOpen);
    });
}
