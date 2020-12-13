<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DanhmucController extends Controller
{
    public function index($danhmuchientai){
        $nhasanxuat = DB::table('hangsx')->get();
        $danhmuc = DB::table('danhmuc')->get();
        $banner = DB::table('hinh')->where('tenhinh','=','banner_dell')->get();
        $sanpham = DB::table('sanpham')
        ->join('hangsx','sanpham.HANGSXma_nhasanxuat','=','hangsx.ma_nhasanxuat')
        ->join('hinh','sanpham.ma_sp','=','hinh.SANPHAMma_sp')
        ->select('sanpham.tensp','sanpham.ma_sp','sanpham.dongia','sanpham.url as urlSanpham','hinh.url as urlhinh', 'hangsx.ten_nhasanxuat')
        ->where('hangsx.ten_nhasanxuat','=',$danhmuchientai)
        ->groupBy('sanpham.tensp')
        ->get();
     
        return view('User.Content.danhmuc',[
            'nhasanxuat' => $nhasanxuat,
            'danhmuc'=> $danhmuc,
            'sanpham'=>$sanpham,
            'banner' => $banner,
            'danhmuchientai' =>$danhmuchientai,
        ]);
    }
}
