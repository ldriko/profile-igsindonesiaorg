<?php

namespace App\Filament\Resources\BookWritings\Pages;

use App\Filament\Resources\BookWritings\BookWritingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBookWritings extends ListRecords
{
    protected static string $resource = BookWritingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
