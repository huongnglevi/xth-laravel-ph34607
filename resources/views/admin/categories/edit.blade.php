@extends('admin.layouts.master')
@section('title')
    Cập nhật danh mục
@endsection 
@section('content')
<form action="{{route('admin.categories.update', $category)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="container">
        <div class="mt-3">
            <label for="" class="form-label">Tên danh mục</label>
            <input type="text" name="name" class="form-control" value="{{$category->name}}">
        </div>
        <div class="mt-3">
            <label for="" class="form-label">Ảnh</label> <br>
            <input type="file" name="image" value="{{$category->name}}">
            @if(!empty($category->image))
            <div style="width: 100px; height: 100px;">
                <img src="{{Storage::url($category->image)}}" alt="" width="100%" height="100%">
            </div>
        @endif
        </div>
        <button type="submit" class="btn btn-success mt-3">Cập nhật</button>
    </div>
</form>
@endsection 