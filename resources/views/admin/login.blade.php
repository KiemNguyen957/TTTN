<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Login</title>
  <base href="{{asset('')}}">

  <link href="admin/img/favicon.png" rel="icon">
  <link href="admin/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="admin/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="admin/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="admin/css/style.css" rel="stylesheet">
  <link href="admin/css/style-responsive.css" rel="stylesheet">
</head>

<body>
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="{{route('admin.post.login')}}" method="post">
      {{csrf_field()}}
        <h2 class="form-login-heading">Đăng nhập</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" name="email" placeholder="Email">
          <br>
          <input type="password" class="form-control" name="password" placeholder="Password">
          <br>
          <label class="col-lg-12 control-label regist-lable text-red">
                @if(isset($error)) 
                    {{$error}}
                @endif
            </label>
          <label class="checkbox">
            <input type="checkbox" name="remember" class="pull-left" style="margin: 2px 0 0;position:unset;" > <span class="pull-left">Nhớ mật khẩu</span>
            <span class="pull-right">
            <a data-toggle="modal" href=""> Quên mật khẩu</a>
            </span>
            </label>
          <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> ĐĂNG NHẬP</button>
        </div>
        
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="admin/lib/jquery/jquery.min.js"></script>
  <script src="admin/lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="admin/lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("admin/img/", {
      speed: 500
    });
  </script>
</body>

</html>
