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
								
								@foreach($categorylists as $category)
								
								<li>
									<i class=""></i>
								<a @if($categorylist->id==$category->id){{'style=color:red'}}@endif href="{{route('web.catelogs',$category->slug)}}">{{$category->name}}</a>
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
											<a href="{{route('web.product.single',$product->slug)}}"><img src="storage/{{$product->image}}" alt="product-image" /></a>
											@if($product->sale!=0)<span class="new-mark-box">-{{$product->sale}}%</span>@endif
											<div class="overlay-content">
												<ul>
													<li><a href="" data-id="{{$product['id']}}" title="add to cart" class="add_cart"><i class="fa fa-shopping-cart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="product-info" style="padding: 15px;">
											<a href="{{route('web.product.single',$product->slug)}}">{{$product->name}}</a>
											<div class="price-box">
												<span class="price">{{number_format(($product->price*(100-$product->sale)/100))}} VND</span>
												@if($product->sale!=0)<span class="old-price">{{number_format($product->price)}} vnd</span>@endif
											</div>
										</div>
									</div>									
								</li>
								@endforeach	
													
							</ul>
						</div>
					</div>
					{{$listproduct->links()}}
					@endif
					<!-- ALL GATEGORY-PRODUCT END -->
					
				</div>
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