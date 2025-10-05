<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class PolicyExperience extends Model
{
    /** @use HasFactory<\Database\Factories\PolicyExperienceFactory> */
    use HasFactory;

    use HasTranslations;

    public array $translatable = ['title', 'role', 'institution', 'description'];

    protected function casts(): array
    {
        return [
            'title' => 'array',
            'role' => 'array',
            'institution' => 'array',
            'description' => 'array',
        ];
    }

    public function personalInfo(): BelongsTo
    {
        return $this->belongsTo(PersonalInfo::class);
    }
}
