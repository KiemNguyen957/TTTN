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
	@yield('libcss')
</head>

<body>

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
									<a href="{{route('web.get.login')}}">Đăng nhập</a>
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
								<button class="search-button" value="Search" name="s" type="submit">
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
						<div class="shopping-cart">
							<a class="shop-link" href="cart.html" title="View my shopping cart">
								<i class="fa fa-shopping-cart cart-icon"></i>
								<b>My Cart</b>
								<span class="ajax-cart-quantity">2</span>
							</a>
							<div class="shipping-cart-overly">
								<div class="shipping-item">
									<span class="cross-icon">
										<i class="fa fa-times-circle"></i>
									</span>
									<div class="shipping-item-image">
										<a href="#">
											<img src="web/img/shopping-image.jpg" alt="shopping image" />
										</a>
									</div>
									<div class="shipping-item-text">
										<span>2
											<span class="pro-quan-x">x</span>
											<a href="#" class="pro-cat">Watch</a>
										</span>
										<span class="pro-quality">
											<a href="#">S,Black</a>
										</span>
										<p>$22.95</p>
									</div>
								</div>
								<div class="shipping-item">
									<span class="cross-icon">
										<i class="fa fa-times-circle"></i>
									</span>
									<div class="shipping-item-image">
										<a href="#">
											<img src="web/img/shopping-image2.jpg" alt="shopping image" />
										</a>
									</div>
									<div class="shipping-item-text">
										<span>2
											<span class="pro-quan-x">x</span>
											<a href="#" class="pro-cat">Women Bag</a>
										</span>
										<span class="pro-quality">
											<a href="#">S,Gary</a>
										</span>
										<p>$19.95</p>
									</div>
								</div>
								<div class="shipping-total-bill">
									<div class="cart-prices">
										<span class="shipping-cost">$2.00</span>
										<span>Shipping</span>
									</div>
									<div class="total-shipping-prices">
										<span class="shipping-total">$24.95</span>
										<span>Total</span>
									</div>
								</div>
								<div class="shipping-checkout-btn">
									<a href="checkout.html">Check out
										<i class="fa fa-chevron-right"></i>
									</a>
								</div>
							</div>
						</div>
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
								<li>
								<a href="{{route('web.products')}}">Điện thoại</a>
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
	@yield('libjs')
</body>

</html>