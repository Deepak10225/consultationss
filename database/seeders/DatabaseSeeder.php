<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $user = \App\Models\User::firstOrCreate(
    ['email' => 'test@gmail.com'],
    [
        'name' => 'test',
        'password' => bcrypt('123456'),
    ]
);


    }
}
