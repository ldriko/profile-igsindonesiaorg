<?php

namespace App\Filament\Resources\TeachingExperiences\Pages;

use App\Filament\Resources\TeachingExperiences\TeachingExperienceResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTeachingExperience extends EditRecord
{
    protected static string $resource = TeachingExperienceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
