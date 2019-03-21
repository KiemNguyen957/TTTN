<!-- HEADER-TOP START -->
<div class="header-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"></div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="header-right-menu">
					<nav>
						<ul class="list-inline">
							@if(null != Auth::check())
							<li>
							<a href="{{route('profile.edit',Auth::user()->id)}}">{{Auth::user()->email}}</a>
							</li>
							<li>
								<a href="{{route('web.get.logout')}}">Đăng xuất</a>
							</li>
							@else

							<li>
								<a href="{{route('web.get.register')}}">Đăng ký</a>
							</li>
							<li>
								<a onclick="show()" style="cursor: pointer">Đăng nhập</a>
							</li>
							@endif
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- HEADER-TOP END -->
<!-- HEADER-MIDDLE START -->
<section class="header-middle">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<!-- LOGO START -->
				<div class="logo">
					<a href="{{route('web.index')}}">
						<img src="web/img/logo-2.png" alt="bstore logo"  style="max-width: 185px;"/>
					</a>
				</div>
				<!-- LOGO END -->
				<!-- HEADER-RIGHT-CALLUS START -->
				<div class="header-right-callus">
					<h3>Hỗ trợ</h3>
					<span>0123-456-789</span>
				</div>
				<!-- HEADER-RIGHT-CALLUS END -->
				<!-- CATEGORYS-PRODUCT-SEARCH START -->
				<div class="categorys-product-search">
				<form action="{{route('web.search')}}" method="post" class="search-form-cat">
						{{csrf_field()}}
						<div class="search-product form-group">
							<input type="text" class="form-control search-form" name="search_input" placeholder="Tìm kiếm ... " style="width:100%" />
							<button class="search-button" value="Search" type="submit" style="height: 100%;">
								<i class="fa fa-search"></i>
							</button>
						</div>
					</form>
				</div>
				<!-- CATEGORYS-PRODUCT-SEARCH END -->
			</div>
		</div>
	</div>
</section>
<!-- HEADER-MIDDLE END -->
<!-- MAIN-MENU-AREA START -->
<header class="main-menu-area">
	<div class="container">
		<div class="row">
			<!-- SHOPPING-CART START -->
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pull-right shopingcartarea">
				<div class="shopping-cart-out pull-right">
					@if(Session::has('cart')) @php $cart = Session('cart'); $list_product = $cart->items; @endphp
					<div class="shopping-cart">
						<a class="shop-link" href="{{route('web.cart')}}" title="View my shopping cart">
							<i class="fa fa-shopping-cart cart-icon"></i>
							<b>Giỏ hàng</b>
							<span class="ajax-cart-quantity">@if(Session::has('cart')){{Session('cart')->totalQuantity}}@else 0 @endif</span>
						</a>
						<div class="shipping-cart-overly">
								{{csrf_field()}}
							
							<div class="list_product_cart">
								@foreach ($list_product as $crt)
									<div class="shipping-item">
											<span class="cross-icon">
												<a class="delete_cart" data-delete="{{$crt['item']['id']}}">
													<i class="fa fa-times-circle"></i>
												</a>
											</span>
											<div class="shipping-item-image">
												
													<img style="width:40px;" src="storage/{{$crt['item']['image']}}" alt="shopping image" />
												
											</div>
											<div class="shipping-item-text">
												<span>{{$crt['qty']}}
													<span class="pro-quan-x">x</span>
													<span style="text-transform: lowercase;color:#942b2b" title="{{$crt['item']['name']}}" class="pro-cat">{{$crt['item']['name']}}</span>
												</span>
			
												<p>{{number_format($crt['price'])}}
													<sup>đ</sup>
												</p>
											</div>
										</div>
								@endforeach
							</div>
							
							<div class="shipping-total-bill">
								<div class="total-shipping-prices">
									<span class="shipping-total"><span class="total_price">{{number_format($cart->totalPrice)}}</span>
										<sup>đ</sup>
									</span>
									<span>Tổng tiền: </span>
								</div>
							</div>
						</div>
					</div>
					@else
					<div class="shopping-cart">
						<a class="shop-link" href="{{route('web.cart')}}" title="View my shopping cart">
							<i class="fa fa-shopping-cart cart-icon"></i>
							<b>Giỏ hàng</b>
							<span class="ajax-cart-quantity">0</span>
						</a>
						
							<div class="shipping-cart-overly">
								<div class="list_product_cart">
									<div class="shipping-item">
										<p>Giỏ hàng trống</p>
									</div>
								</div>
								<div class="shipping-total-bill">
									<div class="total-shipping-prices">
										<span class="shipping-total"><span class="total_price">0</span><sup>đ</sup></span>
										<span>Tổng tiền</span>
									</div>
								</div>
								
							</div>
					</div>
					@endif
				</div>
			</div>
			<!-- SHOPPING-CART END -->
			<!-- MAINMENU START -->
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 no-padding-right menuarea">
				<div class="mainmenu">
					<nav>
						<ul class="list-inline mega-menu">
							<li class="@yield('home_active')">
								<a href="{{route('web.index')}}">Trang chủ</a>
							</li>
							<li class="@yield('phone_active')">
								<a href="{{route('web.products')}}">Điện thoại</a>
							</li>
							<li>
								<a href="#">Tin tức</a>
							</li>
							<li>
							<a href="{{route('web.contact')}}">Liên hệ</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- MAINMENU END -->
		</div>
	</div>
</header>