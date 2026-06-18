<footer class="site-footer">
    <div class="site-footer__cloud site-footer__cloud--one"></div>
    <div class="site-footer__cloud site-footer__cloud--two"></div>

    <div class="container site-footer__inner">
        <div class="site-footer__brand">
            <a href="{{ route('home') }}" class="site-footer__logo">
                <span>
                    <img src="{{ asset('assets/images/logo/logo-berceau.png') }}" alt="">
                </span>
                <strong>Berceau Étoilé</strong>
            </a>

            <p>
                Chatterie familiale de Ragdolls, pensée autour du bien-être, de la douceur,
                de la socialisation et de l’accompagnement des familles.
            </p>

            <div class="site-footer__badges">
                <span>Élevage familial</span>
                <span>Ragdolls</span>
                <span>Avec amour</span>
            </div>
        </div>

        <div class="site-footer__links">
            <div>
                <h3>Découvrir</h3>

                <a href="{{ route('chatterie') }}">La chatterie</a>
                <a href="{{ route('race') }}">Le Ragdoll</a>
                <a href="{{ route('varietes') }}">Couleurs & variétés</a>
            </div>

            <div>
                <h3>Adoption</h3>

                <a href="{{ route('reproducteurs') }}">Nos reproducteurs</a>
                <a href="{{ route('chatons') }}">Chatons & portées</a>
                <a href="{{ route('adoption') }}">Modalités d’adoption</a>
                <a href="{{ route('contact') }}">Nous contacter</a>
            </div>
        </div>

        <div class="site-footer__contact">
            <h3>Une question ?</h3>

            <p>
                Pour une demande d’adoption, une inscription sur liste d’attente ou une question
                sur la chatterie, vous pouvez nous écrire directement.
            </p>

            <a href="{{ route('contact') }}" class="btn btn-primary">
                Contacter la chatterie
            </a>
        </div>
    </div>

    <div class="container site-footer__bottom">
        <p>
            © {{ date('Y') }} Chatterie Berceau Étoilé. Tous droits réservés.
        </p>

        <div>
            <a href="#">Mentions légales</a>
            <span>•</span>
            <a href="#">Confidentialité</a>
        </div>
    </div>
</footer>
