<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class BookWriting extends Model
{
    /** @use HasFactory<\Database\Factories\BookWritingFactory> */
    use HasFactory;

    use HasTranslations;

    public array $translatable = ['title', 'publisher'];

    protected function casts(): array
    {
        return [
            'title' => 'array',
            'publisher' => 'array',
        ];
    }

    public function personalInfo(): BelongsTo
    {
        return $this->belongsTo(PersonalInfo::class);
    }
}
