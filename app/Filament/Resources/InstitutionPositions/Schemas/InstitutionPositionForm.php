<?php

namespace App\Filament\Resources\InstitutionPositions\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class InstitutionPositionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('personal_info_id')
                    ->relationship('personalInfo', 'name')
                    ->required(),
                TextInput::make('position')
                    ->required(),
                TextInput::make('institution')
                    ->required(),
                TextInput::make('start_year')
                    ->numeric(),
                TextInput::make('end_year')
                    ->numeric(),
                Textarea::make('description')
                    ->columnSpanFull(),
            ]);
    }
}
