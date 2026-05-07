<?php

namespace App\Filament\Admin\Resources\AgeResource\Pages;

use App\Filament\Admin\Resources\AgeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAge extends EditRecord
{
    protected static string $resource = AgeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
