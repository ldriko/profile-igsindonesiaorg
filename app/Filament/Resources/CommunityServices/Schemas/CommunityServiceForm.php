<?php

namespace App\Filament\Resources\CommunityServices\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CommunityServiceForm
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
                TextInput::make('funding_source')
                    ->required(),
                TextInput::make('fund_amount')
                    ->required()
                    ->numeric(),
            ]);
    }
}
