<?php

namespace App\Filament\Resources\IntellectualProperties;

use App\Filament\Resources\IntellectualProperties\Pages\CreateIntellectualProperty;
use App\Filament\Resources\IntellectualProperties\Pages\EditIntellectualProperty;
use App\Filament\Resources\IntellectualProperties\Pages\ListIntellectualProperties;
use App\Filament\Resources\IntellectualProperties\Schemas\IntellectualPropertyForm;
use App\Filament\Resources\IntellectualProperties\Tables\IntellectualPropertiesTable;
use App\Models\IntellectualProperty;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class IntellectualPropertyResource extends Resource
{
    protected static ?string $model = IntellectualProperty::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return IntellectualPropertyForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return IntellectualPropertiesTable::configure($table);
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
            'index' => ListIntellectualProperties::route('/'),
            'create' => CreateIntellectualProperty::route('/create'),
            'edit' => EditIntellectualProperty::route('/{record}/edit'),
        ];
    }
}
