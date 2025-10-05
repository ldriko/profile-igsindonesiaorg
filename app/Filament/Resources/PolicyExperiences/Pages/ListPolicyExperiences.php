<?php

namespace App\Filament\Resources\PolicyExperiences\Pages;

use App\Filament\Resources\PolicyExperiences\PolicyExperienceResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPolicyExperiences extends ListRecords
{
    protected static string $resource = PolicyExperienceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
