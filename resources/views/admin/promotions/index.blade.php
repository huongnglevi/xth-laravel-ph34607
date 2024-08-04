@extends('admin.layouts.master')
@section('title')
    Danh sách khuyến mãi
@endsection 
@section('content')
<div class="container">
    <a href="{{route('admin.promotions.create')}}">
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
                <th>Tên mã khuyến mãi</th>
                <th>Số tiền giảm giá</th>
                <th>Ngày bắt đầu</th>
                <th>Ngày kết thúc</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->discount_amount}}</td>
                    <td>{{$item->start_date}}</td>
                    <td>{{$item->end_date}}</td>
                    <td class="d-block">
                        <a style="text-decoration: none;" href="{{route('admin.promotions.edit', $item)}}">
                            <button class="btn btn-warning">Sửa</button>
                        </a>
                        <form class="d-inline" action="{{route('admin.promotions.destroy', $item)}}" method="POST">
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