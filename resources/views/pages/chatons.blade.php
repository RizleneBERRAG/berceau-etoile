@extends('layouts.app')

@section('title', 'Chatons & portées | Chatterie Berceau Étoilé')
@section('description', 'Découvrez les chatons disponibles, les portées en cours, les anciennes portées et les statuts de réservation de la Chatterie Berceau Étoilé.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/chatons.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/js/pages/chatons.js') }}"></script>
@endpush

@section('content')

    @php
        $heroImage = $heroLitter?->cover_image
            ? asset('storage/' . $heroLitter->cover_image)
            : asset('assets/images/chatons/hero-chatons.jpg');
    @endphp

    <section class="kittens-hero">
        <div class="container kittens-hero__inner">
            <div class="kittens-hero__content" data-animate>
                <span class="section-kicker">Chatons & portées</span>

                <h1>
                    Les petits trésors du Berceau Étoilé.
                </h1>

                <p>
                    Découvrez les chatons de la chatterie, leurs statuts, leurs premières informations
                    et les portées qui font grandir l’histoire du Berceau Étoilé.
                </p>

                <div class="kittens-hero__badges">
                    <span>Chatons disponibles</span>
                    <span>Portées suivies</span>
                    <span>Réservation accompagnée</span>
                </div>
            </div>

            <div class="kittens-hero__visual" data-animate>
                <div class="kittens-hero__card">
                    <img src="{{ $heroImage }}" alt="Chaton Ragdoll de la Chatterie Berceau Étoilé">

                    <div class="kittens-hero__note">
                        <span>♡</span>

                        <p>
                            Chaque chaton grandit dans un cadre doux, familial et attentif,
                            afin de rejoindre sa future famille avec confiance.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="current-litters">
        <div class="container">
            <div class="section-heading" data-animate>
                <span class="section-kicker">Portées actuelles</span>

                <h2>Les portées actuellement présentées</h2>

                <p>
                    Retrouvez les portées en cours de la chatterie, avec leurs informations principales :
                    date de naissance, parents, départ estimé et photo associée.
                </p>
            </div>

            @if ($currentLitters->isNotEmpty())
                <div class="mobile-carousel" data-mobile-carousel data-animate>
                    <button class="mobile-carousel__arrow mobile-carousel__arrow--prev" type="button" aria-label="Portée précédente">
                        ←
                    </button>

                    <div class="mobile-carousel__track current-litters-grid">
                        @foreach ($currentLitters as $litter)
                            @php
                                $litterImage = $litter->cover_image
                                    ? asset('storage/' . $litter->cover_image)
                                    : asset('assets/images/chatons/portee-actuelle.jpg');
                            @endphp

                            <article class="current-litter-card">
                                <div class="current-litter-card__image">
                                    <img src="{{ $litterImage }}" alt="{{ $litter->name }}">

                                    <span>
                                    {{ $litter->type_label }}
                                </span>
                                </div>

                                <div class="current-litter-card__content">
                                    <h3>{{ $litter->name }}</h3>

                                    <p>
                                        {{ $litter->description ?? 'Une portée suivie avec attention, douceur et patience au sein de la chatterie.' }}
                                    </p>

                                    <div class="current-litter-card__infos">
                                        <div>
                                            <strong>Naissance</strong>

                                            <span>
                                            {{ $litter->birth_date ? $litter->birth_date->format('d/m/Y') : 'À renseigner' }}
                                        </span>
                                        </div>

                                        <div>
                                            <strong>Parents</strong>

                                            <span>
                                            {{ $litter->parents ?? 'À renseigner' }}
                                        </span>
                                        </div>

                                        <div>
                                            <strong>Départ estimé</strong>

                                            <span>
                                            {{ $litter->departure_date ? $litter->departure_date->format('d/m/Y') : 'À renseigner' }}
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>

                    <button class="mobile-carousel__arrow mobile-carousel__arrow--next" type="button" aria-label="Portée suivante">
                        →
                    </button>

                    <div class="mobile-carousel__dots" aria-hidden="true"></div>
                </div>
            @else
                <div class="empty-state" data-animate>
                    <span>☾</span>

                    <h3>Aucune portée actuelle affichée</h3>

                    <p>
                        Les portées actuelles seront visibles ici dès qu’elles seront ajoutées depuis l’espace administrateur.
                    </p>
                </div>
            @endif
        </div>
    </section>

    <section class="kittens-list">
        <div class="container">
            <div class="section-heading" data-animate>
                <span class="section-kicker">Les chatons</span>

                <h2>Les bébés actuellement présentés</h2>

                <p>
                    Chaque fiche permet de visualiser rapidement le prénom, le sexe,
                    la robe et le statut du chaton.
                </p>
            </div>

            @if ($kittens->isNotEmpty())
                <div class="mobile-carousel" data-mobile-carousel data-animate>
                    <button class="mobile-carousel__arrow mobile-carousel__arrow--prev" type="button" aria-label="Chaton précédent">
                        ←
                    </button>

                    <div class="mobile-carousel__track kittens-grid">
                        @foreach ($kittens as $kitten)
                            @php
                                $kittenImage = $kitten->main_image
                                    ? asset('storage/' . $kitten->main_image)
                                    : asset('assets/images/chatons/hero-chatons.jpg');
                            @endphp

                            <article class="kitten-profile">
                                <div class="kitten-profile__image">
                                    <img src="{{ $kittenImage }}" alt="{{ $kitten->name }}">

                                    <span class="kitten-profile__status kitten-profile__status--{{ $kitten->status_class }}">
                                    {{ $kitten->status_label }}
                                </span>
                                </div>

                                <div class="kitten-profile__content">
                                <span class="kitten-profile__eyebrow">
                                    {{ $kitten->litter?->name ?? 'Chaton Ragdoll' }}
                                </span>

                                    <h3>{{ $kitten->name }}</h3>

                                    <div class="kitten-profile__details">
                                        <div>
                                            <span>Sexe</span>
                                            <strong>{{ $kitten->sex_label }}</strong>
                                        </div>

                                        <div>
                                            <span>Robe</span>
                                            <strong>{{ $kitten->coat ?? 'À renseigner' }}</strong>
                                        </div>
                                    </div>

                                    @if ($kitten->description)
                                        <p class="kitten-profile__description">
                                            {{ $kitten->description }}
                                        </p>
                                    @endif

                                    <a href="{{ route('contact') }}" class="text-link">
                                        Demander des informations
                                    </a>
                                </div>
                            </article>
                        @endforeach
                    </div>

                    <button class="mobile-carousel__arrow mobile-carousel__arrow--next" type="button" aria-label="Chaton suivant">
                        →
                    </button>

                    <div class="mobile-carousel__dots" aria-hidden="true"></div>
                </div>
            @else
                <div class="empty-state" data-animate>
                    <span>☾</span>

                    <h3>Aucun chaton affiché pour le moment</h3>

                    <p>
                        Les chatons seront visibles ici dès que la chatterie les ajoutera depuis son espace administrateur.
                    </p>

                    <a href="{{ route('contact') }}" class="btn btn-primary">
                        Contacter la chatterie
                    </a>
                </div>
            @endif
        </div>
    </section>

    <section class="status-section">
        <div class="container">
            <div class="section-heading section-heading--center" data-animate>
                <span class="section-kicker">Comprendre les statuts</span>

                <h2>Des statuts clairs pour suivre l’évolution des bébés.</h2>

                <p>
                    Les statuts permettent aux familles de comprendre rapidement la situation
                    de chaque chaton présenté sur le site.
                </p>
            </div>

            <div class="status-grid" data-animate>
                <article class="status-card status-card--available">
                    <span>01</span>
                    <h3>Disponible</h3>
                    <p>Le chaton peut faire l’objet d’un échange en vue d’une adoption.</p>
                </article>

                <article class="status-card status-card--watch">
                    <span>02</span>
                    <h3>En observation</h3>
                    <p>Le chaton est encore suivi avant de confirmer son orientation ou son statut.</p>
                </article>

                <article class="status-card status-card--reserved">
                    <span>03</span>
                    <h3>Réservé</h3>
                    <p>Une famille est déjà engagée dans le processus de réservation.</p>
                </article>

                <article class="status-card status-card--stay">
                    <span>04</span>
                    <h3>Reste à la chatterie</h3>
                    <p>Le chaton est conservé dans le programme ou l’univers de la chatterie.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="previous-litters">
        <div class="container">
            <div class="section-heading" data-animate>
                <span class="section-kicker">Portées précédentes</span>

                <h2>Les anciens bébés du Berceau Étoilé</h2>

                <p>
                    Une galerie douce pour conserver le souvenir des portées précédentes
                    et montrer l’évolution des chatons nés à la chatterie.
                </p>
            </div>

            @if ($previousLitters->isNotEmpty())
                <div class="mobile-carousel" data-mobile-carousel data-animate>
                    <button class="mobile-carousel__arrow mobile-carousel__arrow--prev" type="button" aria-label="Portée précédente">
                        ←
                    </button>

                    <div class="mobile-carousel__track litters-grid">
                        @foreach ($previousLitters as $litter)
                            @php
                                $litterImage = $litter->cover_image
                                    ? asset('storage/' . $litter->cover_image)
                                    : asset('assets/images/chatons/portee-01.jpg');
                            @endphp

                            <article class="litter-card">
                                <div class="litter-card__image">
                                    <img src="{{ $litterImage }}" alt="{{ $litter->name }}">
                                </div>

                                <div class="litter-card__content">
                                    <span>✦ {{ $litter->type_label }}</span>

                                    <h3>{{ $litter->name }}</h3>

                                    <p>
                                        {{ $litter->description ?? 'Une jolie portée suivie avec attention jusqu’au départ des chatons dans leurs familles.' }}
                                    </p>
                                </div>
                            </article>
                        @endforeach
                    </div>

                    <button class="mobile-carousel__arrow mobile-carousel__arrow--next" type="button" aria-label="Portée suivante">
                        →
                    </button>

                    <div class="mobile-carousel__dots" aria-hidden="true"></div>
                </div>
            @else
                <div class="empty-state empty-state--small" data-animate>
                    <span>✦</span>

                    <h3>Aucune ancienne portée affichée</h3>

                    <p>
                        Les anciennes portées pourront être ajoutées depuis l’espace administrateur.
                    </p>
                </div>
            @endif
        </div>
    </section>

    <section class="kittens-adoption">
        <div class="container">
            <div class="kittens-adoption__card" data-animate>
                <span class="kittens-adoption__icon">☾</span>

                <h2>Vous avez eu un coup de cœur pour un chaton ?</h2>

                <p>
                    L’adoption se fait avec échange, réflexion et accompagnement.
                    La chatterie prend le temps de comprendre votre foyer afin de vous guider
                    vers le chaton le plus adapté.
                </p>

                <div class="kittens-adoption__actions">
                    <a href="{{ route('adoption') }}" class="btn btn-secondary">
                        Voir les modalités
                    </a>

                    <a href="{{ route('contact') }}" class="btn btn-primary">
                        Contacter la chatterie
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
