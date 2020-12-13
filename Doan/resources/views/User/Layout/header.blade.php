<header>

    <!-- Begin Header Middle Area -->
    <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
        <div class="container">
            <div class="row">
                <!-- Begin Header Logo Area -->
                <div class="col-lg-3">
                    <div class="logo pb-sm-30 pb-xs-30">
                    <a href="{{route('home')}}">
                            <img src="{{asset('./images/menu/logo/1.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Header Logo Area End Here -->
                <!-- Begin Header Middle Right Area -->
                <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                    <!-- Begin Header Middle Searchbox Area -->
                    <form action="{{url('search')}}" class="hm-searchbox" method="GET">
                        <input type="text" placeholder="Nhập từ khóa tìm kiếm ..." name="search">
                        <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    <!-- Header Middle Searchbox Area End Here -->
                    <!-- Begin Header Middle Right Area -->
                    <div class="header-middle-right">
                        <ul class="hm-menu">
                            <!-- Begin Header Middle Wishlist Area -->
                            @auth
                            <li class="hm-wishlist">
                                <!-- Begin Setting Area -->
                                <div class="ht-setting-trigger">
                                   <span class="item-text">{{Auth::user()->name}}</span>
                               </div>
                               <div class="setting ht-setting">
                                   <ul class="ht-setting-list">
                                       <li><a href="./checkout">Thanh toán</a></li>
                                   <li><a href="{{route('logout')}}">Đăng xuất</a></li>
                                   </ul>
                               </div>
                           <!-- Setting Area End Here -->
                           </li>
                            @endauth
                            @guest
                            <li class="hm-wishlist">
                                <!-- Begin Setting Area -->
                                <div class="ht-setting-trigger">
                                   <span class="item-text">Tài khoản</span>
                               </div>
                               <div class="setting ht-setting">
                                   <ul class="ht-setting-list">
                                       <li><a href="{{url("account")}}">Đăng nhập</a></li>
                                       <li><a href="./account">Đăng ký</a></li>
                                   </ul>
                               </div>
                           <!-- Setting Area End Here -->
                           </li>    
                               
                            @endguest
                             
                            <!-- Header Middle Wishlist Area End Here -->
                            <!-- Begin Header Mini Cart Area -->
                            <li class="hm-minicart">
                                <div class="hm-minicart-trigger">
                                    <span class="item-icon"></span>
                                    <span class="item-text">
                                        @if(Session::has("Cart") != null)
                                            <span class="cart-item-count">{{Session::get("Cart")->tongsl}}</span>
                                        @else
                                            <span class="cart-item-count">0</span>
                                        @endif
                                    </span>
                                </div>
                                <span></span>
                                <div class="minicart">
                                        <ul class="minicart-product-list">
                                            @if(Session::has("Cart") != null)
                                            @foreach (Session::get('Cart')->sanphams as $item)
                                            <li>
                                                <a href="single-product.html" class="minicart-product-image">
                                                    <img src="{{asset("/images/product/".$item['sanphaminfo']->hinhanh)}}" alt="hinhSP">
                                                </a>
                                                <div class="minicart-product-details">
                                                <h6><a href="single-product.html">{{$item['sanphaminfo']->tensp}}</a></h6>
                                                <span>{{number_format($item['sanphaminfo']->dongia)}} ₫ x {{$item['sl']}}</span>
                                                </div>
                                                <button class="close" title="Remove">
                                                    <i class="fa fa-close" data-id="{{$item['sanphaminfo']->ma_sp}}"></i>
                                                </button>
                                            </li>
                                            @endforeach
                                            <p class="minicart-total">Tong tien: <span>{{number_format(Session::get('Cart')->tongtien)}} ₫</span></p>
                                            @endif
                                        </ul>
                                    <div class="minicart-button">
                                        <a href="{{route('giohang')}}" class="li-button li-button-fullwidth li-button-dark">
                                            <span>View Full Cart</span>
                                        </a>
                                        <a href="{{route('checkout')}}" class="li-button li-button-fullwidth">
                                            <span>Checkout</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <!-- Header Mini Cart Area End Here -->
                        </ul>
                    </div>
                    <!-- Header Middle Right Area End Here -->
                </div>
                <!-- Header Middle Right Area End Here -->
            </div>
        </div>
    </div>
    <!-- Header Middle Area End Here -->
    <!-- Begin Header Bottom Area -->
    <div class="header-bottom header-sticky d-none d-lg-block d-xl-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Begin Header Bottom Menu Area -->
                    <div class="hb-menu">
                        <nav>
                            <ul>
                                <li class="dropdown-holder"><a href="{{route('home')}}">Home</a>
                                </li>
                                <li class="megamenu-holder"><a href="#">Danh mục</a>
                                    <ul class="megamenu hb-megamenu">
                                        <li><a href="shop-left-sidebar.html">Nhà sản xuất</a>
                                            <ul>
                                            @foreach ($nhasanxuat as $item)
                                                <li><a href="{{url($item->ten_nhasanxuat)}}">{{$item->ten_nhasanxuat}}</a></li>
                                            @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="single-product-gallery-left.html">Laptop theo nhu cầu</a>
                                            <ul>
                                                @foreach ($danhmuc as $item)
                                                <li><a href="{{url($item->tendanhmuc)}}">{{($item->tendanhmuc)}}</a></li>
                                                @endforeach
                                           </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{route('info')}}">Giới thiệu</a></li>
                                <li><a href="{{route('contact')}}">Liên hệ</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Bottom Menu Area End Here -->
                </div>
            </div>
        </div>
    </div>
    <!-- Header Bottom Area End Here -->
    <!-- Begin Mobile Menu Area -->
    <div class="mobile-menu-area d-lg-none d-xl-none col-12">
        <div class="container">
            <div class="row">
                <div class="mobile-menu">
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area End Here -->
</header>
