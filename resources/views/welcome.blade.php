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
                <img src="{{asset('assets/img/bannerTokyolife.jpg')}}" class="d-block w-100" alt="..." />
            </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/img/bannerTokyolife2.jpg')}}" class="d-block w-100" alt="..." />
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
<div class="prod">
        <h3>DANH MỤC SẢN PHẨM</h3>
        <div class="line0"></div>
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="item" style="padding-bottom: 30px;">
            @foreach($categories as $item)
                <a style="text-decoration: none;" href="{{route('product.cate',$item->id)}}">
                    <div class="sp" style="width: 20rem">
                        <img style="border-radius: 170px;" src="{{Storage::url($item->image)}}" class="card-img-top" alt="..." />
                        <div class="card-body" style="text-align: center;">
                            <h5 class="name_prod"><a href="" style="color: black;">{{$item->name}}</a></h5>
                        </div>    
                    </div> 
                </a>            
            @endforeach
        </div>
           
       
        <h3>SẢN PHẨM SALE</h3>
        <div class="line0"></div>
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="item">
          <!-- Sản phẩm -->
        @foreach($products as $item)
            <div class="sp" style="width: 20rem">
                <img src="{{Storage::url($item->image)}}" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="name_prod"><a href="{{route('product.detail', $item->slug)}}">{{$item->name}}</a></h5>
                    <p class="card-price">
                        <span style="color: red;">Giá: {{number_format($item->price_sale)}} VNĐ</span>
                        <del style="color: gray;">{{number_format($item->price)}} VNĐ</del>>
                    </p>
                    <p class="mota">
                        {{$item->description}}
                    </p>
                    <a href="{{route('product.detail', $item->slug)}}" class="btn btn-success">Mua ngay</a>
                </div>
            </div>
        @endforeach
      </div>
      <h3 style="padding-top: 30px">SẢN PHẨM HOT</h3>
      <div class="line0"></div>
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="item">
          <!-- Sản phẩm -->
        @foreach($products as $item)
            <div class="sp" style="width: 20rem">
                <img src="{{Storage::url($item->image)}}" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="name_prod"><a href="{{route('product.detail', $item->slug)}}">{{$item->name}}</a></h5>
                    <p class="card-price">
                        <span style="color: red;">Giá: {{number_format($item->price_sale)}} VNĐ</span>
                        <del style="color: gray;">{{number_format($item->price)}} VNĐ</del>
                    </p>
                    <p class="mota">
                        {{$item->description}}
                    </p>
                    <a href="{{route('product.detail', $item->slug)}}" class="btn btn-success">Mua ngay</a>
                </div>
            </div>
        @endforeach
      </div>
</div>
@endsection