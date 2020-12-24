<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuanlyController extends Controller
{
    public function index(){
        return view('loginadmin');
    }
    public function homequanly(){
        $sp = DB::table('sanpham')->orderBy('ma_sp','desc')->get();
        return view('Admin.Content.product',
    [
        'sanpham'=>$sp
    ]);
    }
    public function login(Request $request)
    {
        $user = $request->only(['email', 'password']);
        if (Auth::attempt($user)) {
            return redirect('quanly/home'); 
        } else {
            return redirect('quanly');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('quanly');
    }
}
