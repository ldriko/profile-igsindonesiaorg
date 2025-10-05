<?php

namespace App\Filament\Resources\Publications\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PublicationForm
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
                Select::make('publication_category_id')
                    ->relationship('publicationCategory', 'title')
                    ->searchable()
                    ->preload()
                    ->required(),
                TextInput::make('year')
                    ->required()
                    ->numeric()
                    ->minValue(1900)
                    ->maxValue(date('Y') + 10),
                Textarea::make('title')
                    ->required()
                    ->rows(3)
                    ->columnSpanFull(),
                Select::make('publication_type')
                    ->options([
                        'Book' => 'Book',
                        'Journal' => 'Journal',
                        'Proceeding' => 'Proceeding',
                        'Poster' => 'Poster',
                        'Chapter' => 'Chapter',
                    ])
                    ->required(),
                TextInput::make('journal_name')
                    ->maxLength(255),
                TextInput::make('doi')
                    ->label('DOI')
                    ->maxLength(255),
                TextInput::make('url')
                    ->label('URL')
                    ->url()
                    ->maxLength(255),
                TextInput::make('publisher')
                    ->maxLength(255),
                Select::make('index_type')
                    ->options([
                        'Scopus' => 'Scopus',
                        'Sinta' => 'Sinta',
                        'Other' => 'Other',
                    ])
                    ->required(),
                TextInput::make('rank')
                    ->maxLength(255),
                Select::make('author_role')
                    ->options([
                        '1st Author' => '1st Author',
                        'Co-Author' => 'Co-Author',
                        'Corresponding Author' => 'Corresponding Author',
                    ])
                    ->required(),
            ]);
    }
}
