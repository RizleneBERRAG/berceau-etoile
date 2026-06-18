<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kitten;
use App\Models\Litter;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class KittenController extends Controller
{
    public function index(): View
    {
        $kittens = Kitten::query()
            ->with('litter')
            ->orderBy('sort_order')
            ->latest()
            ->paginate(12);

        return view('admin.chatons.index', compact('kittens'));
    }

    public function create(): View
    {
        $litters = $this->littersForSelect();

        return view('admin.chatons.create', compact('litters'));
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validatedData($request);

        $data['slug'] = $this->makeUniqueSlug($data['slug'] ?? $data['name']);
        $data['is_visible'] = $request->boolean('is_visible');

        if ($request->hasFile('main_image')) {
            $data['main_image'] = $request->file('main_image')->store('kittens', 'public');
        }

        Kitten::create($data);

        return redirect()
            ->route('admin.chatons.index')
            ->with('success', 'Le chaton a bien été créé.');
    }

    public function edit(Kitten $kitten): View
    {
        $litters = $this->littersForSelect();

        return view('admin.chatons.edit', compact('kitten', 'litters'));
    }

    public function update(Request $request, Kitten $kitten): RedirectResponse
    {
        $data = $this->validatedData($request);

        $data['slug'] = $this->makeUniqueSlug($data['slug'] ?? $data['name'], $kitten->id);
        $data['is_visible'] = $request->boolean('is_visible');

        if ($request->hasFile('main_image')) {
            if ($kitten->main_image) {
                Storage::disk('public')->delete($kitten->main_image);
            }

            $data['main_image'] = $request->file('main_image')->store('kittens', 'public');
        }

        $kitten->update($data);

        return redirect()
            ->route('admin.chatons.index')
            ->with('success', 'Le chaton a bien été modifié.');
    }

    public function destroy(Kitten $kitten): RedirectResponse
    {
        if ($kitten->main_image) {
            Storage::disk('public')->delete($kitten->main_image);
        }

        $kitten->delete();

        return redirect()
            ->route('admin.chatons.index')
            ->with('success', 'Le chaton a bien été supprimé.');
    }

    private function validatedData(Request $request): array
    {
        return $request->validate([
            'litter_id' => ['nullable', 'exists:litters,id'],
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255'],
            'sex' => ['required', 'string', 'in:male,female,unknown'],
            'coat' => ['nullable', 'string', 'max:255'],
            'status' => ['required', 'string', 'in:available,observation,reserved,stays'],
            'description' => ['nullable', 'string'],
            'main_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);
    }

    private function littersForSelect()
    {
        return Litter::query()
            ->orderBy('sort_order')
            ->latest()
            ->get();
    }

    private function makeUniqueSlug(string $value, ?int $ignoreId = null): string
    {
        $baseSlug = Str::slug($value);
        $slug = $baseSlug;
        $counter = 1;

        while (
        Kitten::query()
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
