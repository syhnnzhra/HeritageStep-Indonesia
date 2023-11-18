<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'HSI team',
            'email' => 'herritage_step@gmail.com',
            'password' => bcrypt('12345'),
            'provider' => "local"
        ]);
    }
}
