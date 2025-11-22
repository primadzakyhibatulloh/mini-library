<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            // Teknologi
            [
                'title' => 'Clean Code: A Handbook of Agile Software Craftsmanship',
                'author' => 'Robert C. Martin',
                'year' => 2008,
                'category' => 'Teknologi & Pemrograman',
                'stock' => 15,
            ],
            [
                'title' => 'Laravel 11 Up & Running',
                'author' => 'Matt Stauffer',
                'year' => 2024,
                'category' => 'Teknologi & Pemrograman',
                'stock' => 10,
            ],
            [
                'title' => 'Refactoring UI',
                'author' => 'Adam Wathan & Steve Schoger',
                'year' => 2018,
                'category' => 'Teknologi & Pemrograman',
                'stock' => 8,
            ],

            // Pengembangan Diri
            [
                'title' => 'Atomic Habits',
                'author' => 'James Clear',
                'year' => 2018,
                'category' => 'Pengembangan Diri',
                'stock' => 25,
            ],
            [
                'title' => 'The Psychology of Money',
                'author' => 'Morgan Housel',
                'year' => 2020,
                'category' => 'Pengembangan Diri',
                'stock' => 20,
            ],
            [
                'title' => 'Filosofi Teras',
                'author' => 'Henry Manampiring',
                'year' => 2018,
                'category' => 'Pengembangan Diri',
                'stock' => 30,
            ],

            // Fiksi
            [
                'title' => 'Bumi Manusia',
                'author' => 'Pramoedya Ananta Toer',
                'year' => 1980,
                'category' => 'Fiksi & Sastra',
                'stock' => 12,
            ],
            [
                'title' => 'Laskar Pelangi',
                'author' => 'Andrea Hirata',
                'year' => 2005,
                'category' => 'Fiksi & Sastra',
                'stock' => 18,
            ],
            [
                'title' => 'Laut Bercerita',
                'author' => 'Leila S. Chudori',
                'year' => 2017,
                'category' => 'Fiksi & Sastra',
                'stock' => 14,
            ],

            // Bisnis
            [
                'title' => 'Rich Dad Poor Dad',
                'author' => 'Robert T. Kiyosaki',
                'year' => 1997,
                'category' => 'Bisnis & Ekonomi',
                'stock' => 22,
            ],
        ];

        foreach ($books as $data) {
            // Cari ID kategori berdasarkan nama
            $category = Category::where('name', $data['category'])->first();

            if ($category) {
                Book::create([
                    'title' => $data['title'],
                    'author' => $data['author'],
                    'year' => $data['year'],
                    'category_id' => $category->id,
                    'stock' => $data['stock'],
                    'cover' => null, // Cover biarkan null, nanti upload manual biar keren
                ]);
            }
        }
    }
}