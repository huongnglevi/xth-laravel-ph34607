<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\ProductColor;
use App\Models\ProductSize;
use App\Models\ProductVariant;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const PATH_VIEW = "admin.products.";
    const PATH_UPLOAD = "products";
    public function index()
    {
        $data = Product::query()->latest('id')->get();
        return view(self::PATH_VIEW.__FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::query()->pluck('name', 'id')->all();
        $sizes = ProductSize::query()->pluck('name', 'id')->all();
        $colors = ProductColor::query()->pluck('name', 'id')->all();
        return view(self::PATH_VIEW.__FUNCTION__, compact('categories','sizes','colors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        // dd($request->all());
        $data = $request->except(['product_variants', 'image']);
        $data['is_20_sale'] = isset($data['is_20_sale']) ? 1 : 0;
        $data['is_hot'] = isset($data['is_hot']) ? 1 : 0;
        $data['slug'] = Str::slug($data['name'].'-'.$data['sku']);
        if(!empty($request->hasFile('image'))){
            $data['image'] = Storage::put(self::PATH_UPLOAD, $request->file('image'));
        } 
        // dd($data);
        // xử lý dữ liệu variant
        // $listProVariants = $request->product_variants;
        // $dataProVariants = [];
        // foreach ($listProVariants as $item){
        //     $dataProVariants[] = [
        //         'product_color_id' => $item['color'],
        //         'product_size_id' => $item['size'],
        //         'image' => !empty($item['image']) ? Storage::put('product_variants', $item['image']) : '',
        //         'quantity' => !empty($item['quantity']) ? !empty($item['quantity']) : 0
        //     ];
        // }
         
        // try {
        //     DB::beginTransaction();
        //     // Tạo dữ liệu bảng product
        //     $product = Product::query()->create($data);
        //     // Tạo dữ liệu cho bằng product variants
        //     foreach($dataProVariants as $item){
        //         $item += ['product_id' => $product->id];
        //         ProductVariant::query()->create($item);
        //     }
        //     DB::commit();
        //     return redirect()->route('admin.products.index');
        // } catch (\Exception $exception) {
        //     DB::rollBack();
        //     dd($exception->getMessage());
        //     // thực hiện xóa ảnh trong storage
        //     // if(!empty($dataProVariants->image) && Storage::exists($dataProVariants->image)){
        //     //     Storage::delete($dataProVariants->image);
        //     // }
        //     return back();
        // }
        try {
            DB::beginTransaction();
            // tạo dữ liệu bảng product
            $product = Product::query()->create($data);
            // tạo dữ liệu cho bảng product variants
            foreach ($request->product_variants as $item) {
                ProductVariant::query()->create([
                    'product_color_id' => $item['color'],
                    'product_size_id' => $item['size'],
                    'image' => !empty($item['image']) ? Storage::put('product_variants', $item['image']) : '',
                    'quantity' => !empty($item['quantity']) ? $item['quantity'] : 0,
                    'product_id'=> $product->id
                ]);
            }
            DB::commit();
            return redirect()->route('admin.products.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            dd($exception->getMessage());
            // thực hiện xóa ảnh trong storage
            return back();
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::query()->pluck('name', 'id')->all();
        // $sizes = ProductSize::query()->pluck('name', 'id')->all();
        // $colors = ProductColor::query()->pluck('name', 'id')->all();
        // $product_variants = ProductVariant::query()->get();
        // dd($product_variants);
        return view(self::PATH_VIEW.__FUNCTION__, compact('product','categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->except('image');
        $data['is_20_sale'] = isset($data['is_20_sale']) ? 1 : 0;
        $data['is_hot'] = isset($data['is_hot']) ? 1 : 0;
        $data['slug'] = Str::slug($data['name'].'-'.$data['sku']);
        if(!empty($request->hasFile('image'))){
            $data['image'] = Storage::put(self::PATH_UPLOAD, $request->file('image'));
            if(!empty($product->image) && Storage::exists($product->image)){
                Storage::delete($product->image);
            }
        } else{
            $data['image'] = $product->image;
        }
        $product->update($data);
        
        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        try {
            DB::beginTransaction();
            // xóa order

            // xóa product_variants
            $product->variants()->delete();
            $product->delete();
            // xóa ảnh trong storage
            if(!empty($product->image) && Storage::exists($product->image)){
                Storage::delete($product->image);
            }
            DB::commit();
            return redirect()->route('admin.products.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            return back();
        }
    }
}
