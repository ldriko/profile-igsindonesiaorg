<?php

namespace App\Filament\Resources\BookWritings\Pages;

use App\Filament\Resources\BookWritings\BookWritingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBookWriting extends EditRecord
{
    protected static string $resource = BookWritingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
