<header class="site-header" data-header>
    <div class="container site-header__inner">

        <a href="{{ route('home') }}" class="site-header__brand" aria-label="Retour à l'accueil">
            <span class="site-header__logo">
                <img src="{{ asset('assets/images/logo/logo-berceau.png') }}" alt="">
            </span>

            <span class="site-header__identity">
                <strong>Berceau Étoilé</strong>
                <small>Chatterie familiale de Ragdolls</small>
            </span>
        </a>

        <nav class="site-header__nav" aria-label="Navigation principale">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'is-active' : '' }}">
                Accueil
            </a>

            <a href="{{ route('chatterie') }}" class="{{ request()->routeIs('chatterie') ? 'is-active' : '' }}">
                La chatterie
            </a>

            <a href="{{ route('race') }}" class="{{ request()->routeIs('race') ? 'is-active' : '' }}">
                Le Ragdoll
            </a>

            <a href="{{ route('reproducteurs') }}" class="{{ request()->routeIs('reproducteurs') ? 'is-active' : '' }}">
                Reproducteurs
            </a>

            <a href="{{ route('chatons') }}" class="{{ request()->routeIs('chatons') ? 'is-active' : '' }}">
                Chatons
            </a>

            <a href="{{ route('adoption') }}" class="{{ request()->routeIs('adoption') ? 'is-active' : '' }}">
                Adoption
            </a>
        </nav>

        <div class="site-header__actions">
            <a href="{{ route('contact') }}" class="site-header__contact">
                Me contacter
            </a>

            <button class="site-header__burger"
                    type="button"
                    aria-label="Ouvrir le menu"
                    aria-expanded="false"
                    data-menu-button>
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>

    <div class="mobile-menu" data-mobile-menu>
        <div class="container mobile-menu__inner">
            <div class="mobile-menu__top">
                <span>Menu</span>
                <strong>✦ Berceau Étoilé</strong>
            </div>

            <nav class="mobile-menu__nav" aria-label="Navigation mobile">
                <a href="{{ route('home') }}">Accueil</a>
                <a href="{{ route('chatterie') }}">La chatterie</a>
                <a href="{{ route('race') }}">Le Ragdoll</a>
                <a href="{{ route('varietes') }}">Couleurs & variétés</a>
                <a href="{{ route('reproducteurs') }}">Nos reproducteurs</a>
                <a href="{{ route('chatons') }}">Chatons & portées</a>
                <a href="{{ route('adoption') }}">Modalités d’adoption</a>
                <a href="{{ route('contact') }}">Contact</a>
            </nav>

            <div class="mobile-menu__card">
                <span>☾</span>
                <p>
                    Des Ragdolls élevés avec douceur, sérieux et beaucoup d’amour.
                </p>
            </div>
        </div>
    </div>
</header>
