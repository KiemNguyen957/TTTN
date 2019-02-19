@extends('website.layout.master')
@section('title','Giỏ hàng')
@section('content')
    <section class="main-content-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="bstore-breadcrumb">
						<a href="index.html">Trang chủ</a>
						<span><i class="fa fa-caret-right"></i></span>
						<span>Giỏ hàng</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h2 class="page-title">Giỏ hàng của bạn <span class="shop-pro-item">Bạn đang có: @if(Session::has('cart')){{Session('cart')->totalQuantity}}@else 0 @endif sản phẩm</span></h2>
				</div>	
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="table-responsive">
                        <table class="table table-bordered" id="cart-summary">
                            <thead>
                                <tr>
                                    <th class="cart-product">Hình ảnh</th>
                                    <th class="cart-description">Tên sản phẩm</th>
                                    <th class="cart-avail text-center">Giá tiền</th>
                                    <th class="cart_quantity text-center">Số lượng</th>
                                    <th class="cart-delete">&nbsp;</th>
                                    <th class="cart-total text-right">Tông tiền</th>
                                </tr>
                            </thead>
                            <tbody>	
                                @if(Session::has('cart'))
                            @php
                                $cart = Session('cart');
                                $list_product = $cart->items;
                                //dd($list_product);
                            @endphp
                            <div class="shipping-cart-overly">
                            @foreach ($list_product as $crt)
                                <tr>
                                    <td class="cart-product">
                                        <a href="#"><img alt="Blouse" src="storage/{{$crt['item']['image']}}"></a>
                                    </td>
                                    <td class="cart-description">
                                        <p class="product-name"><a href="#">{{$crt['item']['name']}}</a></p>
                                        <small>{{$crt['item']['operating_system']}}</small>
                                        <small>{{$crt['item']['cpu']}}</small>
                                    </td>
                                    <td class="cart-unit">
                                        <ul class="price text-right">
                                            <li class="price">{{number_format($crt['price'])}}</li>
                                        </ul>
                                    </td>
                                    <td class="cart_quantity text-center">
                                            {{$crt['qty']}}
                                    </td>
                                    <td class="cart-delete text-center">
                                        <span>
                                            <a href="{{route('web.cart.delete',$crt['item']['id'])}}" class="cart_quantity_delete" title="Delete"><i class="fa fa-trash-o"></i></a>
                                        </span>
                                    </td>
                                    <td class="cart-total">
                                        <span class="price">{{number_format($cart->totalPrice)}}</span>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tbody>
                                <tr>
                                    <td colspan="6" style="text-align: center">Giỏ hàng trống</td>
                                </tr>
                            </tbody>
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
                            <a href="{{route('web.index')}}" class="continueshoping"><i class="fa fa-chevron-left"></i>Quay lại trang chủ</a>
                                @if(null != Auth::check())
                                <a href="{{route('web.oder')}}" class="procedtocheckout">Mua hàng<i class="fa fa-chevron-right"></i></a>
                                @else
                                <a onclick="show()" class="procedtocheckout">Mua hàng<i class="fa fa-chevron-right"></i></a>
                                @endif     
                            </div>					
                        </div>
					</div>
				</div>
			</div>
		</div>
    </section>
@endsection