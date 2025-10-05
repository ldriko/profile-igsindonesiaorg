<?php

namespace App\Filament\Resources\InstitutionPositions;

use App\Filament\Resources\InstitutionPositions\Pages\CreateInstitutionPosition;
use App\Filament\Resources\InstitutionPositions\Pages\EditInstitutionPosition;
use App\Filament\Resources\InstitutionPositions\Pages\ListInstitutionPositions;
use App\Filament\Resources\InstitutionPositions\Schemas\InstitutionPositionForm;
use App\Filament\Resources\InstitutionPositions\Tables\InstitutionPositionsTable;
use App\Models\InstitutionPosition;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class InstitutionPositionResource extends Resource
{
    protected static ?string $model = InstitutionPosition::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return InstitutionPositionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InstitutionPositionsTable::configure($table);
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
            'index' => ListInstitutionPositions::route('/'),
            'create' => CreateInstitutionPosition::route('/create'),
            'edit' => EditInstitutionPosition::route('/{record}/edit'),
        ];
    }
}
