<?php

namespace App\Filament\Resources\BungalowsResource\Pages;

use App\Filament\Resources\BungalowsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBungalows extends EditRecord
{
    protected static string $resource = BungalowsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
