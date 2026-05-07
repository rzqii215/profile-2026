<?php

namespace App\Filament\Admin\Resources\AgeResource\Pages;

use App\Filament\Admin\Resources\AgeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAges extends ListRecords
{
    protected static string $resource = AgeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
