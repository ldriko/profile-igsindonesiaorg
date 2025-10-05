<?php

namespace App\Filament\Resources\PublicationCategories\Pages;

use App\Filament\Resources\PublicationCategories\PublicationCategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPublicationCategory extends EditRecord
{
    protected static string $resource = PublicationCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
