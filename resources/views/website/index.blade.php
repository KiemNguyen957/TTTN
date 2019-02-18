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
						<h2 class="left-title">New Products</h2>
					</div>
					<div class="col-xs-12">
						<div class="row">
							<!-- FEARTURED-CAROUSEL START -->
							<div class="feartured-carousel">
								@foreach($products_new as $product)
								<div class="item">
									<div class="single-product-item">
										<div class="product-image">
											<a href="{{route('web.product.single',$product)}}">
											<img src="storage/{{$product->image}}" alt="product-image" />
											</a>
											<a href="#" class="new-mark-box">new</a>
											<div class="overlay-content">
												<ul>
													
													<li>
														<a href="#" title="Add cart">
															<i class="fa fa-shopping-cart"></i>
														</a>
													</li>
													
												</ul>
											</div>
										</div>
										<div class="product-info" style="padding: 0 30px;">
											<div class="customar-comments-box">
												<div class="rating-box">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-half-empty"></i>
												</div>
											</div>
										<a href="{{route('web.product.single',$product->id)}}">{{$product->name}}</a>
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
						<h2 class="left-title">Sale</h2>
					</div>
					<div class="col-xs-12">
						<div class="row">
							<div class="feartured-carousel">
								@foreach($products_sale as $product)
								<div class="item">
									<div class="single-product-item">
										<div class="product-image">
											<a href="#">
											<img src="storage/{{$product->image}}" alt="product-image" />
											</a>
											<a href="#" class="new-mark-box">-{{$product->sale}}%</a>
											<div class="overlay-content">
												<ul>
													<li>
														<a href="#" title="Quick view">
															<i class="fa fa-shopping-cart"></i>
														</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-info">
											<div class="customar-comments-box">
												<div class="rating-box">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="review-box">
													<span>1 Review (s)</span>
												</div>
											</div>
											<a href="single-product.html">{{$product->name}}</a>
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
			<section class="latest-news-area">
				<div class="container">
					<div class="row">
						<div class="latest-news-row">
							<div class="center-title-area">
								<h2 class="center-title">
									<a href="#">latest news</a>
								</h2>
							</div>
							<div class="col-xs-12">
								<div class="row">
									<!-- LATEST-NEWS-CAROUSEL START -->
									<div class="latest-news-carousel">
										<!-- LATEST-NEWS-SINGLE-POST START -->
										<div class="item">
											<div class="latest-news-post">
												<div class="single-latest-post">
													<a href="#">
														<img src="web/img/latest-news/1.jpg" alt="latest-post" />
													</a>
													<h2>
														<a href="#">What is Lorem Ipsum?</a>
													</h2>
													<p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
													<div class="latest-post-info">
														<i class="fa fa-calendar"></i>
														<span>2015-06-20 04:51:43</span>
													</div>
													<div class="read-more">
														<a href="#">Read More
															<i class="fa fa-long-arrow-right"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
										<!-- LATEST-NEWS-SINGLE-POST END -->
										<!-- LATEST-NEWS-SINGLE-POST START -->
										<div class="item">
											<div class="latest-news-post">
												<div class="single-latest-post">
													<a href="#">
														<img src="web/img/latest-news/2.jpg" alt="latest-post" />
													</a>
													<h2>
														<a href="#">Share the Love for printing</a>
													</h2>
													<p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
													<div class="latest-post-info">
														<i class="fa fa-calendar"></i>
														<span>2015-06-20 04:51:43</span>
													</div>
													<div class="read-more">
														<a href="#">Read More
															<i class="fa fa-long-arrow-right"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
										<!-- LATEST-NEWS-SINGLE-POST END -->
										<!-- LATEST-NEWS-SINGLE-POST START -->
										<div class="item">
											<div class="latest-news-post">
												<div class="single-latest-post">
													<a href="#">
														<img src="web/img/latest-news/3.jpg" alt="latest-post" />
													</a>
													<h2>
														<a href="#">Answers your Questions P..</a>
													</h2>
													<p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
													<div class="latest-post-info">
														<i class="fa fa-calendar"></i>
														<span>2015-06-20 04:51:43</span>
													</div>
													<div class="read-more">
														<a href="#">Read More
															<i class="fa fa-long-arrow-right"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
										<!-- LATEST-NEWS-SINGLE-POST END -->
										<!-- LATEST-NEWS-SINGLE-POST START -->
										<div class="item">
											<div class="latest-news-post">
												<div class="single-latest-post">
													<a href="#">
														<img src="web/img/latest-news/4.jpg" alt="latest-post" />
													</a>
													<h2>
														<a href="#">What is Bootstrap? – History</a>
													</h2>
													<p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
													<div class="latest-post-info">
														<i class="fa fa-calendar"></i>
														<span>2015-06-20 04:51:43</span>
													</div>
													<div class="read-more">
														<a href="#">Read More
															<i class="fa fa-long-arrow-right"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
										<!-- LATEST-NEWS-SINGLE-POST END -->
										<!-- LATEST-NEWS-SINGLE-POST START -->
										<div class="item">
											<div class="latest-news-post">
												<div class="single-latest-post">
													<a href="#">
														<img src="web/img/latest-news/5.jpg" alt="latest-post" />
													</a>
													<h2>
														<a href="#">Share the Love for..</a>
													</h2>
													<p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
													<div class="latest-post-info">
														<i class="fa fa-calendar"></i>
														<span>2015-06-20 04:51:43</span>
													</div>
													<div class="read-more">
														<a href="#">Read More
															<i class="fa fa-long-arrow-right"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
										<!-- LATEST-NEWS-SINGLE-POST END -->
										<!-- LATEST-NEWS-SINGLE-POST START -->
										<div class="item">
											<div class="latest-news-post">
												<div class="single-latest-post">
													<a href="#">
														<img src="web/img/latest-news/6.jpg" alt="latest-post" />
													</a>
													<h2>
														<a href="#">What is Bootstrap? – The History a..</a>
													</h2>
													<p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
													<div class="latest-post-info">
														<i class="fa fa-calendar"></i>
														<span>2015-06-20 04:51:43</span>
													</div>
													<div class="read-more">
														<a href="#">Read More
															<i class="fa fa-long-arrow-right"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
										<!-- LATEST-NEWS-SINGLE-POST END -->
										<!-- LATEST-NEWS-SINGLE-POST START -->
										<div class="item">
											<div class="latest-news-post">
												<div class="single-latest-post">
													<a href="#">
														<img src="web/img/latest-news/3.jpg" alt="latest-post" />
													</a>
													<h2>
														<a href="#">Answers your Questions P..</a>
													</h2>
													<p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
													<div class="latest-post-info">
														<i class="fa fa-calendar"></i>
														<span>2015-06-20 04:51:43</span>
													</div>
													<div class="read-more">
														<a href="#">Read More
															<i class="fa fa-long-arrow-right"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
										<!-- LATEST-NEWS-SINGLE-POST END -->
										<!-- LATEST-NEWS-SINGLE-POST START -->
										<div class="item">
											<div class="latest-news-post">
												<div class="single-latest-post">
													<a href="#">
														<img src="web/img/latest-news/4.jpg" alt="latest-post" />
													</a>
													<h2>
														<a href="#">What is Bootstrap? – History</a>
													</h2>
													<p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
													<div class="latest-post-info">
														<i class="fa fa-calendar"></i>
														<span>2015-06-20 04:51:43</span>
													</div>
													<div class="read-more">
														<a href="#">Read More
															<i class="fa fa-long-arrow-right"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
										<!-- LATEST-NEWS-SINGLE-POST END -->
									</div>
									<!-- LATEST-NEWS-CAROUSEL START -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- TOW-COLUMN-PRODUCT END -->



		</div>
	</section>
@endsection