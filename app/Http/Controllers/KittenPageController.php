<?php

namespace App\Http\Controllers;

use App\Models\Kitten;
use App\Models\Litter;
use Illuminate\View\View;

class KittenPageController extends Controller
{
    public function index(): View
    {
        $currentLitters = Litter::query()
            ->where('type', 'current')
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->latest()
            ->get();

        $heroLitter = $currentLitters->first();

        $kittens = Kitten::query()
            ->with('litter')
            ->where('is_visible', true)
            ->orderBy('sort_order')
            ->latest()
            ->get();

        $previousLitters = Litter::query()
            ->where('type', 'previous')
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->latest()
            ->get();

        return view('pages.chatons', compact(
            'currentLitters',
            'heroLitter',
            'kittens',
            'previousLitters'
        ));
    }
}
