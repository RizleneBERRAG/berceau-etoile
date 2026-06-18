<form action="{{ $action }}" method="POST" enctype="multipart/form-data" class="admin-form">
    @csrf

    @if ($method !== 'POST')
        @method($method)
    @endif

    <div class="admin-form__grid">
        <div class="admin-form__main">
            <div class="admin-field">
                <label for="name">Prénom du chaton *</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name', $kitten?->name) }}"
                    required
                    placeholder="Ex : Bébé Étoile"
                >
            </div>

            <div class="admin-field">
                <label for="slug">Slug</label>
                <input
                    type="text"
                    id="slug"
                    name="slug"
                    value="{{ old('slug', $kitten?->slug) }}"
                    placeholder="Laisser vide pour génération automatique"
                >
            </div>

            <div class="admin-field">
                <label for="description">Description</label>
                <textarea
                    id="description"
                    name="description"
                    rows="7"
                    placeholder="Décrivez son caractère, son évolution, ses petites particularités..."
                >{{ old('description', $kitten?->description) }}</textarea>
            </div>

            <div class="admin-field">
                <label for="coat">Robe</label>
                <input
                    type="text"
                    id="coat"
                    name="coat"
                    value="{{ old('coat', $kitten?->coat) }}"
                    placeholder="Ex : Seal tabby bicolore"
                >
            </div>
        </div>

        <div class="admin-form__side">
            <div class="admin-field">
                <label for="litter_id">Portée associée</label>
                <select id="litter_id" name="litter_id">
                    <option value="">Aucune portée</option>

                    @foreach ($litters as $litter)
                        <option value="{{ $litter->id }}" @selected((string) old('litter_id', $kitten?->litter_id) === (string) $litter->id)>
                            {{ $litter->name }} — {{ $litter->type_label }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="admin-field">
                <label for="sex">Sexe *</label>
                <select id="sex" name="sex" required>
                    <option value="unknown" @selected(old('sex', $kitten?->sex ?? 'unknown') === 'unknown')>
                        À déterminer
                    </option>

                    <option value="female" @selected(old('sex', $kitten?->sex) === 'female')>
                        Femelle
                    </option>

                    <option value="male" @selected(old('sex', $kitten?->sex) === 'male')>
                        Mâle
                    </option>
                </select>
            </div>

            <div class="admin-field">
                <label for="status">Statut *</label>
                <select id="status" name="status" required>
                    <option value="observation" @selected(old('status', $kitten?->status ?? 'observation') === 'observation')>
                        En observation
                    </option>

                    <option value="available" @selected(old('status', $kitten?->status) === 'available')>
                        Disponible
                    </option>

                    <option value="reserved" @selected(old('status', $kitten?->status) === 'reserved')>
                        Réservé
                    </option>

                    <option value="stays" @selected(old('status', $kitten?->status) === 'stays')>
                        Reste à la chatterie
                    </option>
                </select>
            </div>

            <div class="admin-field">
                <label for="sort_order">Ordre d’affichage</label>
                <input
                    type="number"
                    id="sort_order"
                    name="sort_order"
                    value="{{ old('sort_order', $kitten?->sort_order ?? 0) }}"
                    min="0"
                >
            </div>

            <div class="admin-field admin-field--checkbox">
                <input
                    type="checkbox"
                    id="is_visible"
                    name="is_visible"
                    value="1"
                    @checked(old('is_visible', $kitten?->is_visible ?? true))
                >

                <label for="is_visible">Afficher ce chaton sur le site</label>
            </div>

            <div class="admin-field">
                <label for="main_image">Photo principale</label>

                @if ($kitten?->main_image)
                    <div class="admin-current-image">
                        <img src="{{ asset('storage/' . $kitten->main_image) }}" alt="{{ $kitten->name }}">
                    </div>
                @endif

                <input
                    type="file"
                    id="main_image"
                    name="main_image"
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

        <a href="{{ route('admin.chatons.index') }}" class="admin-btn">
            Annuler
        </a>
    </div>
</form>
