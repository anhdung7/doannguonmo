@extends('index')
@section('title', 'Thông tin sản phẩm')
@section('content')
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li ><a href="{{route('danhmuc',$danhmuchientai)}}">{{$danhmuchientai}}</a></li>
                <li><a class="active">{{$sanpham[0]->tensp}}</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
            <!-- content-wraper start -->
            <div class="content-wraper">
                <div class="container">
                    <div class="row single-product-area">
                        @foreach ($sanpham as $item)
                        <div class="col-lg-5 col-md-6">
                           <!-- Product Details Left -->
                          
                            <div class="product-details-left">
                                <div class="product-details-images slider-navigation-1">
                                    @foreach ($hinh as $items)
                                    <div class="lg-image">
                                        <a class="popup-img venobox vbox-item" href="{{asset("./images/product/$items->url")}}" data-gall="myGallery">
                                            <img src= "{{asset("./images/product/$items->url")}}" alt="{{$item->tensp}}">
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="product-details-thumbs slider-thumbs-1">
                                    @foreach ($hinh as $items)
                                    <div class="sm-image"><img src= "{{asset("./images/product/$items->url")}}" alt="{{$item->tensp}}"></div>
                                    @endforeach                                        
                                </div>
                            </div>
                            <!--// Product Details Left -->
                        </div>
                      
                        <div class="col-lg-7 col-md-6">
                            <div class="product-details-view-content pt-60">
                                <div class="product-info">
                                    <h2>{{$item->tensp}}</h2>
                                    <span class="product-details-ref">Nhà sản xuất: {{$item->ten_nhasanxuat}}</span>
                                    <div class="rating-box pt-20">
                                        <ul class="rating rating-with-review-item">
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                            <li class="review-item"><a href="#">Đọc bình luận</a></li>
                                            <li class="review-item"><a href="#">Viết bình luận</a></li>
                                        </ul>
                                    </div>
                                    <div class="price-box pt-20">
                                        <span class="new-price new-price-2">{{number_format($item->dongia)}} ₫</span>
                                    </div>
                                    <div class="product-desc">
                                        <p>
                                        <span><b>Mô tả:</b> {{$item->mota}}</span> <br>
                                        <span><b>RAM:</b> {{$item->RAM}}</span> <br>
                                        <span><b>CPU:</b> {{$item->CPU}}</span> <br>
                                        <span><b>VGA:</b> {{$item->VGA}}</span> <br>
                                        <span><b>Màn hình:</b> {{$item->manhinh}}</span> <br>
                                        <span><b>Hệ điều hành:</b> {{$item->hedieuhanh}}</span> <br>
                                        </p>
                                    </div>
                                    {{-- <div class="single-add-to-cart">
                                        <form action="#" class="cart-quantity">
                                            <div class="quantity">
                                                <label>Số lượng</label>
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" value="1" type="text">
                                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                </div>
                                            </div>
                                            <button class="add-to-cart" type="submit">
                                                Thêm vào giỏ
                                            </button> 
                                        </form>
                                    </div> --}}
                                    <div class="product-additional-info pt-25">
                                        <div class="product-social-sharing pt-25">
                                            <ul>
                                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google +</a></li>
                                                <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="block-reassurance">
                                        <ul>
                                            <li>
                                                <div class="reassurance-item">
                                                    <div class="reassurance-icon">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </div>
                                                    <p>Chính sách bảo mật</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="reassurance-item">
                                                    <div class="reassurance-icon">
                                                        <i class="fa fa-truck"></i>
                                                    </div>
                                                    <p>Chính sách giao hàng </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="reassurance-item">
                                                    <div class="reassurance-icon">
                                                        <i class="fa fa-exchange"></i>
                                                    </div>
                                                    <p>Chính sách hoàn trả </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- content-wraper end -->
@endsection