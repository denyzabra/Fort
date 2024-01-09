<?php

namespace App\Filament\Resources\ApartmentsResource\Pages;

use App\Filament\Resources\ApartmentsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListApartments extends ListRecords
{
    protected static string $resource = ApartmentsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
