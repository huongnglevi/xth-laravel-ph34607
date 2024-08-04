@extends('layouts.app')
@section('slider')
@endsection
@section('title')
@endsection
@section('content')
<!-- form login -->
<div class="form-register" style="padding: 20px">
         <div class="mask d-flex align-items-center h-100 gradient-custom-3">
             <div class="container h-100">
                 <div class="row d-flex justify-content-center align-items-center h-100">
                     <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                         <div class="card" style="border-radius: 15px;">
                             <div class="card-body p-5">
                                 <h2 class="text-uppercase text-center mb-5">ĐĂNG NHẬP</h2>

                                 <form action="{{route('login')}}" method="POST" id="form_register">
                                    @csrf
                                     <div class="form-outline mb-4">
                                         <label class="form-label" for="tendn">Tên đăng nhập</label>
                                         <input type="text" id="ho_ten" class="form-control form-control-lg"
                                             name="name" />
                                            @error('name')
                                                <span class="text-danger">Vui lòng nhập tên</span>
                                            @enderror
                                     </div>

                                     <div class="form-outline mb-4">
                                         <label class="form-label" for="mk_dk">Mật khẩu</label>

                                         <input type="password" id="mk_dk" class="form-control form-control-lg"
                                             name="password" />
                                        @error('password')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                     </div>
                                    <p>
                                        Bạn chưa có tài khoản?
                                        <a style="color: red" href="{{route('register')}}">Đăng ký ngay</a>
                                    </p>
                                    <p>
                                        Không thể đăng nhập?
                                        <a style="color: red" href="?act=quenpass">Quên mật khẩu</a>
                                    </p>
                                    <br />
                                     <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success">Đăng nhập</button>
                                     </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
</div>

@endsection

