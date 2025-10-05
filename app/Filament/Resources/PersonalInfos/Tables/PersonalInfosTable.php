<?php

namespace App\Filament\Resources\PersonalInfos\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PersonalInfosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('academic_titles')
                    ->searchable(),
                TextColumn::make('nidn')
                    ->searchable(),
                TextColumn::make('nip')
                    ->searchable(),
                TextColumn::make('birth_place')
                    ->searchable(),
                TextColumn::make('birth_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('gender')
                    ->searchable(),
                TextColumn::make('marital_status')
                    ->searchable(),
                TextColumn::make('functional_position')
                    ->searchable(),
                TextColumn::make('structural_position')
                    ->searchable(),
                TextColumn::make('academic_position')
                    ->searchable(),
                TextColumn::make('institution')
                    ->searchable(),
                TextColumn::make('phone')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),
                TextColumn::make('produced_graduates_s1')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('produced_graduates_s2')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('produced_graduates_s3')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('scopus_id')
                    ->searchable(),
                TextColumn::make('sinta_id')
                    ->searchable(),
                TextColumn::make('google_scholar_id')
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
