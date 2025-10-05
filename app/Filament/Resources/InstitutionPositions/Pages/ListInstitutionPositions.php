<?php

namespace App\Filament\Resources\InstitutionPositions\Pages;

use App\Filament\Resources\InstitutionPositions\InstitutionPositionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListInstitutionPositions extends ListRecords
{
    protected static string $resource = InstitutionPositionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
