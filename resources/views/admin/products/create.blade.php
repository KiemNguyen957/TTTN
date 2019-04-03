@extends('admin.layout.master') @section('title','Admin | Sản phẩm') 
@section('libcss')
<link rel="stylesheet" type="text/css" href="admin/lib/bootstrap-fileupload/bootstrap-fileupload.css" />
<link rel="stylesheet" type="text/css" href="admin/lib/bootstrap-datepicker/css/datepicker.css" />
<link rel="stylesheet" type="text/css" href="admin/lib/bootstrap-daterangepicker/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="admin/lib/bootstrap-timepicker/compiled/timepicker.css" />
<link rel="stylesheet" type="text/css" href="admin/lib/bootstrap-datetimepicker/datertimepicker.css" /> 
@endsection 
@section('product_active','active') 
@section('content')
<section id="main-content">
        <section class="wrapper site-min-height">
          <div class="row mt">
            <div class="col-lg-12">
              <div class="row content-panel">
              <form action="{{ route('products.store') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
              {{csrf_field()}} 
              @if(!$errors->isEmpty())
                    <div class="text-red">
                        {{$errors->first()}}
                    </div>@endif
                <div class="col-md-6  centered" style="padding-top: 55px;">
                  
                  <div class="form-group last">
                    <label class="control-label col-md-4">Hình ảnh</label>
                      <div class="col-md-8">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                          <div class="fileupload-new thumbnail" style="width: 180; height: 130px;">
                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                          </div>
                          <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                            <div>
                              <span class="btn-file btn " style="top: 50%;position: absolute;left: 50%;transform: translate(-50%,-50%);opacity: 0.7;background-image: url(admin/img/select.png);
                                background-position: center;
                                background-size: cover;
                                width: 50px;
                                height: 50px;">
                                <input type="file" name="image" class="default" />
                              </span>
                            </div>
                          </div>
                          @if (session('_error'))
                            <div class="text-red">
                                {{ session('_error') }}
                            </div>
                          @endif
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-lg-4 control-label">Tên sản phẩm</label>
                      <div class="col-lg-8">
                          <input type="" placeholder=" " name="name" class="form-control">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-4 control-label">Giá</label>
                    <div class="col-lg-8" style="text-align: left">
                        <div class="btn-group">
                          <input type="" placeholder=" " name="price" class="btn col-lg-5"  style="cursor: auto;text-align: left;color: #333;background-color: #fff;border-color: #ccc;">
                          <button type="button" class="btn btn-default" style="background: #ccc" disabled>VND</button>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-4 control-label">Giảm giá</label>
                    <div class="col-lg-8" style="text-align: left">
                        <div class="btn-group">
                          <input type="" placeholder=" " name="sale" class="btn col-lg-5" style="cursor: auto;text-align: left;color: #333;background-color: #fff;border-color: #ccc;">
                          <button type="button" class="btn btn-default" style="background: #ccc" disabled>&nbsp;&nbsp;%&nbsp;&nbsp;</button>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                      <label class="col-lg-4 control-label">Thông tin KM</label>
                      <div class="col-lg-8">
                        <textarea class="form-control" name="promotion" id="contact-message" placeholder="Your Message" rows="3" data-rule="required" data-msg="Please write something for us"></textarea>
                        <div class="validate"></div>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-lg-4 control-label">Mô tả</label>
                      <div class="col-lg-8">
                        <textarea class="form-control" name="description" id="" rows="3"></textarea>
                        <div class="validate"></div>
                      </div>
                  </div>
                  
                </div>
                <div class="col-md-6 profile-text">
                  <div class="hidden-sm hidden-xs">
                    <div class="panel-body">
                      <div class="tab-content">
                        <div class="row">
                          <div class="col-lg-8 col-lg-offset-1 detailed">
                            <h4 class="mb">Thông số kỹ thuật</h4>
                              <div class="form-group">
                                  <label class="col-lg-3 control-label">Hãng sản phẩm</label>
                                  <div class="col-lg-9">
                                      <select name="category_id" class="form-control">
                                        @foreach($categorylist as $category)
                                      <option value="{{ $category->id }}"> {{$category->name}} </option>
                                        @endforeach
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-lg-3 control-label">Màn hình</label>
                                  <div class="col-lg-9">  
                                  <input type="text" placeholder=" " name="screen" class="form-control">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-lg-3 control-label">Hệ điều hành</label>
                                  <div class="col-lg-9">
                                  <input type="text" placeholder=" " name="operating_system" class="form-control">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-lg-3 control-label">Camera</label>
                                  <div class="col-lg-9">
                                  <input type="text" placeholder=" " name="camera" class="form-control">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-lg-3 control-label">CPU</label>
                                  <div class="col-lg-9">
                                      <input type="text" placeholder=" " name="cpu" class="form-control">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-lg-3 control-label">RAM</label>
                                  <div class="col-lg-9">
                                      <input type="text" placeholder=" " name="ram" class="form-control">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-lg-3 control-label">Bộ nhớ trong</label>
                                  <div class="col-lg-9">
                                      <input type="text" placeholder=" " name="memory" class="form-control">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-lg-3 control-label">Thẻ nhớ</label>
                                  <div class="col-lg-9">
                                      <input type="text" placeholder=" " name="memory_card" class="form-control">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-lg-3 control-label">Dung lượng pin</label>
                                  <div class="col-lg-9">
                                      <input type="text" placeholder=" " name="pin" class="form-control">
                                  </div>
                              </div>
                            <div class="form-group">
                              <div class="col-lg-offset-3 col-lg-9">
                                <button class="btn btn-theme" type="submit">Thêm mới</button>
                                <a href="{{ route('products.index')}}" class="btn btn-theme04">Quay lại</a>
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
<script src="admin/lib/advanced-form-components.js"></script>
<script src="admin/lib/ckeditor.js"></script>
<script>
 
    CKEDITOR.replace('description');

</script> 
@endsection