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
                <div class="col-md-12"><h4 class="col-md-6"><i class="fa fa-angle-right"></i> Danh sách hóa đơn </h4>
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Mã hóa đơn</th>
                    <th>Khách hàng</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Ngày tạo</th>
                    <th>Tổng tiền(VND)</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($orders as $index => $order)
                  <tr>
                    <td>{{$index +1}}</td>
                    <td>{{$order->code}}</td>
                    <td>{{$order->user->email}}</td>
                    <td>{{$order->address}}</td>
                    <td>{{$order->phone}}</td>
                    <td>{{$order->created_at}}</td>
                    <td>{{ number_format($order->total_price) }}</td>
                    <td>
                    <a href="{{route('orders.show',$order)}}" title="xem chi tiết" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></a>
                    <form action="{{route('orders.destroy',$order)}}" method="POST" style="display:inline-block">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button title="hủy đơn hàng" type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {{$orders->links()}}
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
    </section>
@endsection