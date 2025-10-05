<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class TeachingMaterial extends Model
{
    /** @use HasFactory<\Database\Factories\TeachingMaterialFactory> */
    use HasFactory;

    use HasTranslations;

    public array $translatable = ['title', 'program', 'type'];

    protected function casts(): array
    {
        return [
            'title' => 'array',
            'program' => 'array',
            'type' => 'array',
        ];
    }

    public function personalInfo(): BelongsTo
    {
        return $this->belongsTo(PersonalInfo::class);
    }
}
