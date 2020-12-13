<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class infoController extends Controller
{
    public function index(){
        $nhasanxuat = DB::table('hangsx')->get();
        $danhmuc = DB::table('danhmuc')->get();
        $sanpham = DB::table('sanpham')
        ->join('hinh','sanpham.ma_sp','=','hinh.SANPHAMma_sp')
        ->join('hangsx','sanpham.HANGSXma_nhasanxuat','=','hangsx.ma_nhasanxuat')
        ->select('sanpham.tensp','sanpham.url','sanpham.dongia','hinh.url as urlhinh','hangsx.ten_nhasanxuat','sanpham.ma_sp')
        ->groupBy('sanpham.tensp')
        ->orderBy('ma_sp', 'desc')
        ->get();
        return view('User.Content.info_shop',[ 
            'nhasanxuat' => $nhasanxuat,
            'danhmuc'=> $danhmuc,
            'sanpham' => $sanpham,
        ]);
    }
}
