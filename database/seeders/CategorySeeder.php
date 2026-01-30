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
        Category::create(['name' => 'Elektronik', 'description' => 'Barang elektronik seperti laptop, hp, dll']);
        Category::create(['name' => 'Pakaian', 'description' => 'Pakaian pria, wanita, anak-anak']);
        Category::create(['name' => 'Makanan', 'description' => 'Makanan ringan dan berat']);
        Category::create(['name' => 'Minuman', 'description' => 'Minuman dingin dan panas']);
        Category::create(['name' => 'Kosmetik', 'description' => 'Produk kecantikan dan perawatan']);
    }
}
