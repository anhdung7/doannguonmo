@extends('index')
@section('title','Account')
@section('content')

<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Login Register</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Login Content Area -->
@if (session('success'))
<div class="alert alert-info">{{session('success')}}</div>
@endif
<div class="page-section mb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                <!-- Login Form s-->
                <form action="{{route('login')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="login-form">
                        <h4 class="login-title">Đăng nhập</h4>
                        <div class="row">
                            <div class="col-md-12 col-12 mb-20">
                                <label>Email*</label>
                                <input class="mb-0" type="email" placeholder="Địa chỉ Email" name="email">
                            </div>
                            <div class="col-12 mb-20">
                                <label>Mật khẩu</label>
                                <input class="mb-0" type="password" placeholder="Mật khẩu" name="password">
                            </div>
                            <div class="col-md-8">
                                <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                    <input type="checkbox" id="remember_me">
                                    <label for="remember_me">Nhớ mật khẩu</label>
                                </div>
                            </div>
                            <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                                <a href="#"> Quên mật khẩu?</a>
                            </div>
                            <div class="col-md-12">
                                <button class="register-button mt-0">Đăng nhập</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                <form action="./account/register" method="POST">
                    @csrf
                    <div class="login-form">
                        <h4 class="login-title">Đăng ký</h4>
                        <div class="row">
                            <div class="col-md-12 col-12 mb-20">
                                <label>Họ Tên</label>
                                <input class="mb-0" type="text" placeholder="Họ tên" name="name">
                            </div>
                            <div class="col-md-12 mb-20">
                                <label>Email*</label>
                                <input class="mb-0" type="email" placeholder="Địa chỉ Email" name="email">
                            </div>
                            <div class="col-md-12 mb-20">
                                <label>Số điện thoại*</label>
                                <input class="mb-0" type="text" placeholder="Số điện thoại" name="phone">
                            </div>
                            <div class="col-md-12 mb-20">
                                <label>Địa chỉ*</label>
                                <input class="mb-0" type="text" placeholder="Địa chỉ" name="diachi">
                            </div>
                            <div class="col-md-6 mb-20">
                                <label>Mật khẩu</label>
                                <input class="mb-0" type="password" placeholder="Mật khẩu" name="password">
                            </div>
                            <div class="col-md-6 mb-20">
                                <label>Xác nhận mật khẩu</label>
                                <input class="mb-0" type="password" placeholder="nhập lại mật khẩu" name="confirmpassword">
                            </div>
                            <div class="col-12">
                                <button class="register-button mt-0" type="submit" >Đăng ký</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Login Content Area End Here -->
@endsection
