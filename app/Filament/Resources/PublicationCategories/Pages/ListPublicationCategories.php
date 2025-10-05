<?php

namespace App\Filament\Resources\PublicationCategories\Pages;

use App\Filament\Resources\PublicationCategories\PublicationCategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPublicationCategories extends ListRecords
{
    protected static string $resource = PublicationCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
