@extends('layouts.app')

@section('title', 'Mentions légales | Chatterie Berceau Étoilé')
@section('description', 'Mentions légales de la Chatterie Berceau Étoilé.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/legal.css') }}">
@endpush

@section('content')

    <section class="legal-hero">
        <div class="container">
            <span class="section-kicker">Mentions légales</span>

            <h1>Mentions légales</h1>

            <p>
                Retrouvez les informations légales relatives au site de la Chatterie Berceau Étoilé.
            </p>
        </div>
    </section>

    <section class="legal-content">
        <div class="container">
            <div class="legal-card">
                <article>
                    <h2>Éditeur du site</h2>

                    <p>
                        <strong>Nom :</strong> Chatterie Berceau Étoilé<br>
                        <strong>Responsable de publication :</strong> Chatterie Berceau Étoilé<br>
                        <strong>Adresse :</strong> Région lyonnaise — 4 Rue des Portails, 69170 Saint-Clément-sur-Valsonne<br>
                        <strong>Email :</strong> chatterieberceauetoile@gmail.com<br>
                        <strong>Téléphone :</strong> 06 52 69 12 35
                    </p>
                </article>

                <article>
                    <h2>Activité</h2>

                    <p>
                        La Chatterie Berceau Étoilé est une chatterie familiale spécialisée dans l’élevage de Ragdolls.
                        Les informations présentées sur ce site ont pour objectif de présenter la chatterie, les reproducteurs,
                        les portées, les chatons et les modalités d’adoption.
                    </p>
                </article>

                <article>
                    <h2>Identification professionnelle</h2>

                    <p>
                        <strong>SIRET :</strong> 910 144 419 00017 <br>
                        <strong>Déclaration / immatriculation :</strong> À compléter<br>
                        <strong>Numéro de portée / informations administratives :</strong> À compléter si nécessaire
                    </p>
                </article>

                <article>
                    <h2>Développement du site</h2>

                    <p>
                        Site conçu et développé par Rizlene Berrag.
                    </p>
                </article>

                <article>
                    <h2>Hébergement</h2>

                    <p>
                        <strong>Hébergeur :</strong> À compléter<br>
                        <strong>Adresse de l’hébergeur :</strong> À compléter<br>
                        <strong>Site web :</strong> À compléter
                    </p>
                </article>

                <article>
                    <h2>Propriété intellectuelle</h2>

                    <p>
                        L’ensemble des contenus présents sur ce site, notamment les textes, images, photographies,
                        éléments graphiques et logo, sont protégés. Toute reproduction, modification ou utilisation
                        sans autorisation préalable est interdite.
                    </p>
                </article>

                <article>
                    <h2>Responsabilité</h2>

                    <p>
                        La chatterie s’efforce de maintenir les informations du site à jour. Toutefois, certaines données
                        peuvent évoluer, notamment les disponibilités des chatons, les portées, les statuts de réservation
                        ou les modalités d’adoption.
                    </p>
                </article>
            </div>
        </div>
    </section>

@endsection
