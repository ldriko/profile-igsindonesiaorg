<?php

namespace App\Filament\Resources\IntellectualProperties\Pages;

use App\Filament\Resources\IntellectualProperties\IntellectualPropertyResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditIntellectualProperty extends EditRecord
{
    protected static string $resource = IntellectualPropertyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
