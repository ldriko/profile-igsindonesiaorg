<?php

namespace App\Filament\Resources\TeachingExperiences\Pages;

use App\Filament\Resources\TeachingExperiences\TeachingExperienceResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTeachingExperiences extends ListRecords
{
    protected static string $resource = TeachingExperienceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
