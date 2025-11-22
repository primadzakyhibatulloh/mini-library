<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Teknologi & Pemrograman',
            'Fiksi & Sastra',
            'Pengembangan Diri',
            'Bisnis & Ekonomi',
            'Sejarah & Biografi',
            'Sains Populer',
        ];

        foreach ($categories as $cat) {
            Category::firstOrCreate(['name' => $cat]);
        }
    }
}