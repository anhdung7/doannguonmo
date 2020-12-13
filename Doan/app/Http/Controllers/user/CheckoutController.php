<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Session\Session;

class CheckoutController extends Controller
{
    public function index()
    {
        $nhasanxuat = DB::table('hangsx')->get();
        $danhmuc = DB::table('danhmuc')->get();
        $sanpham = DB::table('sanpham')
            ->join('danhmuc_sanpham', 'sanpham.ma_sp', '=', 'danhmuc_sanpham.SANPHAMma_sp')
            ->join('danhmuc', 'danhmuc_sanpham.DANHMUCma_danhmuc', '=', 'danhmuc.ma_danhmuc')
            ->join('hinh', 'sanpham.ma_sp', '=', 'hinh.SANPHAMma_sp')
            ->select('sanpham.tensp', 'sanpham.dongia', 'sanpham.url', 'danhmuc.tendanhmuc', 'danhmuc.url as urldanhmuc', 'hinh.url as urlhinh')
            ->get();
        $banner = DB::table('hinh')->where('tenhinh', '=', 'banner')->get();
        return view('User.Content.checkout', [
            'nhasanxuat' => $nhasanxuat,
            'danhmuc' => $danhmuc,
            'sanpham' => $sanpham,
            'banner' => $banner
        ]);
    }
    public function dathang(Request $request)
    {
        $Cart = Session('Cart');
        $idhoadon = DB::table('hoadon')->insertGetId([
            'diachi' => $request->diachi,
            'USERma_user' => Auth::user()->id,
            'sdt' => $request->phone,
            'tongtien' => $Cart->tongtien,
            'tongsl' => $Cart->tongsl,
        ]);
        foreach ($Cart->sanphams as $item) {
            DB::table('chitiethoadon')->insert([
                'soluong' => $item['sl'],
                'dongia' => $item['gia'],
                'SANPHAMma_sp' => $item['sanphaminfo']->ma_sp,
                'HOADONma_hd' => $idhoadon,
            ]);
        }
        $request->session()->flash('success', 'Đặt hàng thành công!');
        if(isset($request->checkout)){
            $request->session()->forget('Cart');
        }
        return redirect('/');
    }
}
