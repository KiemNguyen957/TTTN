@extends('admin.layout.master')
@section('title','Admin | Danh mục')
@section('category_active','active')
@section('content')
<section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <div class="col-md-12"><h4 class="col-md-6"><i class="fa fa-angle-right"></i> Danh mục sản phẩm</h4>
                <a href="{{route('category.create')}}" class="btn btn-theme03 pull-right">+Thêm danh mục</a></div>
                <hr>
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Tên danh mục</th>
                    <th>Thời gian tạo</th>
                    <th>Thời gian cập nhật</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                @foreach($categorylist as $index =>$category)
                  <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td>{{ $category->updated_at  }}</td>
                    <td>
                      
                    <a href="{{route('category.edit',$category)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                      <form action="{{route('category.destroy',$category)}}"" method="POST" style="display:inline-block">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                      </form>
                      
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
    </section>
@endsection