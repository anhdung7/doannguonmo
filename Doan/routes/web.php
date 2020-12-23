<?php

use App\Http\Controllers\admin\DonhangController;
use App\Http\Controllers\admin\QuanlyController;
use App\Http\Controllers\admin\SanphamController;
use App\Http\Controllers\user\AccountController;
use App\Http\Controllers\user\CartController;
use App\Http\Controllers\user\CheckoutController;
use App\Http\Controllers\user\ContactController;
use App\Http\Controllers\user\DanhmucController;
use App\Http\Controllers\user\HomeController;
use App\Http\Controllers\user\infoController;
use App\Http\Controllers\user\ProductController;
use App\Http\Controllers\user\SearchController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Home
Route::get('/', [HomeController::class,'index'])->name('home');

//Admin
Route::prefix('quanly')->group(function (){
    Route::get('/',[QuanlyController::class,'index']);
    Route::post('/',[QuanlyController::class,'login'])->name('loginadmin');
    Route::get('logoutadmin',[QuanlyController::class,'logout'])->name('logoutadmin');
    Route::get('/home',[QuanlyController::class,'homequanly'])->name('homeql')->middleware('authAdmin');
    Route::get('/donhang',[DonhangController::class,'index'])->name('donhang')->middleware('authAdmin');
    Route::get('/chitietdh/{id}',[DonhangController::class,'chitietdh'])->name('chitietdh')->middleware('authAdmin');
    Route::prefix('sanpham')->middleware('authAdmin')->group(function(){
        Route::get('/themsp',[SanphamController::class,'index'])->name('insertsp');
        Route::post('/themsp',[SanphamController::class,'themsp'])->name('insertsp');
        Route::get('/xoasp/{id}',[SanphamController::class,'xoasp'])->name('xoasp');
        Route::get('suasp/{id}',[SanphamController::class,'hienthisua'])->name('suasp');
        Route::post('suasp/{id}',[SanphamController::class,'sua'])->name('suasp');
    });
});

//User
Route::prefix('account')->group(function (){
    Route::get('/', [AccountController::class,'index'])->name('login');
    Route::post('register',[AccountController::class,'register']);
    Route::post('/',[AccountController::class,'login'])->name('login');
    Route::get('logout',[AccountController::class,'logout'])->name('logout');
});

Route::get('search',[SearchController::class,'index']);
Route::get('/contact', [ContactController::class,'index'])->name('contact');
Route::get('/checkout', [CheckoutController::class,'index'])->middleware('auth')->name('checkout');
Route::post('/dathang', [CheckoutController::class,'dathang'])->middleware('auth')->name('dathang');

//Gio hang
Route::get('addCart/{id}', [CartController::class,'add_Cart']);
Route::get('deleteCart/{id}', [CartController::class,'delete_ItemCart']);
Route::get('giohang', [CartController::class,'listCart'])->name('giohang');
Route::get('infoshop', [infoController::class,'index'])->name('info');
Route::get('deletelistCart/{id}', [CartController::class,'deletelist_ItemCart']);
Route::get('savelistCart/{id}/{sl}', [CartController::class,'savelist_ItemCart']);

Route::get('{urldanhmuc}',[DanhmucController::class,'index'])->name('danhmuc');
Route::get('{danhmuc}/{id}', [ProductController::class,'index']);
