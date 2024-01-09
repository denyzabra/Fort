<?php

namespace App\Filament\Resources\LandsResource\Pages;

use App\Filament\Resources\LandsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLands extends EditRecord
{
    protected static string $resource = LandsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
