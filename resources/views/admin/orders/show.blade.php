@extends('admin.layout.master')
@section('title','Admin | Hóa đơn')
@section('order_active','active')
@section('content')
<section id="main-content">
        <section class="wrapper site-min-height">
          <div class="row mt">
            <div class="col-md-12">
              <div class="content-panel">
                <table class="table table-striped table-advance table-hover">
                  <div class="col-md-12"><h4 class="col-md-6">Hóa đơn {{$order->code}} </h4>
                  <thead>
                    <tr>
                      <th>Sản phẩm</th>
                      <th>Tên</th>
                      <th>Giá(VND)</th>
                      <th>Số lượng</th>
                    </tr>
                  </thead>
                  <tbody>
                        @foreach($detail as $item)
                        <tr>
                        {{-- {{dd($order['item']['image'])}} --}}
                       
                       {{-- {{dd($item)}} --}}
                         <td><img src="storage/{{ $item->item->image}}" style="max-width: 50px" alt="product"></td>
                         <td>{{ $item->item->name}}</td>
                         <td>{{ number_format($item->item->price) }}</td>
                         <td>{{ $item->qty}}</td>
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