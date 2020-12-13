@extends('index')
@section('title','Giỏ hàng')
@section('content')
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!--Shopping Cart Area Strat-->
<div class="Shopping-cart-area pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12" id="list_cart">
                <form action="#">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="li-product-thumbnail">Hình sản phẩm</th>
                                    <th class="cart-product-name">Tên sản phẩm</th>
                                    <th class="li-product-price">Đơn giá</th>
                                    <th class="li-product-quantity">Số lượng</th>
                                    <th class="li-product-subtotal">Tổng tiền</th>
                                    <th class="li-product-remove">Xóa</th>
                                    <th class="li-product-remove">Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(Session::has("Cart") != null)
                                @foreach (Session::get('Cart')->sanphams as $item)
                                <tr>
                                    <td class="li-product-thumbnail"><a href="#"><img style="width: 15%" src="{{asset("/images/product/".$item['sanphaminfo']->hinhanh)}}" alt="Image"></a></td>
                                <td class="li-product-name"><a href="{{url("sanpham/".$item['sanphaminfo']->ma_sp)}}">{{$item['sanphaminfo']->tensp}}</a></td>
                                    <td class="li-product-price"><span class="amount">{{number_format($item['sanphaminfo']->dongia)}}₫</span></td>
                                    <td class="quantity">
                                        <label>Quantity</label>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" id="sl-{{$item['sanphaminfo']->ma_sp}}" value="{{$item['sl']}}" type="text">
                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                        </div>
                                    </td>
                                    <td class="product-subtotal"><span class="amount">{{number_format($item['gia'])}}₫</span></td>
                                    <td class="li-product-remove">
                                        <a href="#">
                                            <i class="fa fa-times" onclick="deletelistCart({{$item['sanphaminfo']->ma_sp}})"></i>
                                        </a>
                                    </td>
                                <td class="li-product-remove">
                                    <a href="#">
                                        <i data-id="{{$item['sanphaminfo']->ma_sp}}" onclick="savelistCart({{$item['sanphaminfo']->ma_sp}})" id="save-cart-{{$item['sanphaminfo']->ma_sp}}" class="fas fa-save"></i>
                                    </a>
                                </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Tổng giỏ hàng</h2>
                                <ul>
                                    @if(Session::has("Cart") != null)
                                        <li>Tổng số lượng <span>{{(Session::get('Cart')->tongsl)}}</span></li>
                                        <li>Tổng tiền <span>{{number_format(Session::get('Cart')->tongtien)}} ₫</span></li>
                                    @else
                                        <li>Tổng số lượng <span>0</span></li>
                                        <li>Tổng tiền <span>0 ₫</span></li>
                                    @endif
                                   
                                </ul>
                                <a  href="{{route('checkout')}}" >Chuyển đến Check out</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Shopping Cart Area End-->
@endsection