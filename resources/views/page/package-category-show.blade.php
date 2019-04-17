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
                            PERU TRAVEL PACKAGES BY CATEGORY
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

    @include('layouts.page.menu-2')
    <section class="d-md-none">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col">
                    <img data-src="{{asset('images/banners/itinerary/GTP40.jpg')}}" data-srcset="{{asset('images/banners/itinerary/GTP40.jpg')}}" alt="machu picchu" class="img-fluid lazy has-webp">
                </div>
            </div>
        </div>
    </section>

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
                    <h1 class="text-g-yellow font-weight-bold text-center">PERU TRAVEL <span class="text-g-green">PACKAGES BY CATEGORY</span></h1>
                    <p class="lead m-0">our most popular <b>Peru and South America itineraries</b>, these <strong>packages</strong> could be used as a reference to customize your own trip. At <strong>GOTOPERU</strong> we specialize in crafting personalize experiences based on your preferences; we invited to review these programs to have glimpse of the most important destinations for instance MachuPicchu, Lake Titicaca, Nazca and the Amazon and even multi countries travel adventures involving <strong>Brasil, Ecuador , Argentina.</strong></p>
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
                @foreach($paquete_categoria as $paquete_categorias)
                    @if(isset($paquete_categorias->categoria))
                        @foreach($paquete->where('id',$paquete_categorias->idpaquetes) as $paquetes)
                            <div class="col-6 text-decoration-none mb-5">
                                <div class="bg-light shadow-sm rounded">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-12">
                                            <div class="position-relative">
                                                <img src="{{asset('images/mapas/'.$paquetes->codigo.'.jpg')}}" alt="" class="w-100 rounded-left">
                                                <div class="position-absolute-bottom p-2 text-center">
                                                    @foreach($paquetes->paquetes_categoria as $paquetes_categorias)
                                                        <span class="small font-weight-bold badge badge-g-yellow shadow">{{$paquetes_categorias->categoria->nombre}}</span>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center mt-2">
                                            <div class="px-3">
                                                <h2 class="h6 font-weight-bold">{{$paquetes->titulo}}</h2>
                                                <small class="text-muted font-weight-bold">{{$paquetes->duracion}} days</small>
                                                @foreach($paquetes->precio_paquetes as $precio)
                                                    @if($precio->estrellas == 3)
                                                        @if($precio->precio_d > 0)
                                                            {{--                                                                <p class="text-info font-weight-bold m-0 h5"><small><sup>form $</sup></small>{{$precio->precio_d}}<small>USD</small></p>--}}
                                                            <div class="display-4 font-weight-bold"><sup>$</sup>{{$precio->precio_d}}</div>
                                                        @else
                                                            <span class="text-danger">Inquire</span>
                                                        @endif
                                                    @endif
                                                @endforeach
                                                <div class="row my-3">
                                                    <div class="col">
                                                        <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquetes->titulo)), $paquetes->duracion])}}" class="btn btn-g-yellow btn-block">Inquire</a>
                                                    </div>
                                                    <div class="col">
                                                        <a href="" class="btn btn-g-green btn-block">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    @include('layouts.page.form-quote')

@stop