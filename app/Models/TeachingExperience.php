<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class TeachingExperience extends Model
{
    /** @use HasFactory<\Database\Factories\TeachingExperienceFactory> */
    use HasFactory;

    use HasTranslations;

    public array $translatable = ['course_name', 'program'];

    protected function casts(): array
    {
        return [
            'course_name' => 'array',
            'program' => 'array',
        ];
    }

    public function personalInfo(): BelongsTo
    {
        return $this->belongsTo(PersonalInfo::class);
    }
}
