<?php

namespace App\Filament\Resources\Stadiums\Tables;

use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class StadiumsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('NAME')
                    ->searchable()
                    ->weight('bold'),

                TextColumn::make('location')
                    ->label('LOCATION'),

                TextColumn::make('price')
                    ->label('PRICE/HR')
                    ->formatStateUsing(fn ($state) => 'Rp' . number_format($state, 0, ',', '.'))
                    ->color('primary')
                    ->weight('bold'),
            ])

            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->label('ADD NEW STADIUM')
                    ->icon('heroicon-o-plus')
                    ->color('primary'),
            ])

            ->actions([
                Tables\Actions\EditAction::make()
                    ->label('Edit')
                    ->color('primary'),

                Tables\Actions\DeleteAction::make()
                    ->label('Delete')
                    ->color('danger'),
            ]);
    }
}