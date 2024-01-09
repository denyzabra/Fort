<?php

namespace App\Filament\Resources\HousingsResource\Pages;

use App\Filament\Resources\HousingsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHousings extends EditRecord
{
    protected static string $resource = HousingsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
