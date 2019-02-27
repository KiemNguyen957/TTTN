@extends('admin.layout.master') @section('title','Admin | Danh mục')
@section('category_active','active')
@section('content')
<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row mt">
            <div class="col-lg-12">
                <div class="row content-panel">
                <form action="{{ route('category.update',$category) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                {{csrf_field()}} 
                {{method_field('PUT')}}
                <div class="col-md-3">@if(!$errors->isEmpty())
                    <div class="text-red">
                        {{$errors->first()}}
                    </div>@endif
                </div>
                <div class="col-md-6 profile-text">
                    <div class="hidden-sm hidden-xs">
                    <div class="panel-body">
                        <div class="tab-content">
                        <div class="row">
                            <div class="col-lg-12 detailed">
                            <h4 class="mb">Thông tin danh mục</h4>
                                <div class="form-group">
                                <label class="col-lg-3 control-label">Tên danh mục</label>
                                <div class="col-lg-9">  
                                    <input type="text" placeholder=" " name="name" class="form-control" value="{{$category->name}}">
                                </div>
                                </div>
                                <div class="form-group">
                                <div class="col-lg-offset-3 col-lg-9">
                                    <button class="btn btn-theme" type="submit">Cập nhật</button>
                                    <a href="{{ route('category.index')}}" class="btn btn-theme04">Quay lại</a>
                                </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
                </form>
                </div>
            </div>
        </div>
    </section>
    </section>
@endsection
