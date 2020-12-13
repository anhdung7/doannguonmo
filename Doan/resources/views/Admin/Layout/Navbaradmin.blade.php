<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Shop </div>
    </a>

    <hr class="sidebar-divider">

    <li class="nav-item ">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <span>Sản phẩm</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{asset('./quanly/home')}}">Danh sách sản phẩm</a>
            <a class="collapse-item" href="{{route('insertsp')}}">Thêm sản phẩm</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
      Chức năng
    </div>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="{{asset('#')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Danh mục</span>
      </a>
      <a class="nav-link" href="{{route('donhang')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Đơn hàng</span>
      </a>
      <a class="nav-link" href="{{asset('#')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Thành viên</span>
      </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->
