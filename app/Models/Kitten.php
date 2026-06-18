<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kitten extends Model
{
    use HasFactory;

    protected $fillable = [
        'litter_id',
        'name',
        'slug',
        'sex',
        'coat',
        'status',
        'description',
        'main_image',
        'is_visible',
        'sort_order',
    ];

    protected $casts = [
        'is_visible' => 'boolean',
    ];

    public function litter(): BelongsTo
    {
        return $this->belongsTo(Litter::class);
    }

    public function getSexLabelAttribute(): string
    {
        return match ($this->sex) {
            'male' => 'Mâle',
            'female' => 'Femelle',
            default => 'À déterminer',
        };
    }

    public function getStatusLabelAttribute(): string
    {
        return match ($this->status) {
            'available' => 'Disponible',
            'observation' => 'En observation',
            'reserved' => 'Réservé',
            'stays' => 'Reste à la chatterie',
            default => 'En observation',
        };
    }

    public function getStatusClassAttribute(): string
    {
        return match ($this->status) {
            'available' => 'available',
            'observation' => 'watch',
            'reserved' => 'reserved',
            'stays' => 'stay',
            default => 'watch',
        };
    }
}
