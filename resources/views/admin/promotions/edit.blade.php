@extends('admin.layouts.master')
@section('title')
    Cập nhật khuyến mãi
@endsection 
@section('content')
<form action="{{route('admin.promotions.update', $promotion)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="container">
        <div class="mt-3">
            <label for="" class="form-label">Tên mã khuyến mãi</label>
            <input type="text" name="name" class="form-control" value="{{$promotion->name}}">
        </div>
        <div class="mt-3">
            <label for="" class="form-label">Số tiền giảm giá</label>
            <input type="text" name="discount_amount" class="form-control" value="{{$promotion->discount_amount}}">
        </div>
        <div class="mt-3">
            <label for="" class="form-label">Ngày bắt đầu</label>
            <input type="date" name="start_date" class="form-control" value="{{$promotion->start_date}}">
        </div>
        <div class="mt-3">
            <label for="" class="form-label">Ngày kết thúc</label>
            <input type="date" name="end_date" class="form-control" value="{{$promotion->end_date}}">
            @error('end_date')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-success mt-3">Cập nhật</button>
    </div>
</form>
@endsection 