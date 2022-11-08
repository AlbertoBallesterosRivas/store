<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
        [
            'user_id' => 1,
            'name' => 'Product 1',
            'description' => 'Description 1',
            'price' => 1,
        ],
        [
            'user_id' => 1,
            'name' => 'Product 2',
            'description' => 'Description 2',
            'price' => 2,
        ],
        [
            'user_id' => 2,
            'name' => 'Bought product 1',
            'description' => 'Description 1',
            'price' => 1,
        ],
        [
            'user_id' => 2,
            'name' => 'Bought product 2',
            'description' => 'Description 2',
            'price' => 2,
        ]
        ]);
    }
}
