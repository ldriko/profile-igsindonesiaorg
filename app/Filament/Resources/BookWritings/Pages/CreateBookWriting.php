<?php

namespace App\Filament\Resources\BookWritings\Pages;

use App\Filament\Resources\BookWritings\BookWritingResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBookWriting extends CreateRecord
{
    protected static string $resource = BookWritingResource::class;
}
