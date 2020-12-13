<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index($danhmuchientai,$id){
        $nhasanxuat = DB::table('hangsx')->get();
        $danhmuc = DB::table('danhmuc')->get();
        $banner = DB::table('hinh')->where('tenhinh','=','banner_dell')->get();
        $sanpham = DB::table('sanpham')
        ->join('hangsx','sanpham.HANGSXma_nhasanxuat','=','hangsx.ma_nhasanxuat')
        ->select('sanpham.tensp',
        'sanpham.ma_sp',
        'sanpham.dongia',
        'sanpham.url as urlSanpham', 
        'hangsx.ten_nhasanxuat',
        'sanpham.RAM',
        'sanpham.CPU',
        'sanpham.VGA',
        'sanpham.manhinh',
        'sanpham.hedieuhanh',
        'sanpham.mota')
        ->where('sanpham.ma_sp','=',$id)
        ->get();
        $dataimage = DB::table('hinh')->where('SANPHAMma_sp','=',$id)->get();
        return view('User.Content.single_product',[
            'nhasanxuat' => $nhasanxuat,
            'danhmuc'=> $danhmuc,
            'sanpham'=>$sanpham,
            'banner' => $banner,
            'danhmuchientai'=>$danhmuchientai,
            'hinh'=>$dataimage
        ]);
    }

}
