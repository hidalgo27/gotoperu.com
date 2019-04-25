@extends('layouts.page.default')
@section('content')

    <section class="header-video d-none d-md-block">
        @include('layouts.page.header')
        <div id="overlay" class="overlay-img">
            {{--<video class="" id="hero-vid" poster="{{asset('images/slider/package-1.jpg')}}" autoplay loop muted>--}}
            {{--<source src="{{asset('media/video6.mp4')}}" />--}}
            {{--<source src="{{asset('media/video6.m4v')}}" type="video/mp4" />--}}
            {{--<source src="{{asset('media/video6.webm')}}" type="video/webm" />--}}
            {{--<source  src="{{asset('media/video6.ogv')}}" type="video/ogg" />--}}
            {{--</video>--}}

            <img src="{{asset('images/banners/itinerary/GTP40.webp')}}" alt="" id="hero-vid" class="banner-itinerary">
            {{--            @include('layouts.page.menu-custom')--}}
        </div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row content-header-row align-items-center">

                    <div class="col">

                        <div class="row my-3 justify-content-center text-white font-weight-bold h2">
                            VIDEO TESTIMONIALS
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-6 text-center">
                                <a href="#content-page" class="text-white">
                                    <i data-feather="chevron-down" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('layouts.page.menu')
    {{--<section class="d-md-none">--}}
        {{--<div class="container-fluid p-0">--}}
            {{--<div class="row no-gutters">--}}
                {{--<div class="col">--}}
                    {{--<img data-src="{{asset('images/banners/itinerary/GTP40.jpg')}}" data-srcset="{{asset('images/banners/itinerary/GTP40.jpg')}}" alt="machu picchu" class="img-fluid lazy has-webp">--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    <section class="bg-white m-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col small font-weight-bold">
                    {{Breadcrumbs::render('packages')}}
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container">
            <div class="row py-4">
                <div class="col">
                    <h1 class="text-g-yellow font-weight-bold text-center">Video <span class="text-g-green">testimonials</span></h1>
                    <p class="lead m-0">Our biggest rewards are to have satisfied clients share their experience with us. Below are a few testimonials that we would like to share with you!  would you like to be next...camera, action!</p>
                    {{--<div class="alert alert-g-yellow text-center m-0" role="alert">--}}
                    {{--<h4>And even multi countries travel adventures involving Brasil, Ecuador , Argentina.</h4>--}}
                    {{--</div>--}}
                    {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                    {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                    {{--<p class="h4 font-weight-light">Offering you an authentic and reliable <strong>travel experience</strong> in peru welcoming you to explore the many fully <strong>Customized Travel Packages</strong> we have that suit every budget. let us plan your unforgettable <strong>trip</strong> to our majestic <strong>Machu Picchu</strong> and the rest of our  homeland… Peru!</p>--}}
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white pb-5">
        <div class="container">


            <div class="row">
                @foreach($testimonio_video as $testimonio_videos)
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="{{$testimonio_videos->codigo}}">
                            <div class="position-relative">
                                <img src="{{asset('images/video-tertimonio/'.$testimonio_videos->imagen.'')}}" alt="" class="w-100 shadow-sm rounded">
                                <div class="position-absolute-bottom text-white p-3 icon-play">
                                    <i class="fas fa-play fa-2x"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>


        </div>
        </div>
    </section>

    @include('layouts.page.form-quote')

@stop
@push("scripts")
    <script>
        $(document).ready(function(){
            $('.venobox').venobox();
        });
    </script>
@endpush