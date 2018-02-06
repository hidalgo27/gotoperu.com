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

            <img src="{{asset('images/destinations/'.$pais.'.jpg')}}" alt="" id="hero-vid">

        </div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row content-header-row align-items-center">

                    <div class="col">

                        <div class="row my-3 justify-content-center">
                            <p class="text-white display-4 font-weight-light">{{strtoupper($pais)}} DESTINATIONS</p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-6 text-center">

                                <a href="#content" class="text-white">
                                    <i class="fa fa-4x fa-chevron-circle-down font-weight-light"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('layouts.page.menu-2')

    <section class="bg-white">
        <div class="container-fluid">
            <div class="row pt-5">
                <div class="col">
                    <h1 class="text-secondary h4"><strong>{{ucwords($pais)}} Destinations</strong></h1>
                    <p class="lead">our most popular <strong>Peru and South America itineraries</strong>, these <strong>packages</strong> could be used as a reference to customize your own trip. At <strong>GOTOPERU</strong> we specialize in crafting personalize experiences based on your preferences; we invited to review these programs to have glimpse of the most important destinations for instance MachuPicchu, Lake Titicaca, Nazca and the Amazon.</p>
                    <div class="alert alert-g-yellow text-center m-0" role="alert">
                        <h4>We will work around your schedule and your travel interests to build together the most unique travel plans</h4>
                    </div>
                    {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                    {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                    {{--<p class="h4 font-weight-light">Offering you an authentic and reliable <strong>travel experience</strong> in peru welcoming you to explore the many fully <strong>Customized Travel Packages</strong> we have that suit every budget. let us plan your unforgettable <strong>trip</strong> to our majestic <strong>Machu Picchu</strong> and the rest of our  homeland… Peru!</p>--}}
                </div>
            </div>
        </div>
    </section>

    <section class="py-4 bg-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col">

                    <div class="sticky-top py-2 text-center bg-white">
                        @foreach($destinos->where('pais',$pais)->sortBy('nombre') as $destino)
                            <a href="{{route('destinations_country_show_path', ['peru-travel', str_replace(' ', '-', strtolower($destino->nombre))])}}-tours"><img src="{{asset('images/destinations/destinations/'.str_replace(' ','-', strtolower($destino->nombre)).'')}}.jpg" alt="" width="60" height="60" class="rounded-circle" data-toggle="tooltip" data-placement="top" title="{{ucwords(strtolower($destino->nombre))}}"></a>
                        @endforeach
                    </div>
                    <div class="row pt-4">
                            @foreach($paquetes_de->unique('idpaquetes') as $paquetes_des)
                                @if(isset($paquetes_des->destinos))
                                    @foreach($paquete->where('id',$paquetes_des->idpaquetes)->sortBy("duracion") as $paquetes)
                                        <div class="col-4 mb-3">
                                            <div class="card mb-3">
                                                <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquetes->titulo)), $paquetes->duracion])}}" class="position-relative">
                                                    <img class="card-img-top " src="{{asset('images/packages/'.$paquetes->codigo.'.jpg')}}" alt="{{(strtolower($paquetes->titulo))}}">

                                                    <div class="card-img-overlay bg-rgba-dark-3 p-0">
                                                        <div class="row justify-content-between no-gutters">
                                                            <div class="col-3 p-3">
                                                                <p class="m-0 text-white">{{$paquetes->duracion}} Days</p>
                                                            </div>
                                                            <div class="col-3 bg-g-dark py-3 text-white text-center">
                                                                @foreach($paquetes->precio_paquetes as $precio)
                                                                    @if($precio->estrellas == 2)
                                                                        @if($precio->precio_d > 0)
                                                                            <p class="text-g-yellow font-weight-bold m-0"><small><sup>form $</sup></small>{{$precio->precio_d}}<small>USD</small></p>
                                                                        @else
                                                                            <span class="text-danger">Inquire</span>
                                                                        @endif
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                        {{--<p class="text-white m-0">{{$paquetes->duracion}} days <span class="text-g-yellow font-weight-bold float-right bg-danger">--}}
                                                        {{--<small><sup>form $</sup></small>{{$precio->precio_d}}<small>USD</small>--}}
                                                        {{--</span></p>--}}
                                                    </div>
                                                    <div class="card-img-overlay-packages">
                                                        <h5 class="card-title text-white m-0">{{ucwords(strtolower($paquetes->titulo))}}</h5>
                                                        {{--<h2 class="card-title text-white m-0 h5"><a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquetes->titulo)), $paquetes->duracion])}}" class="text-dark">{{$paquete->titulo}}</a></h2>--}}
                                                        <small class="text-white font-weight-light">
                                                            <i class="fa fa-map-marker"></i>
                                                            @php
                                                                $i = 1;
                                                                $num_des = count($paquete_destinos->where('idpaquetes',$paquetes->id));
                                                            @endphp
                                                            @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                                                @if(isset($paquete_destino->destinos->nombre))
                                                                    {{ucwords(strtolower($paquete_destino->destinos->nombre))}}@if($i < $num_des),@else.@endif
                                                                    @php $i++; @endphp
                                                                @endif
                                                            @endforeach
                                                        </small>
                                                    </div>
                                                </a>
                                                {{--<div class="card-body">--}}
                                                {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                                                {{--<p class="card-text">--}}
                                                {{----}}
                                                {{--</p>--}}
                                                {{--</div>--}}
                                            </div>
                                        </div>

                                    @endforeach
                                @endif
                            @endforeach
                        </div>

                </div>
            </div>
        </div>
    </section>
    @include('layouts.page.form-quote')
@stop