document.addEventListener("DOMContentLoaded", () => {
    const header = document.querySelector("[data-header]");
    const menuButton = document.querySelector("[data-menu-button]");
    const mobileMenu = document.querySelector("[data-mobile-menu]");

    const DESKTOP_BREAKPOINT = 1120;

    const handleHeaderScroll = () => {
        if (!header) return;

        header.classList.toggle("is-scrolled", window.scrollY > 20);
    };

    const isMenuOpen = () => {
        return mobileMenu?.classList.contains("is-open");
    };

    const openMenu = () => {
        if (!menuButton || !mobileMenu) return;

        mobileMenu.classList.add("is-open");
        menuButton.classList.add("is-active");

        menuButton.setAttribute("aria-expanded", "true");
        menuButton.setAttribute("aria-label", "Fermer le menu");

        document.body.classList.add("menu-open");
    };

    const closeMenu = () => {
        if (!menuButton || !mobileMenu) return;

        mobileMenu.classList.remove("is-open");
        menuButton.classList.remove("is-active");

        menuButton.setAttribute("aria-expanded", "false");
        menuButton.setAttribute("aria-label", "Ouvrir le menu");

        document.body.classList.remove("menu-open");
    };

    const toggleMenu = () => {
        if (isMenuOpen()) {
            closeMenu();
        } else {
            openMenu();
        }
    };

    if (header) {
        handleHeaderScroll();

        window.addEventListener("scroll", handleHeaderScroll, {
            passive: true,
        });
    }

    if (menuButton && mobileMenu) {
        menuButton.addEventListener("click", toggleMenu);

        mobileMenu.querySelectorAll("a").forEach((link) => {
            link.addEventListener("click", closeMenu);
        });

        document.addEventListener("keydown", (event) => {
            if (event.key === "Escape" && isMenuOpen()) {
                closeMenu();
            }
        });

        window.addEventListener("resize", () => {
            if (window.innerWidth > DESKTOP_BREAKPOINT && isMenuOpen()) {
                closeMenu();
            }
        });
    }
});
