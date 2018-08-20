@extends('layout.main') 
@section('content')
<!-- Title Page -->
@foreach($heading_pages as $item)
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url({{URL::asset('images/'.$item->url)}})">
    <h2 class="l-text2 t-center">
        About
    </h2>
</section>
@endforeach
<!-- content page -->
<section class="bgwhite p-t-66 p-b-38">
    @foreach($abouts as $about)
        <div class="container">
            <div class="row">
                <div class="col-md-4 p-b-30">
                    <div class="hov-img-zoom">
                        <img src="{{URL::asset('images/'.$about->image)}}" alt="IMG-ABOUT">
                    </div>
                </div>

                <div class="col-md-8 p-b-30">
                    <h3 class="m-text26 p-t-15 p-b-16">
                       {{$about->title}}
                    </h3>

                    <p class="p-b-28">
                        {{$about->content}}
                    </p>

                    <div class="bo13 p-l-29 m-l-9 p-b-10">
                        <!-- <p class="p-b-11">
                            Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn't really do it, they just saw something. It seemed obvious to them after a while.
                        </p> -->

                        <span class="s-text7">
                            {{$about->name}}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</section>
@endsection