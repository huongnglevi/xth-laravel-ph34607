<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index() {
        // hiển thị view trang đăng ký
        return view('register');
    }

    public function register(Request $request){
        // xử lý logic đăng ký
        // validate
        $data = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'max:100', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);
       

        // tạo user mới
        User::query()->create($data);
        //login với user vừa tạo
        // Auth::login($user);
        // gen lại token cho user vừa đăng nhập
        // $request->session()->regenerate();
        // quay lại trang phía trước
        return redirect()->intended('auth/login');
        // dd($request->all());

    }
}
