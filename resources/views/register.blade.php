@extends('layouts.app')
@section('slider')
@endsection
@section('title')
@endsection
@section('content')
<!-- form register -->
<div class="form-register" style="padding: 20px">
         <div class="mask d-flex align-items-center h-100 gradient-custom-3">
             <div class="container h-100">
                 <div class="row d-flex justify-content-center align-items-center h-100">
                     <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                         <div class="card" style="border-radius: 15px;">
                             <div class="card-body p-5">
                                 <h2 class="text-uppercase text-center mb-5">ĐĂNG KÝ TÀI KHOẢN</h2>

                                 <form action="{{route('register')}}" method="POST" id="form_register">
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
                                         <label class="form-label" for="email_dk">Email</label>
                                         <input type="email" id="email_dk" class="form-control form-control-lg"
                                             name="email" />
                                        @error('email')
                                            <span class="text-danger">Vui lòng nhập email</span>
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

                                     <div class="form-outline mb-4">
                                         <label class="form-label" for="mk2_dk">Nhập lại mật khẩu</label>

                                         <input type="password" id="mk2_dk" class="form-control form-control-lg"
                                             name="password_confirmation" />

                                     </div>
                                     
                                     <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success">Đăng ký</button>
                                     </div>
                                     <p class="text-center text-muted mt-5 mb-0">Bạn đã có tài khoản? <a
                                             href="?act=login" class="fw-bold text-danger "><u>Đăng nhập</u></a></p>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
</div>
@endsection