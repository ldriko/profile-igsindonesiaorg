<?php

namespace App\Filament\Resources\TeachingExperiences;

use App\Filament\Resources\TeachingExperiences\Pages\CreateTeachingExperience;
use App\Filament\Resources\TeachingExperiences\Pages\EditTeachingExperience;
use App\Filament\Resources\TeachingExperiences\Pages\ListTeachingExperiences;
use App\Filament\Resources\TeachingExperiences\Schemas\TeachingExperienceForm;
use App\Filament\Resources\TeachingExperiences\Tables\TeachingExperiencesTable;
use App\Models\TeachingExperience;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TeachingExperienceResource extends Resource
{
    protected static ?string $model = TeachingExperience::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return TeachingExperienceForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TeachingExperiencesTable::configure($table);
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
            'index' => ListTeachingExperiences::route('/'),
            'create' => CreateTeachingExperience::route('/create'),
            'edit' => EditTeachingExperience::route('/{record}/edit'),
        ];
    }
}
