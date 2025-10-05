<?php

namespace App\Filament\Resources\PersonalInfos\Pages;

use App\Filament\Resources\PersonalInfos\PersonalInfoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPersonalInfo extends EditRecord
{
    protected static string $resource = PersonalInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
