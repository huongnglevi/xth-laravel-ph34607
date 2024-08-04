@extends('layouts.app')
@section('content')
<form action="{{route('cart.add')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row align-items-center justify-content-center">
        <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
            <div class="image-wrapper">
                    <img class="img-fluid w-60" src="{{Storage::url($product->image)}}">
            </div>
        </div>
        <div class="col-lg-5 col-md-6">
            <div class="content pl-lg-3 pl-0">
              <h2>{{$product->name}}</h2>
                <p class="h5 text-muted">Danh mục: {{$product->category ? $product->category->name : ''}}</p>
                <span class="text-danger">Giá: {{$product->price_sale ?: $product->price}}</span>
                <del class="text-gray"> {{$product->price_sale ? $product->price : ''}}</del>
                <p>Mô tả: {{$product->description}}</p>
                <div class="mt-3">
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                         <div>
                             <label class="form-check-label">Màu:</label>
                             @foreach($colors as $id=>$name)
                                 <input type="radio" style="pointer-events: none; clip: rect(0,0,0,0); position: absolute"
                                 class="btn-check" id="radio_color_{{$id}}" name="product_color_id" value="{{$id}}">
                                 <label class="btn btn-light" for="radio_color_{{$id}}">{{$name}}</label>
                             @endforeach
                         </div>
                         <div>
                            <label class="form-check-label">Kích thước:</label>
                            @foreach($sizes as $id=>$name)
                                <input type="radio" style="pointer-events: none; clip: rect(0,0,0,0); position: absolute"
                                       class="btn-check" id="radio_size_{{$id}}" name="product_size_id" value="{{$id}}">
                                <label class="btn btn-light" for="radio_size_{{$id}}">{{$name}}</label>
                            @endforeach
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="quantity" class="form-label">Số lượng:</label>
                            <input type="number" name="quantity" required value="1" class="form-control">
                        </div>
                        @if(Auth::user())
                            <button type="submit" class="btn btn-success">Thêm vào giỏ hàng</button>
                        @else
                            <div class="alert alert-danger" role="alert">
                                Vui lòng <a style="color: red;" href="{{route('login')}}">Đăng nhập</a> để có thể mua sản phẩm
                            </div>
                        @endif
                </div>
            </div>
        </div>
    </div>
</form>
    
@endsection
