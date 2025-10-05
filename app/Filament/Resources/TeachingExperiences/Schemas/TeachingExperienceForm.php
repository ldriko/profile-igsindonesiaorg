<?php

namespace App\Filament\Resources\TeachingExperiences\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TeachingExperienceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('personal_info_id')
                    ->relationship('personalInfo', 'name')
                    ->required(),
                TextInput::make('course_name')
                    ->required(),
                TextInput::make('level')
                    ->required(),
                TextInput::make('program')
                    ->required(),
                TextInput::make('institution')
                    ->required(),
                TextInput::make('academic_year')
                    ->required(),
            ]);
    }
}
