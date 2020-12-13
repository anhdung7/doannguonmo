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
                <h6 class="m-0 font-weight-bold text-primary">Sản phẩm</h6>
              </div>
              @if (session('success'))
                <div class="alert alert-info">{{session('success')}}</div>
              @endif
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>RAM</th>
                        <th>CPU</th>
                        <th>VGA</th>
                        <th>Màn hinh</th>
                        <th>Hệ điều hành</th>
                        <th>Info</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>RAM</th>
                        <th>CPU</th>
                        <th>VGA</th>
                        <th>Màn hinh</th>
                        <th>Hệ điều hành</th>
                        <th>Info</th>
                        <th>Delete</th>
                      </tr>
                      </tr>
                    </tfoot>
                    <tbody>
                      @foreach ($sanpham as $item)
                      <tr>
                      <td>{{$loop->index+1}}</td>
                        <td>{{$item->tensp}}</td>
                        <td>{{$item->soluong}}</td>
                        <td>{{number_format($item->dongia)}} ₫</td>
                        <td>{{$item->RAM}} GB</td>
                        <td>Intel core {{$item->CPU}}</td>
                        <td>{{$item->VGA}}</td>
                        <td>{{$item->manhinh}} inch</td>
                        <td>{{$item->hedieuhanh}}</td>
                        <td>
                          <a href="{{route('suasp',$item->ma_sp)}}" class="btn btn-info btn-icon-split">
                            <span class="icon text-white-50">
                              <i class="fas fa-info-circle"></i>
                            </span>
                            <span class="text">Info</span>
                          </a>
                        </td>
                        <td><a href="{{route('xoasp',$item->ma_sp)}}" class="btn btn-danger btn-icon-split">
                          <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                          </span>
                          <span class="text">Delete</span>
                        </a></td>
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
