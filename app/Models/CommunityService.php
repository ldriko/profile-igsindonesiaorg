<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class CommunityService extends Model
{
    /** @use HasFactory<\Database\Factories\CommunityServiceFactory> */
    use HasFactory;
    use HasTranslations;

    public array $translatable = ['title', 'funding_source'];

    protected function casts(): array
    {
        return [
            'title' => 'array',
            'funding_source' => 'array',
        ];
    }

    public function personalInfo(): BelongsTo
    {
        return $this->belongsTo(PersonalInfo::class);
    }
}
