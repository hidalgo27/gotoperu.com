@extends('layouts.page.default')
@section('content')

    {{--<section class="mb-4">--}}
    {{--<img src="https://gotoperu.com/img/slider/testimonials.jpg" alt="" class="w-100">--}}
    {{--</section>--}}

    <section class="header-video d-none d-md-block">
        <div id="title" class="text-white">
            <div class="container-fluid">
                <div class="row align-items-center mt-2">
                    <div class="col-md-6 col-lg-3">
                        <a href="{{route('home_path')}}"><img src="{{asset('images/logos/logo-gotoperu-ave-w.png')}}" alt="" class="img-fluid"></a>
                    </div>
                    <div class="col d-none d-xl-flex">
                        <i class="text-white">Top recommended Peru Travel Operator since 2006</i>
                    </div>
                    <div class="col-md col-lg text-right sticky-top">
                        <a href="tel:+2029963000" class="mx-3 h4">(202) 996-3000</a>
                        <a href="#" class="mx-3 h2"  data-toggle="modal" data-target="#modal-menu"><i class="fa fa-bars"></i></a>
                        <!-- Button trigger modal -->
                    </div>
                </div>
            </div>
        </div>
        <div id="overlay" class="overlay-img">
            {{--<video class="" id="hero-vid" poster="{{asset('images/slider/package-1.jpg')}}" autoplay loop muted>--}}
            {{--<source src="{{asset('media/video6.mp4')}}" />--}}
            {{--<source src="{{asset('media/video6.m4v')}}" type="video/mp4" />--}}
            {{--<source src="{{asset('media/video6.webm')}}" type="video/webm" />--}}
            {{--<source  src="{{asset('media/video6.ogv')}}" type="video/ogg" />--}}
            {{--</video>--}}

            <img src="{{asset('images/destinations/peru.jpg')}}" alt="" id="hero-vid">

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

    @include('layouts.page.menu')

@stop