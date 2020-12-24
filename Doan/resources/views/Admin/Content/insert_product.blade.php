@extends('indexadmin')
@section('pageadmin')
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Thêm sản phẩm</h6>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card-body">
                <form action="{{ route('insertsp') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                      <div class="form-group col-md-3">
                        <label for="sanpham">Tên sản phẩm</label>
                        <input type="text" class="form-control" id="sanpham" name="tensanpham">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="soluong">Số lượng</label>
                        <input type="number" class="form-control" id="soluong" min="1" name="soluong">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="soluong">Giá tiền</label>
                        <input type="number" class="form-control" id="soluong" min="1" name="giatien">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="khuyenmai">Giá tiền khuyến mãi</label>
                        <input type="number" class="form-control" id="khuyenmai" min="1" name="giakhuyenmai">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-3">
                        <label for="ram">RAM</label>
                        <input type="text" class="form-control" id="ram" name="RAM">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="cpu">CPU</label>
                        <input type="text" class="form-control" id="cpu" name="CPU">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="vga">VGA</label>
                        <input type="text" class="form-control" id="vga" name="VGA">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="manhinh">Màn hình</label>
                        <input type="text" class="form-control" id="manhinh" name="manhinh">
                      </div>
                    </div>
                    <div class="from-group row">
                      <div class="form-group col-md-3">
                        <label for="ram">Hệ điều hành</label>
                        <input type="text" class="form-control" id="hedienhanh" name="hedienhanh">
                      </div>
                      <div class="form-group col-md-5">
                        <label >Nhà sản xuất</label>
                            <select class="form-control" name="nhasanxuat">
                                @foreach ($hangsx as $item)
                                    <option value="{{ $item->ma_nhasanxuat }}">{{ $item->ten_nhasanxuat }}</option>
                                @endforeach
                            </select>
                      </div>
                      <div class="form-group col-md-4">
                        
                        <label class="" for="hinhanh">Hình ảnh</label>
                        <input type="file" class="" id="hinhanh" name="hinhanh[]" multiple>
                        
                      </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
                        </div>
                    </div>
                  
                </form>
            </div>
        </div>
    </div>
    

@endsection
