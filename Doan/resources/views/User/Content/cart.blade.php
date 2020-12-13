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
<input hidden id="tongslCart" type="number" value="{{(Session::get('Cart')->tongsl)}}">
@endif