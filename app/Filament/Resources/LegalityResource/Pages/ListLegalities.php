<?php

namespace App\Filament\Resources\LegalityResource\Pages;

use App\Filament\Resources\LegalityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLegalities extends ListRecords
{
    protected static string $resource = LegalityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
