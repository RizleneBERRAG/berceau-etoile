@extends('layouts.app')

@section('title', 'Nos reproducteurs | Chatterie Berceau Étoilé')
@section('description', 'Découvrez les mâles et femelles reproducteurs de la Chatterie Berceau Étoilé, leurs origines, leurs robes et leur rôle dans la chatterie.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/reproducteurs.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/js/pages/reproducteurs.js') }}"></script>
@endpush

@section('content')

    @php
        $males = [
            [
                'name' => 'Ragissa Nelson',
                'origin' => 'Pologne 🇵🇱',
                'coat' => 'Bleu bicolore',
                'image' => 'male-ragissa-nelson.jpg',
            ],
            [
                'name' => 'Hélios of Babila',
                'origin' => 'Pays-Bas 🇳🇱',
                'coat' => 'Cinnamon tabby sépia mitted',
                'image' => 'male-helios-of-babila.jpg',
            ],
            [
                'name' => 'Wolf du Berceau Étoilé',
                'origin' => 'Né à la chatterie 🏠',
                'coat' => 'Lilas solide mitted',
                'image' => 'male-wolf-du-berceau-etoile.jpg',
            ],
            [
                'name' => 'Teddy du Berceau Étoilé',
                'origin' => 'Né à la chatterie 🏠',
                'coat' => 'Seal tabby bicolore',
                'image' => 'male-teddy-du-berceau-etoile.jpg',
            ],
        ];

        $females = [
            [
                'name' => 'Wonderful Cookie du Berceau Étoilé',
                'origin' => 'Née à la chatterie 🏠',
                'coat' => 'Chocolat tortie mink mitted',
                'image' => 'femelle-wonderful-cookie.jpg',
            ],
            [
                'name' => 'Moon Lune Precious Castle',
                'origin' => 'Autriche 🇦🇹',
                'coat' => 'Chocolat smoke bicolore solide',
                'image' => 'femelle-moon-lune.jpg',
            ],
            [
                'name' => 'Selina Lazur Eyes',
                'origin' => 'Pologne 🇵🇱',
                'coat' => 'Seal tortie bicolore',
                'image' => 'femelle-selina-lazur-eyes.jpg',
            ],
            [
                'name' => 'Toffee Mona Close To Nature',
                'origin' => 'Pays-Bas 🇳🇱',
                'coat' => 'Chocolat tortie solide',
                'image' => 'femelle-toffee-mona.jpg',
            ],
            [
                'name' => 'Céleste Laser Touch',
                'origin' => 'Allemagne 🇩🇪',
                'coat' => 'Seal mink mitted',
                'image' => 'femelle-celeste-laser-touch.jpg',
            ],
            [
                'name' => 'Luana Close To Nature',
                'origin' => 'Pays-Bas 🇳🇱',
                'coat' => 'Bleu tortie mink mitted',
                'image' => 'femelle-luana.jpg',
            ],
            [
                'name' => 'Morphée Precious Castle',
                'origin' => 'Autriche 🇦🇹',
                'coat' => 'Bleu solide mitted',
                'image' => 'femelle-morphee.jpg',
            ],
            [
                'name' => 'U-Me des Rêves d’Anaïs',
                'origin' => 'France 🇫🇷',
                'coat' => 'Seal tortie tabby mink mitted',
                'image' => 'femelle-u-me.jpg',
            ],
            [
                'name' => 'Cannelle Oana Precious Castle',
                'origin' => 'Autriche 🇦🇹',
                'coat' => 'Cinnamon smoke solide mitted',
                'image' => 'femelle-cannelle-oana.jpg',
            ],
            [
                'name' => 'Astrée du Berceau Étoilé',
                'origin' => 'Née à la chatterie 🏠',
                'coat' => 'Seal tortie mink mitted',
                'image' => 'femelle-astree.jpg',
            ],
            [
                'name' => 'Galya Gungun Zoemuses',
                'origin' => 'Russie 🇷🇺 / Chine 🇨🇳',
                'coat' => 'Seal tabby bicolore',
                'image' => 'femelle-galya.jpg',
            ],
            [
                'name' => 'Summer Zoemuses',
                'origin' => 'Russie 🇷🇺 / Chine 🇨🇳',
                'coat' => 'Bleu tabby bicolore',
                'image' => 'femelle-summer.jpg',
            ],
        ];
    @endphp

    <section class="breeders-hero">
        <div class="container breeders-hero__inner">
            <div class="breeders-hero__content" data-animate>
                <span class="section-kicker">Nos reproducteurs</span>

                <h1>
                    Les étoiles du Berceau, au cœur de nos futures portées.
                </h1>

                <p>
                    Les reproducteurs de la Chatterie Berceau Étoilé sont choisis pour leur beauté,
                    leur tempérament, leurs origines et leur douceur. Chacun apporte une histoire,
                    une robe, une présence et une harmonie particulière à la chatterie.
                </p>

                <div class="breeders-hero__badges">
                    <span>4 mâles</span>
                    <span>12 femelles</span>
                    <span>Origines internationales</span>
                    <span>Ragdolls & Cherubim</span>
                </div>
            </div>

            <div class="breeders-hero__visual" data-animate>
                <div class="breeders-hero__card">
                    <img src="{{ asset('assets/images/reproducteurs/reproducteurs-hero.jpg') }}" alt="Reproducteur Ragdoll de la chatterie">

                    <div class="breeders-hero__note">
                        <span>♡</span>
                        <p>
                            Chaque mariage est réfléchi avec attention pour préserver la douceur,
                            l’équilibre, le type et la beauté des futures portées.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="breeders-intro">
        <div class="container">
            <div class="breeders-intro__card" data-animate>
                <span class="breeders-intro__icon">✦</span>

                <h2>Une sélection douce, exigeante et profondément familiale.</h2>

                <p>
                    Derrière chaque portée, il y a des reproducteurs aimés, observés et accompagnés.
                    Leurs origines, leurs robes et leur tempérament participent à l’identité unique
                    du Berceau Étoilé.
                </p>
            </div>
        </div>
    </section>

    <section class="breeders-collection breeders-collection--males">
        <div class="container">
            <div class="collection-heading" data-animate>
                <div>
                    <span class="section-kicker">Les mâles</span>
                    <h2>Nos mâles reproducteurs</h2>
                </div>

                <p>
                    Quatre mâles aux robes précieuses, issus de belles origines, chacun apportant
                    sa présence, son caractère et son élégance aux lignées de la chatterie.
                </p>
            </div>

            <div class="repro-showcase" data-repro-showcase data-animate>
                <div class="repro-showcase__stage">
                    @foreach ($males as $index => $male)
                        <article class="repro-panel {{ $index === 0 ? 'is-active' : '' }}" data-repro-panel>
                            <div class="repro-panel__image">
                                <img src="{{ asset('assets/images/reproducteurs/' . $male['image']) }}" alt="{{ $male['name'] }}">
                                <span class="repro-panel__gender">Mâle</span>
                            </div>

                            <div class="repro-panel__content">
                                <span class="repro-panel__origin">{{ $male['origin'] }}</span>

                                <h3>{{ $male['name'] }}</h3>

                                <p>
                                    Un reproducteur précieux de la chatterie, sélectionné pour son harmonie,
                                    sa robe et la douceur qu’il apporte aux futures portées.
                                </p>

                                <div class="repro-panel__details">
                                    <div>
                                        <span>Robe</span>
                                        <strong>{{ $male['coat'] }}</strong>
                                    </div>

                                    <div>
                                        <span>Rôle</span>
                                        <strong>Reproducteur de la chatterie</strong>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>

                <div class="repro-showcase__bottom">
                    <button type="button" class="repro-showcase__arrow" data-repro-prev aria-label="Reproducteur précédent">
                        ←
                    </button>

                    <div class="repro-thumbs">
                        @foreach ($males as $index => $male)
                            <button type="button"
                                    class="repro-thumb {{ $index === 0 ? 'is-active' : '' }}"
                                    data-repro-thumb
                                    data-index="{{ $index }}">
                                <img src="{{ asset('assets/images/reproducteurs/' . $male['image']) }}" alt="">
                                <span>{{ $male['name'] }}</span>
                            </button>
                        @endforeach
                    </div>

                    <button type="button" class="repro-showcase__arrow" data-repro-next aria-label="Reproducteur suivant">
                        →
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="breeders-collection breeders-collection--females">
        <div class="container">
            <div class="collection-heading" data-animate>
                <div>
                    <span class="section-kicker">Les femelles</span>
                    <h2>Nos femelles reproductrices</h2>
                </div>

                <p>
                    Les femelles du Berceau Étoilé sont au cœur de la chatterie. Elles portent
                    l’histoire des portées, la douceur du foyer et la transmission des futures générations.
                </p>
            </div>

            <div class="females-highlight" data-animate>
                <div class="females-highlight__content">
                    <span>☾</span>

                    <h3>Des mamans précieuses, chacune avec son histoire.</h3>

                    <p>
                        Certaines sont nées à la chatterie, d’autres viennent de Pologne, d’Autriche,
                        des Pays-Bas, d’Allemagne, de France ou encore de lignées Russie / Chine.
                        Cette diversité apporte une vraie richesse au programme d’élevage.
                    </p>
                </div>

                <div class="females-highlight__stats">
                    <div>
                        <strong>12</strong>
                        <span>femelles</span>
                    </div>

                    <div>
                        <strong>7+</strong>
                        <span>origines</span>
                    </div>

                    <div>
                        <strong>∞</strong>
                        <span>nuances</span>
                    </div>
                </div>
            </div>

            <div class="repro-showcase repro-showcase--females" data-repro-showcase data-animate>
                <div class="repro-showcase__stage">
                    @foreach ($females as $index => $female)
                        <article class="repro-panel {{ $index === 0 ? 'is-active' : '' }}" data-repro-panel>
                            <div class="repro-panel__image">
                                <img src="{{ asset('assets/images/reproducteurs/' . $female['image']) }}" alt="{{ $female['name'] }}">
                                <span class="repro-panel__gender">Femelle</span>
                            </div>

                            <div class="repro-panel__content">
                                <span class="repro-panel__origin">{{ $female['origin'] }}</span>

                                <h3>{{ $female['name'] }}</h3>

                                <p>
                                    Une femelle précieuse du Berceau Étoilé, porteuse d’une histoire,
                                    d’une robe et d’une douceur qui participent à l’identité de la chatterie.
                                </p>

                                <div class="repro-panel__details">
                                    <div>
                                        <span>Robe</span>
                                        <strong>{{ $female['coat'] }}</strong>
                                    </div>

                                    <div>
                                        <span>Rôle</span>
                                        <strong>Femelle reproductrice</strong>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>

                <div class="repro-showcase__bottom">
                    <button type="button" class="repro-showcase__arrow" data-repro-prev aria-label="Reproductrice précédente">
                        ←
                    </button>

                    <div class="repro-thumbs">
                        @foreach ($females as $index => $female)
                            <button type="button"
                                    class="repro-thumb {{ $index === 0 ? 'is-active' : '' }}"
                                    data-repro-thumb
                                    data-index="{{ $index }}">
                                <img src="{{ asset('assets/images/reproducteurs/' . $female['image']) }}" alt="">
                                <span>{{ $female['name'] }}</span>
                            </button>
                        @endforeach
                    </div>

                    <button type="button" class="repro-showcase__arrow" data-repro-next aria-label="Reproductrice suivante">
                        →
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="health-section">
        <div class="container health-section__inner">
            <div class="health-section__content" data-animate>
                <span class="section-kicker">Santé & mariages</span>

                <h2>Des mariages réfléchis, pensés avec douceur et responsabilité.</h2>

                <p>
                    Les reproducteurs ne sont pas seulement choisis pour leur robe.
                    Leur tempérament, leur équilibre, leurs origines, leur évolution et leur compatibilité
                    sont essentiels dans la préparation des portées.
                </p>

                <div class="health-list">
                    <div>
                        <strong>Origines sélectionnées</strong>
                        <span>Des lignées venues de plusieurs pays, choisies avec attention.</span>
                    </div>

                    <div>
                        <strong>Robes travaillées</strong>
                        <span>Seal, bleu, chocolat, lilas, cinnamon, mink, sépia, solide, tabby ou tortie.</span>
                    </div>

                    <div>
                        <strong>Bien-être quotidien</strong>
                        <span>Des reproducteurs intégrés dans un environnement familial, doux et respectueux.</span>
                    </div>
                </div>
            </div>

            <div class="health-section__visual" data-animate>
                <div class="health-card">
                    <span>✦</span>

                    <h3>Un programme d’élevage harmonieux</h3>

                    <p>
                        L’objectif est de faire naître des chatons beaux, équilibrés,
                        bien socialisés et adaptés à leur future vie de famille.
                    </p>
                </div>

                <div class="health-picture">
                    <img src="{{ asset('assets/images/reproducteurs/health.jpg') }}" alt="Ragdoll de la Chatterie Berceau Étoilé">
                </div>
            </div>
        </div>
    </section>

    <section class="breeders-final">
        <div class="container">
            <div class="breeders-final__card" data-animate>
                <span class="breeders-final__icon">♡</span>

                <h2>Chaque reproducteur apporte une étoile à l’histoire de la chatterie.</h2>

                <p>
                    Pour découvrir les chatons disponibles, les futures portées ou échanger sur un projet d’adoption,
                    vous pouvez poursuivre la visite du site ou contacter directement la chatterie.
                </p>

                <div class="breeders-final__actions">
                    <a href="{{ route('chatons') }}" class="btn btn-primary">
                        Voir les chatons
                    </a>

                    <a href="{{ route('contact') }}" class="btn btn-secondary">
                        Contacter la chatterie
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
