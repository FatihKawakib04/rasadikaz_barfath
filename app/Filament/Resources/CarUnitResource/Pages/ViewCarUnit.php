<?php

namespace App\Filament\Resources\CarUnitResource\Pages;

use App\Filament\Resources\CarUnitResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCarUnit extends ViewRecord
{
    protected static string $resource = CarUnitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
