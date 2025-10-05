<?php

namespace App\Filament\Resources\InstitutionPositions\Pages;

use App\Filament\Resources\InstitutionPositions\InstitutionPositionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditInstitutionPosition extends EditRecord
{
    protected static string $resource = InstitutionPositionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
