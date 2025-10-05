<?php

namespace App\Filament\Resources\PersonalInfos\Pages;

use App\Filament\Resources\PersonalInfos\PersonalInfoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPersonalInfos extends ListRecords
{
    protected static string $resource = PersonalInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
