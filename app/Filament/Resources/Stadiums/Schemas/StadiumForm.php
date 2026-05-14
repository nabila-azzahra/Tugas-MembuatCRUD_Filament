<?php

namespace App\Filament\Resources\Stadiums\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StadiumForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')
                ->label('Name')
                ->required(),

            TextInput::make('location')
                ->label('Location')
                ->required(),

            TextInput::make('price')
                ->label('Price / Hour')
                ->numeric()
                ->required(),
        ]);
    }
}