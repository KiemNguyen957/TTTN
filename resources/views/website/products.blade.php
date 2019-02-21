@extends('website.layout.master')
@section('title','Sản phẩm')
@section('phone_active','active')
@section('content')
<section class="main-content-section">
		<div class="container">
			<div class="row" style=" padding-top: 50px;">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<div class="product-single-sidebar">
							<span class="sidebar-title">Danh mục</span>
							<ul class="">
								@foreach($categorylist as $category)
								<li>
									<i class=""></i>
									<a @if($category->id==$listproduct[0]->category_id){{'style=color:#FF4F4F'}}@endif href="{{route('web.catelogs',$category)}}">{{$category->name}}</a>
								</li>
								@endforeach
							</ul>
						</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					<div class="right-all-product">
						<div class="product-shooting-area">
						</div>
					</div>
					<!-- ALL GATEGORY-PRODUCT START -->
					<div class="all-gategory-product">
						<div class="row">
							<ul class="gategory-product">
								@if(isset($listproduct))
								@foreach($listproduct as $product)
								{{-- {{dd($product)}} --}}
								<li class="gategory-product-list col-lg-4 col-md-4 col-sm-6 col-xs-12" style="padding-right: 50px;">
									<div class="single-product-item">
										<div class="product-image">
											<a href="{{route('web.product.single',['id'=>$product->id,'name'=>$product->name])}}"><img src="storage/{{$product->image}}" alt="product-image" /></a>
											<span class="new-mark-box">-{{$product->sale}}%</span>
											<div class="overlay-content">
												<ul>
													<li><a href="{{route('web.cart.add',$product->id)}}" title="add to cart"><i class="fa fa-shopping-cart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="product-info" style="padding: 15px;">
											<a href="{{route('web.product.single',['id'=>$product->id,'name'=>$product->name])}}">{{$product->name}}</a>
											<div class="price-box">
												<span class="price">{{number_format($product->price)}}VND</span>
											</div>
										</div>
									</div>									
								</li>
								@endforeach	
								@endif					
							</ul>
						</div>
					</div>
					{{$listproduct->links()}}
					<!-- ALL GATEGORY-PRODUCT END -->
					
				</div>
			</div>
		</div>
	</section>
@endsection