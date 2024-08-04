@extends('admin.layouts.master')
@section('title')

@endsection
@section('style-libs')
    <!-- Plugins css -->
    <link href="{{asset('theme/admin/libs/dropzone/dropzone.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Icons Css -->
    <link href="{{asset('theme/admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('script-libs')
    <!-- ckeditor -->
    <script src="{{asset('theme/admin/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js')}}"></script>
    <!-- dropzone js -->
    <script src="{{asset('theme/admin/libs/dropzone/dropzone-min.js')}}"></script>

    <script src="{{asset('theme/admin/js/create-product.init.js')}}"></script>
@endsection
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <!-- <h1 class="h3 mb-4 text-gray-800">Tạo mới sản phẩm</h1> -->
        <!--  Page main content   -->
        <!--   Main product information             -->
        <form action="{{route('admin.products.update',$product)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <!--   left content-->
                <div class="col-xl-8 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Main product information -->
                        <a href="#collapseProductInfo" class="d-block card-header py-3" data-toggle="collapse"
                           role="button" aria-expanded="true" aria-controls="collapseCardExample">
                            <h6 class="m-0 font-weight-bold text-primary">Thông tin chính của sản phẩm</h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class="collapse show" id="collapseProductInfo">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label">Tên</label>
                                    <input type="text" class="form-control"  name="name"
                                           placeholder="Nhập tên sản phẩm" value="{{$product->name}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Giá</label>
                                    <input type="text" class="form-control" name="price"
                                           placeholder="Nhập giá sản phẩm" value="{{$product->price}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Giá giảm</label>
                                    <input type="text" class="form-control"  name="price_sale"
                                           placeholder="Nhập giá giảm" value="{{$product->price_sale}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Mô tả sản phẩm</label>
                                    <input type="text" name="description" style="padding: 50px 12px;" class="form-control" value="{{$product->description}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--    gallery -->
                    <div class="card shadow mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseProductGallery" class="d-block card-header py-3" data-toggle="collapse"
                           role="button" aria-expanded="true" aria-controls="collapseCardExample">
                            <h6 class="m-0 font-weight-bold text-primary">Ảnh sản phẩm</h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class="collapse show" id="collapseProductGallery">
                            <div class="card-body">
                                <div class="mb-4">
                                    <h5 class="fs-14 mb-1">Ảnh sản phẩm</h5>
                                    <p class="text-muted">Thêm hình ảnh của sản phẩm.</p>
                                    <div class="text-center">
                                        <input type="file" name="image" class="form-control" value="{{$product->price_sale}}">
                                    </div>
                                    @if(!empty($product->image))
                                        <div style="width: 100px; height: 100px;">
                                            @if(str_contains($product->image, 'products/'))
                                                <img src="{{Storage::url($product->image)}}" style="max-height: 100%; max-height: 100%;" alt="">
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product variant -->
                    <!-- Button -->
                    <div class="d-flex justify-content-end mb-3">
                        <button class="btn btn-success w-sm">Cập nhật</button>
                    </div>
                </div>
                <!-- end left content    -->
                <!-- right content          -->
                <div class="col-xl-4 col-lg-5">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseStatus" class="d-block card-header py-3" data-toggle="collapse"
                           role="button" aria-expanded="true" aria-controls="collapseCardExample">
                            <h6 class="m-0 font-weight-bold text-primary">
                                Trạng thái sản phẩm
                            </h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class="collapse show" id="collapseStatus">
                            <!-- end card body -->
                            <div class="card-body">
                                <label for="choices-category-input" class="form-label">Danh mục sản phẩm</label>
                                <select class="form-control" aria-label="Default select example"
                                        id="choices-category-input" name="category_id">
                                    @foreach($categories as $id => $name)
                                        <option value="{{$id}}" {{ $product->category_id == $id ? 'selected' : '' }}>{{ $name }}</option>
                                    @endforeach
                                </select>
                                <label for="choices-publish-status-input" class="form-label mt-3">Trạng thái</label>
                                <select class="form-control form-select-lg mb-3" id="choices-publish-status-input"
                                        aria-label="Default select example" name="is_active">
                                    <!-- <option selected value="{{$product->is_active}}">----------- Trạng thái ----------</option> -->
                                    
                                    @if($product->is_active)
                                        <option value="1">Hoạt động</option>
                                        <option value="0">Không hoạt động</option>
                                    @else
                                        <option value="0">Không hoạt động</option>
                                        <option value="1">Hoạt động</option>
                                    @endif
                                </select>
                                <!-- Loại sản phẩm -->
                                <label for="choices-publish-type-input" class="form-label">Loại sản phẩm</label>
                                @php
                                    $types = [
                                            'is_20_sale' => 'Giảm 20%',
                                            'is_hot' => 'Sản phẩm Hot'
                                    ];
                                @endphp
                                <div class="form-group custom-control custom-checkbox small d-flex align-items-center">
                                    @foreach($types as $key => $value)
                                        <div class="col-md-3">
                                            <input type="checkbox" class="custom-control-input" value="{{$key}}" name="{{$key}}" id="customCheck-{{$key}}" @checked($product->$key) >
                                            <label  class="custom-control-label" for="customCheck-{{$key}}">{{$value}}</label>
                                        </div>
                                    @endforeach
                                </div>
                                <!-- Mã sản phẩm -->
                                <label for="choices-publish-type-input" class="form-label">Mã sản phẩm</label>
                                <input type="text" class="form-control" name="sku" value="{{strtoupper(\Str::random(8))}}">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end right content       -->

            </div>
        </form>
</div>
<!-- /.container-fluid -->
@endsection
