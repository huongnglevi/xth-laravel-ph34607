<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductSize;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detail($slug) {
        $product = Product::query()->where('slug', $slug)
            ->with(['variants', 'category'])->first();
        $productVariants = $product->variants->all();
        $colorIds = [];
        $sizeIds = [];
        foreach ($productVariants as $item) {
            $colorIds[] = $item->product_color_id;
            $sizeIds[] = $item->product_size_id;
        }
        $colors = ProductColor::query()->whereIn('id', $colorIds)
            ->pluck('name', 'id')->all();
        $sizes = ProductSize::query()->whereIn('id', $sizeIds)
            ->pluck('name', 'id')->all();
        return view('product-detail', compact('product', 'colors', 'sizes'));
    }
    public function prodcate($id){
        $productCate = Product::query()->where('category_id', $id)->get();
        $categoryName= Category::query()->where('id', $id)->first();
        
        return view('prodCate', compact('productCate','categoryName'));
    }
}
