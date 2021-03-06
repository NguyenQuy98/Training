@extends('layout.main') 
@section('content')

	<!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>

					<div class="slick3">
					@foreach($product_detail->images as $image)
						<div class="item-slick3" data-thumb="{{ URL::asset('images/'.$image['url']) }}">
							<div class="wrap-pic-w">
								<img src="{{ URL::asset('images/'.$image['url']) }}" alt="IMG-PRODUCT">
							</div>
						</div>
					@endforeach
						
					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
			@foreach($product as $image)

				<h4 class="product-detail-name m-text16 p-b-13">
					{{$image->name}}
				</h4>

				<span class="m-text17">
					${{$image->price}}
				</span>

			@endforeach

				<!--  -->
				<div class="p-t-33 p-b-60">
					<div class="flex-m flex-w p-b-10">
						<div class="s-text15 w-size15 t-center">
							Size
						</div>

						<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
							<select class="selection-2 form-control" name="size" style="border: none">
								<option>Choose an option</option>
								@foreach($sizes->size as $item)
								<option>{{$item['name']}}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">
							<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
								<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
								</button>

								<input class="size8 m-text18 t-center num-product" type="number" name="num-product" value="1">

								<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
								</button>
							</div>

							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<!-- Button -->
								<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
									Add to Cart
								</button>
							</div>
						</div>
					</div>
				</div>
				<!--  -->
				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14">
					<h5 class="flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Description
						
					</h5>
					@foreach($product as $item)
					<div>
						<p class="s-text8">
							{{$item->description}}
						</p>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>


	<!-- Relate Product -->
	<section class="relateproduct bgwhite p-t-45 p-b-138">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Related Products
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
					@foreach($products as $item)
					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
								<img src="{{ URL::asset('images/'.$item->main_image) }}" alt="IMG-PRODUCT">

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
								<a href="{{ route('guest.product_detail',['id' => $item->id])}}" class="block2-name dis-block s-text3 p-b-5">
								{{ $item->name}}
								</a>

								<span class="block2-price m-text6 p-r-5">
								{{$item->price}}
								</span>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>

		</div>
	</section>

@endsection