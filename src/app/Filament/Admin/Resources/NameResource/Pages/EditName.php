<?php

namespace App\Filament\Admin\Resources\NameResource\Pages;

use App\Filament\Admin\Resources\NameResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditName extends EditRecord
{
    protected static string $resource = NameResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
