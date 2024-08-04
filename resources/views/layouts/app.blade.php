<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{asset('assets/css/style-home.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="header">
            <div class="logo">
                <a href="{{route('welcome')}}">

                    <img src="{{asset('assets/img/logotech.jpg')}}" alt="" />

                </a>
            </div>
            <nav>
                <ul>
                    <li><a href="{{route('welcome')}}">Trang chủ</a></li>
                    <li><a href="?act=product">Sản phẩm</a></li>
                    <li><a href="?act=don_hang">Đơn hàng</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </nav>
            <div class="box">
                <div class="search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Search..." />
                </div>
                <div class="cart_user">
                    <div class="cart">
                        <a href="{{route('cart.list')}}">
                            <i class="fa-solid fa-cart-shopping" style="color: black"></i>
                        </a>
                    </div>
                    <div class="user" style="padding: 0 20px;">
                        @if(!Auth::user())
                            <a style="text-decoration: none;" href="{{route('login')}}">
                                <button class="btn btn-outline-success">Đăng nhập</button>
                            </a>
                        @endif
                    
                        @if(Auth::user())  
                            <div class="container-fluid">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                    <a style="color: black; font-size: 15px;" class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Xin chào {{Auth::user()->name}}
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                                        <li><a class="dropdown-item" href="{{route('login')}}">Đổi tài khoản</a></li>
                                        <li><a class="dropdown-item" href="{{route('order.list')}}">Đơn hàng</a></li>
                                        @if(Auth::user()->type == 'admin')
                                            <li><a class="dropdown-item" href="{{route('admin.dashboard')}}">Đến trang quản trị</a></li>
                                        @endif
                                        <li><a style="color: red;" class="dropdown-item" href="{{route('logout')}}">Đăng xuất</a></li>
                                    </ul>
                                    </li>
                                </ul>
                                </div>
                            </div>                        
                         @endif
                         
                    </div>
                </div>
                
            </div>
        </div>
        <div>@yield('slider')</div>
        <main>
            <h2>@yield('title')</h2>    
            <div class="container">
                @yield('content')
            </div>
        </main>
        <!-- <script type="module" src="./assets/js/register_valid.js"></script> -->
        <div class="footer">
            <div class="main_foot">
                <div class="foot1">
                    <div class="service">
                        <ul>
                            <h3>TECHDEAL</h3>
                            <li>
                                <a href="">Chúng tôi luôn trân trọng và mong đợi nhận được mọi ý kiến
                                    đóng góp từ khách hàng <br />
                                    để có thể nâng cấp trải nghiệm dịch vụ và sản phẩm tốt hơn
                                    nữa.</a>
                            </li>
                        </ul>
                    </div>
                    <div class="icon">
                        <i class="fa-brands fa-facebook" style="color: blue"></i>
                        <i class="fa-brands fa-tiktok" style="color: black"></i>
                        <i class="fa-brands fa-youtube" style="color: red"></i>
                    </div>
                </div>
                <hr style="background-color: rgb(219, 216, 216)" />
                <div class="foot2">
                    <div class="service">
                        <ul>
                            <h3>Chính sách</h3>
                            <li><a href="">Chính sách đổi trả</a></li>
                            <li><a href="">Chính sách khuyến mãi</a></li>
                            <li><a href="">Chính sách bảo mật</a></li>
                            <li><a href="">Chính sách giao hàng</a></li>
                        </ul>
                    </div>
                    <div class="address">
                        <ul>
                            <h3>Địa chỉ liên hệ</h3>
                            <li>
                                <a href="">Văn phòng Cầu Diễn: Tầng 3-4, Tòa nhà BMM, KM5, Đường
                                    <br />Cầu Diễn, Phường Kiều Mai, Quận Nam Từ Liêm, TP Hà
                                    Nội</a>
                            </li>
                            <li><a href="">Hotline: 1900.272786 - 028.7777.6837</a></li>
                            <li><a href="">Email: CHHsport@gamil.com</a></li>
                        </ul>
                    </div>
                    <div class="care">
                        <ul>
                            <h3>Chăm sóc khách hàng</h3>
                            <li><a href="">Trải nghiệm mua sắm hài lòng 100%</a></li>
                            <li><a href="">Hỏi đáp-FQAs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>

    </div>
</body>
</html>