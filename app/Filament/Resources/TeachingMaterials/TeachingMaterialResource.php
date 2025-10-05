<?php

namespace App\Filament\Resources\TeachingMaterials;

use App\Filament\Resources\TeachingMaterials\Pages\CreateTeachingMaterial;
use App\Filament\Resources\TeachingMaterials\Pages\EditTeachingMaterial;
use App\Filament\Resources\TeachingMaterials\Pages\ListTeachingMaterials;
use App\Filament\Resources\TeachingMaterials\Schemas\TeachingMaterialForm;
use App\Filament\Resources\TeachingMaterials\Tables\TeachingMaterialsTable;
use App\Models\TeachingMaterial;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TeachingMaterialResource extends Resource
{
    protected static ?string $model = TeachingMaterial::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return TeachingMaterialForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TeachingMaterialsTable::configure($table);
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
            'index' => ListTeachingMaterials::route('/'),
            'create' => CreateTeachingMaterial::route('/create'),
            'edit' => EditTeachingMaterial::route('/{record}/edit'),
        ];
    }
}
