<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\CheckAdminMiddleWare;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
    $banner = Banner::query()->get();  
    $products = Product::query()->latest('id')->with('category')->get();
    $categories = Category::query()->get();
    return view('welcome',compact('products','categories','banner'));
})->name('welcome');
// CHi tiết sản phẩm
Route::get('product/{slug}', [ProductController::class, 'detail'])->name('product.detail');
Route::get('product/category/{id}', [ProductController::class, 'prodcate'])->name('product.cate');;
// đăng ký
Route::get('auth/register', [RegisterController::class, 'index'])
   ->name('register');
Route::post('auth/register', [RegisterController::class, 'register'])
   ->name('register');
// login
Route::get('auth/login', [LoginController::class, 'index'])
   ->name('login');
Route::post('auth/login', [LoginController::class, 'login'])
   ->name('login');
Route::get('auth/logout', [LoginController::class, 'logout'])
   ->name('logout');
// mua hàng
Route::post('cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('cart/list', [CartController::class, 'list'])->name('cart.list');
Route::get('cart/addDiscount', [CartController::class, 'addDiscount'])->name('cart.discount');
Route::post('order/add', [OrderController::class, 'add'])->name('order.add');
Route::get('order/list', [OrderController::class, 'list'])->name('order.list');