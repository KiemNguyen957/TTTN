<header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <a href="" class="logo">
        <b>Admin</b>
      </a>
      <div class="nav notify-row" id="top_menu">
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li>
            <a class="logout" href="{{route('admin.get.logout')}}">Đăng xuất</a>
          </li>
        </ul>
      </div>
    </header>

    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered">
            <a href="">
              <img src="" class="img-circle" width="80">
            </a>
          </p>
        <h5 class="centered">{{ Auth::user()->email }}</h5>
          <li class="mt">
          <a class="@yield('home_active')" href="{{route('admin.index')}}">
              <i class="fa fa-home"></i>
              <span>Trang chủ</span>
            </a>
          </li>
          <li class="sub-menu">
            <a class="@yield('category_active')" href="{{route('category.index')}}">
              <i class="fa fa-list"></i>
              <span>Danh mục</span>
            </a>
          </li>
          <li class="sub-menu">
            <a class="@yield('product_active')" href="{{route('products.index')}}">
              <i class="fa fa-mobile"></i>
              <span>Sản phẩm</span>
            </a>
          </li>
          <li class="sub-menu">
            <a class="@yield('order_active')" href="{{route('orders.index')}}">
              <i class="fa fa-file-text-o"></i>
              <span>Hóa đơn</span>
            </a>
          </li>
          <li class="sub-menu">
            <a class="@yield('users_active')" href="{{route('users.index')}}">
              <i class="fa fa-user"></i>
              <span>Người dùng</span>
            </a>
        </ul>
        </li>
        </ul>
      </div>
    </aside>