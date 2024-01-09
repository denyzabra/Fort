<?php

namespace App\Filament\Resources\ApartmentsResource\Pages;

use App\Filament\Resources\ApartmentsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditApartments extends EditRecord
{
    protected static string $resource = ApartmentsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
