@extends('website.layout.master')
@section('title','Sản phẩm')
@section('content')
	<!-- MAIN-CONTENT-SECTION START -->
	<section class="main-content-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<!-- BSTORE-BREADCRUMB START -->
					<div class="bstore-breadcrumb">
						<span>{{$product->name}}</span>
					</div>
					<!-- BSTORE-BREADCRUMB END -->
				</div>
			</div>
			<div class="row">
				<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					<!-- SINGLE-PRODUCT-DESCRIPTION START -->
					<div class="row">
						<div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
							<div class="single-product-view">
								<!-- Tab panes -->
								<div class="tab-content">
									<div class="tab-pane active" id="thumbnail_1">
										<div class="single-product-image">
                                        <img src="storage/{{$product->image}}" alt="single-product-image" />
											<a class="new-mark-box" href="#">new</a>
											<a class="fancybox" href="storage/{{$product->image}}" data-fancybox-group="gallery">
												<span class="btn large-btn">View larger
													<i class="fa fa-search-plus"></i>
												</span>
											</a>
										</div>
									</div>

								</div>
							</div>

						</div>
						<div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
							<div class="single-product-descirption">
								<h2>{{$product->name}}</h2>
								
								<div class="single-product-review-box">
									<div class="rating-box">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-empty"></i>
									</div>
									
								</div>
								<div class="single-product-condition">
									<p>Reference:
										<span>demo_1</span>
									</p>
									<p>Condition:
										<span>New product</span>
									</p>
								</div>
								<div class="single-product-price">
									<h2>{{number_format($product->price)}} VND</h2>
								</div>
								<div class="single-product-desc">
                                <p>{{$product->promotion}}</p>

								</div>
								


								<div class="single-product-add-cart">
									<a class="add-cart-text" title="Add to cart" href="#">Add to cart</a>
								</div>
							</div>
						</div>
					</div>
					<!-- SINGLE-PRODUCT-DESCRIPTION END -->
					<!-- SINGLE-PRODUCT INFO TAB START -->
					<div class="row">
						<div class="col-sm-12">
							<div class="product-more-info-tab">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs more-info-tab">
									<li class="active">
										<a href="#moreinfo" data-toggle="tab">Thông tin</a>
									</li>
									<li>
										<a href="#datasheet" data-toggle="tab">Thông số kỹ thuật</a>
									</li>
									<li>
										<a href="#review" data-toggle="tab">reviews</a>
									</li>
								</ul>
								<!-- Tab panes -->
								<div class="tab-content">
									<div class="tab-pane active" id="moreinfo">
										<div class="tab-description">
											<p>{{$product->description}}</p>
										</div>
									</div>
									<div class="tab-pane" id="datasheet">
										<div class="deta-sheet">
											<table class="table-data-sheet">
												<tbody>
													<tr class="odd">
														<td>Màn hình</td>
														<td>{{$product->screen}}</td>
													</tr>
													<tr class="even">
														<td class="td-bg">Hệ điều hành</td>
														<td class="td-bg">{{$product->operating_system}}</td>
													</tr>
													<tr class="odd">
														<td>Camera</td>
														<td>{{$product->camera}}</td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td class="td-bg">CPU</td>
                                                        <td class="td-bg">{{$product->cpu}}</td>
                                                    </tr>
                                                    <tr class="odd">
                                                        <td>RAM</td>
                                                        <td>{{$product->ram}}</td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td class="td-bg">Bộ nhớ trong</td>
                                                        <td class="td-bg">{{$product->memory}}</td>
                                                    </tr>
                                                    <tr class="odd">
                                                        <td>Thẻ nhớ</td>
                                                        <td>{{$product->memory_card}}</td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td class="td-bg">Dung lượng pin</td>
                                                        <td class="td-bg">{{$product->pin}}</td>
                                                    </tr>
                                                    
												</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane" id="review">
										<div class="row tab-review-row">
											<div class="col-xs-5 col-sm-4 col-md-4 col-lg-3 padding-5">
												<div class="tab-rating-box">
													<span>Grade</span>
													<div class="rating-box">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-half-empty"></i>
													</div>
													<div class="review-author-info">
														<strong>write A REVIEW</strong>
														<span>06/22/2015</span>
													</div>
												</div>
											</div>
											<div class="col-xs-7 col-sm-8 col-md-8 col-lg-9 padding-5">
												<div class="write-your-review">
													<p>
														<strong>write A REVIEW</strong>
													</p>
													<p>write A REVIEW</p>
													<span class="usefull-comment">Was this comment useful to you?
														<span>Yes</span>
														<span>No</span>
													</span>
													<a href="#">Report abuse </a>
												</div>
											</div>
											<a href="#" class="write-review-btn">Write your review!</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- SINGLE-PRODUCT INFO TAB END -->
					
				</div>
				<!-- RIGHT SIDE BAR START -->
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<!-- SINGLE SIDE BAR START -->
					<div class="single-product-right-sidebar">
                            <h2 class="left-title">Product</h2>
                            <ul>
                                @foreach($products_category as $product_cat)
                                <li>
                                    <a href="{{route('web.product.single',$product_cat->slug)}}">
                                    <img src="storage/{{$product_cat->image}}" style="max-width:80px" alt="" />
                                    </a>
                                    <div class="r-sidebar-pro-content">
                                        <h5>
                                            <a href="{{route('web.product.single',$product_cat->slug)}}">{{$product_cat->name}}</a>
                                        </h5>
                                    <p>{{number_format($product->price)}} VND</p>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
					<!-- SINGLE SIDE BAR END -->
					<!-- SINGLE SIDE BAR START -->
					<div class="single-product-right-sidebar clearfix">
						<h2 class="left-title">Tags </h2>
						<div class="category-tag">
							<a href="#">{{$product->categorylist->name}}</a>
							<a href="#">{{$product->operating_system}}</a>
							<a href="#">{{$product->cpu}}</a>
						</div>
					</div>
					<!-- SINGLE SIDE BAR END -->
					<!-- SINGLE SIDE BAR START -->

				</div>
				<!-- SINGLE SIDE BAR END -->
			</div>
		</div>
    </section>
@endsection