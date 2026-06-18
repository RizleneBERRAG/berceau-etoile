@extends('layouts.app')

@section('title', 'Chatterie Berceau Étoilé | Élevage familial de Ragdolls')
@section('description', 'Découvrez la Chatterie Berceau Étoilé, un élevage familial de Ragdolls dans un univers doux, pastel et étoilé.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/home.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/js/pages/home.js') }}"></script>
@endpush

@section('content')

    <section class="home-hero">
        <div class="home-hero__decor home-hero__decor--moon">☾</div>
        <div class="home-hero__decor home-hero__decor--star">✦</div>
        <div class="home-hero__decor home-hero__decor--heart">♡</div>

        <div class="container home-hero__inner">
            <div class="home-hero__content" data-animate>
                <span class="section-kicker">Chatterie familiale de Ragdolls</span>

                <h1>
                    Des Ragdolls élevés avec amour,
                    dans un berceau de douceur.
                </h1>

                <p>
                    Bienvenue à la Chatterie Berceau Étoilé, un univers familial et bienveillant
                    dédié au Ragdoll, où chaque chaton grandit entouré d’attention, de tendresse
                    et d’un vrai accompagnement.
                </p>

                <div class="home-hero__actions">
                    <a href="{{ route('chatons') }}" class="btn btn-primary">
                        Voir les chatons
                    </a>

                    <a href="{{ route('chatterie') }}" class="btn btn-secondary">
                        Découvrir la chatterie
                    </a>
                </div>

                <div class="home-hero__trust">
                    <div>
                        <strong>Élevage familial</strong>
                        <span>Un cadre doux et rassurant</span>
                    </div>

                    <div>
                        <strong>Ragdolls</strong>
                        <span>Race tendre et affectueuse</span>
                    </div>

                    <div>
                        <strong>Suivi</strong>
                        <span>Avant et après adoption</span>
                    </div>
                </div>
            </div>

            <div class="home-hero__visual" data-animate>
                <div class="hero-card">
                    <div class="hero-card__badge">Élevage avec amour</div>

                    <div class="hero-card__image">
                        <img src="{{ asset('assets/images/hero/hero-ragdoll.jpg') }}" alt="Chat Ragdoll de la Chatterie Berceau Étoilé">
                    </div>

                    <div class="hero-card__footer">
                        <span>Ragdolls doux, équilibrés et sociabilisés</span>
                        <strong>Berceau Étoilé</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-intro">
        <div class="container home-intro__grid">
            <div class="home-intro__text" data-animate>
                <span class="section-kicker">Notre univers</span>

                <h2>Une chatterie douce, sérieuse et profondément familiale.</h2>

                <p>
                    La Chatterie Berceau Étoilé place le bien-être, la santé et la socialisation
                    au cœur de son élevage. Les chats vivent au sein du foyer, dans un environnement
                    pensé pour leur équilibre et leur épanouissement.
                </p>

                <a href="{{ route('chatterie') }}" class="text-link">
                    Lire notre histoire
                </a>
            </div>

            <div class="home-intro__cards" data-animate>
                <article class="soft-card">
                    <span>✦</span>
                    <h3>Élevage familial</h3>
                    <p>Des chatons habitués à la vie quotidienne, aux humains et à un cadre rassurant.</p>
                </article>

                <article class="soft-card">
                    <span>♡</span>
                    <h3>Suivi sérieux</h3>
                    <p>Une attention portée à la santé, aux tests, à la croissance et au départ des chatons.</p>
                </article>

                <article class="soft-card">
                    <span>☾</span>
                    <h3>Accompagnement</h3>
                    <p>Chaque famille est guidée avant, pendant et après l’adoption de son chaton.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="home-kittens">
        <div class="container">
            <div class="section-heading section-heading--center" data-animate>
                <span class="section-kicker">Chatons & portées</span>

                <h2>Les petits trésors du Berceau Étoilé</h2>

                <p>
                    Suivez les portées de la chatterie, découvrez les chatons disponibles
                    et laissez-vous guider vers le compagnon qui correspondra le mieux à votre foyer.
                </p>
            </div>

            <div class="home-kittens__grid" data-animate>
                <article class="kitten-card kitten-card--large">
                    <div class="kitten-card__image">
                        <img src="{{ asset('assets/images/kittens/kitten-01.jpg') }}" alt="Chaton Ragdoll disponible">
                        <span class="kitten-card__status">Disponible</span>
                    </div>

                    <div class="kitten-card__content">
                        <span class="kitten-card__eyebrow">Portée actuelle</span>
                        <h3>Nos Chatons</h3>
                        <p>
                            Découvrez les chatons actuellement proposés à l’adoption, leur caractère,
                            leur évolution, leurs parents et leur statut de réservation.
                        </p>

                        <a href="{{ route('chatons') }}" class="text-link">
                            Voir les chatons
                        </a>
                    </div>
                </article>

                <article class="kitten-mini-card">
                    <span>♡</span>
                    <h3>Portées précédentes</h3>
                    <p>
                        Une galerie douce pour retrouver les anciens bébés de la chatterie
                        et leur évolution dans leurs familles.
                    </p>
                </article>

                <article class="kitten-mini-card">
                    <span>✦</span>
                    <h3>Suivi des bébés</h3>
                    <p>
                        Photos, nouvelles, croissance, socialisation et informations importantes
                        jusqu’au départ du chaton.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <section class="home-ragdoll">
        <div class="container">
            <div class="ragdoll-showcase" data-animate>
                <div class="ragdoll-showcase__image">
                    <img src="{{ asset('assets/images/cats/ragdoll-01.jpg') }}" alt="Ragdoll adulte">
                </div>

                <div class="ragdoll-showcase__content">
                    <span class="section-kicker">Le Ragdoll</span>

                    <h2>Une race tendre, élégante et profondément attachante.</h2>

                    <p>
                        Le Ragdoll est apprécié pour sa douceur, sa présence apaisante et son lien très fort
                        avec l’humain. C’est un chat proche de sa famille, sensible, affectueux et idéal pour
                        un foyer qui souhaite créer une vraie relation avec son compagnon.
                    </p>

                    <div class="ragdoll-showcase__traits">
                        <article>
                            <span>01</span>
                            <strong>Doux</strong>
                            <p>Un tempérament calme, tendre et proche de l’humain.</p>
                        </article>

                        <article>
                            <span>02</span>
                            <strong>Familial</strong>
                            <p>Un chat qui aime la présence, les habitudes et la vie de maison.</p>
                        </article>

                        <article>
                            <span>03</span>
                            <strong>Élégant</strong>
                            <p>De nombreuses robes et variétés à découvrir avec douceur.</p>
                        </article>
                    </div>

                    <div class="ragdoll-showcase__actions">
                        <a href="{{ route('race') }}" class="btn btn-primary">
                            Découvrir la race
                        </a>

                        <a href="{{ route('varietes') }}" class="btn btn-secondary">
                            Voir les variétés
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-adoption">
        <div class="container">
            <div class="section-heading" data-animate>
                <span class="section-kicker">Modalités d’adoption</span>

                <h2>Une adoption accompagnée, réfléchie et rassurante.</h2>

                <p>
                    Adopter un chaton est une belle décision qui mérite du temps, des échanges
                    et un accompagnement sérieux. La chatterie guide chaque famille étape par étape.
                </p>
            </div>

            <div class="adoption-steps" data-animate>
                <article class="adoption-step">
                    <span>01</span>
                    <h3>Premier contact</h3>
                    <p>
                        Présentation de votre projet d’adoption, de votre foyer et de vos attentes.
                    </p>
                </article>

                <article class="adoption-step">
                    <span>02</span>
                    <h3>Échange & conseils</h3>
                    <p>
                        Discussion autour du caractère recherché, du mode de vie et du chaton adapté.
                    </p>
                </article>

                <article class="adoption-step">
                    <span>03</span>
                    <h3>Réservation</h3>
                    <p>
                        Une fois le choix confirmé, la réservation permet de sécuriser l’adoption.
                    </p>
                </article>

                <article class="adoption-step">
                    <span>04</span>
                    <h3>Départ du chaton</h3>
                    <p>
                        Le chaton rejoint sa famille avec ses documents, ses repères et un suivi.
                    </p>
                </article>
            </div>

            <div class="home-adoption__cta" data-animate>
                <p>
                    Vous souhaitez comprendre les conditions d’adoption, les délais,
                    les documents fournis ou le fonctionnement de la liste d’attente ?
                </p>

                <a href="{{ route('adoption') }}" class="btn btn-primary">
                    Voir les modalités
                </a>
            </div>
        </div>
    </section>

    <section class="home-world">
        <div class="container home-world__inner">
            <div class="home-world__content" data-animate>
                <span class="section-kicker">Un berceau étoilé</span>

                <h2>Un univers pastel, tendre et pensé pour le bien-être.</h2>

                <p>
                    Chaque espace de la chatterie est imaginé pour offrir aux chats un environnement
                    calme, stimulant et sécurisant. L’objectif est de voir grandir des chatons confiants,
                    équilibrés et habitués à la vie de famille.
                </p>
            </div>

            <div class="home-world__gallery" data-animate>
                <div class="world-picture world-picture--one">
                    <img src="{{ asset('assets/images/hero/chatterie-01.jpg') }}" alt="Univers de la chatterie">
                </div>

                <div class="world-picture world-picture--two">
                    <img src="{{ asset('assets/images/hero/chatterie-02.jpg') }}" alt="Espace des chats">
                </div>

                <div class="world-picture world-picture--three">
                    <img src="{{ asset('assets/images/hero/chatterie-03.jpg') }}" alt="Ragdoll dans la chatterie">
                </div>
            </div>
        </div>
    </section>

    <section class="home-final">
        <div class="container">
            <div class="home-final__card" data-animate>
                <span class="home-final__icon">☾</span>

                <h2>Prêt à rencontrer votre futur compagnon ?</h2>

                <p>
                    Pour une demande d’adoption, une question sur une portée ou simplement pour découvrir
                    davantage l’univers de la Chatterie Berceau Étoilé, vous pouvez nous écrire.
                </p>

                <div class="home-final__actions">
                    <a href="{{ route('contact') }}" class="btn btn-primary">
                        Contacter la chatterie
                    </a>

                    <a href="{{ route('chatons') }}" class="btn btn-secondary">
                        Voir les chatons
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
