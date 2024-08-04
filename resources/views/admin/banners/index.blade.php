@extends('admin.layouts.master')
@section('title')
    Danh sách danh mục
@endsection 
@section('content')
<div class="container">
    <a href="{{route('admin.banners.create')}}">
        <button class="btn btn-success mt-3 mb-3">Thêm mới</button>
    </a>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <table class="table table_striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Ảnh</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>
                        <div style="width: 150px; height: 100px;">
                            <img src="{{Storage::url($item->image)}}" alt="" width="100%" height="100%">
                        </div>
                    </td>
                    <td class="d-block">
                        <a style="text-decoration: none;" href="{{route('admin.banners.edit', $item)}}">
                            <button class="btn btn-warning">Sửa</button>
                        </a>
                        <form class="d-inline" action="{{route('admin.banners.destroy', $item)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection 