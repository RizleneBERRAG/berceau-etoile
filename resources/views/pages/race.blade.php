@extends('layouts.app')

@section('title', 'Le Ragdoll | Chatterie Berceau Étoilé')
@section('description', 'Découvrez le Ragdoll, une race douce, affectueuse et élégante, idéale pour les familles recherchant un compagnon proche de l’humain.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/race.css') }}">
@endpush

@section('content')

    <section class="race-hero">
        <div class="race-hero__decor race-hero__decor--star">✦</div>
        <div class="race-hero__decor race-hero__decor--moon">☾</div>

        <div class="container race-hero__inner">
            <div class="race-hero__content" data-animate>
                <span class="section-kicker">Le Ragdoll</span>

                <h1>
                    Une race tendre, élégante et profondément proche de l’humain.
                </h1>

                <p>
                    Le Ragdoll est un chat doux, affectueux et apaisant. Connu pour son tempérament calme
                    et sa grande proximité avec sa famille, il séduit autant par sa beauté que par sa présence
                    délicate au quotidien.
                </p>

                <div class="race-hero__actions">
                    <a href="{{ route('varietes') }}" class="btn btn-primary">
                        Découvrir les variétés
                    </a>

                    <a href="{{ route('adoption') }}" class="btn btn-secondary">
                        Modalités d’adoption
                    </a>
                </div>
            </div>

            <div class="race-hero__visual" data-animate>
                <div class="race-hero__card">
                    <img src="{{ asset('assets/images/race/ragdoll-hero.jpg') }}" alt="Chat Ragdoll élégant et doux">

                    <div class="race-hero__note">
                        <span>♡</span>
                        <p>Un compagnon tendre, présent et très attaché à sa famille.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="race-temperament">
        <div class="container">
            <div class="section-heading section-heading--center" data-animate>
                <span class="section-kicker">Son caractère</span>

                <h2>Le Ragdoll, un chat doux au cœur tendre.</h2>

                <p>
                    Le Ragdoll est souvent recherché pour son tempérament équilibré.
                    C’est un chat qui aime la présence, les moments calmes et les liens forts avec son foyer.
                </p>
            </div>

            <div class="temperament-grid" data-animate>
                <article class="temperament-card">
                    <span>01</span>
                    <h3>Affectueux</h3>
                    <p>
                        Il apprécie la présence humaine et aime partager le quotidien de sa famille,
                        sans être brusque ni envahissant.
                    </p>
                </article>

                <article class="temperament-card">
                    <span>02</span>
                    <h3>Calme</h3>
                    <p>
                        Sa douceur naturelle en fait un compagnon apaisant, qui aime les environnements stables
                        et rassurants.
                    </p>
                </article>

                <article class="temperament-card">
                    <span>03</span>
                    <h3>Sociable</h3>
                    <p>
                        Bien accompagné dès son plus jeune âge, il peut devenir très à l’aise dans une vie de famille.
                    </p>
                </article>

                <article class="temperament-card">
                    <span>04</span>
                    <h3>Attachant</h3>
                    <p>
                        Le Ragdoll crée souvent une vraie relation avec ses humains, avec beaucoup de tendresse.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <section class="race-life">
        <div class="container race-life__inner">
            <div class="race-life__visual" data-animate>
                <div class="life-picture life-picture--main">
                    <img src="{{ asset('assets/images/race/ragdoll-life-01.jpg') }}" alt="Ragdoll dans un intérieur familial">
                </div>

                <div class="life-picture life-picture--small">
                    <img src="{{ asset('assets/images/race/ragdoll-life-02.jpg') }}" alt="Chaton Ragdoll dans un environnement doux">
                </div>
            </div>

            <div class="race-life__content" data-animate>
                <span class="section-kicker">Vie de famille</span>

                <h2>Un compagnon qui aime les repères, la douceur et la présence.</h2>

                <p>
                    Le Ragdoll n’est pas seulement apprécié pour son apparence. C’est une race qui demande
                    de l’attention, une présence bienveillante et un cadre de vie sécurisant.
                </p>

                <p>
                    Il convient particulièrement aux familles qui souhaitent un chat proche, doux,
                    habitué aux interactions et intégré à la vie quotidienne.
                </p>

                <div class="race-life__list">
                    <div>
                        <strong>Un environnement calme</strong>
                        <span>Il apprécie les foyers rassurants, avec des habitudes et de la stabilité.</span>
                    </div>

                    <div>
                        <strong>Une vraie présence</strong>
                        <span>Il aime partager des moments avec ses humains et ne pas être totalement isolé.</span>
                    </div>

                    <div>
                        <strong>Un accompagnement doux</strong>
                        <span>Son équilibre dépend aussi de la socialisation et de la préparation au départ.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="race-beauty">
        <div class="container">
            <div class="race-beauty__card" data-animate>
                <div class="race-beauty__content">
                    <span class="section-kicker">Son apparence</span>

                    <h2>Une élégance douce, entre regard bleu et fourrure soyeuse.</h2>

                    <p>
                        Le Ragdoll est reconnaissable à son allure élégante, son regard expressif,
                        sa fourrure mi-longue et sa présence très douce. Ses robes et marquages
                        peuvent varier selon les lignées et les mariages.
                    </p>

                    <a href="{{ route('varietes') }}" class="text-link">
                        Voir les couleurs et variétés
                    </a>
                </div>

                <div class="race-beauty__features">
                    <article>
                        <span>✦</span>
                        <h3>Regard expressif</h3>
                        <p>Des yeux intenses qui participent à toute la douceur de la race.</p>
                    </article>

                    <article>
                        <span>♡</span>
                        <h3>Fourrure soyeuse</h3>
                        <p>Une robe mi-longue, élégante, qui demande un entretien régulier.</p>
                    </article>

                    <article>
                        <span>☾</span>
                        <h3>Nombreuses variétés</h3>
                        <p>Couleurs, patrons et marquages permettent une grande diversité.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="race-needs">
        <div class="container">
            <div class="section-heading" data-animate>
                <span class="section-kicker">Ses besoins</span>

                <h2>Adopter un Ragdoll, c’est aussi comprendre ce dont il a besoin.</h2>

                <p>
                    Même s’il est doux et calme, le Ragdoll reste un chat qui a besoin d’attention,
                    d’un environnement enrichi, d’une alimentation adaptée et d’un suivi sérieux.
                </p>
            </div>

            <div class="needs-grid" data-animate>
                <article class="need-card need-card--large">
                    <h3>Présence & attention</h3>
                    <p>
                        Le Ragdoll aime la compagnie. Il a besoin d’une famille présente,
                        attentive et prête à lui offrir du temps, de la douceur et des interactions positives.
                    </p>
                </article>

                <article class="need-card">
                    <h3>Entretien</h3>
                    <p>
                        Sa fourrure demande un brossage régulier pour conserver son confort et éviter les nœuds.
                    </p>
                </article>

                <article class="need-card">
                    <h3>Enrichissement</h3>
                    <p>
                        Arbres à chat, jeux, espaces en hauteur et coins douillets participent à son équilibre.
                    </p>
                </article>

                <article class="need-card">
                    <h3>Santé</h3>
                    <p>
                        Un suivi vétérinaire, une alimentation adaptée et une surveillance attentive sont essentiels.
                    </p>
                </article>

                <article class="need-card">
                    <h3>Transition douce</h3>
                    <p>
                        Le départ du chaton doit être préparé pour qu’il arrive sereinement dans sa nouvelle famille.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <section class="race-final">
        <div class="container">
            <div class="race-final__card" data-animate>
                <span class="race-final__icon">♡</span>

                <h2>Un Ragdoll se choisit avec le cœur, mais aussi avec réflexion.</h2>

                <p>
                    La Chatterie Berceau Étoilé accompagne chaque famille afin de trouver le chaton
                    le plus adapté à son foyer, son rythme de vie et ses attentes.
                </p>

                <div class="race-final__actions">
                    <a href="{{ route('chatons') }}" class="btn btn-primary">
                        Voir les chatons
                    </a>

                    <a href="{{ route('contact') }}" class="btn btn-secondary">
                        Poser une question
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
