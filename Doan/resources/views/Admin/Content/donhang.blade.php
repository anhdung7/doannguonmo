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
                <h6 class="m-0 font-weight-bold text-primary">Đơn hàng</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>Mã đơn hàng</th>
                        <th>Tên khách hàng</th>
                        <th>Địa chỉ</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Tổng số lượng</th>
                        <th>Tổng tiền</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>STT</th>
                        <th>Mã đơn hàng</th>
                        <th>Tên khách hàng</th>
                        <th>Địa chỉ</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Tổng số lượng</th>
                        <th>Tổng tiền</th>
                      </tr>
                      </tr>
                    </tfoot>
                    <tbody>
                      @foreach ($donhang as $item)
                      <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$item->ma_hd}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->diachi}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->sdt}}</td>
                        <td><a href="{{route('chitietdh',['id'=>$item->ma_hd])}}">{{$item->tongsl}}</a></td>         
                        <td>{{number_format($item->tongtien)}} ₫</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>
          <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

@endsection