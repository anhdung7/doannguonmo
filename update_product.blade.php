@extends('indexadmin')
@section('pageadmin')
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Thêm sản phẩm</h6>
    </div>
    <div class="card-body">
    <form action="{{route('suasp',$sanpham[0]->ma_sp)}}" method="POST">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="sanpham">Tên sản phẩm</label>
                <input type="text" class="form-control" id="sanpham" name="tensanpham" value="{{$sanpham[0]->tensp}}">
              </div>
              <div class="form-group col-md-3">
                <label for="soluong">Số lượng</label>
                <input type="number" class="form-control" id="soluong" min="1" name="soluong" value="{{$sanpham[0]->soluong}}">
              </div>
              <div class="form-group col-md-3">
                <label for="giatien">Giá tiền</label>
                <input type="number" class="form-control" id="giatien" min="1" name="giatien" value="{{$sanpham[0]->dongia}}">
              </div>
              <div class="form-group col-md-3">
                <label for="khuyenmai">Giá tiền khuyến mãi</label>
                <input type="number" class="form-control" id="khuyenmai" min="1" name="giakhuyenmai" value="{{$sanpham[0]->giakhuyenmai}}">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="ram">RAM</label>
                <input type="text" class="form-control" id="ram" name="RAM" value="{{$sanpham[0]->RAM}}">
              </div>
              <div class="form-group col-md-3">
                <label for="cpu">CPU</label>
                <input type="text" class="form-control" id="cpu" name="CPU" value="{{$sanpham[0]->CPU}}">
              </div>
              <div class="form-group col-md-3">
                <label for="vga">VGA</label>
              <input type="text" class="form-control" id="vga" name="VGA" value="{{$sanpham[0]->VGA}}">
              </div>
              <div class="form-group col-md-3">
                <label for="manhinh">Màn hình</label>
              <input type="text" class="form-control" id="manhinh" name="manhinh" value="{{$sanpham[0]->manhinh}}">
              </div>
            </div>
            <div class="from-group row">
              <div class="form-group col-md-3">
                <label for="ram">Hệ điều hành</label>
                <input type="text" class="form-control" id="hedienhanh" name="hedienhanh" value="{{$sanpham[0]->hedieuhanh}}">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Sua</button>
              </div>
            </div>
          </form>
    </div>
</div>

@endsection