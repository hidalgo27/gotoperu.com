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
                            {{$duration}} @lang('package.days_tours')
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
                    <h1 class="text-g-yellow font-weight-bold text-center">@lang('package.h1')</h1>
                    <p class="lead">@lang('package.h1_p')</p>
                    <div class="alert alert-primary text-center m-0" role="alert">
                        <h4>@lang('package.h1_p_alert')</h4>
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
                    <a class="btn btn-g-dark btn-block text-white font-weight-bold" href="{{route('packages_durations_path', ['3', '5'])}}">3-5 <span class="text-g-yellow font-weight-bold">@lang('package.days')</span></a>
                </div>
                <div class="col">
                    <a class="btn btn-g-dark btn-block text-white font-weight-bold" href="{{route('packages_durations_path', ['6', '8'])}}">6-8 <span class="text-g-yellow font-weight-bold">@lang('package.days')</span></a>
                </div>
                <div class="col">
                    <a class="btn btn-g-dark btn-block text-white font-weight-bold" href="{{route('packages_durations_path', ['9', '11'])}}">9-11 <span class="text-g-yellow font-weight-bold">@lang('package.days')</span></a>
                </div>
                <div class="col">
                    <a class="btn btn-g-dark btn-block text-white font-weight-bold" href="{{route('packages_durations_path', ['12', '15'])}}">12-15 <span class="text-g-yellow font-weight-bold">@lang('package.days')</span></a>
                </div>
                <div class="col">
                    <a class="btn btn-g-dark btn-block text-white font-weight-bold" href="{{route('packages_durations_path', ['16', '30'])}}">16+ <span class="text-g-yellow font-weight-bold">@lang('package.days')</span></a>
                </div>
            </div>
                        <div class="row mt-4">

                            @foreach($paquetes->sortBy('duracion') as $paquete)
                                <div class="col-12 mb-4 col-sm-12 mb-sm-4 col-md-12 mb-md-4 col-lg-6">
                                    <div class="bg-light shadow-sm rounded">
                                        <div class="row align-items-center no-gutters">
                                            <div class="col-12 col-sm-7">
                                                <div class="position-relative">
                                                    <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquete->titulo)), $paquete->duracion])}}">
                                                        <img src="{{$paquete->imagen}}" alt="{{$paquete->titulo}}" class="w-100">
                                                    </a>
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
                                                    <div class="bg-white p-2 mb-3 rounded shadow-sm">
                                                        <p class="small text-left m-0"><i data-feather="trending-up" class="text-info" stroke-width="1" width="15"></i> <span class="font-weight-bold text-secondary">Highest Altitude:</span> {{$paquete->altitud}}</p>
                                                        <p class="small text-left m-0"><i data-feather="users" class="text-danger" stroke-width="1" width="15"></i> <span class="font-weight-bold text-secondary">Group Size:</span> {{$paquete->group_size}}</p>
                                                        <p class="small text-left m-0"><i data-feather="bar-chart-2" class="text-success" stroke-width="1" width="15"></i> <span class="font-weight-bold text-secondary">Activity Level:</span>
                                                            @foreach($paquete->paquetes_dificultad as $paquetes_dificultad)
                                                                {{ucwords($paquetes_dificultad->dificultad->nombre)}}
                                                            @endforeach
                                                        </p>
                                                    </div>
                                                    @foreach($paquete->precio_paquetes as $precio)
                                                        @if($precio->estrellas == 2)
                                                            @if($precio->precio_d > 0)
                                                                {{--                                                                <p class="text-info font-weight-bold m-0 h5"><small><sup>form $</sup></small>{{$precio->precio_d}}<small>USD</small></p>--}}
                                                                <div class="mb-3 font-weight-bold">
                                                                    {{$paquete->duracion}} @lang('package.days')
                                                                    <i data-feather="arrow-right" class="text-primary" stroke-width="1"></i>
                                                                    <sup class="text-primary">$</sup><span class="h4 text-primary font-weight-bold">{{$precio->precio_d}}</span>
                                                                </div>
                                                            @else
                                                                <div class="mb-3 font-weight-bold">
                                                                    {{$paquete->duracion}} @lang('package.days')
                                                                    <i data-feather="arrow-right" class="text-primary" stroke-width="1"></i>
                                                                    <span class="text-danger font-weight-bold">@lang('package.inquire')</span>
                                                                </div>

                                                            @endif
                                                        @endif
                                                    @endforeach
                                                    <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquete->titulo)), $paquete->duracion])}}" class="btn btn-g-yellow btn-block">@lang('package.inquire')</a>
                                                    {{--<a href="" class="btn btn-g-green btn-block">Book Now</a>--}}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="alert-g-green rounded-bottom p-1">
                                                    <p class="small font-weight-bold m-0 text-g-green"><i data-feather="map-pin" class="text-g-yellow" stroke-width="1" width="18"></i>
                                                        @php
                                                            $m = 1;
                                                            $num_des = count($paquete_destinos->where('idpaquetes',$paquete->id));
                                                        @endphp
                                                        @foreach($paquete_destinos->where('idpaquetes',$paquete->id) as $paquete_destino)
                                                            @if(isset($paquete_destino->destinos->nombre))
                                                                {{ucwords(strtolower($paquete_destino->destinos->nombre))}}@if($m < $num_des),@else.@endif
                                                                @php $m++; @endphp
                                                            @endif
                                                        @endforeach
                                                    </p>
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
