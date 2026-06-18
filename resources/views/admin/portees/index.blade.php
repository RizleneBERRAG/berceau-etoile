@extends('admin.layouts.app')

@section('title', 'Portées | Administration')
@section('page_title', 'Gestion des portées')

@section('content')

    <section class="admin-section">
        <div class="admin-section__top">
            <div>
                <h2>Portées</h2>
                <p>Ajoutez, modifiez ou désactivez les portées affichées sur la page Chatons.</p>
            </div>

            <a href="{{ route('admin.portees.create') }}" class="admin-btn admin-btn--primary">
                Ajouter une portée
            </a>
        </div>

        @if ($litters->isNotEmpty())
            <div class="admin-cards">
                @foreach ($litters as $litter)
                    <article class="admin-card">
                        <div class="admin-card__image">
                            @if ($litter->cover_image)
                                <img src="{{ asset('storage/' . $litter->cover_image) }}" alt="{{ $litter->name }}">
                            @else
                                <span>Aucune image</span>
                            @endif
                        </div>

                        <div class="admin-card__content">
                            <div class="admin-card__header">
                            <span class="admin-badge">
                                {{ $litter->type_label }}
                            </span>

                                <span class="admin-status {{ $litter->is_active ? 'is-active' : 'is-inactive' }}">
                                {{ $litter->is_active ? 'Visible' : 'Masquée' }}
                            </span>
                            </div>

                            <h3>{{ $litter->name }}</h3>

                            <div class="admin-card__infos">
                                <div>
                                    <strong>Naissance</strong>
                                    <span>{{ $litter->birth_date ? $litter->birth_date->format('d/m/Y') : 'Non renseignée' }}</span>
                                </div>

                                <div>
                                    <strong>Départ</strong>
                                    <span>{{ $litter->departure_date ? $litter->departure_date->format('d/m/Y') : 'Non renseigné' }}</span>
                                </div>

                                <div>
                                    <strong>Parents</strong>
                                    <span>{{ $litter->parents ?: 'Non renseignés' }}</span>
                                </div>
                            </div>

                            <div class="admin-card__actions">
                                <a href="{{ route('admin.portees.edit', $litter) }}" class="admin-btn">
                                    Modifier
                                </a>

                                <form action="{{ route('admin.portees.destroy', $litter) }}" method="POST" onsubmit="return confirm('Supprimer cette portée ?')">
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
                {{ $litters->links() }}
            </div>
        @else
            <div class="admin-empty">
                <span>☾</span>
                <h3>Aucune portée pour le moment</h3>
                <p>Ajoutez une première portée pour commencer à alimenter la page Chatons.</p>

                <a href="{{ route('admin.portees.create') }}" class="admin-btn admin-btn--primary">
                    Créer une portée
                </a>
            </div>
        @endif
    </section>

@endsection
