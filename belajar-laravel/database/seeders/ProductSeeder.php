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
        $products = [[
            'category_id' => 1,
            'image' => null,
            'name' => 'Kartu Nama Glossy',
            'stock' => 100,
            'price' => 15000
        ], [
            'category_id' => 2,
            'image' => null,
            'name' => 'Cutting Sticker',
            'stock' => 100,
            'price' => 25000
        ]];

        foreach ($products as $value) {
            \App\Models\Product::create([
                'category_id' => $value['category_id'],
                'image' => $value['image'],
                'name' => $value['name'],
                'stock' => $value['stock'],
                'price' => $value['price']
            ]);
        }
    }
}

