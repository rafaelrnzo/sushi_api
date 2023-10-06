<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Sushi Maki Roll',
            'desc' => 'Sushi with rice',
            'price' => 20,
            'qty' => 20,
        ]);
        Product::create([
            'name' => 'Susdasdsahi Maki Roll',
            'desc' => 'Sushi with rice',
            'price' => 20,
            'qty' => 20,
        ]);
        Product::create([
            'name' => 'Sushdasi Maki Roll',
            'desc' => 'Sushi with rice',
            'price' => 20,
            'qty' => 20,
        ]);
    }
}
