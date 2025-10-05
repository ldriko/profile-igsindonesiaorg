<?php

namespace App\Filament\Resources\InstitutionPositions\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Pixelpeter\FilamentLanguageTabs\Forms\Components\LanguageTabs;

class InstitutionPositionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('personal_info_id')
                    ->relationship('personalInfo', 'name')
                    ->required(),
                LanguageTabs::make([
                    TextInput::make('position')
                        ->required(),
                    TextInput::make('institution')
                        ->required(),
                    Textarea::make('description')
                        ->columnSpanFull(),
                ]),
                TextInput::make('start_year')
                    ->numeric(),
                TextInput::make('end_year')
                    ->numeric(),
            ]);
    }
}
