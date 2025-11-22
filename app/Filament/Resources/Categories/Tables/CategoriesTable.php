<?php

namespace App\Filament\Resources\Categories\Tables;

// --- IMPORT ACTIONS (Sesuai pola BooksTable yang berhasil) ---
use Filament\Actions\BulkAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction; // Tambahkan Delete supaya bisa hapus per item
use Filament\Actions\EditAction;

// --- IMPORT TABLE COMPONENTS ---
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Collection;

class CategoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // Kolom Nama Kategori
                TextColumn::make('name')
                    ->label('Nama Kategori')
                    ->searchable()
                    ->sortable(),

                // Kolom Tanggal (Opsional, biasanya disembunyikan default)
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
                EditAction::make(),
                DeleteAction::make(), // Tombol Hapus per baris
            ])
            ->bulkActions([
                // PENTING: Masuk ke bulkActions, BUKAN toolbarActions
                BulkActionGroup::make([
                    // Implementasi Hapus Massal Manual (Anti Error)
                    BulkAction::make('delete')
                        ->requiresConfirmation()
                        ->action(fn (Collection $records) => $records->each->delete())
                        ->deselectRecordsAfterCompletion(),
                ]),
            ]);
    }
}