<form action="{{ $action }}" method="POST" enctype="multipart/form-data" class="admin-form">
    @csrf

    @if ($method !== 'POST')
        @method($method)
    @endif

    <div class="admin-form__grid">
        <div class="admin-form__main">
            <div class="admin-field">
                <label for="name">Nom de la portée *</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name', $litter?->name) }}"
                    required
                    placeholder="Ex : Portée des Étoiles"
                >
            </div>

            <div class="admin-field">
                <label for="slug">Slug</label>
                <input
                    type="text"
                    id="slug"
                    name="slug"
                    value="{{ old('slug', $litter?->slug) }}"
                    placeholder="Laisser vide pour génération automatique"
                >
            </div>

            <div class="admin-field">
                <label for="description">Description</label>
                <textarea
                    id="description"
                    name="description"
                    rows="7"
                    placeholder="Décrivez la portée, son ambiance, les bébés, les parents..."
                >{{ old('description', $litter?->description) }}</textarea>
            </div>

            <div class="admin-field">
                <label for="parents">Parents</label>
                <input
                    type="text"
                    id="parents"
                    name="parents"
                    value="{{ old('parents', $litter?->parents) }}"
                    placeholder="Ex : Teddy x Astrée"
                >
            </div>
        </div>

        <div class="admin-form__side">
            <div class="admin-field">
                <label for="type">Type de portée *</label>
                <select id="type" name="type" required>
                    <option value="current" @selected(old('type', $litter?->type ?? 'current') === 'current')>
                        Portée actuelle
                    </option>

                    <option value="previous" @selected(old('type', $litter?->type) === 'previous')>
                        Portée précédente
                    </option>

                    <option value="planned" @selected(old('type', $litter?->type) === 'planned')>
                        Portée prévue
                    </option>
                </select>
            </div>

            <div class="admin-field">
                <label for="birth_date">Date de naissance</label>
                <input
                    type="date"
                    id="birth_date"
                    name="birth_date"
                    value="{{ old('birth_date', $litter?->birth_date?->format('Y-m-d')) }}"
                >
            </div>

            <div class="admin-field">
                <label for="departure_date">Date de départ estimée</label>
                <input
                    type="date"
                    id="departure_date"
                    name="departure_date"
                    value="{{ old('departure_date', $litter?->departure_date?->format('Y-m-d')) }}"
                >
            </div>

            <div class="admin-field">
                <label for="sort_order">Ordre d’affichage</label>
                <input
                    type="number"
                    id="sort_order"
                    name="sort_order"
                    value="{{ old('sort_order', $litter?->sort_order ?? 0) }}"
                    min="0"
                >
            </div>

            <div class="admin-field admin-field--checkbox">
                <input
                    type="checkbox"
                    id="is_active"
                    name="is_active"
                    value="1"
                    @checked(old('is_active', $litter?->is_active ?? true))
                >

                <label for="is_active">Afficher cette portée sur le site</label>
            </div>

            <div class="admin-field">
                <label for="cover_image">Photo principale</label>

                @if ($litter?->cover_image)
                    <div class="admin-current-image">
                        <img src="{{ asset('storage/' . $litter->cover_image) }}" alt="{{ $litter->name }}">
                    </div>
                @endif

                <input
                    type="file"
                    id="cover_image"
                    name="cover_image"
                    accept="image/jpeg,image/png,image/webp"
                >

                <small>Formats acceptés : JPG, PNG, WEBP. Taille max : 4 Mo.</small>
            </div>
        </div>
    </div>

    <div class="admin-form__actions">
        <button type="submit" class="admin-btn admin-btn--primary">
            Enregistrer
        </button>

        <a href="{{ route('admin.portees.index') }}" class="admin-btn">
            Annuler
        </a>
    </div>
</form>
