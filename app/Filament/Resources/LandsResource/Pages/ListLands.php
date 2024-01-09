<?php

namespace App\Filament\Resources\LandsResource\Pages;

use App\Filament\Resources\LandsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLands extends ListRecords
{
    protected static string $resource = LandsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
