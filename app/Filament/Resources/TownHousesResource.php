<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TownHousesResource\Pages;
use App\Filament\Resources\TownHousesResource\RelationManagers;
use App\Models\TownHouses;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TownHousesResource extends Resource
{
    protected static ?string $model = TownHouses::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListTownHouses::route('/'),
            'create' => Pages\CreateTownHouses::route('/create'),
            'edit' => Pages\EditTownHouses::route('/{record}/edit'),
        ];
    }
}
