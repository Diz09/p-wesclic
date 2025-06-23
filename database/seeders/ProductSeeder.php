<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            ['name' => 'TV Samsung', 'category_id' => 1, 'price' => 3000000],
            ['name' => 'Baju Batik', 'category_id' => 2, 'price' => 150000],
            ['name' => 'Keripik Pisang', 'category_id' => 3, 'price' => 25000],
        ]);
    }
}
