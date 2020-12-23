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
                <h6 class="m-0 font-weight-bold text-primary">Thông tin đơn hàng</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <form action="" method="GET">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($product as $item)
                      <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$item->tensp}}</td>
                        <td>{{$item->soluong}}</td>
                        <td>{{number_format($item->dongia)}} ₫</td>          
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <select name="tt">
                    <option value="1">Đã xử lý</option>
                    <option value="0">Chưa xử lý</option>
                  </select>
                  <input type="submit" value="Cập nhật đơn hàng" name="updatedh">
                </form>  
                </div>
              </div>
            </div>

          </div>
          <!-- /.container-fluid -->

        </div>
@endsection