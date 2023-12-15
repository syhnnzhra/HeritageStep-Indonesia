<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID'); 

        $categoryIds = DB::table('categories')->pluck('id');

        for ($i = 0; $i < 50; $i++) {
            DB::table('items')->insert([
                'nama' => $faker->unique()->words(3, true), // Nama produk
                'category_id' => $faker->randomElement($categoryIds), // ID kategori acak
                'stok' => $faker->numberBetween(1, 100), // Jumlah stok
                'harga' => $faker->numberBetween(10000, 1000000), // Harga acak
                'keterangan' => $faker->sentence, // Keterangan produk
                'foto' => 'https://source.unsplash.com/400x400/?product', // URL foto dari Unsplash
            ]);
        }
    }
}
