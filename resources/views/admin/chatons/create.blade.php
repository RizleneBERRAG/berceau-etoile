@extends('admin.layouts.app')

@section('title', 'Ajouter un chaton | Administration')
@section('page_title', 'Ajouter un chaton')

@section('content')

    <section class="admin-section">
        <div class="admin-section__top">
            <div>
                <h2>Nouveau chaton</h2>
                <p>Renseignez les informations qui seront affichées sur la page Chatons.</p>
            </div>

            <a href="{{ route('admin.chatons.index') }}" class="admin-btn">
                Retour
            </a>
        </div>

        @include('admin.chatons._form', [
            'action' => route('admin.chatons.store'),
            'method' => 'POST',
            'kitten' => null,
            'litters' => $litters,
        ])
    </section>

@endsection
