<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Litter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'type',
        'birth_date',
        'departure_date',
        'parents',
        'description',
        'cover_image',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'birth_date' => 'date',
        'departure_date' => 'date',
        'is_active' => 'boolean',
    ];

    public function kittens(): HasMany
    {
        return $this->hasMany(Kitten::class);
    }

    public function getTypeLabelAttribute(): string
    {
        return match ($this->type) {
            'current' => 'Portée actuelle',
            'previous' => 'Portée précédente',
            'planned' => 'Portée prévue',
            default => 'Portée',
        };
    }
}
