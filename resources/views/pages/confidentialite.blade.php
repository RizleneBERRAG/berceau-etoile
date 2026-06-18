@extends('layouts.app')

@section('title', 'Politique de confidentialité | Chatterie Berceau Étoilé')
@section('description', 'Politique de confidentialité de la Chatterie Berceau Étoilé.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/legal.css') }}">
@endpush

@section('content')

    <section class="legal-hero">
        <div class="container">
            <span class="section-kicker">Confidentialité</span>

            <h1>Politique de confidentialité</h1>

            <p>
                Cette page explique comment les données transmises via le site peuvent être utilisées
                dans le cadre des demandes de contact et d’adoption.
            </p>
        </div>
    </section>

    <section class="legal-content">
        <div class="container">
            <div class="legal-card">
                <article>
                    <h2>Données collectées</h2>

                    <p>
                        Lorsque vous utilisez le formulaire de contact, certaines informations peuvent être demandées :
                        prénom, nom, adresse email, numéro de téléphone, sujet de la demande et contenu du message.
                    </p>
                </article>

                <article>
                    <h2>Finalité de la collecte</h2>

                    <p>
                        Les informations transmises sont utilisées uniquement pour répondre à votre demande,
                        échanger au sujet d’un projet d’adoption, vous renseigner sur une portée ou vous accompagner
                        dans vos démarches auprès de la chatterie.
                    </p>
                </article>

                <article>
                    <h2>Durée de conservation</h2>

                    <p>
                        Les données sont conservées pendant la durée nécessaire au traitement de votre demande.
                        Elles peuvent être supprimées sur simple demande.
                    </p>
                </article>

                <article>
                    <h2>Partage des données</h2>

                    <p>
                        Les données transmises via le site ne sont pas vendues. Elles ne sont communiquées à aucun tiers,
                        sauf obligation légale ou nécessité technique liée au bon fonctionnement du site.
                    </p>
                </article>

                <article>
                    <h2>Cookies</h2>

                    <p>
                        Le site peut utiliser des cookies nécessaires à son bon fonctionnement. Si des services tiers
                        sont intégrés, comme une carte Google Maps ou des avis Google, ces services peuvent déposer
                        leurs propres cookies selon leurs politiques respectives.
                    </p>
                </article>

                <article>
                    <h2>Carte Google Maps</h2>

                    <p>
                        Le site peut intégrer une carte Google Maps afin d’afficher une localisation générale.
                        L’utilisation de cette carte peut entraîner le traitement de certaines données par Google.
                    </p>
                </article>

                <article>
                    <h2>Vos droits</h2>

                    <p>
                        Vous pouvez demander l’accès, la modification ou la suppression de vos données personnelles
                        en contactant la chatterie à l’adresse suivante :
                        <strong>contact@chatterieberceauetoile.fr</strong>.
                    </p>
                </article>

                <article>
                    <h2>Contact</h2>

                    <p>
                        Pour toute question concernant cette politique de confidentialité, vous pouvez contacter
                        la Chatterie Berceau Étoilé via la page contact du site.
                    </p>
                </article>
            </div>
        </div>
    </section>

@endsection
