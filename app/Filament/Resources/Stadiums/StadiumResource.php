<?php

namespace App\Filament\Resources\Stadiums;

use App\Filament\Resources\Stadiums\Pages\CreateStadium;
use App\Filament\Resources\Stadiums\Pages\EditStadium;
use App\Filament\Resources\Stadiums\Pages\ListStadiums;
use App\Filament\Resources\Stadiums\Schemas\StadiumForm;
use App\Filament\Resources\Stadiums\Tables\StadiumsTable;
use App\Models\Stadium;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class StadiumResource extends Resource
{
    protected static ?string $model = Stadium::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBuildingOffice;

    protected static ?string $navigationLabel = 'Stadiums';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return StadiumForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StadiumsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListStadiums::route('/'),
            'create' => CreateStadium::route('/create'),
            'edit' => EditStadium::route('/{record}/edit'),
        ];
    }
}