@extends('layouts.page.default')
@section('content')

    {{--<section class="mb-4">--}}
    {{--<img src="https://gotoperu.com/img/slider/testimonials.jpg" alt="" class="w-100">--}}
    {{--</section>--}}

    <section class="header-video d-none d-md-block">

        @include('layouts.page.header')

        <div id="overlay" class="overlay-img">
            {{--<video class="" id="hero-vid" poster="{{asset('images/slider/package-1.jpg')}}" autoplay loop muted>--}}
            {{--<source src="{{asset('media/video6.mp4')}}" />--}}
            {{--<source src="{{asset('media/video6.m4v')}}" type="video/mp4" />--}}
            {{--<source src="{{asset('media/video6.webm')}}" type="video/webm" />--}}
            {{--<source  src="{{asset('media/video6.ogv')}}" type="video/ogg" />--}}
            {{--</video>--}}

            <img src="{{asset('images/destinations/peru.jpg')}}" alt="valle sagrado" id="hero-vid" class="banner-itinerary">
            {{--@include('layouts.page.menu-custom')--}}

        </div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row content-header-row align-items-center">

                    <div class="col">

                        <div class="row my-3 justify-content-center">
                            <div class="col-8 bg-rgba-white p-4 rounded">
                                <div class="row">
                                    <div class="col text-center">
                                        <h1>Travel Agents</h1>
                                        <p class="lead"><i class="fa fa-quote-left"></i> We value your clients and strive to make your job as easy as possible.Please contact our Representative :<i class="fa fa-quote-right"></i></p>
                                        <i class="text-primary font-weight-normal">Martin Catano: martin@gotoperu.com</i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--<div class="row justify-content-center">--}}
                        {{--<div class="col-6 text-center">--}}

                        {{--<a href="#content" class="text-white">--}}
                        {{--<i class="fa fa-4x fa-chevron-circle-down font-weight-light"></i>--}}
                        {{--</a>--}}

                        {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{--@include('layouts.page.menu')--}}

@stop