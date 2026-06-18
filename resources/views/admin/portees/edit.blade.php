@extends('admin.layouts.app')

@section('title', 'Modifier une portée | Administration')
@section('page_title', 'Modifier une portée')

@section('content')

    <section class="admin-section">
        <div class="admin-section__top">
            <div>
                <h2>{{ $litter->name }}</h2>
                <p>Modifiez les informations de cette portée.</p>
            </div>

            <a href="{{ route('admin.portees.index') }}" class="admin-btn">
                Retour
            </a>
        </div>

        @include('admin.portees._form', [
            'action' => route('admin.portees.update', $litter),
            'method' => 'PUT',
            'litter' => $litter,
        ])
    </section>

@endsection
