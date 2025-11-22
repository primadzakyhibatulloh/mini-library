<?php

namespace App\Filament\Resources; // <--- NAMESPACE UTAMA (Agar muncul di Dashboard)

// Import Pages dari sub-folder Categories
use App\Filament\Resources\Categories\Pages\CreateCategory;
use App\Filament\Resources\Categories\Pages\EditCategory;
use App\Filament\Resources\Categories\Pages\ListCategories;

// Import Form & Table dari sub-folder Categories
use App\Filament\Resources\Categories\Schemas\CategoryForm;
use App\Filament\Resources\Categories\Tables\CategoriesTable;

use App\Models\Category;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    // Menggunakan string agar lebih aman dari error 'Undefined Constant'
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-tag';

    protected static ?string $recordTitleAttribute = 'name';

    // Konfigurasi Label Navigasi (Opsional, biar rapi)
    protected static ?string $navigationLabel = 'Kategori Buku';
    protected static ?string $modelLabel = 'Kategori';

    public static function form(Schema $schema): Schema
    {
        // Memanggil konfigurasi dari file CategoryForm.php
        return CategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        // Memanggil konfigurasi dari file CategoriesTable.php
        return CategoriesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCategories::route('/'),
            'create' => CreateCategory::route('/create'),
            'edit' => EditCategory::route('/{record}/edit'),
        ];
    }
}