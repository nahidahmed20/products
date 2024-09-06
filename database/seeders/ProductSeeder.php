<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Mobile Phone', 
                'price' => 50000, 
                'description' => 'The Phone Name is Pixel 7 pro'
            ],

            [
                'name' => 'Sony Camera', 
                'price' => 150000, 
                'description' => 'The Camera Name is Sony Alpha'
            ],

            [   'name' => 'Asus Laptop', 
                'price' => 110000, 
                'description' => 'Asus laptop is the best laptop'
            ],
        ]);
    }
}
