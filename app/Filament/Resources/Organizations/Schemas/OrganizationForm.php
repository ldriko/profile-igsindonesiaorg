<?php

namespace App\Filament\Resources\Organizations\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Pixelpeter\FilamentLanguageTabs\Forms\Components\LanguageTabs;

class OrganizationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('personal_info_id')
                    ->relationship('personalInfo', 'name')
                    ->required(),
                LanguageTabs::make([
                    TextInput::make('organization_name')
                        ->required(),
                    TextInput::make('role')
                        ->required(),
                ]),
                TextInput::make('membership_type')
                    ->required(),
                TextInput::make('start_year')
                    ->numeric(),
                TextInput::make('end_year')
                    ->numeric(),
            ]);
    }
}
