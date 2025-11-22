<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil Seeder Kategori dan Buku
        $this->call([
            CategorySeeder::class,
            BookSeeder::class,
        ]);
    }
}