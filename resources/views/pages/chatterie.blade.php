@extends('layouts.app')

@section('title', 'La chatterie | Berceau Étoilé')
@section('description', 'Découvrez l’univers de la Chatterie Berceau Étoilé, son histoire, ses valeurs, son environnement et l’attention portée au bien-être des Ragdolls.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/chatterie.css') }}">
@endpush

@section('content')

    <section class="chatterie-hero">
        <div class="container chatterie-hero__inner">
            <div class="chatterie-hero__content" data-animate>
                <span class="section-kicker">La chatterie</span>

                <h1>
                    Un élevage familial, doux et pensé
                    pour le bien-être de chaque Ragdoll.
                </h1>

                <p>
                    La Chatterie Berceau Étoilé est née d’une véritable passion pour le Ragdoll,
                    avec l’envie d’offrir à chaque chat un environnement rassurant, équilibré
                    et profondément familial.
                </p>

                <div class="chatterie-hero__badges">
                    <span>Élevage familial</span>
                    <span>Socialisation douce</span>
                    <span>Bien-être & sérieux</span>
                </div>
            </div>

            <div class="chatterie-hero__visual" data-animate>
                <div class="chatterie-hero__card">
                    <img src="{{ asset('assets/images/chatterie/chatterie-hero.jpg') }}" alt="Univers de la Chatterie Berceau Étoilé">
                </div>
            </div>
        </div>
    </section>

    <section class="chatterie-story">
        <div class="container chatterie-story__inner">
            <div class="chatterie-story__media" data-animate>
                <img src="{{ asset('assets/images/chatterie/story.jpg') }}" alt="Chat Ragdoll dans la chatterie">
            </div>

            <div class="chatterie-story__content" data-animate>
                <span class="section-kicker">Notre histoire</span>

                <h2>Une passion transformée en un univers rassurant et bienveillant.</h2>

                <p>
                    Berceau Étoilé est une chatterie familiale où l’amour du Ragdoll s’accompagne
                    d’une vraie exigence de qualité, de douceur et de responsabilité.
                    Ici, les chats grandissent au cœur du foyer, dans un cadre pensé pour leur équilibre.
                </p>

                <p>
                    Chaque portée est suivie avec attention, dans le respect du rythme des bébés,
                    de leur socialisation et de leur futur départ dans leur famille.
                    L’objectif n’est pas seulement de faire naître de beaux chatons,
                    mais surtout de faire grandir des compagnons confiants, équilibrés et bien dans leurs pattes.
                </p>
            </div>
        </div>
    </section>

    <section class="chatterie-values">
        <div class="container">
            <div class="section-heading section-heading--center" data-animate>
                <span class="section-kicker">Nos engagements</span>

                <h2>Des valeurs fortes au cœur de la chatterie</h2>

                <p>
                    Chaque choix est pensé pour offrir aux chats un cadre de vie sain,
                    doux et stimulant, et aux familles un accompagnement rassurant.
                </p>
            </div>

            <div class="chatterie-values__grid" data-animate>
                <article class="value-card">
                    <span>♡</span>
                    <h3>Bien-être avant tout</h3>
                    <p>
                        Les chats vivent dans un environnement calme, confortable et adapté à leurs besoins quotidiens.
                    </p>
                </article>

                <article class="value-card">
                    <span>✦</span>
                    <h3>Socialisation soignée</h3>
                    <p>
                        Les chatons grandissent au contact de la vie de famille afin de devenir confiants et équilibrés.
                    </p>
                </article>

                <article class="value-card">
                    <span>☾</span>
                    <h3>Accompagnement des familles</h3>
                    <p>
                        Chaque adoption s’inscrit dans une vraie démarche d’échange, de conseils et de suivi.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <section class="chatterie-spaces">
        <div class="container">
            <div class="section-heading" data-animate>
                <span class="section-kicker">Leur environnement</span>

                <h2>Des espaces pensés pour leur confort, leur sécurité et leur épanouissement.</h2>

                <p>
                    La chatterie s’organise autour d’espaces aménagés pour répondre aux besoins des adultes,
                    des mamans et des chatons, tout en conservant une vraie atmosphère de maison.
                </p>
            </div>

            <div class="chatterie-spaces__grid" data-animate>
                <article class="space-card space-card--large">
                    <div class="space-card__image">
                        <img src="{{ asset('assets/images/chatterie/space-01.jpg') }}" alt="Espace principal de la chatterie">
                    </div>

                    <div class="space-card__content">
                        <h3>Une vie de famille au quotidien</h3>
                        <p>
                            Les chats évoluent dans un cadre chaleureux, avec de la présence,
                            des repères et une attention constante portée à leur équilibre.
                        </p>
                    </div>
                </article>

                <article class="space-card">
                    <h3>Espaces dédiés</h3>
                    <p>
                        Nurserie, maternité, coins repos, zones calmes et espaces de jeu permettent
                        d’accompagner chaque étape de leur vie.
                    </p>
                </article>

                <article class="space-card">
                    <h3>Stimulation & confort</h3>
                    <p>
                        Parcours, jeux, cachettes, arbres à chat et coins douillets participent
                        à leur bien-être physique et émotionnel.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <section class="chatterie-care">
        <div class="container chatterie-care__inner">
            <div class="chatterie-care__content" data-animate>
                <span class="section-kicker">Santé & suivi</span>

                <h2>Un élevage sérieux, attentif à la santé et au bon départ des chatons.</h2>

                <p>
                    La chatterie accorde une grande importance au suivi de la santé,
                    aux bonnes conditions de développement et à la préparation du départ des chatons.
                </p>

                <div class="care-list">
                    <div>
                        <strong>Suivi attentif</strong>
                        <p>Observation, croissance, évolution et accompagnement des bébés au quotidien.</p>
                    </div>

                    <div>
                        <strong>Départ préparé</strong>
                        <p>Chaque chaton rejoint sa famille au bon moment, avec ses repères et un cadre rassurant.</p>
                    </div>

                    <div>
                        <strong>Conseils aux familles</strong>
                        <p>Un accompagnement est proposé afin de favoriser une belle transition vers le nouveau foyer.</p>
                    </div>
                </div>
            </div>

            <div class="chatterie-care__visual" data-animate>
                <div class="care-visual-card">
                    <img src="{{ asset('assets/images/chatterie/care.jpg') }}" alt="Chaton Ragdoll dans la chatterie">
                </div>
            </div>
        </div>
    </section>

    <section class="chatterie-final">
        <div class="container">
            <div class="chatterie-final__card" data-animate>
                <span class="chatterie-final__icon">✦</span>

                <h2>Découvrir la chatterie, c’est entrer dans un univers de douceur et de confiance.</h2>

                <p>
                    Si vous souhaitez en savoir plus sur les reproducteurs, les chatons disponibles
                    ou les modalités d’adoption, poursuivez la visite du site ou contactez directement la chatterie.
                </p>

                <div class="chatterie-final__actions">
                    <a href="{{ route('reproducteurs') }}" class="btn btn-secondary">
                        Voir les reproducteurs
                    </a>

                    <a href="{{ route('contact') }}" class="btn btn-primary">
                        Contacter la chatterie
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
