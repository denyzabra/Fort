<?php

namespace App\Filament\Resources\HousingsResource\Pages;

use App\Filament\Resources\HousingsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHousings extends ListRecords
{
    protected static string $resource = HousingsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
