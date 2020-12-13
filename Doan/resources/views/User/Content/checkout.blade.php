@extends('index')
@section('title','Checkout')
@section('content')          
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Checkout</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!--Checkout Area Strat-->
<div class="checkout-area pt-60 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="coupon-accordion">
                    <!--Accordion Start-->
                    <h3>Sử dụng mã khuyến mãi? <span id="showcoupon">Click để nhập mã</span></h3>
                    <div id="checkout_coupon" class="coupon-checkout-content">
                        <div class="coupon-info">
                            <form action="#">
                                <p class="checkout-coupon">
                                    <input placeholder="Mã khuyến mãi" type="text">
                                    <input value="Sử dụng" type="submit">
                                </p>
                            </form>
                        </div>
                    </div>
                    <!--Accordion End-->
                </div>
            </div>
        </div><form action="{{route('dathang')}}" method="POST">
            @csrf
        <div class="row">
            <div class="col-lg-6 col-12">
            
                    <div class="checkbox-form">
                        <h3>Thông tin</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Họ tên<span class="required">*</span></label>
                                    <input placeholder="" type="text" value="{{Auth::user()->name}}" name="name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Địa chỉ <span class="required">*</span></label>
                                    <input placeholder="Địa chỉ nhà, cơ quan, tên đường" type="text" value="{{Auth::user()->diachi}}" name="diachi">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label> Địa chỉ Email <span class="required">*</span></label>
                                    <input placeholder="" type="email" value="{{Auth::user()->email}}" name="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Số điện thoại <span class="required">*</span></label>
                                    <input type="text" value="{{Auth::user()->sdt}}" name="phone">
                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
            <div class="col-lg-6 col-12">
                <div class="your-order">
                    <h3>Đơn đặt hàng của bạn</h3>
               
                        <div class="your-order-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="cart-product-name">Sản phẩm</th>
                                        <th class="cart-product-total">Tổng tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(Session::has("Cart") != null)
                                    @foreach (Session::get('Cart')->sanphams as $item)
                                    <tr class="cart_item">
                                    <td class="cart-product-name" >{{$item['sanphaminfo']->tensp}}<strong class="product-quantity"> × {{$item['sl']}}</strong></td>
                                    <td class="cart-product-total" ><span class="amount">{{number_format($item['gia'])}}₫</span></td>  
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                                <tfoot>
                                    @if(Session::has("Cart") != null)
                                    <tr class="cart-subtotal">
                                        <th>Tổng tiền</th>
                                        <td><span class="amount">{{number_format(Session::get('Cart')->tongtien)}} ₫</span></td>
                                    </tr>
                                    @else
                                    <tr class="cart-subtotal">
                                        <th>Tổng tiền</th>
                                        <td><span class="amount">0 ₫</span></td>
                                    </tr>
                                    @endif
                                </tfoot>
                                
                            </table>
                        </div>
                   
                    <div class="payment-method">
                        <div class="payment-accordion">
                            <div id="accordion">
                              <div class="card">
                                <div class="card-header" id="#payment-1">
                                  <h5 class="panel-title">
                                    <a class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      Thanh toán qua thẻ
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                  <div class="card-body">
                                    <p>Thực hiện thanh toán của bạn trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng ID đơn đặt hàng của bạn làm tham chiếu thanh toán. Đơn đặt hàng của bạn sẽ không được chuyển cho đến khi tiền đã hết trong tài khoản của chúng tôi.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="#payment-2">
                                  <h5 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      Kiểm tra thanh toán
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                  <div class="card-body">
                                    <p>Thực hiện thanh toán của bạn trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng ID đơn đặt hàng của bạn làm tham chiếu thanh toán. Đơn đặt hàng của bạn sẽ không được chuyển cho đến khi tiền đã hết trong tài khoản của chúng tôi.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="order-button-payment">
                                <input value="Đặt hàng" type="submit" name="checkout">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </form>
    </div>
</div>
@endsection