<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Đăng ký</title>
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
      <form class="form-login form-register" action="{{route('web.post.register')}}" method="post" style="text-align: center;max-width:500px;">
        {{csrf_field()}} 
        <h2 class="form-login-heading">Đăng ký</h2>
        <div class="login-wrap">
            <div class="form-group col-lg-12">
                <label class="col-lg-3 control-label regist-lable">Họ và tên</label>
                <div class="col-lg-9">  
                    <input type="text" placeholder="Fullname" name="fullname" class="form-control">
                </div>
            </div>
            <div class="form-group col-lg-12">
                <label class="col-lg-3 control-label regist-lable">Tài khoản</label>
                <div class="col-lg-9">  
                    <input type="text" placeholder="Email" name="email" class="form-control">
                </div>
            </div>
            <div class="form-group col-lg-12">
                <label class="col-lg-3 control-label regist-lable">Mật khẩu</label>
                <div class="col-lg-9">  
                    <input type="text" placeholder="Password" name="password" class="form-control">
                </div>
            </div>
            <div class="form-group col-lg-12">
                <label class="col-lg-3 control-label">Xác nhận mật khẩu</label>
                <div class="col-lg-9">  
                    <input type="text" placeholder=" " name="rspassword" class="form-control">
                </div>
            </div>
            <div class="form-group col-lg-12">
                <label class="col-lg-3 control-label regist-lable">Giới tính</label>
                <div class="col-lg-9">
                <label class="col-md-6">
                    <input type="radio" name="gender" value="Nam" checked>Nam
                </label>
                <label class="col-md-6">
                    <input type="radio" name="gender" value="Nữ">Nữ
                </label>
                </div>
            </div>
            <div class="form-group col-lg-12">
                <label class="col-lg-3 control-label regist-lable">Số điện thoại</label>
                <div class="col-lg-9">  
                    <input type="text" placeholder=" " name="phone" class="form-control">
                </div>
            </div>
            <label class="col-lg-12 control-label regist-lable text-red">
            @if(isset($error)) 
                {{$error}}
            @endif
            </label>
          <button class="btn btn-theme" type="submit"><i class="fa fa-lock"></i> ĐĂNG KÝ</button>
          <hr>
          
          <div class="registration">
            Bạn đã có tài khoản<br/>
            <a class="" href="{{ route('web.index')}}">
              Đăng nhập
              </a>
          </div>
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
