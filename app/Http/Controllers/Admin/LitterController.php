<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Litter;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class LitterController extends Controller
{
    public function index(): View
    {
        $litters = Litter::query()
            ->orderBy('sort_order')
            ->latest()
            ->paginate(12);

        return view('admin.portees.index', compact('litters'));
    }

    public function create(): View
    {
        return view('admin.portees.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validatedData($request);

        $data['slug'] = $this->makeUniqueSlug($data['slug'] ?? $data['name']);
        $data['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('cover_image')) {
            $data['cover_image'] = $request->file('cover_image')->store('litters', 'public');
        }

        Litter::create($data);

        return redirect()
            ->route('admin.portees.index')
            ->with('success', 'La portée a bien été créée.');
    }

    public function edit(Litter $litter): View
    {
        return view('admin.portees.edit', compact('litter'));
    }

    public function update(Request $request, Litter $litter): RedirectResponse
    {
        $data = $this->validatedData($request, $litter);

        $data['slug'] = $this->makeUniqueSlug($data['slug'] ?? $data['name'], $litter->id);
        $data['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('cover_image')) {
            if ($litter->cover_image) {
                Storage::disk('public')->delete($litter->cover_image);
            }

            $data['cover_image'] = $request->file('cover_image')->store('litters', 'public');
        }

        $litter->update($data);

        return redirect()
            ->route('admin.portees.index')
            ->with('success', 'La portée a bien été modifiée.');
    }

    public function destroy(Litter $litter): RedirectResponse
    {
        if ($litter->cover_image) {
            Storage::disk('public')->delete($litter->cover_image);
        }

        $litter->delete();

        return redirect()
            ->route('admin.portees.index')
            ->with('success', 'La portée a bien été supprimée.');
    }

    private function validatedData(Request $request, ?Litter $litter = null): array
    {
        return $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255'],
            'type' => ['required', 'string', 'in:current,previous,planned'],
            'birth_date' => ['nullable', 'date'],
            'departure_date' => ['nullable', 'date'],
            'parents' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'cover_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);
    }

    private function makeUniqueSlug(string $value, ?int $ignoreId = null): string
    {
        $baseSlug = Str::slug($value);
        $slug = $baseSlug;
        $counter = 1;

        while (
        Litter::query()
            ->where('slug', $slug)
            ->when($ignoreId, fn ($query) => $query->where('id', '!=', $ignoreId))
            ->exists()
        ) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }
}
