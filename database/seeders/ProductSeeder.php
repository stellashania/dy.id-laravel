<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'category_id' => 1,
            'name' => 'Samsung 32 HD',
            'description' => 'This is a 32 inch Samsung TV',
            'price' => 2035000,
            'image' => 'samsungtv1.jpg'
        ]);

        Product::create([
            'category_id' => 2,
            'name' => 'Iphone 11',
            'description' => 'This is a n iphone 11',
            'price' => 9999999,
            'image' => 'iphone11.jpg'
        ]);
        
        Product::create([
            'category_id' => 3,
            'name' => 'Lenovo Legion',
            'description' => 'This is a gaming laptop',
            'price' => 696969690,
            'image' => 'LenovoLegion.jpg'
        ]);
    }
}
