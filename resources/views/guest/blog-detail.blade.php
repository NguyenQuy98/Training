@extends('layout.main') 
@section('content')
<!-- breadcrumb -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
    <a href="{{ route('guest.home')}}" class="s-text16">
        Home
        <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
    </a>

    <a href="{{ route('guest.blog')}}" class="s-text16">
        Blog
        <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
    </a>

    <span class="s-text17">
    @foreach($blogDetail as $item)
        {{$item->title}}
    @endforeach
    </span>
</div>

<!-- content page -->
<section class="bgwhite p-t-60 p-b-25">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-9 p-b-80">
                <div class="p-r-50 p-r-0-lg">
                @foreach($blogDetail as $item)
                    <div class="p-b-40">
                        <div class="blog-detail-img wrap-pic-w">
                            <img src="{{URL::asset('images/'.$item->url)}}" alt="IMG-BLOG">
                        </div>

                        <div class="blog-detail-txt p-t-33">
                            <h4 class="p-b-11 m-text24">
                            {{$item->title}}
                            </h4>

                            <div class="s-text8 flex-w flex-m p-b-21">
                                <span>
                                {{$item->name}}
                                    <span class="m-l-3 m-r-6">|</span> 
                                </span>

                                <span>
                                {{$item->time}}
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

                            <p class="p-b-25">
                            {{$item->describe}}   
                            </p>								
                        </div>

                        <div class="flex-m flex-w p-t-20">
                            <span class="s-text20 p-r-20">
                                Tags
                            </span>

                            <div class="wrap-tags flex-w">
                                <a href="#" class="tag-item">
                                    Streetstyle
                                </a>

                                <a href="#" class="tag-item">
                                    Crafts
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                    <!-- Leave a comment -->
                    <form class="leave-comment">
                        <h4 class="m-text25 p-b-14">
                            Leave a Comment
                        </h4>

                        <p class="s-text8 p-b-40">
                            Your email address will not be published. Required fields are marked *
                        </p>

                        <textarea class="dis-block s-text7 size18 bo12 p-l-18 p-r-18 p-t-13 m-b-20" name="comment" placeholder="Comment..."></textarea>
                        
                        <div class="bo12 of-hidden size19 m-b-20">
                            <input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="name" placeholder="Name *">
                        </div>

                        <div class="bo12 of-hidden size19 m-b-20">
                            <input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="email" placeholder="Email *">
                        </div>

                        <div class="bo12 of-hidden size19 m-b-30">
                            <input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="website" placeholder="Website">
                        </div>

                        <div class="w-size24">
                            <!-- Button -->
                            <button class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                Post Comment
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-4 col-lg-3 p-b-80">
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