<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            ['nama' => 'Sepatu Casual', 'deskripsi' => 'Pilihan sepatu santai untuk gaya kasual sehari-hari.'],
            ['nama' => 'Sepatu Formal', 'deskripsi' => 'Sepatu elegan dan berkelas cocok untuk acara formal.'],
            ['nama' => 'Sepatu Sneakers', 'deskripsi' => 'Koleksi sepatu trendi yang memberikan sentuhan sporty.'],
            ['nama' => 'Sepatu Boots', 'deskripsi' => 'Sepatu berkualitas tinggi untuk gaya kasual atau petualangan outdoor.'],
            ['nama' => 'Sepatu Sandal', 'deskripsi' => 'Kenyamanan dan gaya dalam koleksi sandal yang beragam.'],
            ['nama' => 'Sepatu Olahraga', 'deskripsi' => 'Performa maksimal dengan sepatu olahraga teknologi tinggi.'],
            ['nama' => 'Sepatu Slip-On', 'deskripsi' => 'Kemudahan dan gaya dalam sepatu tanpa tali.'],
            ['nama' => 'Sepatu Wedges', 'deskripsi' => 'Tingkatkan penampilan dengan sepatu bertumit wedges yang elegan.'],
            ['nama' => 'Kaos', 'deskripsi' => 'Pilihan kaos berkualitas untuk gaya santai sehari-hari.'],
            ['nama' => 'Kemeja', 'deskripsi' => 'Kemeja stylish untuk tampilan formal atau kasual yang berkelas.'],
            ['nama' => 'Sweater', 'deskripsi' => 'Kenyamanan ekstra dalam koleksi sweater trendi.'],
            ['nama' => 'Jaket', 'deskripsi' => 'Jaket modis untuk penampilan ekstra stylish di luar ruangan.'],
            ['nama' => 'Jeans', 'deskripsi' => 'Koleksi jeans berkualitas tinggi dengan berbagai gaya.'],
            ['nama' => 'Celana Panjang', 'deskripsi' => 'Celana panjang nyaman dan stylish untuk berbagai kesempatan.'],
            ['nama' => 'Celana Pendek', 'deskripsi' => 'Kenyamanan maksimal dalam koleksi celana pendek trendy.'],
            ['nama' => 'Tas Selempang', 'deskripsi' => 'Tas praktis dan modis untuk gaya sehari-hari.'],
            ['nama' => 'Tas Ransel', 'deskripsi' => 'Keseimbangan antara fungsionalitas dan gaya dalam tas ransel modern.'],
            ['nama' => 'Tas Tangan', 'deskripsi' => 'Elegansi dalam setiap detail tas tangan yang berkelas.'],
            ['nama' => 'Totebag', 'deskripsi' => 'Totebag serbaguna untuk gaya kasual dengan kapasitas yang besar.'],
        ]);
    }
}
