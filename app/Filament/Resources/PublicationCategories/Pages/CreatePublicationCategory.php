<?php

namespace App\Filament\Resources\PublicationCategories\Pages;

use App\Filament\Resources\PublicationCategories\PublicationCategoryResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePublicationCategory extends CreateRecord
{
    protected static string $resource = PublicationCategoryResource::class;
}
