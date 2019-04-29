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

            <img src="{{asset('images/banners/itinerary/GTP40.jpg')}}" alt="" id="hero-vid" class="banner-itinerary">
{{--            @include('layouts.page.menu-custom')--}}
        </div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row content-header-row align-items-center">

                    <div class="col">

                        <div class="row my-3 justify-content-center text-white font-weight-bold h2">
                            {{$duration}} Days Tours
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

    <section class="bg-white m-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col small font-weight-bold">
                    @php
                        $rango = explode('-',$duration);
                            @endphp
                    {{Breadcrumbs::render('packages_rango', $rango[0], $rango[1])}}
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container">
            <div class="row py-4">
                <div class="col">
                    <h1 class="text-g-yellow font-weight-bold text-center">PERU TRAVEL <span class="text-g-green">FEATURED PACKAGES</span></h1>
                    <p class="lead">our most popular <strong>Peru and South America itineraries</strong>, these <strong>packages</strong> could be used as a reference to customize your own trip. At <strong>GOTOPERU</strong> we specialize in crafting personalize experiences based on your preferences; we invited to review these programs to have glimpse of the most important destinations for instance MachuPicchu, Lake Titicaca, Nazca and the Amazon.</p>
                    <div class="alert alert-primary text-center m-0" role="alert">
                        <h4>And even multi countries travel adventures involving Brasil, Ecuador , Argentina.</h4>
                    </div>
                    {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                    {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                    {{--<p class="h4 font-weight-light">Offering you an authentic and reliable <strong>travel experience</strong> in peru welcoming you to explore the many fully <strong>Customized Travel Packages</strong> we have that suit every budget. let us plan your unforgettable <strong>trip</strong> to our majestic <strong>Machu Picchu</strong> and the rest of our  homeland… Peru!</p>--}}
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white pb-5">
        <div class="container">
            <div class="row sticky-top d-none d-sm-flex">
                <div class="col">
                    <a class="btn btn-g-dark btn-block text-white font-weight-bold" href="{{route('packages_durations_path', ['3', '5'])}}">3-5 <span class="text-g-yellow font-weight-bold">days</span></a>
                </div>
                <div class="col">
                    <a class="btn btn-g-dark btn-block text-white font-weight-bold" href="{{route('packages_durations_path', ['6', '8'])}}">6-8 <span class="text-g-yellow font-weight-bold">days</span></a>
                </div>
                <div class="col">
                    <a class="btn btn-g-dark btn-block text-white font-weight-bold" href="{{route('packages_durations_path', ['9', '11'])}}">9-11 <span class="text-g-yellow font-weight-bold">days</span></a>
                </div>
                <div class="col">
                    <a class="btn btn-g-dark btn-block text-white font-weight-bold" href="{{route('packages_durations_path', ['12', '15'])}}">12-15 <span class="text-g-yellow font-weight-bold">days</span></a>
                </div>
                <div class="col">
                    <a class="btn btn-g-dark btn-block text-white font-weight-bold" href="{{route('packages_durations_path', ['16', '30'])}}">16+ <span class="text-g-yellow font-weight-bold">days</span></a>
                </div>
            </div>
                        <div class="row mt-4">

                            @foreach($paquetes->sortBy('duracion') as $paquete)
                                <div class="col-12 mb-4 col-sm-12 mb-sm-4 col-md-12 mb-md-4 col-lg-6">
                                    <div class="bg-light shadow-sm rounded">
                                        <div class="row align-items-center no-gutters">
                                            <div class="col-12 col-sm-7">
                                                <div class="position-relative">
                                                    <img src="{{asset('images/mapas/'.$paquete->codigo.'.jpg')}}" alt="" class="w-100 rounded-left">
                                                    <div class="position-absolute-bottom p-2 text-center">
                                                        @foreach($paquete->paquetes_categoria as $paquetes_categorias)
                                                        <span class="small font-weight-bold badge badge-g-yellow shadow">{{$paquetes_categorias->categoria->nombre}}</span>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-3 mt-sm-0 col-sm-5 text-center">
                                                <div class="px-3">
                                                    <h2 class="h6 font-weight-bold">{{$paquete->titulo}}</h2>
                                                    <small class="text-muted font-weight-bold">{{$paquete->duracion}} days</small>
                                                    @foreach($paquete->precio_paquetes as $precio)
                                                        @if($precio->estrellas == 2)
                                                            @if($precio->precio_d > 0)
                                                                {{--                                                                <p class="text-info font-weight-bold m-0 h5"><small><sup>form $</sup></small>{{$precio->precio_d}}<small>USD</small></p>--}}
                                                                <div class="display-4 font-weight-bold"><sup>$</sup>{{$precio->precio_d}}</div>
                                                            @else
                                                                <span class="text-danger">Inquire</span>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                    <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquete->titulo)), $paquete->duracion])}}" class="btn btn-g-yellow btn-block">Inquire</a>
                                                    {{--<a href="" class="btn btn-g-green btn-block">Book Now</a>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>


        </div>
    </section>
    @include('layouts.page.form-quote')
@stop