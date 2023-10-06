<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "Rafael Kim",
            'email' => "rl@co.id",
            'password' => "rl213",
        ]);
        User::create([
            'name' => "rorornoa Iksan",
            'email' => "iksan@co.id",
            'password' => "iksanl213",
        ]);
        User::create([
            'name' => "Faris Jayawardana",
            'email' => "daris@co.id",
            'password' => "risl213",
        ]);
    }
}
