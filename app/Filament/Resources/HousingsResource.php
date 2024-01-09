<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HousingsResource\Pages;
use App\Filament\Resources\HousingsResource\RelationManagers;
use App\Models\Housings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HousingsResource extends Resource
{
    protected static ?string $model = Housings::class;

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
            'index' => Pages\ListHousings::route('/'),
            'create' => Pages\CreateHousings::route('/create'),
            'edit' => Pages\EditHousings::route('/{record}/edit'),
        ];
    }
}
