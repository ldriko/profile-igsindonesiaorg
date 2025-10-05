<?php

namespace App\Filament\Resources\PublicationCategories\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Pixelpeter\FilamentLanguageTabs\Forms\Components\LanguageTabs;

class PublicationCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                LanguageTabs::make([
                    TextInput::make('title')
                        ->required()
                        ->maxLength(255),
                    Textarea::make('description')
                        ->rows(3)
                        ->columnSpanFull(),
                ]),
                TextInput::make('code')
                    ->maxLength(255)
                    ->placeholder('e.g., J, P, B'),
                Toggle::make('is_active')
                    ->default(true)
                    ->required(),
            ]);
    }
}
