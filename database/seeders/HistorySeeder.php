<?php

namespace Database\Seeders;

use App\Models\History;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        History::create([
            'title' => 'Top Up',
            'update' => '2023-10-2'
        ]);
        History::create([
            'title' => 'Payment',
            'update' => '2023-10-2'
        ]);
        History::create([
            'title' => 'Order',
            'update' => '2023-10-2'
        ]);
    }
}
