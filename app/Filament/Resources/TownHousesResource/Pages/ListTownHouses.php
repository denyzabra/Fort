<?php

namespace App\Filament\Resources\TownHousesResource\Pages;

use App\Filament\Resources\TownHousesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTownHouses extends ListRecords
{
    protected static string $resource = TownHousesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
