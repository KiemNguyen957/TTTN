<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="Dashboard">
<meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
<title>Thông tin cá nhân</title>
<base href="{{asset('')}}">
<!-- Favicons -->
<link href="admin/img/favicon.png" rel="icon">
<link href="admin/img/apple-touch-icon.png" rel="apple-touch-icon">
<!-- Bootstrap core CSS -->
<link href="admin/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--external css-->
<link href="admin/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
<!-- Custom styles for this template -->
<link href="admin/css/style.css" rel="stylesheet">
<link href="admin/css/style-responsive.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="admin/lib/bootstrap-fileupload/bootstrap-fileupload.css" />
<link rel="stylesheet" type="text/css" href="admin/lib/bootstrap-datepicker/css/datepicker.css" />
<link rel="stylesheet" type="text/css" href="admin/lib/bootstrap-daterangepicker/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="admin/lib/bootstrap-timepicker/compiled/timepicker.css" />
<link rel="stylesheet" type="text/css" href="admin/lib/bootstrap-datetimepicker/datertimepicker.css" />

<body>
  <section id="container">
    <section>
      <section class="wrapper" style="margin:0;padding: 0;overflow: hidden  ">
        <div class="row mt" style="margin-top:0;">
          <div class="col-lg-12">
            <div class="row content-panel" style="height:97vh">
              <form action="{{route('profile.update',$user->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                {{csrf_field()}} {{method_field('PUT')}}
                @if (session('_notification'))
                  <h3 class="text-red" style="margin-left: 100px;position: fixed">
                    {{ session('_notification') }}
                  </h3>
                  @endif
                <div class="col-md-4 centered">
                  <div class="profile-pic right-divider" style="margin-top:120px">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px; border:none">
                        <img src="storage/{{$user->avatar}}" alt="" />
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;border:none"></div>
                      <div>
                        <span class="btn-file btn " style="top: 60%;position: absolute;left: 50%;transform: translate(-50%,-50%);opacity: 0.3;background-image: url(admin/img/select.png);
                                  background-position: center;
                                  background-size: cover;
                                  width: 50px;
                                  height: 50px;">
                          <span>
                            <i class="fa fa-plus"></i>
                          </span>
                          <input type="file" name="avatar" class="default" />
                        </span>
                      </div>
                    </div>
                    <h3>{{$user->fullname}}</h3>
                    <h6>{{$user->email}}</h6>
                  </div>

                  @if (session('_error'))
                  <div class="text-red">
                    {{ session('_error') }}
                  </div>
                  @endif

                </div>
                <div class="col-md-8 profile-text">
                  <div class="hidden-sm hidden-xs">
                    <div class="panel-body">
                      <div class="tab-content">
                        <div class="row">
                          <div class="col-lg-8 col-lg-offset-2 detailed">
                            <h4 class="mb">Thông tin cá nhân</h4>
                            <div class="form-group">
                              <label class="col-lg-3 control-label">Họ và tên</label>
                              <div class="col-lg-9">
                                <input type="text" placeholder=" " name="fullname" class="form-control" value="{{$user->fullname}}">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-3 control-label">Email</label>
                              <div class="col-lg-9">
                                <input type="text" placeholder=" " name="email" class="form-control" value="{{$user->email}}" disabled>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-3 control-label">Password</label>
                              <div class="col-lg-9">
                                <input type="password" placeholder=" " name="password" class="form-control" value="{{$user->password}}">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-3 control-label">Giới tính</label>
                              <div class="col-lg-9">
                                <label class="col-md-6">
                                  <input type="radio" name="gender" @if($user->gender == 'Nam') {{'checked'}} @endif value="Nam">Nam
                                </label>
                                <label class="col-md-6">
                                  <input type="radio" name="gender" @if($user->gender == 'Nữ') {{'checked'}} @endif value="Nữ">Nữ
                                </label>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-3 control-label">Ngày sinh</label>
                              <div class="col-md-9 col-xs-11">
                                <input class="form-control form-control-inline input-medium default-date-picker" name="birth" size="16" type="text" value="{{$user->birth}}">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-3 control-label">Số điện thoại</label>
                              <div class="col-lg-9">
                                <input type="text" placeholder=" " name="phone" class="form-control" value="{{$user->phone}}">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-3 control-label">Địa chỉ</label>
                              <div class="col-lg-9">
                                <input type="text" placeholder=" " name="address" class="form-control" value="{{$user->address}}">
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="col-lg-offset-3 col-lg-9">
                                <button class="btn btn-theme" type="submit">Cập nhật</button>
                                <a href="{{ route('web.index')}}" class="btn btn-theme04">Về trang chủ</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </section>
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="admin/lib/jquery/jquery.min.js"></script>
  <script src="admin/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="admin/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="admin/lib/jquery.scrollTo.min.js"></script>
  <script src="admin/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="admin/lib/common-scripts.js"></script>

  <script src="admin/lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script type="text/javascript" src="admin/lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="admin/lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="admin/lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="admin/lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="admin/lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="admin/lib/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="admin/lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script src="admin/lib/advanced-form-components.js"></script>
</body>

</html>