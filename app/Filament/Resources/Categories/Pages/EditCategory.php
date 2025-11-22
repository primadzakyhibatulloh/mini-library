<?php

namespace App\Filament\Resources\Categories\Pages;

use App\Filament\Resources\CategoryResource; // <--- Hapus \Categories
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCategory extends EditRecord
{
    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}