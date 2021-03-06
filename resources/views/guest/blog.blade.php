@extends('layout.main') 
@section('content')
<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading-pages-05.jpg);">
		<h2 class="l-text2 t-center">
			Blog
		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-60">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-75">
					<div class="p-r-50 p-r-0-lg">
					<!-- item blog -->
						@foreach($blogs as $blog)
							
							<div class="item-blog p-b-80">
								<a href="{{ route('guest.blog_detail')}}?id={{$blog->id}}" class="item-blog-img pos-relative dis-block hov-img-zoom">
									<img src="{{URL::asset('images/'.$blog->url)}}" alt="IMG-BLOG">

									<span class="item-blog-date dis-block flex-c-m pos1 size17 bg4 s-text1">
										{{$blog->time}}
									</span>
								</a>

								<div class="item-blog-txt p-t-33">
									<h4 class="p-b-11">
										<a href="{{ route('guest.blog_detail')}}?id={{$blog->id}}" class="m-text24">
											{{$blog->title}}
										</a>
									</h4>

									<div class="s-text8 flex-w flex-m p-b-21">
										<span>
											{{$blog->name}}
											<span class="m-l-3 m-r-6">|</span>
										</span>

										<span>
											Cooking, Food
											<span class="m-l-3 m-r-6">|</span>
										</span>

										<span>
											8 Comments
										</span>
									</div>

									<p class="p-b-12">
										{{$blog->describe}}
									</p>

									<a href="{{ route('guest.blog_detail')}}?id={{$blog->id}}" class="s-text20">
										Continue Reading
										<i class="fas fa-arrow-right m-l-8" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						@endforeach
					</div>

					<!-- Pagination -->
					<!-- <div class="pagination flex-m flex-w p-r-50">
						<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
						<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
					</div> -->
				</div>

				<div class="col-md-4 col-lg-3 p-b-75">
					<div class="rightbar">
						<!-- Search -->
						<div class="pos-relative bo11 of-hidden">
							<form action="{{route('guest.searchBlog')}}" method="get">
								<input class="s-text7 size16 p-l-23 p-r-50" type="text" name="search" placeholder="Search">

								<button class="flex-c-m size5 ab-r-m color1 color0-hov trans-0-4">
									<i class="fs-13 fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>

						<!-- Categories -->
						<h4 class="m-text23 p-t-56 p-b-34">
							Categories
						</h4>

						<ul>
						@foreach($categories as $category)
							<li class="p-t-6 p-b-8 bo6">
								<a href="#" class="s-text13 p-t-5 p-b-5">
									{{$category->name}}
								</a>
							</li>@endforeach
						</ul>

						<!-- Featured Products -->
						<h4 class="m-text23 p-t-65 p-b-34">
							Featured Products
						</h4>

						<ul class="bgwhite">
							@foreach($product as $item)
							<li class="flex-w p-b-20">
								<a href="" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
									<img src="{{ URL::asset('images/'.$item->main_image)}}" alt="IMG-PRODUCT">
								</a>

								<div class="w-size23 p-t-5">
									<a href="" class="s-text2White0">
										{{'$item->name'}}
									</a>

									<span class="dis-block s-text17 p-t-6">
									{{$item->price}}
									</span>
								</div>
							</li>@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection