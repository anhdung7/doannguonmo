@extends('indexadmin')
@section('pageadmin')
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            {{-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
            <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> --}}

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Thông tin khách hàng</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                    @foreach($datakh as $item)
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <td style="color: blue;"><strong>Mã Khách Hàng</strong></td>
                            <td>{{$item->id}}</td>
                        </tr>
                        <tr>
                        <td style="color: blue;"><strong>Tên Khách Hàng</strong></td>
                            <td>{{$item->name}}</td>
                        </tr>
                        <tr>
                        <td style="color: blue;"><strong>Số Điện Thoại</strong></td>
                            <td>{{$item->sdt}}</td>
                        </tr>
                        <tr>
                        <td style="color: blue;"><strong>Email</strong></td>
                            <td>{{$item->email}}</td>
                        </tr>
                        <tr>
                        <td style="color: blue;"><strong>Địa Chỉ</strong></td>
                            <td>{{$item->diachi}}</td>
                        </tr>
                        <tr>
                        <td style="color: blue;"><strong>Ngày Tạo</strong></td>
                            <td>{{$item->ngaytao}}</td>
                        </tr>
                        <tr>
                        <td style="color: blue;"><strong>Ngày Cập Nhật</strong></td>
                            <td>{{$item->ngaycapnhat}}</td>
                        </tr>
                    </table>
                    <form action="" method="GET">
                    <select name="tt">
                        <option value="0">Đang Hoạt Động</option>
                        <option value="1">Ngưng Hoạt Động</option>
                    </select>
                    <input type="submit" value="Cập nhật" name="updatekh">
                    <p></p>
                    <a href="{{route('khachhang')}}"class="btn btn-info btn-icon-split"><span class="text">Danh Sách Khách Hàng</span></a>
                    </form>
                    @endforeach
                </div>
              </div>
            </div>

          </div>
          <!-- /.container-fluid -->

        </div>
@endsection