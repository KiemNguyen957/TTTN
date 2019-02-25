@extends('website.layout.master')
@section('title','Trang chủ')
@section('home_active','active')
	
@section('content')
	<section class="main-content-section">
		<div class="container">
			<div class="row">
				<!-- MAIN-SLIDER-AREA START -->
				<div class="main-slider-area">
					<!-- SLIDER-AREA START -->
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="slider-area">
							<div id="wrapper">
								<div class="slider-wrapper">
									<div id="mainSlider" class="nivoSlider">
										<img src="web/img/slider/2.jpg" alt="main slider" title="#htmlcaption" />
										<img src="web/img/slider/1.jpg" alt="main slider" title="#htmlcaption2" />
									</div>

								</div>
							</div>
						</div>
					</div>
					<!-- SLIDER-AREA END -->
				</div>
				<!-- MAIN-SLIDER-AREA END -->
			</div>
			<!-- TOW-COLUMN-PRODUCT START -->
			<div class="row">
				<!-- FEATURED-PRODUCTS-AREA START -->
				<div class="featured-products-area">
					<div class="center-title-area">
						<h2 class="left-title">Sản phẩm mới</h2>
					</div>
					<div class="col-xs-12">
						<div class="row">
							<!-- FEARTURED-CAROUSEL START -->
							<div class="feartured-carousel">
								@foreach($products_new as $product)
								<div class="item">
									<div class="single-product-item">
										<div class="product-image">
											{{csrf_field()}}
											
											<a href="{{route('web.product.single',$product->slug)}}">
												<img src="storage/{{$product->image}}" alt="product-image" />
											</a>
											<span class="new-mark-box">new</span>
											<div class="overlay-content">
												<ul>
													<li>
														<a herf="" data-id="{{$product['id']}}" title="add to cart" class="add_cart">
															<i class="fa fa-shopping-cart"></i>
														</a>
													</li>	
												</ul>
											</div>
										</div>
										<div class="product-info" style="padding:30px 5px; text-align:center">
											
											<a href="{{route('web.product.single',$product->slug)}}">{{$product->name}}</a>
											<div class="price-box">
												<span class="price">{{number_format($product->price)}} VND</span>
											</div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							<!-- FEARTURED-CAROUSEL END -->
						</div>
					</div>
				</div>
				<!-- FEATURED-PRODUCTS-AREA END -->
			</div>
			<div class="row">
				<!-- FEATURED-PRODUCTS-AREA START -->
				<div class="featured-products-area">
					<div class="center-title-area">
						<h2 class="left-title">Khuyến mại</h2>
					</div>
					<div class="col-xs-12">
						<div class="row">
							<div class="feartured-carousel">
								@foreach($products_sale as $product)
								<div class="item">
									<div class="single-product-item">
										<div class="product-image">
											<a href="{{route('web.product.single',$product->slug)}}">
											<img src="storage/{{$product->image}}" alt="product-image" />
											</a>
											<span class="new-mark-box">-{{$product->sale}}%</span>
											<div class="overlay-content">
												<ul>
													<li>
														<a href="" data-id="{{$product['id']}}" title="add to cart" class="add_cart">
															<i class="fa fa-shopping-cart"></i>
														</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-info">
											<a href="{{route('web.product.single',$product->slug)}}">{{$product->name}}</a>
											<div class="price-box">
												<span class="price">{{number_format(($product->price*(100-$product->sale)/100))}} VND</span>
												<span class="old-price">{{number_format($product->price)}} vnd</span>
											</div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							<!-- FEARTURED-CAROUSEL END -->
						</div>
					</div>
				</div>
				<!-- FEATURED-PRODUCTS-AREA END -->
			</div>
		</div>
	</section>
@endsection
@section('js')
<script>
    $(document).ready(function(){
        addCart();
        deleteCart();
    });
</script>
@endsection
