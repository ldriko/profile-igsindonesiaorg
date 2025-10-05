<?php

namespace App\Filament\Resources\PersonalInfos;

use App\Filament\Resources\PersonalInfos\Pages\CreatePersonalInfo;
use App\Filament\Resources\PersonalInfos\Pages\EditPersonalInfo;
use App\Filament\Resources\PersonalInfos\Pages\ListPersonalInfos;
use App\Filament\Resources\PersonalInfos\Schemas\PersonalInfoForm;
use App\Filament\Resources\PersonalInfos\Tables\PersonalInfosTable;
use App\Models\PersonalInfo;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PersonalInfoResource extends Resource
{
    protected static ?string $model = PersonalInfo::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PersonalInfoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PersonalInfosTable::configure($table);
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
            'index' => ListPersonalInfos::route('/'),
            'create' => CreatePersonalInfo::route('/create'),
            'edit' => EditPersonalInfo::route('/{record}/edit'),
        ];
    }
}
