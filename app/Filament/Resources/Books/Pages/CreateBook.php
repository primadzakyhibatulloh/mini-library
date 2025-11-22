<?php

namespace App\Filament\Resources\Books\Pages;

use App\Filament\Resources\BookResource; // <--- Perbaikan Namespace
use Filament\Resources\Pages\CreateRecord;

class CreateBook extends CreateRecord
{
    protected static string $resource = BookResource::class;
}