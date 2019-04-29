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
                        <div class="row my-3 justify-content-center text-white font-weight-bold">
                            <small class="d-block">PERU TRAVEL PACKAGES BY CATEGORY</small>
                        </div>
                        <div class="row my-3 justify-content-center text-white font-weight-bold h2">
                            {{$category_t}}
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
                    {{Breadcrumbs::render('packages')}}
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container">
            <div class="row pt-4">
                <div class="col">
                    <h1 class="text-g-yellow font-weight-bold text-center">{{ucwords(strtolower($category_t))}}</h1>
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
            <div class="row pt-5">
                <div class="col-3 d-none col-sm-12 d-md-flex col-md-4 col-lg-3">
                    <ul class="list-group list-group-flush">
                        @foreach($all_category as $all_categorys)
                            <li class="list-group-item font-weight-bold pl-0"><a href="{{route('category_show_path', str_replace(' ', '-', strtolower($all_categorys->nombre)))}}" class="text-secondary stretched-link"><i class="fas fa-chevron-right"></i> {{ucwords(strtolower($all_categorys->nombre))}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-8 col-lg-9">
                    <div class="row">
                        @foreach($categorias as $categorias)
                            @if (isset($categorias->categoria))
                                <div class="col-12 mb-4 col-sm-12 mb-sm-4 col-md-12 mb-md-4 col-lg-6">
                                    <div class="bg-light shadow-sm rounded">
                                        <div class="row align-items-center no-gutters">
                                            <div class="col-12">
                                                <div class="position-relative">
                                                    <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($categorias->paquete->titulo)), $categorias->paquete->duracion])}}">
                                                        <img src="{{asset('images/mapas/'.$categorias->paquete->codigo.'.jpg')}}" alt="" class="w-100 rounded-left">
                                                        <div class="position-absolute-bottom p-2 text-center">
                                                            <span class="small font-weight-bold badge badge-g-green shadow">{{$categorias->categoria->nombre}}</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-12 text-center mt-2">
                                                <div class="px-3">
                                                    <h2 class="h6 font-weight-bold">{{$categorias->paquete->titulo}}</h2>
                                                    <small class="text-muted font-weight-bold">{{$categorias->paquete->duracion}} days</small>
                                                    @foreach($categorias->paquete->precio_paquetes as $precio)
                                                        @if($precio->estrellas == 2)
                                                            @if($precio->precio_d > 0)
                                                                {{--                                                                <p class="text-info font-weight-bold m-0 h5"><small><sup>form $</sup></small>{{$precio->precio_d}}<small>USD</small></p>--}}
                                                                <div class="display-4 font-weight-bold"><sup>$</sup>{{$precio->precio_d}}</div>
                                                            @else
                                                                <span class="text-danger">Inquire</span>
                                                            @endif
                                                        @endif
                                                    @endforeach

                                                    <div class="row my-3 justify-content-center">
                                                        <div class="col-6">
                                                            <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($categorias->paquete->titulo)), $categorias->paquete->duracion])}}" class="btn btn-g-yellow btn-block font-weight-bold">Inquire Now</a>
                                                        </div>
                                                        {{--<div class="col">--}}
                                                            {{--<a href="" class="btn btn-g-green btn-block">Book Now</a>--}}
                                                        {{--</div>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.page.form-quote')

@stop