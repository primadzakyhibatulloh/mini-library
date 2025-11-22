<?php

namespace App\Filament\Resources\Categories\Pages;

use App\Filament\Resources\CategoryResource; // <--- Hapus \Categories
use Filament\Resources\Pages\CreateRecord;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;
}