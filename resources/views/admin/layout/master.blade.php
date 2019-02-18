<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>@yield('title')</title>
  <base href="{{asset('')}}">
  <!-- Favicons -->
  <link href="admin/img/favicon.png" rel="icon">
  <link href="admin/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Bootstrap core CSS -->
  <link href="admin/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="admin/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  @yield('libcss')
  <link href="admin/css/style.css" rel="stylesheet">
  <link href="admin/css/style-responsive.css" rel="stylesheet">

</head>

<body>
  <section id="container">
    <!--header start-->
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
    <!--header end-->
    <!--sidebar start-->
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
            <a class="@yield('oder_active')" href="{{route('admin.oder.index')}}">
              <i class="fa fa-file-text-o"></i>
              <span>Hóa đơn</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="">
              <i class="fa fa-comment-o"></i>
              <span>Phản hồi</span>
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
    @yield('content')
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights
          <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          Created with Dashio template by
          <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
        </a>
      </div>
    </footer>
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="admin/lib/jquery/jquery.min.js"></script>
  <script src="admin/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="admin/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="admin/lib/jquery.scrollTo.min.js"></script>
  <script src="admin/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="admin/lib/common-scripts.js"></script>
  <!--script for this page-->
  <!--custom switch-->
  @yield('libjs')
  
 
</body>

</html>