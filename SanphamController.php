<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use function PHPUnit\Framework\isEmpty;

class SanphamController extends Controller
{
    //
    public function index(){
        $hangsx = DB::table('hangsx')->get();
        
        return view('Admin.Content.insert_product',[
            'hangsx' => $hangsx,
        ]);
    }
  
    public function xoasp($id, Request $request){
        DB::beginTransaction();
        try{
            DB::table('hinh')->where('SANPHAMma_sp','=',$id)->delete();
            DB::table('sanpham')->where('ma_sp','=',$id)->delete();
            DB::commit();
        }catch(Exception $e){
            DB::rollBack();
            $request->session()->flash('success', 'Không thể xóa sản phẩm có trong đơn đặt hàng!');
        }
        return redirect(route('homeql'));
    }
    public function hienthisua($id){
        $hangsx = DB::table('hangsx')->get();
        $sanpham = DB::table('sanpham')
        ->where('ma_sp','=',$id)
        ->get();
        return view('Admin.Content.update_product',[
            'sanpham' => $sanpham,
            'hangsx' => $hangsx,
        ]);
    }
    public function sua(Request $request, $id){
        $check = DB::table('sanpham')
        ->where('ma_sp','=',$id)
        ->update([
            'tensp' => $request->tensanpham,
            'soluong' => $request->soluong,
            'dongia' => $request->giatien,
            'giakhuyenmai'=>$request->giakhuyenmai,
            'RAM' =>$request->RAM,
            'CPU' =>$request->CPU,
            'VGA' => $request->VGA,
            'manhinh' =>$request->manhinh,
            'hedieuhanh' =>$request->hedienhanh,
        ]);
        if($check){
            return redirect(route('homeql'));
        }else
        return redirect(route('suasp',$id));  
    }

}
