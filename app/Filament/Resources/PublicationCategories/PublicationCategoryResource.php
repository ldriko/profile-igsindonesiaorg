<?php

namespace App\Filament\Resources\PublicationCategories;

use App\Filament\Resources\PublicationCategories\Pages\CreatePublicationCategory;
use App\Filament\Resources\PublicationCategories\Pages\EditPublicationCategory;
use App\Filament\Resources\PublicationCategories\Pages\ListPublicationCategories;
use App\Filament\Resources\PublicationCategories\Pages\PublicationCategoryTree;
use App\Filament\Resources\PublicationCategories\Schemas\PublicationCategoryForm;
use App\Filament\Resources\PublicationCategories\Tables\PublicationCategoriesTable;
use App\Models\PublicationCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PublicationCategoryResource extends Resource
{
    protected static ?string $model = PublicationCategory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PublicationCategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PublicationCategoriesTable::configure($table);
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
            'index' => PublicationCategoryTree::route('/'),
            'list' => ListPublicationCategories::route('/list'),
            'create' => CreatePublicationCategory::route('/create'),
            'edit' => EditPublicationCategory::route('/{record}/edit'),
        ];
    }
}
