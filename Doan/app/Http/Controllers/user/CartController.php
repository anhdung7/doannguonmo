<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index(){
        $nhasanxuat = DB::table('hangsx')->get();
        $danhmuc = DB::table('danhmuc')->get();
        $sanphams = DB::table('sanpham')
        ->join('hinh','sanpham.ma_sp','=','hinh.SANPHAMma_sp')
        ->join('hangsx','sanpham.HANGSXma_nhasanxuat','=','hangsx.ma_nhasanxuat')
        ->select('sanpham.tensp','sanpham.url','sanpham.dongia','hinh.url as urlhinh','hangsx.ten_nhasanxuat','sanpham.ma_sp')
        ->groupBy('sanpham.tensp')
        ->orderBy('ma_sp', 'desc')
        ->get();
        $banner = DB::table('hinh')->where('tenhinh','=','banner')->get();
        return view('User.Content.home',[ 
            'nhasanxuat' => $nhasanxuat,
            'danhmuc'=> $danhmuc,
            'sanpham' => $sanphams,
            'banner' => $banner
        ]);
    }
    public function add_Cart(Request $req, $id){ 
        $sp = DB::table('sanpham')
        ->join('hinh','sanpham.ma_sp','=','hinh.SANPHAMma_sp')
        ->where('ma_sp',$id)
        ->first();
        
        if($sp !=null){
            $oldCart = Session('Cart') ? Session('Cart') : null;         
            $newCart = new Cart($oldCart);          
            $newCart -> addCart($sp,$id);
          
            $req->session()->put('Cart',$newCart);
        }
        return view('User.Content.cart');
    }
    public function delete_ItemCart(Request $req, $id){ 
        $oldCart = Session('Cart') ? Session('Cart') : null;         
        $newCart = new Cart($oldCart);          
        $newCart -> deleteIntemCart($id);
        if(Count ($newCart->sanphams)>0)
        {
            $req->session()->put('Cart',$newCart);
        }
        else{
            $req->session()->forget('Cart',$newCart);
        }
        return view('User.Content.cart');
        // , compact('newCart')
    }
    public function listCart(){
        $nhasanxuat = DB::table('hangsx')->get();
        $danhmuc = DB::table('danhmuc')->get();
        return view ('User.Content.giohang',[
            'nhasanxuat' => $nhasanxuat,
            'danhmuc'=> $danhmuc,
        ]);
    }
    public function deletelist_ItemCart(Request $req, $id){ 
        $oldCart = Session('Cart') ? Session('Cart') : null;         
        $newCart = new Cart($oldCart);          
        $newCart -> deleteIntemCart($id);
        if(Count ($newCart->sanphams)>0)
        {
            $req->session()->put('Cart',$newCart);
        }
        else{
            $req->session()->forget('Cart',$newCart);
        }
        return view ('User.Content.listcart');
    }
    public function savelist_ItemCart(Request $req, $id, $sl){ 
        $oldCart = Session('Cart') ? Session('Cart') : null;         
        $newCart = new Cart($oldCart);          
        $newCart -> UpdateIntemCart($id, $sl);
        
        $req->session()->put('Cart',$newCart);
       
        return view ('User.Content.listcart');
    }
}
