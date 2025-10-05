<?php

namespace App\Filament\Resources\Links\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LinkForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('personal_info_id')
                    ->relationship('personalInfo', 'name')
                    ->required(),
                TextInput::make('platform')
                    ->required(),
                TextInput::make('url')
                    ->url()
                    ->required(),
            ]);
    }
}
