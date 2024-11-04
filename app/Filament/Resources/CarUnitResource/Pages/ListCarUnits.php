<?php

namespace App\Filament\Resources\CarUnitResource\Pages;

use App\Filament\Resources\CarUnitResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCarUnits extends ListRecords
{
    protected static string $resource = CarUnitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
