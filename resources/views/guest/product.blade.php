@extends('layout.main') 
@section('content')
<!-- Title Page -->
<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/heading-pages-02.jpg);">
	<h2 class="l-text2 t-center">
		Women
	</h2>
	<p class="m-text13 t-center">
		New Arrivals Women Collection 2018
	</p>
</section>
<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
				<div class="leftbar p-r-20 p-r-0-sm">
					<!--  -->
					<h4 class="m-text14 p-b-7">
						Categories
					</h4>
					<ul class="p-b-54">
						<li class="p-t-4">
							<a href="#" class="s-text13 active1">
							All
							</a>
						</li>
						@foreach($categories as $item)
						<li class="p-t-4">
							<a href="{{ route('guest.category',['slug' => $item->slug])}}" class="s-text13">
							{{$item->name}}
							</a>
						</li>
						@endforeach
					</ul>
					<!--  -->
					<h4 class="m-text14 p-b-32">
						Filters
					</h4>
					<div class="search-product pos-relative bo4 of-hidden">
						<form action="{{route('guest.search')}}" method="get">
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search" placeholder="Search Products...">
							<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
							<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
				<!--  -->
				<div class="flex-sb-m flex-w p-b-35">
					<div class="flex-w">
						<div class="rs2-select2 rs3-select2 bo4 of-hidden">
							<select class="selection-2 form-control" name="size" style="border: none">
								<option>Price</option>
								<option>$0.00 - $50.00</option>
								<option>$50.00 - $100.00</option>
								<option>$100.00 - $150.00</option>
								<option>$150.00 - $200.00</option>
								<option>$200.00+</option>
							</select>
						</div>
					</div>
					<!-- <span class="s-text8 p-t-5 p-b-5">
						Showing 1–12 of 16 results
						</span> -->
				</div>
				<!-- Product -->
				<div class="row">
					@foreach($products as $product)
					<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
								<img src="{{ URL::asset('images/'.$product->main_image)}}" alt="IMG-PRODUCT">
								<div class="block2-overlay trans-0-4">
									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
									<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
									<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>
									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
										Add to Cart
										</button>
									</div>
								</div>
							</div>
							<div class="block2-txt p-t-20">
								<a href="{{ route('guest.product_detail',['id' => $product->id])}}" class="block2-name dis-block s-text3 p-b-5">
								{{$product->name}}
								</a>
								<span class="block2-price m-text6 p-r-5">
								{{$product->price}}
								</span>
							</div>
						</div>
					</div>
					@endforeach
					<!-- Pagination -->
				</div>
			</div>
		</div>
	</div>
</section>
@endsection