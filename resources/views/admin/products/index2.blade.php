@extends('admin.layout.master')
@section('title','Admin | Sản phẩm')
@section('product_active','active')
@section('libcss')
<style>
  .view {
    font-size: 35px;
    margin-right: 15px;
  }

  .view i {
    display: block;
  }

  .list i {
    color: #545050;
  }

  .grid i {
    color: #a29797;
  }
</style>
@endsection
@section('content')
<section id="main-content">
  <section class="wrapper site-min-height">
    <div class="row mt">
      <div class="col-md-12">
        <div class="content-panel">
          <table class="table table-striped table-advance table-hover">
            <div class="col-md-12">
              <h4 class="col-md-6"><i class="fa fa-angle-right"></i> Danh sách sản phẩm </h4>
              <a href="{{route('products.create')}}" class="btn btn-theme03 pull-right">+Thêm sản phẩm</a>
              <a href="{{route('products.index')}}" class="pull-right grid view"><i class="fa fa-th-large"></i></a>
              <a href="{{route('products.index2')}}" class="pull-right list view"><i class="fa fa-list"></i></a>
            </div>

            <hr>
            <thead>
              <tr>
                <th>STT</th>
                <th>Hình ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Giá(VND)</th>
                <th>Màn hình</th>
                <th>Hệ điều hành</th>
                <th>Hãng sản phẩm</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($products as $index =>$product)
              <tr>
                <td>{{ $index+1 }}</td>
                <td><img src="storage/{{ $product->image }}" style="max-width: 50px" alt="product"></td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price  }}</td>
                <td>{{ $product->screen }}</span></td>
                <td>{{ $product->operating_system }}</td>
                <td>{{ $product->categorylist->name }}</td>
                <td>

                  <a href="{{ route('products.edit',$product)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                  <form action="{{route('products.destroy',$product)}}" method="POST" style="display:inline-block">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                  </form>

                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{$products->links()}}
        </div>
        <!-- /content-panel -->
      </div>
      <!-- /col-md-12 -->
    </div>
    <!-- /row -->
  </section>
</section>
@endsection