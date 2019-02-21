@extends('website.layout.master') 
@section('title','Giỏ hàng') 
@section('content')
<section class="main-content-section">
    <div class="container">
        <div class="row" style="padding-top: 50px">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="page-title">Giỏ hàng của bạn</h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="table-responsive">
                    <table class="table table-bordered" id="cart-summary">
                        <thead>
                            <tr>
                                <th class="cart-product">Hình ảnh</th>
                                <th class="cart-description">Sản phẩm</th>
                                <th class="cart-avail text-center">Giá tiền</th>
                                <th class="cart_quantity text-center">Số lượng</th>
                                <th class="cart-delete">&nbsp;</th>
                                <th class="cart-total text-right">Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody class="show_cart">
                            @if(Session::has('cart')) 
                                @php 
                                    $cart = Session('cart'); 
                                    $list_product = $cart->items; 
                                @endphp 
                                @foreach ($list_product as $crt)
                                <tr>
                                    <td class="cart-product">
                                        <a href="#">
                                            <img alt="Blouse" style="width:50px;" src="storage/{{$crt['item']['image']}}">
                                        </a>
                                    </td>
                                    <td class="cart-description">
                                        <p class="product-name">
                                            <a href="#">{{$crt['item']['name']}}</a>
                                        </p>
                                        <small>{{$crt['item']['operating_system']}}</small>
                                        <small>{{$crt['item']['cpu']}}</small>
                                    </td>
                                    <td class="text-center">
                                        <ul class="price">
                                            <li class="price">{{number_format($crt['item']['price'])}} <sup>đ</sup></li>
                                        </ul>
                                    </td>
                                    <td class="cart_quantity text-center">
                                            <div class="">
                                                <div class="cart-plus-minus qty_cart" type="text"> {{$crt['qty']}}</div>
                                                <div class="incs qtybuttons"></div>
                                                <div class="decs qtybuttons"></div>
                                            </div>
                                        </td>
                                    <td class="cart-delete text-center">
                                        <span>
                                            <a href="" class="delete_cart" data-delete="{{$crt['item']['id']}}" title="Delete">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </span>
                                    </td>
                                    <td class="cart-total">
                                        <span class="price total_price_catelogs">{{number_format($crt['price'])}}</span><sup>đ</sup>
                                    </td>
                                </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6" style="text-align: center">Giỏ hàng trống</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    @if (session('no_product'))
                        <span style="font-size: 20px;color: #ec1e1e">
                            {{ session('no_product') }}
                        </span>
                    @endif 
                    @if (session('alert'))
                        <label style="font-size: 20px;color:#ec1e1e;">Đặt thành công mã hàng
                            <span style="color: #0978ef">
                                {{ session('alert') }}
                            </span>
                        !</label>
                    @endif

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="returne-continue-shop">
                            <a href="{{route('web.index')}}" class="continueshoping">
                                <i class="fa fa-chevron-left"></i>Quay lại trang chủ</a>
                            @if(null != Auth::check())
                            <a href="{{route('web.oder')}}" class="procedtocheckout">Mua hàng
                                <i class="fa fa-chevron-right"></i>
                            </a>
                            @else
                            <a onclick="show()" class="procedtocheckout">Mua hàng
                                <i class="fa fa-chevron-right"></i>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection