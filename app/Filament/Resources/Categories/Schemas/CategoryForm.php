<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms; // Penting: Import Forms agar komponen dikenali
use Filament\Schemas\Schema;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Input Nama Kategori
                Forms\Components\TextInput::make('name')
                    ->required()                 // Wajib diisi
                    ->maxLength(255)             // Maksimal 255 karakter
                    ->unique(ignoreRecord: true) // Mencegah nama kategori kembar
                    ->label('Nama Kategori')     // Label yang muncul di form
                    ->placeholder('Contoh: Fiksi, Sains, Sejarah'),
            ]);
    }
}