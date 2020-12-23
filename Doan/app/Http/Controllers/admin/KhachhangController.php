<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KhachhangController extends Controller
{
    public function index()
    {
        $khachhang = DB::table('user')->get();
        return view('Admin.Content.khachhang',[
            'khachhang' => $khachhang,
        ]);
    }

    public function chitietkh(Request $request, $id)
    {
        if(isset($request->updatekh)){
            DB::table('user')
            ->where('id','=',$id)
            ->update([
                'status' => $request->tt,
            ]);
        }
        $datakh = DB::table('user')
            ->where('user.id', '=', $id)
            ->get();
        return view('Admin.Content.chitietkh', [
            'datakh' => $datakh
        ]);
    }
}
