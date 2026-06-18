@extends('admin.layouts.app')

@section('title', 'Chatons | Administration')
@section('page_title', 'Gestion des chatons')

@section('content')

    <section class="admin-section">
        <div class="admin-section__top">
            <div>
                <h2>Chatons</h2>
                <p>Ajoutez, modifiez ou masquez les chatons affichés sur la page publique.</p>
            </div>

            <a href="{{ route('admin.chatons.create') }}" class="admin-btn admin-btn--primary">
                Ajouter un chaton
            </a>
        </div>

        @if ($kittens->isNotEmpty())
            <div class="admin-cards">
                @foreach ($kittens as $kitten)
                    <article class="admin-card">
                        <div class="admin-card__image">
                            @if ($kitten->main_image)
                                <img src="{{ asset('storage/' . $kitten->main_image) }}" alt="{{ $kitten->name }}">
                            @else
                                <span>Aucune image</span>
                            @endif
                        </div>

                        <div class="admin-card__content">
                            <div class="admin-card__header">
                            <span class="admin-badge">
                                {{ $kitten->status_label }}
                            </span>

                                <span class="admin-status {{ $kitten->is_visible ? 'is-active' : 'is-inactive' }}">
                                {{ $kitten->is_visible ? 'Visible' : 'Masqué' }}
                            </span>
                            </div>

                            <h3>{{ $kitten->name }}</h3>

                            <div class="admin-card__infos">
                                <div>
                                    <strong>Portée</strong>
                                    <span>{{ $kitten->litter?->name ?? 'Non rattaché' }}</span>
                                </div>

                                <div>
                                    <strong>Sexe</strong>
                                    <span>{{ $kitten->sex_label }}</span>
                                </div>

                                <div>
                                    <strong>Robe</strong>
                                    <span>{{ $kitten->coat ?: 'Non renseignée' }}</span>
                                </div>
                            </div>

                            @if ($kitten->description)
                                <p class="admin-card__description">
                                    {{ $kitten->description }}
                                </p>
                            @endif

                            <div class="admin-card__actions">
                                <a href="{{ route('admin.chatons.edit', $kitten) }}" class="admin-btn">
                                    Modifier
                                </a>

                                <form action="{{ route('admin.chatons.destroy', $kitten) }}" method="POST" onsubmit="return confirm('Supprimer ce chaton ?')">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="admin-btn admin-btn--danger">
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="admin-pagination">
                {{ $kittens->links() }}
            </div>
        @else
            <div class="admin-empty">
                <span>♡</span>
                <h3>Aucun chaton pour le moment</h3>
                <p>Ajoutez un premier chaton pour commencer à alimenter la page Chatons.</p>

                <a href="{{ route('admin.chatons.create') }}" class="admin-btn admin-btn--primary">
                    Créer un chaton
                </a>
            </div>
        @endif
    </section>

@endsection
