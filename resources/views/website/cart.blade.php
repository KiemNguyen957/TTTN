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
                        {{csrf_field()}}
                        <table class="table table-bordered" id="cart-summary">
                            <thead>
                                <tr>
                                    <th class="cart-product">Hình ảnh</th>
                                    <th class="cart-description">Sản phẩm</th>
                                    <th class="cart-avail text-center">Giá tiền</th>
                                    <th class="cart_quantity text-center">Số lượng</th>
                                    <th class="cart-delete">&nbsp;</th>
                                    <th class="cart-total text-right">Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody class="show_cart">
                                @if(Session::has('cart')) 
                                    @php 
                                        $cart = Session('cart'); 
                                        $list_product = $cart->items;
                                        ksort($list_product);
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
                                                <li class="price">{{number_format($crt['item']['price'])}}<sup>đ</sup></li>
                                            </ul>
                                        </td>
                                        <td class="cart_quantity text-center">
                                                <div class="">
                                                    <input class="cart-plus-minus" type="text" value="{{$crt['qty']}}" disabled>
                                                    <div class="incs qtybuttons add_cart"  data-id="{{$crt['item']['id']}}"></div>
                                                    <div class="decs qtybuttons delete_one" data-one="{{$crt['item']['id']}}"></div>
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
                                            {{number_format($crt['price'])}}<sup>đ</sup>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tfoot>
                                        <tr class="cart-total-price">
                                            <td class="cart_voucher" colspan="3" rowspan="4"></td>
                                            <td class="text-right" colspan="2">Tổng tiền</td>
                                            <td class="price" colspan="1"><span class="total_price">{{number_format($cart->totalPrice)}}</span><sup>đ</sup></td>
                                            
                                        </tr>
                                    </tfoot>
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
                            <label style="font-size: 20px;color:#0978ef;">
                                    {{ session('alert') }}
                            </label>
                        @endif
                        <div>
                            
                            <div class="returne-continue-shop">
                                @if(null != Auth::check())
                                <form action="{{route('web.order')}}" method="POST"
                                @if (session('alert'))
                                        {{ "style=display:none" }}
                                </label>
                                @endif >
                                        {{csrf_field()}}
                                    <button type="submit" class="btn compare-button">Đặt hàng
                                            <i class="fa fa-chevron-right"></i>
                                    </button>
                                
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-left: -15px;">
                                        <div class="primari-box registered-account">
                                            <h3 class="box-subheading" style="margin: 0;">Thông tin yêu cầu
                                                @if (session('info'))
                                                    <small style="font-size: 15px;color: #ec1e1e;text-transform: initial;">
                                                        {{ session('info') }}
                                                    </small>
                                                @endif 
                                            </h3>
                                            <div class="form-content">
                                                <div class="form-group primary-form-group">
                                                    <label>Đại chỉ</label>
                                                    <input type="text" value="" name="address" class="form-control input-feild">
                                                </div>
                                                <div class="form-group primary-form-group">
                                                    <label>Số điện thoại</label>
                                                    <input type="text" value="" name="phone" class="form-control input-feild">
                                                </div>
                                                
                                            </div>				
                                        </div> 
                                    </div>
                                </form>
                                @else
                                <button onclick="show()" class="btn compare-button">Đặt hàng
                                        <i class="fa fa-chevron-right"></i>
                                </button>
                                @endif
                            </div>
                        
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
    <script>
        function deleteOne(){
        $('.delete_one').click(function(event){

            event.preventDefault();
            var id = $(this).data('one');
            var url = "{{ route('web.cart.deleteone') }}";
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: url,
                method: "post",
                dataType: 'json',
                data: {id:id, _token:_token},
                success: function(data){
                    console.log(data);
                    if(data!=""){
                        var html="";
                        var html_cart="";
                        var total= 0;
                        var total_price=0;
                        console.log(data);
                        $.each(data, function(index, value){
                        total+=value.qty;
                        total_price+=value.price;
                        value.price = value.price.toLocaleString('en-US');
                        value.item.price=parseInt(value.item.price).toLocaleString('en-US');
                        
                        html+='<div class="shipping-item"><span class="cross-icon"><a href="" class="delete_cart" data-delete="'+value.item.id+'"><i class="fa fa-times-circle"></i></a></span>';
						html+='<div class="shipping-item-image"><a href="#"><img style="width:40px;" src="storage/'+value.item.image+'" alt="shopping image" /></a></div>';
						html+='<div class="shipping-item-text"><span>'+value.qty+'<span class="pro-quan-x">x</span>';
						html+='<a href="#" style="text-transform: lowercase;" title="" class="pro-cat">'+value.item.name+'</a></span>';
                        html+='<p>'+value.price+'<sup>đ</sup></p></div></div>';
                        //
                        html_cart+='<tr><td class="cart-product"><a href="#"><img alt="Blouse" style="width:50px;" src="storage/'+value.item.image+'"></a></td>';
                        html_cart+='<td class="cart-description"><p class="product-name"><a href="#">'+value.item.name+'</a></p>';
                        html_cart+='<small>'+value.item.operating_system+'</small>';
                        html_cart+='<small>'+value.item.cpu+'</small></td>';
                        html_cart+='<td class="text-center"><ul class="price"><li class="price">'+value.item.price+'<sup>đ</sup></li></ul></td>';
                        html_cart+='<td class="cart_quantity text-center"><div class=""><input class="cart-plus-minus" type="text" value="'+value.qty+'"disabled>';
                        html_cart+='<div class="incs qtybuttons add_cart" data-id="'+value.item.id+'"></div>';
                        html_cart+='<div class="decs qtybuttons delete_one" data-one="'+value.item.id+'"></div></div></td>';
                        html_cart+='<td class="cart-delete text-center"><span><a href="" class="delete_cart" data-delete="'+value.item.id+'" title="Delete"><i class="fa fa-trash-o"></i></a></span></td>';
                        html_cart+='<td class="cart-total">'+value.price+'<sup>đ</sup></td></tr>';
                        });
                        //console.log(value.price);
                        $('.show_cart').html(html_cart);
                        $('.list_product_cart').html(html);
                        $('.ajax-cart-quantity').html(total);
                        $('.total_price').html(total_price.toLocaleString('en-US')); 
                        addCart();
                        deleteCart();
                        deleteOne();
                        

                    }
                    else{
                        $('.ajax-cart-quantity').html(0);
                        $('.list_product_cart').html('<div class="shipping-item"><p>Giỏ hàng trống</p></div>');
                        $('.total_price').html(0);
                        $('.show_cart').html('<tr><td colspan="6" style="text-align: center">Giỏ hàng trống</td></tr>');
                    }
                },
            });
        });
    }
    function addCart(){
        $('.add_cart').click(function(event){
            event.preventDefault();
            var id = $(this).data('id');
            var url = "{{route('web.cart.add')}}";
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: url,
                method: "post",
                dataType: 'json',
                data: {id:id, _token:_token},
                success: function(data){
                    console.log(data);
                    var html="";
                    var html_cart="";
                    var total= 0;
                    var total_price=0;
                    $.each(data, function(index, value){
                        total+=value.qty;
                        total_price+=value.price;
                        value.price = value.price.toLocaleString('en-US');
                        value.item.price=parseInt(value.item.price).toLocaleString('en-US');
                        html+='<div class="shipping-item"><span class="cross-icon"><a href="" class="delete_cart" data-delete="'+value.item.id+'"><i class="fa fa-times-circle"></i></a></span>';
						html+='<div class="shipping-item-image"><a href="#"><img style="width:40px;" src="storage/'+value.item.image+'" alt="shopping image" /></a></div>';
						html+='<div class="shipping-item-text"><span>'+value.qty+'<span class="pro-quan-x">x</span>';
						html+='<a href="#" style="text-transform: lowercase;" title="" class="pro-cat">'+value.item.name+'</a></span>';
                        html+='<p>'+value.price+'<sup>đ</sup></p></div></div>';
                        //
                        html_cart+='<tr><td class="cart-product"><a href="#"><img alt="Blouse" style="width:50px;" src="storage/'+value.item.image+'"></a></td>';
                        html_cart+='<td class="cart-description"><p class="product-name"><a href="#">'+value.item.name+'</a></p>';
                        html_cart+='<small>'+value.item.operating_system+'</small>';
                        html_cart+='<small>'+value.item.cpu+'</small></td>';
                        html_cart+='<td class="text-center"><ul class="price"><li class="price">'+value.item.price+'<sup>đ</sup></li></ul></td>';
                        html_cart+='<td class="cart_quantity text-center"><div class=""><input class="cart-plus-minus" type="text" value="'+value.qty+'"disabled>';
                        html_cart+='<div class="incs qtybuttons add_cart" data-id="'+value.item.id+'"></div>';
                        html_cart+='<div class="decs qtybuttons delete_one" data-one="'+value.item.id+'"></div></div></td>';
                        html_cart+='<td class="cart-delete text-center"><span><a href="" class="delete_cart" data-delete="'+value.item.id+'" title="Delete"><i class="fa fa-trash-o"></i></a></span></td>';
                        html_cart+='<td class="cart-total">'+value.price+'<sup>đ</sup></td></tr>';
                    });
                    $('.show_cart').html(html_cart);
                    $('.list_product_cart').html(html);
                    $('.ajax-cart-quantity').html(total);
                    $('.total_price').html(total_price.toLocaleString('de-DE')); 
                    addCart();
                    deleteCart();
                    deleteOne();
                },
            });
        });
    }

    //delete cart
    function deleteCart(){
        $('.delete_cart').click(function(event){
            event.preventDefault();
            var id = $(this).data('delete');
            var url = "{{ route('web.cart.delete') }}";
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: url,
                method: "post",
                dataType: 'json',
                data: {id:id, _token:_token},
                success: function(data){
                    console.log(data);
                    if(data!=""){
                        var html="";
                        var html_cart="";
                        var total= 0;
                        var total_price=0;
                        $.each(data, function(index, value){
                        total+=value.qty;
                        total_price+=value.price;
                        value.price = value.price.toLocaleString('en-US');
                        value.item.price=parseInt(value.item.price).toLocaleString('en-US');
                        html+='<div class="shipping-item"><span class="cross-icon"><a href="" class="delete_cart" data-delete="'+value.item.id+'"><i class="fa fa-times-circle"></i></a></span>';
						html+='<div class="shipping-item-image"><a href="#"><img style="width:40px;" src="storage/'+value.item.image+'" alt="shopping image" /></a></div>';
						html+='<div class="shipping-item-text"><span>'+value.qty+'<span class="pro-quan-x">x</span>';
						html+='<a href="#" style="text-transform: lowercase;" title="" class="pro-cat">'+value.item.name+'</a></span>';
                        html+='<p>'+value.price+'<sup>đ</sup></p></div></div>';
                        //
                        html_cart+='<tr><td class="cart-product"><a href="#"><img alt="Blouse" style="width:50px;" src="storage/'+value.item.image+'"></a></td>';
                        html_cart+='<td class="cart-description"><p class="product-name"><a href="#">'+value.item.name+'</a></p>';
                        html_cart+='<small>'+value.item.operating_system+'</small>';
                        html_cart+='<small>'+value.item.cpu+'</small></td>';
                        html_cart+='<td class="text-center"><ul class="price"><li class="price">'+value.item.price+'<sup>đ</sup></li></ul></td>';
                        html_cart+='<td class="cart_quantity text-center"><div class=""><input class="cart-plus-minus" type="text" value="'+value.qty+'"disabled>';
                        html_cart+='<div class="incs qtybuttons add_cart" data-id="'+value.item.id+'"></div>';
                        html_cart+='<div class="decs qtybuttons delete_one" data-one="'+value.item.id+'"></div></div></td>';
                        html_cart+='<td class="cart-delete text-center"><span><a href="" class="delete_cart" data-delete="'+value.item.id+'" title="Delete"><i class="fa fa-trash-o"></i></a></span></td>';
                        html_cart+='<td class="cart-total">'+value.price+'<sup>đ</sup></td></tr>';                
                     
                        });
                        console.log(html_cart);
                        $('.show_cart').html(html_cart);
                        $('.list_product_cart').html(html);
                        $('.ajax-cart-quantity').html(total);
                        $('.total_price').html(total_price.toLocaleString('en-US'));
                        addCart();
                        deleteCart();
                        deleteOne();
                        

                    }
                    else{
                        $('.ajax-cart-quantity').html(0);
                        $('.list_product_cart').html('<div class="shipping-item"><p>Giỏ hàng trống</p></div>');
                        $('.total_price').html(0);
                        $('.show_cart').html('<tr><td colspan="6" style="text-align: center">Giỏ hàng trống</td></tr>');
                    }
                },
            });
        });
    }
    //delete one product cart
    

    $(document).ready(function(){
        addCart();
        deleteOne();
        deleteCart();
    });
    </script>
@endsection