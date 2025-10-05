<?php

namespace App\Filament\Resources\Publications\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PublicationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('personalInfo.name')
                    ->searchable(),
                TextColumn::make('publicationCategory.title')
                    ->searchable(),
                TextColumn::make('year')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('publication_type')
                    ->searchable(),
                TextColumn::make('journal_name')
                    ->searchable(),
                TextColumn::make('doi')
                    ->searchable(),
                TextColumn::make('url')
                    ->searchable(),
                TextColumn::make('publisher')
                    ->searchable(),
                TextColumn::make('index_type')
                    ->searchable(),
                TextColumn::make('rank')
                    ->searchable(),
                TextColumn::make('author_role')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
