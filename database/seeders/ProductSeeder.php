<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = \App\Models\Category::first();

        if (! $category) {
            $category = \App\Models\Category::create(['name' => 'Contoh Kategori', 'description' => 'Kategori contoh', 'status' => 'aktif']);
        }

        \App\Models\Product::create([
            'name' => 'Produk Contoh A',
            'sku' => 'PRD-001',
            'description' => 'Deskripsi produk contoh A',
            'price' => 15000,
            'stock' => 10,
            'category_id' => $category->id,
            'status' => 'aktif',
        ]);

        \App\Models\Product::create([
            'name' => 'Produk Contoh B',
            'sku' => 'PRD-002',
            'description' => 'Deskripsi produk contoh B',
            'price' => 25000,
            'stock' => 5,
            'category_id' => $category->id,
            'status' => 'segera_datang',
        ]);
    }
}
