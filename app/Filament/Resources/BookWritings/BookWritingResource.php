<?php

namespace App\Filament\Resources\BookWritings;

use App\Filament\Resources\BookWritings\Pages\CreateBookWriting;
use App\Filament\Resources\BookWritings\Pages\EditBookWriting;
use App\Filament\Resources\BookWritings\Pages\ListBookWritings;
use App\Filament\Resources\BookWritings\Schemas\BookWritingForm;
use App\Filament\Resources\BookWritings\Tables\BookWritingsTable;
use App\Models\BookWriting;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BookWritingResource extends Resource
{
    protected static ?string $model = BookWriting::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return BookWritingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BookWritingsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBookWritings::route('/'),
            'create' => CreateBookWriting::route('/create'),
            'edit' => EditBookWriting::route('/{record}/edit'),
        ];
    }
}
