@extends('layouts.app')
@section('slider')
@endsection
@section('title')
@endsection
@section('content')
<!-- Thanh toán thành công -->
<div class="wrap_success">
    <div class="wrap__sucess2">
        <h1>Thanh toán thành công</h1>
            <div class="d-flex">
                <div class="tt_nguoinhan">
                    <h3 style="font-size: 24px;">Thông tin người đặt hàng</h3>
                    <div class="hoten">Họ và tên: {{$orders->user_name}}</div>
                    <div class="hoten">Email: {{$orders->user_email}}</div>
                    <div class="sdt">Số điện thoại: ${{$orders->user_phone}}</div>
                    <div class="diachi">Địa chỉ: {{$orders->user_address}}</div>
                </div>
                <div class="tt_nguoinhan">
                    <h3 style="font-size: 24px;">Thông tin người nhận hàng</h3>
                    <div class="hoten">Họ và tên: {{$orders->receiver_name}}</div>
                    <div class="hoten">Email: {{$orders->receiver_email}}</div>
                    <div class="sdt">Số điện thoại: ${{$orders->receiver_phone}}</div>
                    <div class="diachi">Địa chỉ: {{$orders->receiver_address}}</div>
                </div>
            </div>
        @foreach($orderItems as $item)
            <div class="ttgio_hang">
                <h3 style="font-size: 24px;">Sản phẩm</h3>
                    <input type="hidden"  value="{{$item->id_product}}">
                    <div class="ttgio_hang-item">
                        <img src="{{Storage::url($item->product_image)}}" style="width: 100px;height: 120px" alt="">
                        <div class="ttgio_hang-itemcontent">
                            <div class="ttgio_hang__title">{{$item->product_name}}</div>
                            <div class="ttgio_hang__title">Phân loại: {{$item->variant_size_name}} x {{$item->variant_color_name}}</div>
                            <div class="ttgio_hang__soluong">Số lượng :{{$item->quantity}} </div>
                            <div class="ttgio_hang__price">Giá: {{number_format($item->product_price_sale ? : $item->product_price)}} VNĐ</div>
                        </div>
                    </div>
                <div class="line"></div>

                
            </div>
        @endforeach
        <div class="tt_donhang">
            <div class="phivc">Phí vận chuyển: Miễn phí</div>
            <div class="line"></div>
            <div class="tong">Tổng: {{number_format($totalAmount)}}VNĐ</div>
            <div class="tong" >Trạng thái: <span style="color: red;">{{$orders->order_status}}</span></div>
            <input type="hidden" name="total">
        </div>
    </div>
</div>
@endsection