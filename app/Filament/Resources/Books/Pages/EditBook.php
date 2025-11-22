<?php

namespace App\Filament\Resources\Books\Pages;

use App\Filament\Resources\BookResource; // <--- Perbaikan Namespace
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBook extends EditRecord
{
    protected static string $resource = BookResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}