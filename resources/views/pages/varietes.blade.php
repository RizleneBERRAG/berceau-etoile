@extends('layouts.app')

@section('title', 'Couleurs & variétés | Chatterie Berceau Étoilé')
@section('description', 'Découvrez les couleurs, patrons et variétés du Ragdoll : seal, bleu, chocolat, lilas, mitted, bicolore, mink, sépia et solide.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/varietes.css') }}">
@endpush

@section('content')

    <section class="varieties-hero">
        <div class="container varieties-hero__inner">
            <div class="varieties-hero__content" data-animate>
                <span class="section-kicker">Couleurs & variétés</span>

                <h1>
                    Un univers de robes douces, élégantes et pleines de nuances.
                </h1>

                <p>
                    Le Ragdoll offre une grande richesse de couleurs, de patrons et d’intensités.
                    Chaque chaton possède une harmonie unique, qui évolue doucement avec le temps.
                </p>

                <div class="varieties-hero__actions">
                    <a href="#couleurs" class="btn btn-primary">Voir les couleurs</a>
                    <a href="#patrons" class="btn btn-secondary">Comprendre les patrons</a>
                </div>
            </div>

            <div class="varieties-hero__visual" data-animate>
                <div class="varieties-hero__card">
                    <img src="{{ asset('assets/images/varietes/varietes-hero.jpg') }}" alt="Ragdoll aux couleurs douces">

                    <div class="varieties-hero__floating">
                        <span>✦</span>
                        <p>Couleurs, patrons, intensités et évolutions du Ragdoll.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="varieties-intro">
        <div class="container">
            <div class="varieties-intro__card" data-animate>
                <span class="varieties-intro__icon">☾</span>

                <h2>Les robes du Ragdoll évoluent avec douceur.</h2>

                <p>
                    Chez le Ragdoll, les couleurs peuvent s’intensifier progressivement avec l’âge.
                    Un chaton très clair à la naissance peut révéler ses nuances au fil des semaines et des mois.
                    C’est ce qui rend chaque évolution particulièrement délicate à observer.
                </p>
            </div>
        </div>
    </section>

    <section class="color-section" id="couleurs">
        <div class="container">
            <div class="section-heading section-heading--center" data-animate>
                <span class="section-kicker">Les couleurs</span>

                <h2>Des nuances douces, du plus profond au plus délicat.</h2>

                <p>
                    Les couleurs principales du Ragdoll se déclinent dans des tons plus ou moins intenses,
                    allant du seal profond au lilas très clair, avec des nuances chocolat, bleu, cinnamon ou fawn.
                </p>
            </div>

            <div class="color-grid" data-animate>
                <article class="color-card color-card--seal">
                    <div class="color-card__swatch"></div>
                    <h3>Seal</h3>
                    <p>Une couleur profonde et chaude, souvent très contrastée avec le corps clair.</p>
                </article>

                <article class="color-card color-card--blue">
                    <div class="color-card__swatch"></div>
                    <h3>Bleu</h3>
                    <p>Une nuance douce et grisée, élégante, plus froide que le seal.</p>
                </article>

                <article class="color-card color-card--chocolate">
                    <div class="color-card__swatch"></div>
                    <h3>Chocolat</h3>
                    <p>Une teinte brune plus lumineuse et plus tendre que le seal.</p>
                </article>

                <article class="color-card color-card--lilac">
                    <div class="color-card__swatch"></div>
                    <h3>Lilas</h3>
                    <p>Une couleur très claire, douce, avec une impression poudrée et délicate.</p>
                </article>

                <article class="color-card color-card--cinnamon">
                    <div class="color-card__swatch"></div>
                    <h3>Cinnamon</h3>
                    <p>Une nuance chaude et rare, avec un brun plus clair et légèrement roux.</p>
                </article>

                <article class="color-card color-card--fawn">
                    <div class="color-card__swatch"></div>
                    <h3>Fawn</h3>
                    <p>Une version très douce et diluée du cinnamon, beige rosé et subtile.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="patterns-section" id="patrons">
        <div class="container patterns-section__inner">
            <div class="patterns-section__content" data-animate>
                <span class="section-kicker">Les patrons</span>

                <h2>Les marquages donnent à chaque Ragdoll son expression unique.</h2>

                <p>
                    Au-delà de la couleur, le patron détermine la répartition des zones colorées,
                    du blanc et des contrastes. C’est ce qui donne au visage, aux pattes et au corps
                    leur équilibre visuel.
                </p>
            </div>

            <div class="pattern-cards" data-animate>
                <article class="pattern-card">
                    <span>01</span>
                    <h3>Colourpoint</h3>
                    <p>
                        Les extrémités sont colorées : oreilles, masque, pattes et queue.
                        Le corps reste plus clair.
                    </p>
                </article>

                <article class="pattern-card">
                    <span>02</span>
                    <h3>Mitted</h3>
                    <p>
                        Le chat présente des gants blancs aux pattes, souvent avec une ligne blanche
                        douce sur le ventre.
                    </p>
                </article>

                <article class="pattern-card">
                    <span>03</span>
                    <h3>Bicolore</h3>
                    <p>
                        Le blanc est plus présent, notamment sur le visage, donnant souvent une expression
                        très ouverte et lumineuse.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <section class="variants-section">
        <div class="container">
            <div class="section-heading" data-animate>
                <span class="section-kicker">Les intensités</span>

                <h2>Traditionnel, mink, sépia ou solide : des intensités différentes.</h2>

                <p>
                    Certaines lignées présentent des variations d’intensité qui influencent la couleur du corps,
                    le contraste et parfois l’apparence générale du regard.
                </p>
            </div>

            <div class="variants-grid" data-animate>
                <article class="variant-card variant-card--large">
                    <div class="variant-card__image">
                        <img src="{{ asset('assets/images/varietes/traditionnel.jpg') }}" alt="Ragdoll traditionnel">
                    </div>

                    <div class="variant-card__content">
                        <h3>Traditionnel</h3>
                        <p>
                            Le Ragdoll traditionnel présente généralement un contraste marqué entre le corps clair
                            et les extrémités colorées, avec une évolution progressive de la robe.
                        </p>
                    </div>
                </article>

                <article class="variant-card">
                    <h3>Mink</h3>
                    <p>
                        Une intensité plus soutenue, avec un corps souvent plus coloré que le traditionnel.
                    </p>
                </article>

                <article class="variant-card">
                    <h3>Sépia</h3>
                    <p>
                        Une robe encore plus chaude et enveloppante, avec moins de contraste.
                    </p>
                </article>

                <article class="variant-card">
                    <h3>Solide</h3>
                    <p>
                        Une couleur plus uniforme, avec une expression différente du Ragdoll traditionnel.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <section class="details-section">
        <div class="container details-section__inner">
            <div class="details-section__visual" data-animate>
                <div class="details-picture details-picture--one">
                    <img src="{{ asset('assets/images/varietes/detail-01.jpg') }}" alt="Détail de robe Ragdoll">
                </div>

                <div class="details-picture details-picture--two">
                    <img src="{{ asset('assets/images/varietes/detail-02.jpg') }}" alt="Chaton Ragdoll clair">
                </div>
            </div>

            <div class="details-section__content" data-animate>
                <span class="section-kicker">Petites nuances</span>

                <h2>Tabby, tortie, torbie : les détails qui rendent chaque robe unique.</h2>

                <p>
                    Certaines robes peuvent aussi présenter des motifs supplémentaires.
                    Le tabby apporte des marquages plus visibles, le tortie mélange plusieurs tons,
                    et le torbie combine l’effet tabby avec les nuances tortie.
                </p>

                <div class="details-list">
                    <div>
                        <strong>Tabby</strong>
                        <span>Des marquages fins qui ajoutent du relief à la robe.</span>
                    </div>

                    <div>
                        <strong>Tortie</strong>
                        <span>Un mélange de couleurs qui crée une expression très douce et unique.</span>
                    </div>

                    <div>
                        <strong>Torbie</strong>
                        <span>Une combinaison entre marquages tabby et nuances tortie.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="varieties-final">
        <div class="container">
            <div class="varieties-final__card" data-animate>
                <span class="varieties-final__icon">✦</span>

                <h2>Chaque chaton révèle sa beauté à son rythme.</h2>

                <p>
                    Lors d’une adoption, la chatterie vous accompagne pour comprendre l’évolution possible
                    de la robe, le caractère du chaton et l’harmonie qui correspond le mieux à votre foyer.
                </p>

                <div class="varieties-final__actions">
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
