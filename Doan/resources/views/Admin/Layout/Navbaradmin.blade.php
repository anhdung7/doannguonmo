<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Shop </div>
    </a>
    <!-- Heading -->
    <div class="sidebar-heading">
      Chức năng
    </div>

    <!-- Nav Item - Tables -->
    <li class="nav-item">   
      <a class="nav-link" href="{{route('donhang')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Đơn hàng</span>
      </a>
    </li>

    <li class="nav-item">   
      <a class="nav-link" href="{{asset('./quanly/home')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Danh sách sản phẩm</span>
      </a>
    </li>

    <li class="nav-item">   
      <a class="nav-link"href="{{route('insertsp')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Thêm sản phẩm</span>
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
