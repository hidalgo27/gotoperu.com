@extends('layouts.page.default')

@section('content')
    <section class="header-video d-none d-sm-block">
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
        <div id="overlay">
            <video class="" id="hero-vid" poster="{{asset('images/slider/package-1.jpg')}}" autoplay loop muted>
                <source src="{{asset('media/video6.mp4')}}" />
                <source src="{{asset('media/video6.m4v')}}" type="video/mp4" />
                <source src="{{asset('media/video6.webm')}}" type="video/webm" />
                <source  src="{{asset('media/video6.ogv')}}" type="video/ogg" />
            </video>
            {{--<div id="state" class=""><span class="fa fa-pause"></span></div>--}}
            {{--<img id="hero-pic" class="d-none" src="http://www.markhillard.com/sandbox/media/polina.jpg" alt="">--}}
           {{----}}
        </div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row content-header-row align-items-center">

                    <div class="col">
                        <div class="row justify-content-center d-none d-sm-block">
                            <div class="col-4">
                                <div class="row no-gutters">
                                    <div class="col">
                                        <img src="{{asset('images/icons/include/assistances.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Assistances">
                                        {{--<span>Assistances</span>--}}
                                    </div>

                                    <div class="col">
                                        <img src="{{asset('images/icons/include/entrances.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Entrances">
                                        {{--<span>Entrances</span>--}}
                                    </div>
                                    <div class="col">
                                        <img src="{{asset('images/icons/include/transfers.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Transfers">
                                        {{--<span>Transfers</span>--}}
                                    </div>

                                    <div class="col">
                                        <img src="{{asset('images/icons/include/hotels.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Hotels">
                                        {{--<span>Hotels</span>--}}
                                    </div>
                                    <div class="col">
                                        <img src="{{asset('images/icons/include/tours.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Tours">
                                        {{--<span>Tours</span>--}}
                                    </div>
                                    <div class="col">
                                        <img src="{{asset('images/icons/include/trains.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Trains">
                                        {{--<span>Trains</span>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--<div class="row mt-2">--}}
                            {{--<div class="col text-white text-center">--}}
                                {{--<h4 class="h5 font-weight-light text-g-yellow">Top recommended Peru Travel Company</h4>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="row my-3 justify-content-center d-none d-sm-block">
                            <p class="text-white h4 font-weight-light">1. Share your travel plans <span class="font-weight-bold text-g-yellow">|</span> 2. Receive a customize itinerary and qoute <span class="font-weight-bold text-g-yellow">|</span> 3. Discover the best of Peru with GOTOPERU</p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-6 text-center">
                                <a href="#Inquire" class="btn btn-lg btn-g-yellow">GET STARED NOW</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('layouts.page.menu')

    <section class="bg-light">
        <div class="container-fluid">
            <div class="row pt-5 pb-2">
                <div class="col">
                    <h1 class="text-secondary h4"><strong>PERU TRAVEL PACKAGES</strong></h1>
                    {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                    {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                    {{--<p class="h4 font-weight-light">Offering you an authentic and reliable <strong>travel experience</strong> in peru welcoming you to explore the many fully <strong>Customized Travel Packages</strong> we have that suit every budget. let us plan your unforgettable <strong>trip</strong> to our majestic <strong>Machu Picchu</strong> and the rest of our  homeland… Peru!</p>--}}
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light">
        <div class="container-fluid">
            <div class="row">
                @foreach($paquetes->where('estado', 0)->take(6) as $paquete)
                    <div class="col-12 col-sm-4 mb-3">
                        <div class="card mb-3">
                            <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquete->titulo)), $paquete->duracion])}}" class="position-relative">
                                <img class="card-img-top " src="{{asset('images/packages/'.$paquete->codigo.'.jpg')}}" alt="{{(strtolower($paquete->titulo))}}">

                                <div class="card-img-overlay bg-rgba-dark-3 p-0">
                                    <div class="row justify-content-between no-gutters">
                                        <div class="col col-sm-3 p-3">
                                            <p class="m-0 text-white">{{$paquete->duracion}} Days</p>
                                        </div>
                                        <div class="col col-sm-4 bg-g-dark py-3 text-white text-center">
                                            @foreach($paquete->precio_paquetes as $precio)
                                                @if($precio->estrellas == 2)
                                                    @if($precio->precio_d > 0)
                                                        <p class="text-g-yellow font-weight-bold m-0 h5"><small><sup>form $</sup></small>{{$precio->precio_d}}<small>USD</small></p>
                                                    @else
                                                        <span class="text-danger">Inquire</span>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    {{--<p class="text-white m-0">{{$paquete->duracion}} days <span class="text-g-yellow font-weight-bold float-right bg-danger">--}}
                                            {{--<small><sup>form $</sup></small>{{$precio->precio_d}}<small>USD</small>--}}
                                        {{--</span></p>--}}
                                </div>
                                <div class="card-img-overlay-packages bg-rgba-dark-1">
                                    <h5 class="card-title text-white m-0">{{ucwords(strtolower($paquete->titulo))}}</h5>
                                    {{--<h2 class="card-title text-white m-0 h5"><a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquete->titulo)), $paquete->duracion])}}" class="text-dark">{{$paquete->titulo}}</a></h2>--}}
                                    <small class="text-white font-weight-light">
                                        <i class="fa fa-map-marker"></i>
                                        @php
                                            $i = 1;
                                            $num_des = count($paquete_destinos->where('idpaquetes',$paquete->id));
                                        @endphp
                                        @foreach($paquete_destinos->where('idpaquetes',$paquete->id) as $paquete_destino)
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
            </div>
            <div class="row pb-4">
                <div class="col text-right">
                    <a href="" class="btn-link font-weight-normal">All Packages <i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white pt-5 d-none d-sm-block">
        <div class="container-fluid">
            <div class="col">
                <div class="row"><!--.row -->
                    <div class="col">
                        <img src="{{asset('images/logos/apavit.png')}}" alt="logo apavit" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/apotur.png')}}" alt="logo apotur" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/asta.png')}}" alt="logo asta" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/expedia.png')}}" alt="logo expedia" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/facebook.png')}}" alt="logo facebook" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/meetup.png')}}" alt="logo meetup" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/new.png')}}" alt="logo the new york times" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/peru.png')}}" alt="logo marca peru" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/prom-peru.png')}}" alt="logo prom peru" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/tripadvisor.png')}}" alt="logo tripadvisor" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/yelp.png')}}" alt="logo yelp" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/youtube.png')}}" alt="logo youtube" class="img-fluid">
                    </div>
                </div><!-- /.row -->
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container-fluid">
            <div class="row pt-5 pb-2">
                <div class="col">
                    <h1 class="text-secondary h4"><strong>SOUTH AMERICA TRAVEL DESTINATIONS</strong></h1>
                    {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                    {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                    {{--<p class=" font-weight-light">You are already in the "neighborhood" here are some possible multi countries travel programs for your review, rest assure we can fully customize any travel lenght and any combination of countries, we can even design a comprehensive 30 days South America escape.</p>--}}
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row align-items-center">
                                    <div class="col-12 col-sm-4">
                                        <img src="{{asset('images/maps/peru.jpg')}}" alt="peru" class="w-100 rounded rounded-circle">
                                    </div>
                                    <div class="col">
                                        {{--<div class="row justify-content-center mt-5">--}}
                                            {{--<div class="col-6">--}}
                                                <h2 class="text-45 font-weight-light">
                                                    <a href="{{route('destinations_country_path', 'peru-travel')}}" class="text-g-dark"><img src="{{asset('images/icons/peru.png')}}" alt="peru flag" height="50" width="50" class="float-left" class="float-left"> Peru Destinations</a>
                                                </h2>
                                                <p class="text-justify lead font-weight-light">At GOTOPERU we give you the opportunity to choose between Prebuilt travel programs showed below or if you would rather plan your own itinerary we’ll help you build step by step your dream vacation at the best Prices cutting the "middleman" fees companies.</p>

                                            {{--</div>--}}
                                        {{--</div>--}}
                                    </div>
                                    <div class="col d-none d-sm-block">
                                        <div class="row">
                                            <div class="col">
                                                <div class="list-group position-relative">
                                                    @foreach($destinos->where('pais', 'peru')->sortBy('nombre')->take(4) as $destino)
                                                    <a href="{{route('destinations_country_show_path', ['peru-travel', str_replace(' ', '-', strtolower($destino->nombre))])}}-tours" class="list-group-item list-group-item-action">
                                                        <div class="media">
                                                            <img src="{{asset('images/destinations/destinations/'.str_replace(' ','-', strtolower($destino->nombre)).'')}}.jpg" alt="" width="60" height="60" class="rounded-circle align-self-center mr-3" data-toggle="tooltip" data-placement="top" title="{{ucwords(strtolower($destino->nombre))}}">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">{{ucwords(strtolower($destino->nombre))}}</h5>
                                                                <p>{{ucwords(strtolower($destino->pais))}}</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    @endforeach
                                                    <div class="gradient-destinations"></div>
                                                </div>
                                                <a href="{{route('destinations_country_path', 'peru-travel')}}" class="btn-link float-right font-weight-normal mt-2">View Peru packages <i class="fa fa-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row align-items-center">
                                    <div class="col-12 col-sm-4">
                                        <img src="{{asset('images/maps/ecuador.jpg')}}" alt="ecuador" class="w-100 rounded rounded-circle">
                                    </div>
                                    <div class="col">
                                        <h2 class="text-45 font-weight-light">
                                            <a href="{{route('destinations_country_path', 'ecuador-travel')}}" class="text-g-dark"><img src="{{asset('images/icons/ecuador.png')}}" alt="ecuador flag" height="50" width="50" class="float-left"> Ecuador Destinations</a>
                                        </h2>
                                        <p class="text-justify lead font-weight-light">This amazing country is one of the most bio-diverse countries in the world, its many destinations offer visitors a range of unique beautiful landscapes to explore from the Amazon, Andes, Coast warm beaches and the world famous Galapagos Islands ecological wonder; plus rich history and Culture specially at Colonial Quito City.</p>
                                        {{--<a href="{{route('destinations_country_path', 'ecuador-travel')}}" class="btn-link float-right font-weight-normal mt-2">View Ecuador packages <i class="fa fa-chevron-right"></i></a>--}}
                                    </div>
                                    <div class="col d-none d-sm-block">
                                        <div class="row">
                                            <div class="col">
                                                <div class="list-group position-relative">
                                                    @foreach($destinos->where('pais', 'ecuador')->sortBy('nombre')->take(4) as $destino)
                                                        <a href="{{route('destinations_country_show_path', ['peru-travel', str_replace(' ', '-', strtolower($destino->nombre))])}}-tours" class="list-group-item list-group-item-action">
                                                            <div class="media">
                                                                <img src="{{asset('images/destinations/destinations/'.str_replace(' ','-', strtolower($destino->nombre)).'')}}.jpg" alt="" width="60" height="60" class="rounded-circle align-self-center mr-3" data-toggle="tooltip" data-placement="top" title="{{ucwords(strtolower($destino->nombre))}}">
                                                                <div class="media-body">
                                                                    <h5 class="mt-0">{{ucwords(strtolower($destino->nombre))}}</h5>
                                                                    <p>{{ucwords(strtolower($destino->pais))}}</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    @endforeach
                                                    {{--<div class="gradient-destinations"></div>--}}
                                                </div>
                                                <a href="{{route('destinations_country_path', 'peru-travel')}}" class="btn-link float-right font-weight-normal mt-2">View Ecuador packages <i class="fa fa-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row align-items-center">
                                    <div class="col-12 col-sm-4">
                                        <img src="{{asset('images/maps/bolivia.jpg')}}" alt="peru" class="w-100 rounded rounded-circle">
                                    </div>
                                    <div class="col">
                                        <h2 class="text-45 font-weight-light">
                                            <a href="{{route('destinations_country_path', 'bolivia-travel')}}" class="text-g-dark"><img src="{{asset('images/icons/bolivia.png')}}" alt="bolivia flag" height="50" width="50" class="float-left"> Bolivia Destinations</a>
                                        </h2>
                                        <p class="text-justify lead font-weight-light">Bolivia is s country very diverse , stretching from the majestic icebound peaks and bleak high-altitude deserts of the Andes mountains to the virgin rainforests and vast great savannahs of the Amazon , including the lake titicaca side that include the Tiawanaku templo also stark otherworldly salt pans for instance Uyuni, and ancient Inca trails.</p>
                                        {{--<a href="{{route('destinations_country_path', 'bolivia-travel')}}" class="btn-link float-right font-weight-normal mt-2">View Bolivia packages <i class="fa fa-chevron-right"></i></a>--}}
                                    </div>
                                    <div class="col d-none d-sm-block">
                                        <div class="row">
                                            <div class="col">
                                                <div class="list-group position-relative">
                                                    @foreach($destinos->where('pais', 'bolivia')->sortBy('nombre')->take(4) as $destino)
                                                        <a href="{{route('destinations_country_show_path', ['peru-travel', str_replace(' ', '-', strtolower($destino->nombre))])}}-tours" class="list-group-item list-group-item-action">
                                                            <div class="media">
                                                                <img src="{{asset('images/destinations/destinations/'.str_replace(' ','-', strtolower($destino->nombre)).'')}}.jpg" alt="" width="60" height="60" class="rounded-circle align-self-center mr-3" data-toggle="tooltip" data-placement="top" title="{{ucwords(strtolower($destino->nombre))}}">
                                                                <div class="media-body">
                                                                    <h5 class="mt-0">{{ucwords(strtolower($destino->nombre))}}</h5>
                                                                    <p>{{ucwords(strtolower($destino->pais))}}</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    @endforeach
                                                    {{--<div class="gradient-destinations"></div>--}}
                                                </div>
                                                <a href="{{route('destinations_country_path', 'bolivia-travel')}}" class="btn-link float-right font-weight-normal mt-2">View Bolivia packages <i class="fa fa-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row align-items-center">
                                    <div class="col-12 col-sm-4">
                                        <img src="{{asset('images/maps/brasil.jpg')}}" alt="peru" class="w-100 rounded rounded-circle">
                                    </div>
                                    <div class="col">
                                        <h2 class="text-45 font-weight-light">
                                            <a href="{{route('destinations_country_path', 'brasil-travel')}}" class="text-g-dark"><img src="{{asset('images/icons/brasil.png')}}" alt="brazil flag" height="50" width="50" class="float-left"> Brazil Destinations</a>
                                        </h2>
                                        <p class="text-justify lead font-weight-light">At GOTOPERU we give you the opportunity to choose between Prebuilt travel programs showed below or if you would rather plan your own itinerary we’ll help you build step by step your dream vacation at the best Prices cutting the "middleman" fees companies.</p>
                                        {{--<a href="{{route('destinations_country_path', 'brasil-travel')}}" class="btn-link float-right font-weight-normal mt-2">View Brazil packages <i class="fa fa-chevron-right"></i></a>--}}
                                    </div>
                                    <div class="col d-none d-sm-block">
                                        <div class="row">
                                            <div class="col">
                                                <div class="list-group position-relative">
                                                    @foreach($destinos->where('pais', 'brasil')->sortBy('nombre')->take(4) as $destino)
                                                        <a href="{{route('destinations_country_show_path', ['peru-travel', str_replace(' ', '-', strtolower($destino->nombre))])}}-tours" class="list-group-item list-group-item-action">
                                                            <div class="media">
                                                                <img src="{{asset('images/destinations/destinations/'.str_replace(' ','-', strtolower($destino->nombre)).'')}}.jpg" alt="" width="60" height="60" class="rounded-circle align-self-center mr-3" data-toggle="tooltip" data-placement="top" title="{{ucwords(strtolower($destino->nombre))}}">
                                                                <div class="media-body">
                                                                    <h5 class="mt-0">{{ucwords(strtolower($destino->nombre))}}</h5>
                                                                    <p>{{ucwords(strtolower($destino->pais))}}</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    @endforeach
                                                    {{--<div class="gradient-destinations"></div>--}}
                                                </div>
                                                <a href="{{route('destinations_country_path', 'brasil-travel')}}" class="btn-link float-right font-weight-normal mt-2">View Brazil packages <i class="fa fa-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light">
        <div class="container-fluid">
            <div class="row pt-5 pb-2">
                <div class="col">
                    <h1 class="text-secondary h4"><strong>9 Reasons To Let Our Guides Take You On An Unforgettable Adventure!</strong></h1>
                    {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                    {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                    {{--<p class=" font-weight-light">You are already in the "neighborhood" here are some possible multi countries travel programs for your review, rest assure we can fully customize any travel lenght and any combination of countries, we can even design a comprehensive 30 days South America escape.</p>--}}
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light">
        <div class="container-fluid">
            <div class="row pb-5">
                <div class="col-12 col-sm4 mb-3 d-flex os-animation animated fadeInLeft" data-os-animation="fadeInLeft" data-os-animation-delay="0s" style="animation-delay: 0s;">
                    <div class="card">
                        <div class="media p-3">
                            <span class="mr-3 rounded-circle px-3 text-white h1 font-weight-light bg-info">1</span>
                            <div class="media-body">
                                <h5 class="mt-0">We Care</h5>
                                We promise to do the right thing all the time, every time, for our team, travelers, people and places we visit.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm4 mb-3 d-flex">
                    <div class="card">
                        <div class="media p-3">
                            <span class="mr-3 rounded-circle bg-g-green px-3 text-white h1 font-weight-light">2</span>
                            <div class="media-body">
                                <h5 class="mt-0">We Are Accessible</h5>
                                You will find GoToPeru offices in Lima, Arequipa, Cusco and satellite branches in Quito and La Paz.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm4 mb-3 d-flex">
                    <div class="card">
                        <div class="media p-3">
                            <span class="mr-3 rounded-circle bg-danger px-3 text-white h1 font-weight-light">3</span>
                            <div class="media-body">
                                <h5 class="mt-0">We Provide The Best Team Of Experts</h5>
                                Our expert locals make the difference. They come from all regions across Peru and bring with them unique information and a vast knowledge of main destinations.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm4 mb-3 d-flex">
                    <div class="card">
                        <div class="media p-3">
                            <span class="mr-3 rounded-circle bg-warning px-3 text-white h1 font-weight-light">4</span>
                            <div class="media-body">
                                <h5 class="mt-0">We Are Internationally Recognized</h5>
                                We are rated as a high quality Travel Operator on TripAdvisor with impeccable testimonials. We are proud members of Promperu, the National Tourism Board, fully licensed and authorized by the government.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm4 mb-3 d-flex">
                    <div class="card">
                        <div class="media p-3">
                            <span class="mr-3 rounded-circle bg-g-dark px-3 text-white h1 font-weight-light">5</span>
                            <div class="media-body">
                                <h5 class="mt-0">We Help Our Community</h5>
                                We aim to make positive differences in the communities where we work and live. We look for ways to improve the standards of living. It is our priority to hire local people, develop their communities and work with local supply chains.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm4 mb-3 d-flex">
                    <div class="card">
                        <div class="media p-3">
                            <span class="mr-3 rounded-circle bg-g-yellow px-3 text-white h1 font-weight-light">6</span>
                            <div class="media-body">
                                <h5 class="mt-0">We Think Ahead…So You Don’t Have To</h5>
                                We are aware that surprises, both good and bad, occur while traveling. We are always on top of it and ready to give reliable travel solutions to our customers.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm4 mb-3 d-flex">
                    <div class="card">
                        <div class="media p-3">
                            <span class="mr-3 rounded-circle bg-danger px-3 text-white h1 font-weight-light">7</span>
                            <div class="media-body">
                                <h5 class="mt-0">We Turn Good Trips Into Unforgettable Adventures</h5>
                                We help our travelers choose the perfect trip to the land of the Incas, providing them with the most authentic life-changing adventure possible. We go out of our way to ensure a travel experience unlike anything you’ve seen.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm4 mb-3 d-flex">
                    <div class="card">
                        <div class="media p-3">
                            <span class="mr-3 rounded-circle bg-success px-3 text-white h1 font-weight-light">8</span>
                            <div class="media-body">
                                <h5 class="mt-0">We Aren’t Afraid To Push Our Boundaries</h5>
                                We offer alternative extensions to the main South American destinations in Ecuador, Bolivia, Chile, Argentina, Brasil, Uruguay and Columbia. In December, 2015 we will be opening a physical travel office in the USA.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm4 mb-3 d-flex">
                    <div class="card">
                        <div class="media p-3">
                            <span class="mr-3 rounded-circle bg-secondary px-3 text-white h1 font-weight-light">9</span>
                            <div class="media-body">
                                <h5 class="mt-0">We Are Trustworthy</h5>
                                We have glowing testimonials on our website and other acclaimed travel websites. We have set a standard of excellence for our customers by giving them the best Peruvian resources for a memorable journey.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white d-none d-sm-block">
        <div class="container-fluid">
            <div class="row pt-5 pb-2">
                <div class="col">
                    <h1 class="text-secondary h4"><strong>HOTELS</strong></h1>
                    {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                    {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                    {{--<p class=" font-weight-light">You are already in the "neighborhood" here are some possible multi countries travel programs for your review, rest assure we can fully customize any travel lenght and any combination of countries, we can even design a comprehensive 30 days South America escape.</p>--}}
                </div>
            </div>
            {{--<div class="row justify-content-center">--}}
                {{--<div class="col-1">--}}
                    {{--<img src="{{asset('images/icons/include/hotels.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Hotels">--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </section>

    <section class="bg-white d-none d-sm-block">
        <div class="container-fluid">
            <div class="row position-relative">
                <div class="col">
                    <img src="{{asset('images/banner-hotel.jpg')}}" alt="" class="w-100">
                    <div class="card-img-overlay bg-rgba-dark-3">
                        <p class="m-0 text-white h3 font-weight-light"><img src="{{asset('images/icons/include/hotels.png')}}" width="50" height="50" alt="" class="p-1" data-toggle="tooltip" data-placement="top" title="Hotels"> Hand-Selected  Collection of hotels</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <p class="pt-2 lead">From budget accommodations to the most luxury hotels that are a destination itself, we are partners with practically every top quality hotel at every category ( 2 stars. 3 stars, 4 stars, 5 stars ) plus our volume let us offer you great Vacation packages prices as we translate our volume savings to you.</p>
                    <a href="{{route('hotels_path')}}" class="btn btn-primary btn-lg">Hotels</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container-fluid">
            <div class="row py-5">
                <div class="col-12 col-sm">
                    <div class="row mt-5 justify-content-center">
                        <div class="col-6 col-sm-4 col-md-6 col-lg-3">
                            <img src="{{asset('images/icons/group.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <i class="font-weight-bold text-secondary">Small Groups and Private tours.</i>
                        </div>
                    </div>

                    <div class="row mt-5 justify-content-center">
                        <div class="col-6 col-sm-4 col-md-6 col-lg-3">
                            <img src="{{asset('images/icons/assistance.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col text-center">
                            <i class="font-weight-bold text-secondary">We live here, trully a 24/7 Assistance.</i>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-6 col-sm-4 col-md-6 col-lg-3">
                            <img src="{{asset('images/icons/customize.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <i class="font-weight-bold text-secondary">Book Now option or Customize a dream trip!.</i>
                        </div>
                    </div>
                </div>
                <div class="col col-sm d-none d-sm-block">
                    <img src="{{asset('images/goto.jpg')}}" alt="" class="w-100">
                </div>
                <div class="col-12 col-sm">
                    <div class="row mt-5 justify-content-center">
                        <div class="col-6 col-sm-4 col-md-6 col-lg-3">
                            <img src="{{asset('images/icons/location.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <i class="font-weight-bold text-secondary">Cutting the middlemen, headquarters at Peru.</i>
                        </div>
                    </div>

                    <div class="row mt-5 justify-content-center">
                        <div class="col-6 col-sm-4 col-md-6 col-lg-3">
                            <img src="{{asset('images/icons/trip.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col text-center">
                            <i class="font-weight-bold text-secondary">We take pride of our tripadvisor reviews!.</i>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-6 col-sm-4 col-md-6 col-lg-3">
                            <img src="{{asset('images/icons/departure.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <i class="font-weight-bold text-secondary">We can adapt to any arrival and departure.</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light">
        <div class="container-fluid">
            <div class="row align-items-center no-gutters">
                <div class="col d-none">
                    <img src="{{asset('images/we-care.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col">
                    <div class="px-4">
                        <h3 class="display-4 font-weight-light">Because we care <i class="fa fa-heart text-danger"></i></h3>
                        <p class="">We give back to our communities</p>
                        <hr>
                        <p class="text-primary"><i>Chaullacota Locates at 15,000 feed (4500 mts) 2 hours Northwest of cusco</i></p>
                        <p class="text-justify font-weight-light">At GOTOPERU we are committed to doing business in a way that actually give back to our communities specially the one located in remote places. Our planning and execution of one of our trips involves a long supply chain: from local guides and operators to transportation providers to hotels and restaurants, we interact with a lot of different organizations on the ground, but we also know that some communities specially located on top of the Andes at 15,000+feet that due to the difficult access, dont receive the assistance they deserve, is for that reason that we organize periodically trips to this far far away communities to bring them specially sweaters and toys for children.</p>
                    </div>

                    <div class="row">
                        <div class="col">
                            <img src="{{asset('images/social/ninos.jpg')}}" alt="" class="img-fluid pl-4" data-toggle="modal" data-target="#social-1">
                            <!-- Modal -->
                            <div class="modal fade" id="social-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <img src="{{asset('images/social/ninos.jpg')}}" alt="" class="img-fluid rounded">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="{{asset('images/social/social.jpg')}}" alt="" class="img-fluid pr-4" data-toggle="modal" data-target="#social-2">
                            <!-- Modal -->
                            <div class="modal fade" id="social-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <img src="{{asset('images/social/social.jpg')}}" alt="" class="img-fluid rounded">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-white">
        <div class="container-fluid">
            <div class="row pt-5 pb-2">
                <div class="col">
                    <h2 class="text-secondary h4"><strong>Getting To Peru</strong></h2>
                    {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                    {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                    <p class=" font-weight-light">A trip to Peru is an exciting adventure! There are a number of common questions first-time travelers to Peru frequently ask.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <img src="{{asset('images/slider/flights.jpg')}}" alt="" class="w-100">
                    <a href="#" class="btn-link float-right font-weight-normal my-3" data-toggle="modal" data-target="#exampleModal">More Information <i class="fa fa-chevron-right"></i></a>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Jorge Chavez International Airport</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col text-justify">
                                            <p>Those unfamiliar with this airport might picture a small, rundown, subpar airport in the middle of nowhere. However, the Jorge Chavez International Airport is actually one of the most famous airports in the world. It is as modern as LAX, Dulles, or any other big-name location on the planet. In fact, it won the 2012 award for the Best Airport in South America, awarded by the World Airport Awards. And this isn’t the first time Jorge Chavez has won this category. In fact, it won four consecutive years.</p>
                                            <p>Known as LIM, the Jorge Chavez International Airport has every modern amenity you would expect a world-class terminal to have. From great food and ironclad security to an award-winning airport staff, which has also won awards (via Skytrax Research), your experience with this airport will be unique and pleasant.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="text-g-yellow">Airlines From North America, Central America & Caribbean To Peru</h4>
                                            <ul>
                                                <li>Aero Mexico</li>
                                                <li>Air Canada</li>
                                                <li>American Airlines</li>
                                                <li>Continental Airlines</li>
                                                <li>Copa Airlines</li>
                                                <li>Delta Airlines</li>
                                                <li>Lecsa</li>
                                                <li>LAN</li>
                                                <li>Spirit Airlines</li>
                                                <li>TACA</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <h4 class="text-g-yellow">Airlines From Europe To Peru</h4>
                                            <ul>
                                                <li>Air Europa</li>
                                                <li>Air France</li>
                                                <li>Alitalia</li>
                                                <li>British Airways</li>
                                                <li>Iberia</li>
                                                <li>KLM</li>
                                                <li>LAN</li>
                                                <li>Lufthansa</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <h4 class="text-g-yellow">Airlines From South America To Peru</h4>
                                            <ul>
                                                <li>Aerolineas Argentina</li>
                                                <li>Avianca</li>
                                                <li>Copa Airlines</li>
                                                <li>LAN</li>
                                                <li>Sky Airlines</li>
                                                <li>TACA</li>
                                                <li>TAM</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    {{--<section class="bg-light">--}}
        {{--<div class="container-fluid">--}}
            {{--<div class="row align-items-center">--}}
                {{--<div class="col">--}}

                    {{--<h3 class="display-4 font-weight-light">GOTOPERU PROMISES</h3>--}}
                    {{--<p class="">We take pride of our Promises, for each our travelers from solo travelers to large groups.</p>--}}
                    {{--<hr>--}}
                    {{--<h4 class="text-g-yellow">Problem-Free Travel</h4>--}}
                    {{--<p>The itineraries that GOTOPERU create will work for you and your family. Our staff will work day and night to ensure you get to your destinations without delay.</p>--}}
                    {{--<h4 class="text-g-yellow">Personalized Itineraries</h4>--}}
                    {{--<p>We want you to have the trip of a lifetime, so email and call us until it exactly where you want it to be. We will make sure that your trip is exactly as you want it.</p>--}}

                {{--</div>--}}
                {{--<div class="col">--}}
                    {{--<img src="http://machupicchu.company/images/contact.png" alt="" class="img-fluid">--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    @include('layouts.page.form-quote')

    @push('scripts')
        {{--<script>--}}
            {{--//form--}}
            {{--function design(){--}}
                {{--$.ajaxSetup({--}}
                    {{--headers: {--}}
                        {{--'X-CSRF-TOKEN': $('[name="_token"]').val()--}}
                    {{--}--}}
                {{--});--}}

                {{--$("#de_send").attr("disabled", true);--}}

                {{--var filter=/^[A-Za-z][A-Za-z0-9_.]*@[A-Za-z0-9_]+.[A-Za-z0-9_.]+[A-za-z]$/;--}}


                {{--var s_destinations = document.getElementsByName('destinations[]');--}}
                {{--var $destinations = "";--}}
                {{--for (var i = 0, l = s_destinations.length; i < l; i++) {--}}
                    {{--if (s_destinations[i].checked) {--}}
                        {{--$destinations += s_destinations[i].value+' , ';--}}
                    {{--}--}}
                {{--}--}}
                {{--s_destinations = $destinations.substring(0,$destinations.length-3);--}}

{{--//                alert(s_destinations);--}}

                {{--var s_name = $('#de_name').val();--}}
                {{--var s_email = $('#de_email').val();--}}
                {{--var s_country = $('#de_country').val();--}}
                {{--var s_date = $('#de_date').val();--}}
                {{--var s_number = $('#de_numero').val();--}}
                {{--var s_duration = $('#de_duration').val();--}}
{{--//                var s_other = $('#de_otros').val();--}}
                {{--var s_comment = $('#de_comment').val();--}}


                {{--if (filter.test(s_email)){--}}
                    {{--sendMail = "true";--}}
                {{--} else{--}}
                    {{--$('#de_email').css("border-bottom", "2px solid #FF0000");--}}
                    {{--sendMail = "false";--}}
                {{--}--}}
                {{--if (s_name.length == 0 ){--}}
                    {{--$('#de_name').css("border-bottom", "2px solid #FF0000");--}}
                    {{--var sendMail = "false";--}}
                {{--}--}}

                {{--if(sendMail == "true"){--}}
                    {{--var datos = {--}}

                        {{--"txt_destinations" : s_destinations,--}}

                        {{--"txt_name" : s_name,--}}
                        {{--"txt_email" : s_email,--}}
                        {{--"txt_country" : s_country,--}}
                        {{--"txt_date" : s_date,--}}
                        {{--"txt_number" : s_number,--}}
                        {{--"txt_duration" : s_duration,--}}
                        {{--"txt_comment" : s_comment,--}}

                    {{--};--}}
                    {{--$.ajax({--}}
                        {{--data:  datos,--}}
                        {{--url:   "{{route('design_path')}}",--}}
                        {{--type:  'post',--}}

                        {{--beforeSend: function () {--}}

                            {{--$('#de_send').removeClass('show');--}}
                            {{--$("#de_send").addClass('d-none');--}}

                            {{--$("#loader5").removeClass('d-none');--}}
                            {{--$("#loader5").addClass('show');--}}
                        {{--},--}}
                        {{--success:  function (response) {--}}
                            {{--$('#de_form')[0].reset();--}}
                            {{--$('#de_send').removeClass('d-none');--}}
                            {{--$('#de_send').addClass('show');--}}
                            {{--$("#loader5").removeClass('show');--}}
                            {{--$("#loader5").addClass('d-none');--}}
                            {{--$('#de_alert').removeClass('d-none');--}}
                            {{--$("#de_alert").addClass('show');--}}
                            {{--$("#de_alert b").html(response);--}}
                            {{--$("#de_alert").fadeIn('slow');--}}
                            {{--$("#de_send").removeAttr("disabled");--}}
                        {{--}--}}


                    {{--});--}}
                {{--} else{--}}
                    {{--$("#de_send").removeAttr("disabled");--}}
                {{--}--}}
            {{--}--}}

            {{--$('#de_date').datepicker({--}}
                {{--dateFormat: 'yy-mm-dd',--}}
                {{--changeMonth: true,--}}
                {{--changeYear: true--}}
            {{--});--}}

        {{--</script>--}}




    @endpush

@stop