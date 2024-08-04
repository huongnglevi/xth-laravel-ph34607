@extends('admin.layouts.master')
@section('title')
    Thông tin chi tiết danh mục
@endsection 
@section('content')
    <div class="container">
    <table class="table table_striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên danh mục</th>
                <th>Ảnh</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>
                    <div style="width: 100px; height: 100px;">
                        <img src="{{Storage::url($category->image)}}" alt="" width="100%" height="100%">
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    </div>
@endsection 