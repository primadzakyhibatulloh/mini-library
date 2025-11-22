<?php

namespace App\Filament\Resources; // <--- Ubah jadi ini (hapus \Books)

// Import komponen dari subfolder Books
use App\Filament\Resources\Books\Pages\CreateBook;
use App\Filament\Resources\Books\Pages\EditBook;
use App\Filament\Resources\Books\Pages\ListBooks;
use App\Models\Book;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Filament\Support\Icons\Heroicon;
use BackedEnum;
use Illuminate\Database\Eloquent\Collection; 

// Import Actions
use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\BulkAction;

class BookResource extends Resource
{
    // ... (Sisa kode ke bawah biarkan sama, copy paste isi lama Anda)
    // Pastikan function form() dan table() Anda yang sudah fix tadi ada di sini.
    protected static ?string $model = Book::class;
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        // ... kode form Anda ...
        return $schema->components([
             Forms\Components\TextInput::make('title')->required()->maxLength(255),
             Forms\Components\TextInput::make('author')->required()->maxLength(255),
             Forms\Components\TextInput::make('year')->numeric()->required(),
             Forms\Components\Select::make('category_id')->relationship('category', 'name')->required()->label('Category'),
             Forms\Components\FileUpload::make('cover')->image()->disk('public')->directory('book-covers'),
             Forms\Components\TextInput::make('stock')->numeric()->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        // ... kode table Anda ...
        return $table->columns([
             Tables\Columns\TextColumn::make('title')->searchable(),
             Tables\Columns\TextColumn::make('author')->searchable(),
             Tables\Columns\TextColumn::make('year'),
             Tables\Columns\TextColumn::make('category.name'),
             Tables\Columns\ImageColumn::make('cover'),
             Tables\Columns\TextColumn::make('stock'),
        ])
        ->actions([
             ActionGroup::make([EditAction::make(), DeleteAction::make()]),
        ])
        ->bulkActions([
             BulkActionGroup::make([
                 BulkAction::make('delete')->requiresConfirmation()->action(fn (Collection $records) => $records->each->delete())
             ]),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBooks::route('/'),
            'create' => CreateBook::route('/create'),
            'edit' => EditBook::route('/{record}/edit'),
        ];
    }
}