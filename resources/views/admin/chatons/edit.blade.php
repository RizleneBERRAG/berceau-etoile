@extends('admin.layouts.app')

@section('title', 'Modifier un chaton | Administration')
@section('page_title', 'Modifier un chaton')

@section('content')

    <section class="admin-section">
        <div class="admin-section__top">
            <div>
                <h2>{{ $kitten->name }}</h2>
                <p>Modifiez les informations de ce chaton.</p>
            </div>

            <a href="{{ route('admin.chatons.index') }}" class="admin-btn">
                Retour
            </a>
        </div>

        @include('admin.chatons._form', [
            'action' => route('admin.chatons.update', $kitten),
            'method' => 'PUT',
            'kitten' => $kitten,
            'litters' => $litters,
        ])
    </section>

@endsection
