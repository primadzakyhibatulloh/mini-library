<?php

namespace App\Filament\Resources\Books\Tables;

// --- PERBAIKAN: IMPORT DARI NAMESPACE GLOBAL (SESUAI DOKUMENTASI ANDA) ---
use Filament\Actions\BulkAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\EditAction;

// Import untuk Kolom dan Tabel tetap menggunakan Filament\Tables
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Collection;

class BooksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                    
                TextColumn::make('author')
                    ->searchable(),
                    
                TextColumn::make('year')
                    ->sortable(),
                
                TextColumn::make('category.name')
                    ->searchable()
                    ->sortable(),

                ImageColumn::make('cover'),

                TextColumn::make('stock')
                    ->numeric()
                    ->sortable(),
                    
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                    
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Menggunakan EditAction dari Filament\Actions
                EditAction::make(),
            ])
            ->bulkActions([
                // Menggunakan BulkActionGroup dari Filament\Actions
                BulkActionGroup::make([
                    // Menggunakan BulkAction manual dari Filament\Actions
                    BulkAction::make('delete')
                        ->requiresConfirmation()
                        ->action(fn (Collection $records) => $records->each->delete())
                        ->deselectRecordsAfterCompletion(),
                ]),
            ]);
    }
}