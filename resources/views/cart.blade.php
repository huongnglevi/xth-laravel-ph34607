@extends('layouts.app')
@section('slider')
<div class="slide-show">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>

        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('assets/img/bannerfptshop1.jpg')}}" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/bannerfptshop3.jpg')}}" class="d-block w-100" alt="..." />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
@endsection
@section('title')
@endsection
@section('content')
<div class="row align-items-center justify-content-center">
    <div class="row">
        <div class="content pl-lg-3 pl-0">
            <ul class="list-group">
                <li class="list-group-item p-3">
                    <h5 class="fw-bolder">Đơn hàng của bạn</h5>
                </li>
                @foreach($productVariants as $item)
                <li class="list-group-item">
                    <div class="row align-items-center ">
                        <div class="col-2">
                            <div class="d-flex justify-content-center align-items-center"
                                 style="width: 80px; height: 80px;">
                                    <img src="{{Storage::url($item->product_image)}}" alt="" class="mw-100 mh-100">
                            </div>
                        </div>
                        <div class="col-4">
                            <span class="fw-bolder">{{$item->product_name}}</span>
                            <span class="text-gray">Phân loại: {{$item->variant_size_name}} x {{$item->variant_color_name}}</span>
                        </div>
                        <div class="col-2 text-center ">
                            <span>{{$item->quantity}}</span>
                        </div>
                        <div class="col-4 text-end ">
                            <span class="text-danger">{{number_format($item->product_price_sale ? : $item->product_price)}}</span>
                            <span style="text-decoration: line-through" class="text-gray">
                                {{number_format($item->product_price_sale ? $item->product_price : '')}}
                            </span>
                        </div>
                    </div>
                </li>
                @endforeach
                <li class="list-group-item d-grid gap-2">
                    <form action="" method="post">
                        <label for="{{route('cart.discount')}}" class="form-label">voucher</label>
                        <div class="d-flex justify-content-between align-items-center ">                           
                            <input class="form-control" type="text" id="discount" name="discount">
                        </div>
                        <button class="btn btn-success">Sử dụng</button>
                    </form>
                    
                    <div class="d-flex justify-content-between align-items-center ">
                        <span>Tạm tính</span>
                        <span>{{number_format($totalAmount)}}</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center ">
                        <span>Shipping</span>
                        <span>0</span>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                    <span class="fw-bold">Tổng</span>
                    <span class="fw-bold text-danger ">{{number_format($totalAmount)}} </span>
                </li>
            </ul>
        </div>
    </div>
    <form action="{{route('order.add')}}" class="container mt-4 d-flex justify-content-around" method="POST">
        @csrf
        <input type="hidden" name="productVariants" value="{{$productVariants}}">
        <input type="hidden" name="totalAmount" value="{{$totalAmount}}">
        <input type="hidden" name="userId" value="{{$userId}}">
        <div class="col-md-5">
            <h3>Thông tin người mua hàng</h3>
            <div class="mb-3">
                <label class="form-label">Họ tên:</label>
                <input type="text" class="form-control" name="user_name" placeholder="">
            </div>
            <div class="mb-3">
                <label class="form-label">Số điện thoại:</label>
                <input type="text" class="form-control" name="user_phone" placeholder="">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Emai:</label>
                <input type="text" class="form-control" name="user_email" placeholder="">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Địa chỉ:</label>
                <input type="text" class="form-control" name="user_address" placeholder="">
            </div>
            <div class="mb-3 ">
                <label class="card-title mb-2">Chọn hình thức thanh toán</label>
                <ul class="list-group">
                    <li class="list-group-item">
                        <input class="form-check-input" type="radio" name="payment" id="cod" value="cod">
                        <label class="form-check-label" for="cod">Thanh toán khi nhận hàng</label>
                    </li>
                </ul>
            </div>
            <div class="d-flex justify-content-end">
                <button class="btn btn-primary" type="submit">Thanh toán</button>
            </div>
        </div>
        <div class="col-md-5">
            <h3>Thông tin nhận hàng</h3>
            <div class="mb-3">
                <label class="form-label">Họ tên:</label>
                <input type="text" class="form-control" name="receiver_name" placeholder="">
            </div>
            <div class="mb-3">
                <label class="form-label">Số điện thoại:</label>
                <input type="text" class="form-control" name="receiver_phone" placeholder="">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Emai:</label>
                <input type="text" class="form-control" name="receiver_email" placeholder="">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Địa chỉ:</label>
                <input type="text" class="form-control" name="receiver_address" placeholder="">
            </div>
        </div>

    </form>
</div>
@endsection