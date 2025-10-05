<?php

namespace App\Filament\Resources\Education\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Pixelpeter\FilamentLanguageTabs\Forms\Components\LanguageTabs;

class EducationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('personal_info_id')
                    ->relationship('personalInfo', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('level')
                    ->options([
                        'S1' => 'S1',
                        'S2' => 'S2',
                        'S3' => 'S3',
                    ])
                    ->required(),
                TextInput::make('institution')
                    ->required()
                    ->maxLength(255),
                LanguageTabs::make([
                    TextInput::make('department')
                        ->required()
                        ->maxLength(255),
                    Textarea::make('thesis_title')
                        ->required()
                        ->rows(3)
                        ->columnSpanFull(),
                ]),
                TextInput::make('graduation_year')
                    ->required()
                    ->numeric()
                    ->minValue(1900)
                    ->maxValue(date('Y') + 10),
                TextInput::make('advisor')
                    ->required()
                    ->maxLength(255),
            ]);
    }
}
