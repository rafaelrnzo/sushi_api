<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Makimono',
            'desc' => 'sushi with onigiri',
        ]);
        Category::create([
            'name' => 'Drink',
            'desc' => 'drink',
        ]);
        Category::create([
            'name' => 'Sauce',
            'desc' => 'sauce',
        ]);
    }
}
