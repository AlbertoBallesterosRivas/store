<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seller = User::factory()->create([
            'name' => 'Seller',
            'email' => 'seller@seller.com',
            'password' => bcrypt('12345678'),
        ]);

         $buyer = User::factory()->create([
            'name' => 'Buyer',
            'email' => 'buyer@buyer.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
