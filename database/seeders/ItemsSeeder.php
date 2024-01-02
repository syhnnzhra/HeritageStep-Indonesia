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
        // $faker = Faker::create('id_ID'); 

        // $categoryIds = DB::table('categories')->pluck('id');

        // for ($i = 0; $i < 50; $i++) {
        //     DB::table('items')->insert([
        //         'nama' => $faker->unique()->words(3, true), // Nama produk
        //         'category_id' => $faker->randomElement($categoryIds), // ID kategori acak
        //         'stok' => $faker->numberBetween(1, 100), // Jumlah stok
        //         'harga' => $faker->numberBetween(10000, 1000000), // Harga acak
        //         'keterangan' => $faker->sentence, // Keterangan produk
        //         'foto' => 'https://source.unsplash.com/400x400/?product', // URL foto dari Unsplash
        //     ]);
        // }

        $items = [
            ['nama' => 'Sepatu Casual 1', 'category_id' => 1, 'stok' => 50, 'harga' => 150000, 'keterangan' => 'Deskripsi Sepatu Casual 1', 'foto' => 'foto3.jpg'],
            ['nama' => 'Sepatu Casual 2', 'category_id' => 1, 'stok' => 40, 'harga' => 120000, 'keterangan' => 'Deskripsi Sepatu Casual 2', 'foto' => 'foto4.jpg'],

            ['nama' => 'Sepatu Formal 1', 'category_id' => 2, 'stok' => 30, 'harga' => 200000, 'keterangan' => 'Deskripsi Sepatu Formal 1', 'foto' => 'foto1.jpg'],
            ['nama' => 'Sepatu Formal 2', 'category_id' => 2, 'stok' => 25, 'harga' => 180000, 'keterangan' => 'Deskripsi Sepatu Formal 2', 'foto' => 'foto2.jpg'],

            ['nama' => 'Sneakers 1', 'category_id' => 3, 'stok' => 35, 'harga' => 130000, 'keterangan' => 'Deskripsi Sneakers 1', 'foto' => 'foto5.jpg'],
            ['nama' => 'Sneakers 2', 'category_id' => 3, 'stok' => 30, 'harga' => 160000, 'keterangan' => 'Deskripsi Sneakers 2', 'foto' => 'foto6.jpeg'],

        ];

        DB::table('items')->insert($items);
    }
}
