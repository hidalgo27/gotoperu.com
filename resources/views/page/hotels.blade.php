@extends('layouts.page.default')

@section('content')
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

                <img src="{{asset('images/hotels.jpg')}}" alt="" id="hero-vid">
{{--            <img src="{{asset('images/logos/logo-expedia2.png')}}" alt="" class="header-expedia">--}}
            <div class="header-expedia text-white">
                <p class="p-4">4 <span class="text-g-yellow">Stars </span> Casa Andina Premium - Cusco</p>
            </div>
        </div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row content-header-row align-items-center">

                    <div class="col">

                        <div class="row my-3 justify-content-center">
                            <p class="text-white display-4 font-weight-light">HOTELS</p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-6 text-center">

                                <a href="#content-page" class="text-white">
                                    <i class="fas fa-chevron-down fa-4x"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('layouts.page.menu')
    <section class="d-md-none">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col">
                    <img src="{{asset('images/hotels.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white m-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    {{Breadcrumbs::render('hotels')}}
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container-fluid">
            <div class="row pt-4 pb-2">
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
            @foreach($hoteles as $hotel)
            <div class="row pb-5">
                <div class="col-12 col-md-3">
                    <img src="{{$hotel->imagen}}" alt="" class="w-100 rounded">
                </div>
                <div class="col">
                    <h3>{{$hotel->nombre}}</h3>
                    @for($i=0; $i < $hotel->estrellas; $i++)
                        <i class="fa fa-star text-g-yellow"></i>
                    @endfor
                    <p class="pt-2"><i class="fa fa-map-marker-alt"></i> {{$hotel->direccion}}</p>
                    <hr>
                    @php $services = explode(',', $hotel->servicios); @endphp
                    <p class="lead"><b>Services:</b>
                    @foreach($services as $service)
                        <i class="fa fa-check text-secondary"></i> {{$service}}
                    @endforeach
                        </p>
                    <hr>
                    <a href="{{$hotel->url}}" class="btn btn-outline-secondary" target="_blank">{{$hotel->nombre}}</a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    @include('layouts.page.form-quote')
@stop