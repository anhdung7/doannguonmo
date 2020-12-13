<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index()
    {
        $nhasanxuat = DB::table('hangsx')->get();
        $danhmuc = DB::table('danhmuc')->get();
        return view('User.Content.login_register', [
            'nhasanxuat' => $nhasanxuat,
            'danhmuc' => $danhmuc,
        ]);
    }
    public function register(Request $request)
    {
        DB::insert('insert into user (name, email, sdt, diachi, password) values (?, ?,?,?,?)',
            [$request->name, $request->email, $request->phone, $request->diachi, Hash::make($request->password)]
        );
        $request->session()->flash('success', 'Đăng ký thành công!');
        return redirect('account');
    }
    public function login(Request $request)
    {
        $user = $request->only(['email', 'password']);
        if (Auth::attempt($user)) {
            return redirect('/'); 
        } else {
            return redirect('account');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect(route('home'));
    }
}
