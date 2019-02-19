<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>@yield('title')</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- FONTS-->
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic&amp;subset=latin,latin-ext' rel='stylesheet'
	 type='text/css'>
     <base href="{{asset('')}}">
	<!-- animate CSS -->
	<link rel="stylesheet" href="web/css/animate.css">
	<!-- FANCYBOX CSS -->
	<link rel="stylesheet" href="web/css/jquery.fancybox.css">
	<!-- BXSLIDER CSS -->
	<link rel="stylesheet" href="web/css/jquery.bxslider.css">
	<!-- MEANMENU CSS -->
	<link rel="stylesheet" href="web/css/meanmenu.min.css">
	<!-- JQUERY-UI-SLIDER CSS -->
	<link rel="stylesheet" href="web/css/jquery-ui-slider.css">
	<!-- NIVO SLIDER CSS -->
	<link rel="stylesheet" href="web/css/nivo-slider.css">
	<!-- OWL CAROUSEL CSS -->
	<link rel="stylesheet" href="web/css/owl.carousel.css">
	<!-- OWL CAROUSEL THEME CSS -->
	<link rel="stylesheet" href="web/css/owl.theme.css">
	<!-- BOOTSTRAP CSS -->
	<link rel="stylesheet" href="web/css/bootstrap.min.css">
	<!-- FONT AWESOME CSS -->
	<link rel="stylesheet" href="web/css/font-awesome.min.css">
	<!-- NORMALIZE CSS -->
	<link rel="stylesheet" href="web/css/normalize.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="web/css/main.css">
	<!-- STYLE CSS -->
	<link rel="stylesheet" href="web/style.css">
	<!-- RESPONSIVE CSS -->
	<link rel="stylesheet" href="web/css/responsive.css">
	<!-- IE CSS -->
	<link rel="stylesheet" href="web/css/ie.css">
	<!-- MODERNIZR JS -->
	<script src="web/js/vendor/modernizr-2.6.2.min.js"></script>
	<link href="admin/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
<!-- Custom styles for this template -->
	<link href="admin/css/style.css" rel="stylesheet">
	<link href="admin/css/style-responsive.css" rel="stylesheet">
</head>

