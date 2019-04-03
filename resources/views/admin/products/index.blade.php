@extends('admin.layout.master')
@section('title','Admin | Sản phẩm')
@section('libcss')
<link href="admin/lib/fancybox/jquery.fancybox.css" rel="stylesheet" />
<style>
  .content {
  position: relative;
  width: 90%;
  max-width: 400px;
  margin: auto;
  overflow: hidden;
}

.content .content-overlay {
  background: rgba(0,0,0,0.7);
  position: absolute;
  height: 99%;
  width: 100%;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  opacity: 0;
  -webkit-transition: all 0.4s ease-in-out 0s;
  -moz-transition: all 0.4s ease-in-out 0s;
  transition: all 0.4s ease-in-out 0s;
}

.content:hover .content-overlay{
  opacity: 1;
}

.content-image{
  width: 100%;
}

.content-details {
  position: absolute;
  text-align: center;
  padding-left: 1em;
  padding-right: 1em;
  width: 100%;
  top: 50%;
  left: 50%;
  opacity: 0;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  -webkit-transition: all 0.3s ease-in-out 0s;
  -moz-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}

.content:hover .content-details{
  top: 50%;
  left: 50%;
  opacity: 1;
}

.content-details h3{
  color: #fff;
  font-weight: 500;
  letter-spacing: 0.1em;
  margin-bottom: 0.5em;
  font-size: 1.3em;
  text-transform: uppercase;
}

.content-details p{
  color: #fff;
  font-size: 1em;
}

.fadeIn-bottom{
  top: 80%;
}
.view{
  font-size: 35px;
  margin-right: 15px;
}
.view i{
  display: block;
}
.list i{
  color: #a29797;
}
.grid i{
  color: #545050;
}
</style>
@endsection
@section('product_active','active')
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
            <div class="row mt" style="padding: 15px;">
              @foreach($products as $index =>$product)
              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mb">
                <div class="project-wrapper">
                  <div class="project">
                      <div class="content">
                          <a href="{{ route('products.edit',$product)}}">
                            <div class="content-overlay"></div>
                            <img class="img-responsive" src="storage/{{ $product->image }}" alt="">
                            <div class="content-details fadeIn-bottom">
                              <h3 class="content-title">{{ $product->name }}</h3>
                              <p class="content-text">{{number_format($product->price)}} VND</p>
                            </div>
                          </a>
                        </div>
                    
                    
                  </div>
                  
                </div>
              </div>
              @endforeach
            </div>



            {{-- <thead>
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
            </tbody> --}}
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
