@extends('admin.layouts.app')

@section('title', 'Ajouter une portée | Administration')
@section('page_title', 'Ajouter une portée')

@section('content')

    <section class="admin-section">
        <div class="admin-section__top">
            <div>
                <h2>Nouvelle portée</h2>
                <p>Renseignez les informations qui seront affichées sur la page Chatons.</p>
            </div>

            <a href="{{ route('admin.portees.index') }}" class="admin-btn">
                Retour
            </a>
        </div>

        @include('admin.portees._form', [
            'action' => route('admin.portees.store'),
            'method' => 'POST',
            'litter' => null,
        ])
    </section>

@endsection