<body id="body">
		<div id="popup">
			@if (session('notification'))
				{{session('notification')}}
				<script>
					document.getElementById('popup').style.display="block";
				</script>
			@endif
		</div>
		<div id="login-page">
				<div class="background-lg"></div>
				<div class="container">
				  <form class="form-login" action="" method="post">
				  {{csrf_field()}}
					<h2 style="position: relative;" class="form-login-heading">Đăng nhập
						<a onclick="hidden_login()" id="close-login"><i class="fa fa-times"></i></a>
					</h2>
					<br>
					<div style="padding: 0 30px;">
						<input type="text" class="form-control" name="email" placeholder="Email">
						<br>
						<input type="password" class="form-control" name="password" placeholder="Password">
						<label id="error_acc" class="col-lg-12 control-label regist-lable text-red">
						</label>
					  	<label class="checkbox">
						<input type="checkbox" name="remember" class="pull-left" style="margin: 2px 0 0;position:unset;" > <span class="pull-left">Nhớ mật khẩu</span>
						<span class="pull-right">
						<a data-toggle="modal" href="login.html#myModal"> Quên mật khẩu</a>
						</span>
						</label>
						<button id="login" class="btn btn-theme btn-block" type="button">
						<i class="fa fa-lock"></i> ĐĂNG NHẬP</button>
						<hr>
						<div class="login-social-link centered" >
							<p>hoặc</p>
							<a href="redirect/facebook" class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</a>
							<a href="redirect/google" class="btn btn-twitter" type="submit"><i class="fa fa-google"></i> Google</a>
						</div>
					  <div class="registration" style="text-align: center;padding-bottom: 20px;">
						Bạn chưa có tài khoản<br/>
						<a class="" href="{{route('web.get.register')}}">
						  Đăng ký
						  </a>
					  </div>
					</div>
					
				  </form>
				</div>
			</div>
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
                                    <li><a href="">{{Auth::user()->email}}</a></li>
                                    <li><a href="{{route('web.get.logout')}}">Đăng xuất</a></li>
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
							<img src="web/img/logo.png" alt="bstore logo" />
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
						<form action="#" method="get" class="search-form-cat">
							<div class="search-product form-group">
								<input type="text" class="form-control search-form" name="s" placeholder="Tìm kiếm ... " style="width:100%" />
								<button class="search-button" value="Search" name="s" type="submit" style="height: 100%;">
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
							@if(Session::has('cart'))
							@php
								$cart = Session('cart');
								$list_product = $cart->items;
								//dd($list_product);
							@endphp
						<div class="shopping-cart">
							<a class="shop-link" href="{{route('web.cart')}}" title="View my shopping cart">
								<i class="fa fa-shopping-cart cart-icon"></i>
								<b>Giỏ hàng</b>
							<span class="ajax-cart-quantity">@if(Session::has('cart')){{Session('cart')->totalQuantity}}@else 0 @endif</span>
							</a>
							<div class="shipping-cart-overly">
										@foreach ($list_product as $crt)
										<div class="shipping-item">
											<span class="cross-icon"><a href="{{route('web.cart.delete',$crt['item']['id'])}}"><i class="fa fa-times-circle"></i></a></span>
											<div class="shipping-item-image">
											<a href="#"><img style="width:80px;" src="storage/{{$crt['item']['image']}}" alt="shopping image" /></a>
											</div>
											<div class="shipping-item-text">
											<span>{{$crt['qty']}}<span class="pro-quan-x">x</span> <a href="#" style="text-transform: lowercase;" title="{{$crt['item']['name']}}" class="pro-cat">{{shorten_string($crt['item']['name'],2)}}</a></span>
										
												<p>{{number_format($crt['price'])}}<sup>đ</sup></p>
											</div>
										</div>
										@endforeach
								<div class="shipping-total-bill">
									<div class="total-shipping-prices">
										<span class="shipping-total">{{number_format($cart->totalPrice)}}<sup>đ</sup> </span>
										<span>Tổng tiền: </span>
									</div>										
								</div>
								<div class="shipping-checkout-btn">
									<a href="checkout.html">Check out <i class="fa fa-chevron-right"></i></a>
								</div>
							</div>
						</div>
						@else
						<div class="shopping-cart">
							<a class="shop-link" href="{{route('web.cart')}}" title="View my shopping cart">
								<i class="fa fa-shopping-cart cart-icon"></i>
								<b>My Cart</b>
								<span class="ajax-cart-quantity">0</span>
							</a>
							<div class="shipping-cart-overly">
								<div class="shipping-item">
								   <p>Giỏ hàng trống</p>
								</div>
								<div class="shipping-total-bill">
									<div class="total-shipping-prices">
										<span class="shipping-total">0 đ</span>
										<span>Tổng tiền</span>
									</div>										
								</div>
								<div class="shipping-checkout-btn">
									<a href="checkout.html">Check out <i class="fa fa-chevron-right"></i></a>
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
								<a href="{{route('web.catelogs',1)}}">Điện thoại</a>
								</li>
								<li>
									<a href="#">Tin tức</a>
								</li>
								<li>
									<a href="contact-us.html">Liên hệ</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- MAINMENU END -->
			</div>
		</div>
	</header>
	<!-- MAIN-MENU-AREA END -->
	<!-- MAIN-CONTENT-SECTION START -->
	@yield('content')
	<!-- MAIN-CONTENT-SECTION END -->
	<!-- LATEST-NEWS-AREA START -->

	<!-- LATEST-NEWS-AREA END -->
	<!-- BRAND-CLIENT-AREA START -->

	<!-- BRAND-CLIENT-AREA END -->
	<!-- COMPANY-FACALITY START -->
	<section class="company-facality">
		<div class="container">
			<div class="row">
				<div class="company-facality-row">
					<!-- SINGLE-FACALITY START -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="single-facality">
							<div class="facality-icon">
								<i class="fa fa-rocket"></i>
							</div>
							<div class="facality-text">
								<h3 class="facality-heading-text">FREE SHIPPING</h3>
								<span>on order over $100</span>
							</div>
						</div>
					</div>
					<!-- SINGLE-FACALITY END -->
					<!-- SINGLE-FACALITY START -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="single-facality">
							<div class="facality-icon">
								<i class="fa fa-umbrella"></i>
							</div>
							<div class="facality-text">
								<h3 class="facality-heading-text">24/7 SUPPORT</h3>
								<span>online consultations</span>
							</div>
						</div>
					</div>
					<!-- SINGLE-FACALITY END -->
					<!-- SINGLE-FACALITY START -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="single-facality">
							<div class="facality-icon">
								<i class="fa fa-calendar"></i>
							</div>
							<div class="facality-text">
								<h3 class="facality-heading-text">DAILY UPDATES</h3>
								<span>Check out store for latest</span>
							</div>
						</div>
					</div>
					<!-- SINGLE-FACALITY END -->
					<!-- SINGLE-FACALITY START -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="single-facality">
							<div class="facality-icon">
								<i class="fa fa-refresh"></i>
							</div>
							<div class="facality-text">
								<h3 class="facality-heading-text">30-DAY RETURNS</h3>
								<span>moneyback guarantee</span>
							</div>
						</div>
					</div>
					<!-- SINGLE-FACALITY END -->
				</div>
			</div>
		</div>
	</section>
	<footer class="copyright-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="copy-right">
						<address>Copyright © 2019
							<a href="http://bootexperts.com/">Super</a>Broly</address>
					</div>
					<div class="scroll-to-top">
						<a href="#" class="bstore-scrollertop">
							<i class="fa fa-angle-double-up"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- COPYRIGHT-AREA END -->
	<!-- JS 
		===============================================-->
	<!-- jquery js -->
	<script src="web/js/vendor/jquery-1.11.3.min.js"></script>

	<!-- fancybox js -->
	<script src="web/js/jquery.fancybox.js"></script>

	<!-- bxslider js -->
	<script src="web/js/jquery.bxslider.min.js"></script>

	<!-- meanmenu js -->
	<script src="web/js/jquery.meanmenu.js"></script>

	<!-- owl carousel js -->
	<script src="web/js/owl.carousel.min.js"></script>

	<!-- nivo slider js -->
	<script src="web/js/jquery.nivo.slider.js"></script>

	<!-- jqueryui js -->
	<script src="web/js/jqueryui.js"></script>

	<!-- bootstrap js -->
	<script src="web/js/bootstrap.min.js"></script>

	<!-- wow js -->
	<script src="web/js/wow.js"></script>
	<script>
		new WOW().init();
	</script>
	<!-- main js -->
	<script src="web/js/main.js"></script>
	<script src="admin/lib/jquery/jquery.min.js"></script>
	<script src="admin/lib/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="admin/lib/jquery.backstretch.min.js"></script>
	<script>
		var login = document.getElementById('login-page');
		var body = document.getElementById('body');
		function show(){
			login.classList.add('show');
			body.style.overflow="hidden";
		}
		function hidden_login(){
			login.classList.remove('show');
			body.style.overflow="visible";
		}
		setTimeout(function(){
			document.getElementById('popup').style.display="none";
		},5000);

        $(document).ready(function(){
            $('#login').click(function(){
				// alert();
                var email = $("input[name=email]").val();
        		var password = $("input[name=password]").val();
                var _token = $('input[name="_token"]').val();
				$.ajax({
					type: 'POST',
					url: "{{ route('web.post.login') }}",
					data:{email:email,password:password,_token:_token},
					success:function(data){
						$('#error_acc').html(data);
					},
				});      
            }); 
        });
	</script>
	@if (session('error'))
		<script>
			show();
		</script>
	@endif

</body>

</html>