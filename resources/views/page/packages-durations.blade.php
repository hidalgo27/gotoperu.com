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

            <img src="{{asset('images/banners/itinerary/GTP40.jpg')}}" alt="" id="hero-vid">
            @include('layouts.page.menu-custom')
        </div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row content-header-row align-items-center">

                    <div class="col">

                        <div class="row my-3 justify-content-center">
                            <p class="text-white display-4 font-weight-light">{{$duration}} Days Tours</p>
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

    @include('layouts.page.menu-2')
    <section class="d-md-none">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col">
                    <img src="{{asset('images/banners/itinerary/GTP40.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white m-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
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
            <div class="row pt-4">
                <div class="col">
                    <h1 class="text-secondary h4"><strong>PERU TRAVEL FEATURED PACKAGES</strong></h1>
                    <p class="lead">our most popular <strong>Peru and South America itineraries</strong>, these <strong>packages</strong> could be used as a reference to customize your own trip. At <strong>GOTOPERU</strong> we specialize in crafting personalize experiences based on your preferences; we invited to review these programs to have glimpse of the most important destinations for instance MachuPicchu, Lake Titicaca, Nazca and the Amazon.</p>
                    <div class="alert alert-g-yellow text-center m-0" role="alert">
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
            <div class="row">
                {{--<div class="col-3 d-none d-sm-block">--}}
                {{--<div class="sticky-top sticky-top-50">--}}
                {{--<h3 class="font-weight-bold text-g-green">Order By</h3>--}}
                {{--<div class="list-group">--}}
                {{--@foreach($paquetes->unique('duracion')->sortBy('duracion') as $paquete)--}}
                {{--@php--}}
                {{--$j = 0;--}}
                {{--@endphp--}}
                {{--@foreach($paquetes->where('duracion', $paquete->duracion) as $paq)--}}
                {{--@php $j++ @endphp--}}
                {{--@endforeach--}}

                {{--<a href="{{route('packages_durations_path', $paquete->duracion)}}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center p-2">--}}
                {{--<h6 class="text-secondary">{{$paquete->duracion}} days</h6>--}}
                {{--<span class="badge badge-primary badge-pill">{{$j}}</span>--}}
                {{--</a>--}}

                {{--@endforeach--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                <div class="col">

                    <ul class="nav nav-pills nav-fill d-none bg-dark d-sm-flex sticky-top my-4">
                        <li class="nav-item">
                            <a class="nav-link text-white border border-white rounded-0 font-weight-normal" href="{{route('packages_durations_path', ['3', '5'])}}">3-5 <span class="text-g-yellow font-weight-light">days</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white border border-white rounded-0 font-weight-normal" href="{{route('packages_durations_path', ['6', '8'])}}">6-8 <span class="text-g-yellow font-weight-light">days</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white border border-white rounded-0 font-weight-normal" href="{{route('packages_durations_path', ['9', '11'])}}">9-11 <span class="text-g-yellow font-weight-light">days</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white border border-white rounded-0 font-weight-normal" href="{{route('packages_durations_path', ['12', '15'])}}">12-15 <span class="text-g-yellow font-weight-light">days</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white border border-white rounded-0 font-weight-normal" href="{{route('packages_durations_path', ['16', '30'])}}">16+ <span class="text-g-yellow font-weight-light">days</span></a>
                        </li>
                        <li class="nav-item d-sm-none d-md-block">
                            <a class="nav-link text-white border border-white rounded-0 font-weight-normal" href="{{route('packages_list_path')}}" data-toggle="tooltip" data-placement="top" title="View as list"><i class="fa fa-th-list"></i></a>
                            {{--<a href="{{route('packages_list_path')}}" class="text-secondary" data-toggle="tooltip" data-placement="top" title="View as list"><i class="fa fa-th-list"></i></a>--}}
                        </li>
                    </ul>
                    <div class="">
                        <div class="row">

                            @foreach($paquetes->sortBy('duracion') as $paquete)
                                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mb-3">
                                    <div class="card mb-3">
                                        <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquete->titulo)), $paquete->duracion])}}" class="position-relative">
                                            <img class="card-img-top " src="{{asset('images/packages/'.$paquete->codigo.'.jpg')}}" alt="{{(strtolower($paquete->titulo))}}">

                                            <div class="card-img-overlay p-0">
                                                <div class="row justify-content-between no-gutters">
                                                    <div class="col col-sm-7 p-2 bg-rgba-dark-3">
                                                        <h5 class="m-0 text-white">{{$paquete->duracion}} Days</h5>
                                                    </div>
                                                    <div class="col col-sm-5 bg-g-dark py-2 text-white text-center">
                                                        @foreach($paquete->precio_paquetes as $precio)
                                                            @if($precio->estrellas == 3)
                                                                @if($precio->precio_d > 0)
                                                                    <p class="text-info font-weight-bold m-0 h5"><small><sup>form $</sup></small>{{$precio->precio_d}}<small>USD</small></p>
                                                                @else
                                                                    <span class="text-danger">Inquire</span>
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="row justify-content-end no-gutters">
                                                    <div class="col text-right">
                                                        <div class="px-3 small">
                                                            <a href="#" class="text-g-yellow" data-toggle="modal" data-target="#modal-{{$paquete->id}}">
                                                                @php $j = 0; $k = 0; @endphp
                                                                @foreach($comentario->where('idpaquetes', $paquete->id) as $comment)
                                                                    @php
                                                                        $k = $k + $comment->valoracion;
                                                                        $j++;
                                                                    @endphp
                                                                @endforeach

                                                                @if($j > 0)
                                                                    <span class="text-white">{{$j}} comments</span>
                                                                    <span class="text-secondary">|</span>
                                                                    {{--<i class="fas fa-star"></i>--}}
                                                                    {{--<i class="fas fa-star"></i>--}}
                                                                    {{--<i class="fas fa-star"></i>--}}
                                                                    <span class="badge badge-g-yellow">{{$k/$j}} <i class="fas fa-star"></i></span>
                                                                @endif
                                                            </a>
                                                        </div>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="modal-{{$paquete->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg" role="document">
                                                                <div class="modal-content">

                                                                    <div class="modal-body text-left">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="card p-3 bg-light mb-3">
                                                                                    <h4>Our Reviews</h4>
                                                                                    <small>Leave your comment too.</small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        @foreach($comentario->where('idpaquetes', $paquete->id) as $comentarios)
                                                                            <div class="row">
                                                                                <div class="col-3">
                                                                                    <small class="font-italic"><i class="fas fa-user-circle"></i> {{$comentarios->usuario}} | <span class="font-weight-bold">{{$comentarios->ciudad}}</span></small>
                                                                                    <span class="d-block text-g-yellow">
                                                                                @for ($i = 0; $i < $comentarios->valoracion; $i++)
                                                                                            <i class="fas fa-star"></i>
                                                                                        @endfor
                                                                            </span>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <i class="fa fa-quote-left float-left mr-3"></i>
                                                                                    @php echo $comentarios->comentario; @endphp
                                                                                    <i class="fa fa-quote-right float-left"></i>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                        @endforeach

                                                                        <div class="row pb-4">
                                                                            <div class="col text-right">
                                                                                <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquete->titulo)), $paquete->duracion])}}#Reviews" class="btn-link font-weight-normal">All Opinions <i class="fa fa-chevron-right"></i></a>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row justify-content-end">
                                                                            <div class="col-4">
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <a href="https://www.facebook.com/GOTOPERUcom/" class="d-inline mx-1" target="_blank">
                                                                                            <img src="{{asset('images/icons/facebook.png')}}" alt="" class="img-fluid">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col">
                                                                                        <a href="https://twitter.com/GOTOPERUCOM" class="d-inline mx-1" target="_blank">
                                                                                            <img src="{{asset('images/icons/twitter.png')}}" alt="" class="img-fluid">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col">
                                                                                        <a href="https://www.instagram.com/gotoperucom/" class="d-inline mx-1" target="_blank">
                                                                                            <img src="{{asset('images/icons/instagram.png')}}" alt="" class="img-fluid">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col">
                                                                                        <a href="https://www.youtube.com/channel/UCpfUdQBRjnSEbh6Gu3Uh_Mg" class="d-inline mx-1" target="_blank">
                                                                                            <img src="{{asset('images/icons/youtube.png')}}" alt="" class="img-fluid">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col">
                                                                                        <a href="https://plus.google.com/+Gotoperu" class="d-inline mx-1" target="_blank">
                                                                                            <img src="{{asset('images/icons/google-plus.png')}}" alt="" class="img-fluid">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{--<p class="text-white m-0">{{$paquete->duracion}} days <span class="text-g-yellow font-weight-bold float-right bg-danger">--}}
                                                {{--<small><sup>form $</sup></small>{{$precio->precio_d}}<small>USD</small>--}}
                                                {{--</span></p>--}}
                                            </div>
                                            <div class="card-img-overlay-packages bg-rgba-dark-1">
                                                <h5 class="card-title text-white m-0">{{ucwords(strtolower($paquete->titulo))}}</h5>
                                                @foreach($dificultad->where('idpaquetes', $paquete->id) as $dificultades)
                                                    <small class="text-success font-weight-light" data-toggle="tooltip" data-placement="bottom" title="{{$dificultades->dificultad->nombre}}"><i class="fas fa-signal"></i></small>
                                                @endforeach
                                                {{--<h2 class="card-title text-white m-0 h5"><a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquete->titulo)), $paquete->duracion])}}" class="text-dark">{{$paquete->titulo}}</a></h2>--}}
                                                <small class="text-white font-weight-light">
                                                    <i class="fa fa-map-marker-alt"></i>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.page.form-quote')
@stop