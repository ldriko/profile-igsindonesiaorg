<?php

namespace App\Filament\Resources\PolicyExperiences\Pages;

use App\Filament\Resources\PolicyExperiences\PolicyExperienceResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPolicyExperience extends EditRecord
{
    protected static string $resource = PolicyExperienceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
