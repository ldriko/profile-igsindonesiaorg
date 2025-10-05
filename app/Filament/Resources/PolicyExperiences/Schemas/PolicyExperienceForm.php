<?php

namespace App\Filament\Resources\PolicyExperiences\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PolicyExperienceForm
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
                TextInput::make('role')
                    ->required(),
                TextInput::make('institution')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
            ]);
    }
}
