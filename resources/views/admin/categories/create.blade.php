@extends('admin.layouts.master')
@section('title')
    Tạo mới danh mục
@endsection 
@section('content')
<form action="{{route('admin.categories.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="mt-3">
            <label for="" class="form-label">Tên danh mục</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="mt-3">
            <label for="" class="form-label">Ảnh</label> <br>
            <input type="file" name="image">
        </div>
        <button type="submit" class="btn btn-success mt-3">Tạo mới</button>
    </div>
</form>
@endsection 