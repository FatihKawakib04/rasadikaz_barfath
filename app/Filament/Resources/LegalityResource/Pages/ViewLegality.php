<?php

namespace App\Filament\Resources\LegalityResource\Pages;

use App\Filament\Resources\LegalityResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewLegality extends ViewRecord
{
    protected static string $resource = LegalityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
