<?php

namespace App\Filament\Resources\PolicyExperiences;

use App\Filament\Resources\PolicyExperiences\Pages\CreatePolicyExperience;
use App\Filament\Resources\PolicyExperiences\Pages\EditPolicyExperience;
use App\Filament\Resources\PolicyExperiences\Pages\ListPolicyExperiences;
use App\Filament\Resources\PolicyExperiences\Schemas\PolicyExperienceForm;
use App\Filament\Resources\PolicyExperiences\Tables\PolicyExperiencesTable;
use App\Models\PolicyExperience;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PolicyExperienceResource extends Resource
{
    protected static ?string $model = PolicyExperience::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PolicyExperienceForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PolicyExperiencesTable::configure($table);
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
            'index' => ListPolicyExperiences::route('/'),
            'create' => CreatePolicyExperience::route('/create'),
            'edit' => EditPolicyExperience::route('/{record}/edit'),
        ];
    }
}
