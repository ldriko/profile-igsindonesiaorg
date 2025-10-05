<?php

namespace App\Filament\Resources\Trainings\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TrainingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('personal_info_id')
                    ->relationship('personalInfo', 'name')
                    ->required(),
                TextInput::make('year')
                    ->required()
                    ->numeric(),
                Textarea::make('title')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('type')
                    ->required(),
                TextInput::make('organizer')
                    ->required(),
                TextInput::make('duration_hours')
                    ->required()
                    ->numeric(),
                TextInput::make('period')
                    ->required(),
                TextInput::make('url')
                    ->url(),
            ]);
    }
}
