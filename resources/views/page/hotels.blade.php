@extends('layouts.page.default')

@section('content')
    <section class="header-video">
        <div id="title" class="text-white">
            <div class="container-fluid">
                <div class="row align-items-center mt-2">
                    <div class="col-3">
                        <a href="{{route('home_path')}}"><img src="{{asset('images/logos/logo-gotoperu-ave-w.png')}}" alt="" class="img-fluid"></a>
                    </div>
                    <div class="col">
                        <i class="text-g-yellow">Top recommended Peru Travel Operator since 2009</i>
                    </div>
                    <div class="col-3 text-right sticky-top">
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

                <img src="{{asset('images/slider/package-1.jpg')}}" alt="" id="hero-vid">

        </div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row content-header-row align-items-center">

                    <div class="col">
                        {{--<div class="row justify-content-center">--}}
                            {{--<div class="col-4">--}}
                                {{--<div class="row no-gutters">--}}
                                    {{--<div class="col">--}}
                                        {{--<img src="{{asset('images/icons/include/assistances.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Assistances">--}}
                                        {{--<span>Assistances</span>--}}
                                    {{--</div>--}}

                                    {{--<div class="col">--}}
                                        {{--<img src="{{asset('images/icons/include/entrances.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Entrances">--}}
                                        {{--<span>Entrances</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="col">--}}
                                        {{--<img src="{{asset('images/icons/include/transfers.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Transfers">--}}
                                        {{--<span>Transfers</span>--}}
                                    {{--</div>--}}

                                    {{--<div class="col">--}}
                                        {{--<img src="{{asset('images/icons/include/hotels.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Hotels">--}}
                                        {{--<span>Hotels</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="col">--}}
                                        {{--<img src="{{asset('images/icons/include/tours.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Tours">--}}
                                        {{--<span>Tours</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="col">--}}
                                        {{--<img src="{{asset('images/icons/include/trains.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Trains">--}}
                                        {{--<span>Trains</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row mt-2">--}}
                        {{--<div class="col text-white text-center">--}}
                        {{--<h4 class="h5 font-weight-light text-g-yellow">Top recommended Peru Travel Company</h4>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        <div class="row my-3 justify-content-center">
                            <p class="text-white display-4 font-weight-light">HOTELS</p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-6 text-center">

                                <a href="" class="text-white">
                                    <i class="fa fa-4x fa-chevron-circle-down font-weight-light"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <nav class="nav nav-pills nav-fill nav-goto navbar-expand-lg d-none d-sm-flex sticky-top">
        {{--<a class="nav-item nav-link active" href="#">Active</a>--}}
        <a class="nav-item nav-link text-light border-primary" href="{{route('packages_path')}}">TOURS PACKAGES</a>
        <a class="nav-item nav-link text-light border-g-green" href="{{route('destinations_path')}}">DESTINATIONS</a>
        <a class="nav-item nav-link text-light border-danger" href="{{route('about_path')}}">ABOUT US</a>
        <a class="nav-item nav-link text-light border-success" href="{{route('getting_path')}}">GETTING TO PERU</a>
        <a class="nav-item nav-link text-light border-g-yellow" href="{{route('testimonials_path')}}">TESTIMONIALS</a>
        <a class="nav-item nav-link text-light bg-g-yellow border-g-dark" href="#Inquire">INQUIRE</a>
        {{--<a class="nav-item nav-link disabled" href="#">Disabled</a>--}}
    </nav>

    <section class="bg-white">
        <div class="container-fluid">
            <div class="row pt-5 pb-2">
                <div class="col">
                    <h1 class="text-secondary h4"><strong>HOTELS</strong></h1>
                    {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                    {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                    {{--<p class="h4 font-weight-light">Offering you an authentic and reliable <strong>travel experience</strong> in peru welcoming you to explore the many fully <strong>Customized Travel Packages</strong> we have that suit every budget. let us plan your unforgettable <strong>trip</strong> to our majestic <strong>Machu Picchu</strong> and the rest of our  homeland… Peru!</p>--}}
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container-fluid">
            <div class="row pb-5">
                <div class="col-4">
                    <img src="https://www.peruforless.com/content-files/uploads/vi-marriott-hotel-lima.jpg" alt="" class="w-100">
                </div>
                <div class="col">
                    <h3>JW Marriott Lima Hotel</h3>
                    <i class="fa fa-star text-g-yellow"></i>
                    <i class="fa fa-star text-g-yellow"></i>
                    <i class="fa fa-star text-g-yellow"></i>
                    <p class="pt-2"><i class="fa fa-map-marker-alt"></i> Avenida Malecon de la Reserva 615, Miraflores, Lima</p>
                    <a href="" class="btn btn-outline-secondary">JW Marriott Lima Hotel</a>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-4">
                    <img src="https://www.peruforless.com/content-files/uploads/vi-marriott-hotel-lima.jpg" alt="" class="w-100">
                </div>
                <div class="col">
                    <h3>JW Marriott Lima Hotel</h3>
                    <i class="fa fa-star text-g-yellow"></i>
                    <i class="fa fa-star text-g-yellow"></i>
                    <i class="fa fa-star text-g-yellow"></i>
                    <p class="pt-2"><i class="fa fa-map-marker-alt"></i> Avenida Malecon de la Reserva 615, Miraflores, Lima</p>
                    <a href="" class="btn btn-outline-secondary">JW Marriott Lima Hotel</a>
                </div>
            </div>
        </div>
    </section>

@stop