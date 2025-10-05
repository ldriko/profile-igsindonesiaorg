<?php

namespace App\Filament\Resources\IntellectualProperties\Pages;

use App\Filament\Resources\IntellectualProperties\IntellectualPropertyResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListIntellectualProperties extends ListRecords
{
    protected static string $resource = IntellectualPropertyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
