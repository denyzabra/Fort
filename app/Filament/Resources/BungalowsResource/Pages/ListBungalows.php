<?php

namespace App\Filament\Resources\BungalowsResource\Pages;

use App\Filament\Resources\BungalowsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBungalows extends ListRecords
{
    protected static string $resource = BungalowsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
