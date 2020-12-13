<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonhangController extends Controller
{
    public function index()
    {
        $donhang = DB::table('user')
            ->join('hoadon', 'hoadon.USERma_user', '=', 'user.id')
            ->join('chitiethoadon', 'hoadon.ma_hd', '=', 'chitiethoadon.HOADONma_hd')
            ->join('sanpham', 'sanpham.ma_sp', '=', 'chitiethoadon.SANPHAMma_sp')
            ->select(
                'user.name',
                'hoadon.ma_hd',
                'hoadon.diachi',
                'hoadon.sdt',
                'user.email',
                'sanpham.tensp',
                'chitiethoadon.soluong',
                'chitiethoadon.dongia',
                'hoadon.tongtien',
                'hoadon.tongsl'
            )
            ->groupBy('hoadon.ma_hd')
            ->get();
        return view('Admin.Content.donhang', [
            'donhang' => $donhang,
        ]);
    }
    public function chitietdh($id)
    {
        $data = DB::table('chitiethoadon')
            ->join('sanpham', 'sanpham.ma_sp', '=', 'chitiethoadon.SANPHAMma_sp')
            ->where('chitiethoadon.HOADONma_hd', '=', $id)
            ->select('chitiethoadon.soluong', 'sanpham.tensp', 'chitiethoadon.dongia')
            ->get();
        return view('Admin.Content.chitietdh', [
            'product' => $data
        ]);
    }
}
