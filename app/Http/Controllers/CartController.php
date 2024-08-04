<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\Promotion;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function list(){
        // Lấy thông tin user đăng nhập
        // $user = Auth::user();
        $user = Auth::user();
        // thông tin cart
        $cart = Cart::query()->where('user_id', $user->id)->first();
        $productVariants = $cart->cartItems()
        ->join('product_variants', 'product_variants.id', '=' ,'cart_items.product_variant_id')
        ->join('products', 'products.id', '=', 'product_variants.product_id')
        ->join('product_sizes', 'product_sizes.id' , '=', 'product_variants.product_size_id')
        ->join('product_colors', 'product_colors.id' , '=', 'product_variants.product_color_id')
        ->get(['product_variants.id as product_variant_id', 'products.name as product_name',
            'products.sku as product_sku', 'products.image as product_image',
            'products.price as product_price', 'products.price_sale as product_price_sale',
            'product_sizes.name as variant_size_name', 'product_colors.name as variant_color_name',
            'cart_items.quantity as quantity']);

    //    dd($productVariants->toArray());    
        $totalAmount = 0 ;
        foreach (collect($productVariants) as $item) {
            $totalAmount += $item['quantity'] * ($item['product_price_sale'] ?: $item['product_price']);
        }
        $totalPrice = $totalAmount * 
        $userId = $cart->user_id;
        return view('cart', compact('totalAmount', 'productVariants', 'userId'));
    }
    public function add(Request $request){
        // dd($request->all());
        $product = Product::query()->where('id', $request->product_id)->first();
        $productVariant = ProductVariant::query()->where([
            'product_id' => $request->product_id,
            'product_color_id' => $request->product_color_id,
            'product_size_id' => $request->product_size_id,
        ])->first();
        $user = Auth::user();
        // dd($user);
        // check cart
        $cart = Cart::query()->where('user_id', $user->id)->first();
        if(empty($cart)){
            $cart = Cart::query()->create(['user_id' => $user->id]);
        }
        // Chuẩn bị data lưu vào cartItem
        $data = [
            'product_variant_id' => $productVariant->id,
            'cart_id' => $cart->id,
            'quantity' => $request->quantity,
        ];
        // kiểm tra có product_variant_id thì phải cộng số lượng
        $cartItems = CartItem::query()->where('product_variant_id', $productVariant->id)->first();
        if(empty($cartItems)){
            CartItem::query()->create($data);
        } else{
            $data["quantity"] += $cartItems->quantity;
            $cartItems->update(["quantity"=>$data["quantity"]]);
        }

        return redirect()->route('cart.list');
    }
    public function addDiscount(Request $request){
        
    }
}
