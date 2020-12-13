<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    //
    public function index(Request $request){
        $nhasanxuat = DB::table('hangsx')->get();
        $danhmuc = DB::table('danhmuc')->get();
        $banner = DB::table('hinh')->where('tenhinh','=','banner_dell')->get();
        
        $sanpham = DB::table('sanpham')
        ->join('hangsx','sanpham.HANGSXma_nhasanxuat','=','hangsx.ma_nhasanxuat')
        ->join('hinh','sanpham.ma_sp','=','hinh.SANPHAMma_sp')
        ->select('sanpham.tensp',
        'sanpham.ma_sp',
        'sanpham.dongia',
        'sanpham.url as urlSanpham',
        'hinh.url as urlhinh',
        'hangsx.ten_nhasanxuat')
        ->where('sanpham.tensp','LIKE',"%$request->search%")
        ->orwhere('sanpham.RAM','LIKE',"%$request->search%")
        ->orwhere('sanpham.CPU','LIKE',"%$request->search%")
        ->orwhere('sanpham.hedieuhanh','LIKE',"%$request->search%")
        ->groupBy('tensp')
        ->get();
        return view('User.Content.danhmuc',[
            'nhasanxuat' => $nhasanxuat,
            'danhmuc'=> $danhmuc,
            'sanpham'=>$sanpham,
            'banner' => $banner,
        ]);
    }
}
