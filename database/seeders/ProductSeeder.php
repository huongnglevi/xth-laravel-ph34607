<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductSize;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //thêm size
        foreach (['S','M','L','XL'] as $item) {
            ProductSize::query()->create([
                'name'=>$item
            ]);
        }
        //thêm màu
        foreach (['Black','White','Blue','Yellow'] as $item) {
            ProductColor::query()->create([
                'name'=>$item
            ]);
        }
        // thêm dữ liệu bảng product
        for($i = 0; $i < 30; $i++){
            $name = fake()->text(50);
            Product::query()->create([
                'category_id' => rand(18, 21),
                'name' => $name,
                'slug' => Str::slug($name). Str::random(8),
                'sku' => Str::random(8).$i,
                'image' => 'https://tokyolife.vn/_next/image?url=https%3A%2F%2…ce0483cbf75b96295abca98_thumbnail.jpg&w=1920&q=75',
                'price' => 120000,
                'price_sale' => 100000,
                'description' => fake()->text(100),
            ]);
        }

        
    }
}
