@extends('layouts.app')

@section('title', 'Modalités d’adoption | Chatterie Berceau Étoilé')
@section('description', 'Découvrez les modalités d’adoption des chatons Ragdoll de la Chatterie Berceau Étoilé : réservation, départ, documents, accompagnement et suivi.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/adoption.css') }}">
@endpush

@section('content')

    <section class="adoption-hero">
        <div class="container adoption-hero__inner">
            <div class="adoption-hero__content" data-animate>
                <span class="section-kicker">Modalités d’adoption</span>

                <h1>
                    Une adoption réfléchie, douce et accompagnée.
                </h1>

                <p>
                    Accueillir un chaton est une belle aventure. À la Chatterie Berceau Étoilé,
                    chaque départ est préparé avec attention afin de respecter le rythme du chaton
                    et de guider chaque famille avec sérieux.
                </p>

                <div class="adoption-hero__actions">
                    <a href="{{ route('chatons') }}" class="btn btn-primary">
                        Voir les chatons
                    </a>

                    <a href="{{ route('contact') }}" class="btn btn-secondary">
                        Nous contacter
                    </a>
                </div>
            </div>

            <div class="adoption-hero__visual" data-animate>
                <div class="adoption-hero__card">
                    <img src="{{ asset('assets/images/adoption/adoption-hero.jpg') }}" alt="Chaton Ragdoll dans un univers doux">

                    <div class="adoption-hero__note">
                        <span>♡</span>

                        <p>
                            Chaque famille est accompagnée avec bienveillance, avant et après l’arrivée du chaton.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="adoption-intro">
        <div class="container">
            <div class="adoption-intro__card" data-animate>
                <span class="adoption-intro__icon">☾</span>

                <span class="section-kicker">Notre philosophie</span>

                <h2>
                    Le bon chaton, pour la bonne famille.
                </h2>

                <p>
                    L’objectif n’est pas seulement de réserver un chaton, mais de trouver une belle harmonie
                    entre son tempérament, son évolution et votre foyer. La chatterie prend le temps d’échanger
                    avec vous afin de comprendre votre mode de vie, vos attentes et l’environnement dans lequel
                    le chaton grandira.
                </p>
            </div>
        </div>
    </section>

    <section class="adoption-steps">
        <div class="container">
            <div class="section-heading" data-animate>
                <span class="section-kicker">Les étapes</span>

                <h2>Comment se déroule une adoption ?</h2>

                <p>
                    Le processus est pensé pour rester simple, transparent et rassurant,
                    tout en laissant le temps nécessaire à la réflexion.
                </p>
            </div>

            <div class="adoption-steps__grid" data-animate>
                <article class="adoption-step-card">
                    <span>01</span>
                    <h3>Premier contact</h3>
                    <p>
                        Vous contactez la chatterie pour présenter votre projet d’adoption,
                        votre foyer et vos attentes.
                    </p>
                </article>

                <article class="adoption-step-card">
                    <span>02</span>
                    <h3>Échange & réflexion</h3>
                    <p>
                        Un échange permet de mieux comprendre votre mode de vie et de vous orienter
                        vers un chaton adapté.
                    </p>
                </article>

                <article class="adoption-step-card">
                    <span>03</span>
                    <h3>Choix du chaton</h3>
                    <p>
                        Le choix se fait selon les disponibilités, le caractère du chaton,
                        son évolution et vos critères.
                    </p>
                </article>

                <article class="adoption-step-card">
                    <span>04</span>
                    <h3>Réservation</h3>
                    <p>
                        La réservation est confirmée avec un contrat et le versement d’arrhes,
                        selon les modalités de la chatterie.
                    </p>
                </article>

                <article class="adoption-step-card">
                    <span>05</span>
                    <h3>Préparation du départ</h3>
                    <p>
                        Le chaton continue de grandir, d’être observé, socialisé et préparé
                        à rejoindre sa future famille.
                    </p>
                </article>

                <article class="adoption-step-card">
                    <span>06</span>
                    <h3>Arrivée à la maison</h3>
                    <p>
                        Le départ se fait avec les documents nécessaires, des conseils
                        et un accompagnement après adoption.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <section class="adoption-conditions">
        <div class="container adoption-conditions__inner">
            <div class="adoption-conditions__content" data-animate>
                <span class="section-kicker">Conditions de départ</span>

                <h2>
                    Un départ préparé avec sérieux.
                </h2>

                <p>
                    Les chatons quittent la chatterie lorsqu’ils sont prêts, après une période de croissance,
                    de socialisation et de suivi attentif. L’âge exact de départ peut varier selon le chaton,
                    son évolution et les recommandations de la chatterie.
                </p>

                <div class="adoption-conditions__list">
                    <div>
                        <strong>Départ entre 12 et 16 semaines</strong>
                        <span>
                        Le départ se fait au bon moment, selon la maturité du chaton et son évolution.
                    </span>
                    </div>

                    <div>
                        <strong>Chaton identifié et suivi</strong>
                        <span>
                        Chaque chaton bénéficie d’un suivi adapté avant son départ.
                    </span>
                    </div>

                    <div>
                        <strong>Stérilisation compagnie</strong>
                        <span>
                        Les chatons destinés à la compagnie partent selon les conditions prévues par la chatterie.
                    </span>
                    </div>
                </div>
            </div>

            <div class="adoption-conditions__visual" data-animate>
                <div class="adoption-soft-card">
                    <span>✦</span>
                    <h3>Une adoption responsable</h3>
                    <p>
                        La chatterie se réserve le droit de refuser une adoption si les conditions
                        ne semblent pas adaptées au bien-être du chaton.
                    </p>
                </div>

                <div class="adoption-picture">
                    <img src="{{ asset('assets/images/adoption/adoption-care.jpg') }}" alt="Chaton Ragdoll accompagné avec douceur">
                </div>
            </div>
        </div>
    </section>

    <section class="adoption-included">
        <div class="container">
            <div class="section-heading section-heading--center" data-animate>
                <span class="section-kicker">Au départ</span>

                <h2>Ce qui accompagne le chaton.</h2>

                <p>
                    Le chaton rejoint sa famille avec les éléments essentiels pour commencer
                    cette nouvelle étape sereinement.
                </p>
            </div>

            <div class="included-grid" data-animate>
                <article class="included-card">
                    <span>📄</span>
                    <h3>Documents</h3>
                    <p>
                        Contrat, certificat de bonne santé et documents nécessaires selon la situation du chaton.
                    </p>
                </article>

                <article class="included-card">
                    <span>🩺</span>
                    <h3>Suivi santé</h3>
                    <p>
                        Les informations de santé et de suivi sont transmises afin de faciliter la continuité.
                    </p>
                </article>

                <article class="included-card">
                    <span>🎁</span>
                    <h3>Kit chaton</h3>
                    <p>
                        Un kit de départ peut accompagner le chaton pour l’aider à retrouver des repères familiers.
                    </p>
                </article>

                <article class="included-card">
                    <span>💬</span>
                    <h3>Conseils</h3>
                    <p>
                        La chatterie reste disponible pour vous guider dans les premiers jours d’adaptation.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <section class="adoption-faq">
        <div class="container">
            <div class="section-heading" data-animate>
                <span class="section-kicker">Questions fréquentes</span>

                <h2>Avant de réserver un chaton.</h2>

                <p>
                    Quelques points importants pour mieux comprendre le fonctionnement de la chatterie
                    avant de commencer une démarche d’adoption.
                </p>
            </div>

            <div class="faq-list" data-animate>
                <details class="faq-item" open>
                    <summary>Peut-on choisir son chaton uniquement sur photo ?</summary>
                    <p>
                        Les photos donnent une première impression, mais le tempérament et l’évolution
                        du chaton sont aussi essentiels. La chatterie vous accompagne dans ce choix.
                    </p>
                </details>

                <details class="faq-item">
                    <summary>Quand peut-on réserver un chaton ?</summary>
                    <p>
                        La réservation se fait lorsque les échanges sont avancés et que la chatterie peut confirmer
                        qu’un chaton correspond à votre projet.
                    </p>
                </details>

                <details class="faq-item">
                    <summary>Les statuts peuvent-ils changer ?</summary>
                    <p>
                        Oui. Un chaton peut être en observation avant que son orientation soit confirmée :
                        compagnie, reproduction, réservation ou maintien à la chatterie.
                    </p>
                </details>

                <details class="faq-item">
                    <summary>La chatterie assure-t-elle un suivi après adoption ?</summary>
                    <p>
                        Oui, l’accompagnement continue après le départ du chaton afin de vous aider
                        dans son adaptation et ses premiers jours à la maison.
                    </p>
                </details>
            </div>
        </div>
    </section>

    <section class="adoption-final">
        <div class="container">
            <div class="adoption-final__card" data-animate>
                <span class="adoption-final__icon">♡</span>

                <h2>
                    Prêt à présenter votre projet d’adoption ?
                </h2>

                <p>
                    Prenez le temps de découvrir les chatons et de contacter la chatterie
                    pour échanger autour de votre foyer, vos attentes et votre futur compagnon.
                </p>

                <div class="adoption-final__actions">
                    <a href="{{ route('chatons') }}" class="btn btn-secondary">
                        Voir les chatons
                    </a>

                    <a href="{{ route('contact') }}" class="btn btn-primary">
                        Contacter la chatterie
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
