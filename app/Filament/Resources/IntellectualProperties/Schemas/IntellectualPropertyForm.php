<?php

namespace App\Filament\Resources\IntellectualProperties\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class IntellectualPropertyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('personal_info_id')
                    ->relationship('personalInfo', 'name')
                    ->required(),
                Textarea::make('title')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('type')
                    ->required(),
                TextInput::make('registration_number'),
                TextInput::make('year')
                    ->required()
                    ->numeric(),
                TextInput::make('status')
                    ->required(),
                TextInput::make('url')
                    ->url(),
            ]);
    }
}
