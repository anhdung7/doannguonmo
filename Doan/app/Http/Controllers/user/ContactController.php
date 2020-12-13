<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index(){
        $nhasanxuat = DB::table('hangsx')->get();
        $danhmuc = DB::table('danhmuc')->get();
        return view ('User.Content.contact',[
            'nhasanxuat' => $nhasanxuat,
            'danhmuc'=> $danhmuc,
        ]);
    }
}
