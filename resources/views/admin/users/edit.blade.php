@extends('admin.layout.master')
@section('title','Admin | Người dùng') 
@section('libcss')
<link rel="stylesheet" type="text/css" href="admin/lib/bootstrap-fileupload/bootstrap-fileupload.css" />
<link rel="stylesheet" type="text/css" href="admin/lib/bootstrap-datepicker/css/datepicker.css" />
<link rel="stylesheet" type="text/css" href="admin/lib/bootstrap-daterangepicker/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="admin/lib/bootstrap-timepicker/compiled/timepicker.css" />
<link rel="stylesheet" type="text/css" href="admin/lib/bootstrap-datetimepicker/datertimepicker.css" /> 
@endsection 
@section('users_active','active') 
@section('content')
<section id="main-content">
  <section class="wrapper site-min-height">
    <div class="row mt">
      <div class="col-lg-12">
        <div class="row content-panel">
        <form action="{{ route('users.update',$user) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
        {{csrf_field()}} 
        {{method_field('PUT')}}
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
                        <i class="fa fa-plus"></i></span>
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
                            <input type="password" placeholder=" " name="password" class="form-control" value="{{$user->password}}" disabled>
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
                            <a href="{{ route('users.index')}}" class="btn btn-theme04">Quay lại</a>
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
@endsection @section('libjs')
<script src="admin/lib/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" src="admin/lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<script type="text/javascript" src="admin/lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="admin/lib/bootstrap-daterangepicker/date.js"></script>
<script type="text/javascript" src="admin/lib/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="admin/lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="admin/lib/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="admin/lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script src="admin/lib/advanced-form-components.js"></script> @endsection