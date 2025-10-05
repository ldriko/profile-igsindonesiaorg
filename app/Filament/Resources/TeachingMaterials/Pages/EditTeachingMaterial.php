<?php

namespace App\Filament\Resources\TeachingMaterials\Pages;

use App\Filament\Resources\TeachingMaterials\TeachingMaterialResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTeachingMaterial extends EditRecord
{
    protected static string $resource = TeachingMaterialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
