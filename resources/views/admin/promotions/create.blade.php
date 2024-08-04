@extends('admin.layouts.master')
@section('title')
    Tạo mới khuyến mãi
@endsection 
@section('content')
<form action="{{route('admin.promotions.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="mt-3">
            <label for="" class="form-label">Tên mã khuyến mãi</label>
            <input type="text" name="name" class="form-control">
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mt-3">
            <label for="" class="form-label">Số tiền giảm giá</label>
            <input type="text" name="discount_amount" class="form-control">
            @error('discount_amount')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mt-3">
            <label for="" class="form-label">Ngày bắt đầu</label>
            <input type="date" name="start_date" class="form-control">
            @error('start_date')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mt-3">
            <label for="" class="form-label">Ngày kết thúc</label>
            <input type="date" name="end_date" class="form-control">
            @error('end_date')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-success mt-3">Tạo mới</button>
    </div>
</form>
@endsection 