<?php

namespace App\Filament\Resources\CarUnitResource\Pages;

use App\Filament\Resources\CarUnitResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCarUnit extends EditRecord
{
    protected static string $resource = CarUnitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
