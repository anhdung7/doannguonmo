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

}
