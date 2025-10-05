<?php

namespace App\Filament\Resources\TeachingMaterials\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TeachingMaterialForm
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
                TextInput::make('program')
                    ->required(),
                TextInput::make('type')
                    ->required(),
                TextInput::make('format')
                    ->required(),
                TextInput::make('isbn'),
                TextInput::make('year')
                    ->required()
                    ->numeric(),
                TextInput::make('url')
                    ->url(),
            ]);
    }
}
