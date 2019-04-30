@extends('layouts.page.default')
@section('content')
    @foreach($paquete_iti as $paquetes)

    <section class="header-video d-none d-md-block chat-mensajes">
        <div id="title" class="text-white">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-between my-2">
                    <div class="col-3 col-md-4 col-lg-4 col-xl-3">
                        <a href="{{route('home_path')}}">
                            {{--<img src="{{asset('images/logos/logo-gotoperu-ave-w.webp')}}" alt="" class="img-fluid">--}}
                            <img class="w-100 lazy has-webp"
                                 data-src="{{asset('images/logos/logo-gotoperu-ave-w.png')}}"
                                 data-srcset="{{asset('images/logos/logo-gotoperu-ave-w.png')}}" alt="logo gotoperu">
                        </a>
                    </div>
                    <div class="col d-md-none d-lg-inline col-lg col-xl text-center">
                        <h5 class="font-weight-light"><b class="font-weight-bold">GO</b> with the Peruvian experts</h5>
                    </div>
                    <div class="col-3 col-md-6 col-lg-3 col-xl-3 text-right">
                        <a href="tel:+2029963000" class="mx-3 text-g-yellow font-weight-bold h5">(202) 996-3000</a>
                        <a href="#" class="text-white"  data-toggle="modal" data-target="#modal-menu"><i class="fa fa-bars fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="overlay" class="overlay-img">
            @foreach($paquetes->imagen_paquetes->take(1) as $paquetes_imagen)
            <img src="{{asset('images/packages/slider/'.$paquetes_imagen->nombre.'')}}" alt="banner gotoperu" id="hero-vid" class="banner-itinerary">
            @endforeach
        </div>
        <div class="content-header">
            <div class="container">
                <div class="row content-header-row align-items-center justify-content-center">
                    <div class="col-10 col-md-12 text-center">
                        {{--<a href="" class="text-white"><i class="fa fa-play-circle fa-4x"></i></a>--}}

                        <div class="text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">

                                <div class="content-video-1 text-white p-3 rounded">
                                    {{--<img src="images/travel/video-1.jpg" alt="video">--}}
                                    <h2 class="font-weight-bold">
                                        {{($paquetes->titulo)}} <span class="text-white">{{($paquetes->duracion)}} DAYS TOURS</span>
                                    </h2>
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
        </div>
    </section>

    @include('layouts.page.menu')
    <section class="bg-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col d-none d-sm-block small font-weight-bold">
                    {{Breadcrumbs::render('packages_show',$paquetes->titulo, $paquetes->duracion)}}
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="row position-relative">
                        <div class="col">

                            <div class="row">

                            <div class="col-12 col-sm-12 col-md-7 col-lg-8 col-xl-8">
                                <div class="row mt-3">
                                    <div class="col">
                                        <h1 class="text-g-yellow font-weight-bold">{{($paquetes->titulo)}}</h1>
                                        {{--@if($j > 0)--}}
                                            {{--<a href="#Reviews" class="h6 text-primary">--}}
                                                {{--Comments {{$j}}--}}
                                                {{--<span class="text-g-yellow">--}}
                                                    {{--@for ($i = 0; $i < ($k/$j); $i++)--}}
                                                        {{--<i class="fas fa-star small"></i>--}}
                                                    {{--@endfor--}}
                                                {{--</span>--}}
                                                {{--<span class="badge badge-g-dark">--}}
                                                {{--{{round($k/$j, 2)}}--}}
                                            {{--</span>--}}
                                            {{--</a>--}}

                                        {{--@endif--}}
                                    </div>

                                    <div class="col-12">
                                    <div class="card p-3 bg-light d-md-none">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold d-block h4">{{$paquetes->duracion}} days</span>
                                                <div class="text-center">
                                                    <small>from</small>
                                                    @foreach($paquetes->precio_paquetes->where('estrellas', 2)->sortBy('estrellas') as $precio)
                                                        @if($precio->precio_d > 0)
                                                            <span class="h1 font-weight-bold text-danger"><sup>$</sup>{{$precio->precio_d}}</span>
                                                        @else
                                                            <span class="text-danger">
                                                                Inquire
                                                            </span>
                                                        @endif
                                                    @endforeach
                                                    <small>USD</small>
                                                </div>
                                                <span class="text-secondary d-block font-weight-bold">Code: {{$paquetes->codigo}}</span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                @php $j = 0; $k = 0; @endphp
                                                @foreach($comentario->where('idpaquetes', $paquetes->id) as $comment)
                                                    @php
                                                        $k = $k + $comment->valoracion;
                                                        $j++;
                                                    @endphp
                                                @endforeach
                                                @if($j > 0)
                                                    <a href="#Reviews" class="h6 text-primary">
                                                        Comments {{$j}}
                                                        <span class="text-g-yellow">
                                                            @for ($i = 0; $i < ($k/$j); $i++)
                                                                <i class="fas fa-star small"></i>
                                                            @endfor
                                                        </span>
                                                        <span class="badge badge-g-dark">
                                                            {{round($k/$j, 2)}}
                                                        </span>
                                                    </a>

                                                @endif
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="row">
                                            <div class="col">
                                                <img src="{{asset('images/mapas/'.$paquetes->codigo.'.jpg')}}" alt="" class="w-100 rounded">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            {{--<div class="col">--}}
                                            {{--<a href="" class="btn btn-g-yellow btn-block">Check Availability</a>--}}
                                            {{--</div>--}}
                                            <div class="col col-xl mb-xl-0 mb-2">
                                                <a href="#Inquire" class="btn btn-g-yellow btn-block font-weight-bold">INQUIRE</a>
                                            </div>
                                            {{--<div class="col col-xl mb-xl-0">--}}
                                                {{--<a href="https://fareharbor.com/embeds/book/gotoperu/items/{{$paquetes->codigo_f}}/calendar/?flow=92114" class="btn btn-g-green btn-block font-weight-bold">BOOK NOW</a>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                <div class="sticky-top d-none d-md-flex">
                                <div class="nav-tabs-wrapper">

                                    <ul id="menu" class="nav nav-pills nav-tabs dragscroll horizontal bg-rgba-dark-5 d-sm-flex nav-itinerary contenido2 rounded-left rounded-right shadow">
                                        {{--<li class="nav-item d-none d-sm-block">--}}
                                            {{--<a class="nav-link text-white font-weight-bold rounded-0" href="#overview">Overview</a>--}}
                                        {{--</li>--}}
                                        <li class="nav-item d-none d-sm-block">
                                            <a class="nav-link text-white font-weight-bold rounded-0" href="#Itinerary">Itinerary</a>
                                        </li>
                                        <li class="nav-item d-sm-none">
                                            <a class="nav-link text-white font-weight-bold rounded-0" href="#Itinerary">Itinerary</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white font-weight-bold rounded-0" href="#Included">Included and Not Included</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white font-weight-bold rounded-0" href="#Hotels">Hotels</a>
                                        </li>
                                    </ul>
                                </div>
                                </div>
                                <div id="" class="mt-0 mt-md-0">
                                    {{--<h3 class="text-secondary pt-4 pb-2 h4"><strong>Overview</strong></h3>--}}
                                    @php echo $paquetes->descripcion; @endphp
                                    <div class="row py-3">
                                        <div class="col-12 mb-3 mb-lg-0 col-lg d-flex">
                                            @foreach($paquetes->paquetes_categoria as $categoria)
                                                <div class="card p-3 w-100">
                                                    <h5 class="text-secondary font-weight-bold"><i class="fas fa-angle-right"></i> Category: <span class="text-primary">{{ucwords(strtolower($categoria->categoria->nombre))}}</span></h5>
                                                    <p>{{$categoria->categoria->descripcion}}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="col-12 mb-3 mb-lg-0 col-lg d-flex">
                                            <div class="card p-3 w-100">
                                            @foreach($dificultad->where('idpaquetes', $paquetes->id) as $dificultades)
                                                <h5 class="text-secondary font-weight-bold"><i class="fas fa-angle-right"></i> Physical demand: <span class="text-primary text-capitalize">{{$dificultades->dificultad->nombre}}</span></h5>
                                                <p>{{$dificultades->dificultad->descripcion}}</p>
                                            @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" id="Itinerary">
                                    <div class="col">
                                        <div class="row" id="">
                                            <div class="col">
                                                <h3 class="text-secondary pt-3 pb-4 h4"><strong>Itinerary</strong></h3>
                                            </div>
                                        </div>
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active font-weight-bold" id="resumen-tab" data-toggle="tab" href="#resumen" role="tab" aria-controls="resumen" aria-selected="true">Summary Itinerary</a>
                                            </li>
                                            <li class="nav-item d-none d-sm-inline">
                                                <a class="nav-link font-weight-bold" id="full-tab" data-toggle="tab" href="#full" role="tab" aria-controls="full" aria-selected="false">Extended Itinerary</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="resumen" role="tabpanel" aria-labelledby="resumen-tab">
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-md-12">
                                                        @php $day = 1; @endphp
                                                        @foreach($paquetes->paquete_itinerario as $itinerario)
                                                            <div class="row pt-4" id="section-{{$itinerario->itinerarios->id}}">
                                                                <div class="col-12 col-md-12 col-lg-8">
                                                                    <h6 class="text-g-yellow font-weight-normal"><span class="badge badge-g-dark">Day {{$day}}:</span> <strong>{{ucwords(strtolower($itinerario->itinerarios->titulo))}}</strong>
                                                                    </h6>
                                                                    @php echo $itinerario->itinerarios->resumen; @endphp
                                                                </div>
                                                                <div class="col-12 col-md-12 col-lg">
                                                                    <div class="box15 float-right rounded">
                                                                        @foreach($imagen->where('iditinerario', $itinerario->itinerarios->id)->take(1) as $img)
                                                                            <img src="{{asset('images/itinerario/'.$img->nombre.'')}}" alt="" class="rounded">
                                                                        @endforeach
                                                                        <div class="box-content text-center">
                                                                            <h3 class="title">View Gallery</h3>
                                                                            <ul class="icon p-0">
                                                                                <li><a href="#" data-toggle="modal" data-target="#modal-img-{{$itinerario->itinerarios->id}}"><i class="fas fa-camera"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="modal-img-{{$itinerario->itinerarios->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-body p-0 rounded">
                                                                                    <div id="carouselExampleFade{{$itinerario->itinerarios->id}}" class="carousel slide carousel-fade" data-ride="carousel">
                                                                                        <div class="carousel-inner">

                                                                                            @php
                                                                                                $k = 0;
                                                                                            @endphp
                                                                                            @foreach($imagen->where('iditinerario', $itinerario->itinerarios->id) as $img)
                                                                                                @if($k == 0)
                                                                                                    @php $act = 'active'; @endphp
                                                                                                @else
                                                                                                    @php $act = ''; @endphp
                                                                                                @endif

                                                                                                <div class="carousel-item {{$act}}">
                                                                                                    <img class="d-block w-100 rounded" src="{{asset('images/itinerario/'.$img->nombre.'')}}" alt="First slide">
                                                                                                </div>

                                                                                                @php $k++; @endphp
                                                                                            @endforeach
                                                                                        </div>
                                                                                        <a class="carousel-control-prev" href="#carouselExampleFade{{$itinerario->itinerarios->id}}" role="button" data-slide="prev">
                                                                                            <i class="fas fa-angle-left text-white fa-2x"></i>
                                                                                            <span class="sr-only">Previous</span>
                                                                                        </a>
                                                                                        <a class="carousel-control-next" href="#carouselExampleFade{{$itinerario->itinerarios->id}}" role="button" data-slide="next">
                                                                                            <i class="fas fa-angle-right text-white fa-2x"></i>
                                                                                            <span class="sr-only">Next</span>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            @php $day++; @endphp
                                                        @endforeach
                                                    </div>
                                                    <div class="d-none d-sm-inline col-sm-6 d-md-none">
                                                        <div class="sticky-top sticky-top-50 mt-5">
                                                            <nav id="menu" class="navbar navbar-light nav-goto-side w-100">
                                                                <nav class="nav nav-pills flex-column w-100">
                                                                    {{--@foreach($paquetes->itinerario->sortBy('dia') as $itinerario)--}}
                                                                        {{--<a class="nav-link active font-italic" href="#section-{{$itinerario->id}}"><span class="badge badge-secondary">Day {{$itinerario->dia}}:</span> <small>{{ucwords(strtolower($itinerario->titulo))}}</small></a>--}}
                                                                    {{--@endforeach--}}
                                                                </nav>
                                                            </nav>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="full" role="tabpanel" aria-labelledby="full-tab">
                                                <div class="row mt-4">
                                                    <div class="col-12">
                                                        <div id="Itinerary-2" class="d-none d-sm-block">

                                                            @php
                                                                $i = 1;
                                                                $num_des = count($paquetes->itinerario);
                                                            @endphp

                                                                @foreach($paquetes->paquete_itinerario as $itinerario)
                                                                <div class="timeline @php if($i == $num_des) echo 'timeline-f' @endphp">
                                                                    <div class="timeline-title">
                                                                        <span class="rounded-circle bg-g-green text-white py-4 font-weight-bold">DAY {{$i}}</span>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="timeline-content position-relative">
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <div class="timeline-point">
                                                                                        <i class="far fa-circle"></i>
                                                                                    </div>
                                                                                    <div class="timeline-custom-col content-col ">
                                                                                        <div class="timeline-location-block">
                                                                                            <p class="location-name">{{ucwords(strtolower($itinerario->itinerarios->titulo))}} <i class="fa fa-map-marker-alt icon-marker"></i></p>
                                                                                            <div class="description">
                                                                                                @php echo $itinerario->itinerarios->descripcion @endphp
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @php $i++; @endphp
                                                                @endforeach

                                                        </div>

                                                        <div id="Itinerary-2" class="d-sm-none">
                                                            <h3 class="text-secondary pt-5 pb-4 h4"><strong>Itinerary</strong></h3>
                                                            @php
                                                                $i = 1;
                                                                $num_des = count($paquetes->itinerario);
                                                            @endphp
                                                            @foreach($paquete_iti as $paquete_itin)
                                                                @foreach($paquete_itin->paquete_itinerario as $itinerario)
                                                                <h4 class="text-g-yellow"><strong>DAY {{$itinerario->itinerarios->dia}}:</strong> {{ucwords(strtolower($itinerario->itinerarios->titulo))}}</h4>
                                                                <div class="lead pb-3">
                                                                    @php echo $itinerario->itinerarios->descripcion @endphp
                                                                </div>
                                                                @endforeach
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="sticky-top my-4 sticky-top-50">
                                                            <img src="{{asset('images/maps/'.$paquetes->codigo.'.jpg')}}" alt="" class="img-fluid rounded">
                                                            <button class="btn btn-block btn-lg btn-g-yellow mt-2">Book Now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @php
                                    if ($paquetes->codigo == 'GTP412'){
                                        $hide_price = "d-none";
                                    }else{
                                        $hide_price = "";
                                    }
                                @endphp
                                <div class="row {{$hide_price}} d-none" id="Prices">
                                    <div class="col">
                                        {{--<h3 class="text-secondary h4"><strong>Hotels</strong></h3>--}}
                                        <h3 class="text-secondary pt-5 pb-3 h4"><strong>Prices Per Person <small class="text-primary font-weight-bold">($USD)</small></strong></h3>
                                        <div class="row">
                                            <div class="col mb-md-2">
                                                <div class="card border-secondary">
                                                    <p class="card-header bg-dark text-g-yellow">Based on doble / triple occupancy </p>
                                                    <div class="card-body p-0">
                                                        <table class="table m-0">
                                                            <thead class="title-header bg-light">
                                                            <tr>
                                                                <th>2 Stars</th>
                                                                <th>3 Stars</th>
                                                                <th>4 Stars</th>
                                                                <th>5 Stars</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                @foreach($paquetes->precio_paquetes->sortBy('estrellas') as $precio)
                                                                    @if($precio->precio_d > 0)
                                                                        <td>
                                                                            <sup>$</sup>{{$precio->precio_d}}
                                                                        </td>
                                                                    @else
                                                                        <td class="text-danger">
                                                                            Inquire
                                                                        </td>
                                                                    @endif
                                                                @endforeach

                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mb-md-2">
                                                <div class="card border-secondary">
                                                    <p class="card-header bg-secondary text-white">Based on single occupancy</p>
                                                    <div class="card-body p-0">
                                                        <table class="table m-0">
                                                            <thead class="title-header bg-light">
                                                            <tr>
                                                                <th>2 Stars</th>
                                                                <th>3 Stars</th>
                                                                <th>4 Stars</th>
                                                                <th>5 Stars</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                @foreach($paquetes->precio_paquetes->sortBy('estrellas') as $precio)
                                                                    @if($precio->precio_s > 0)
                                                                        <td>
                                                                            <sup>$</sup>{{$precio->precio_s}}
                                                                        </td>
                                                                    @else
                                                                        <td class="text-danger">
                                                                            Inquire
                                                                        </td>
                                                                    @endif
                                                                @endforeach

                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row my-3">
                                            <div class="col">
                                                <div class="alert alert-success">
                                                    <small>*If you have a preferred hotel in mind feel free to share it with us as we work with most hotels in Peru.</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-lg">
                                                <h3 class="text-secondary h4"><strong>Included</strong></h3>
                                                @php echo $paquetes->incluye; @endphp

                                            </div>
                                            <div class="col-12 col-lg">
                                                <h3 class="text-secondary h4"><strong>Not Included</strong></h3>
                                                @php echo $paquetes->noincluye; @endphp
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="Included" class="mt-4">
                                    <div class="row">
                                        <div class="col-12 mb-3 col-lg mb-lg-0">
                                            {{--<h3 class="text-secondary h4"><strong>Included</strong></h3>--}}
                                            <div class="card p-3 w-100">
                                                <h5 class="text-primary font-weight-bold p-0 m-0"><i class="fas fa-angle-right"></i> Included:</h5>
                                                <hr>
                                                <ul class="pl-3">
                                                    @foreach($paquetes->paquete_incluye as $paquetes_incluye)
                                                        <li>{{$paquetes_incluye->incluye->incluye}}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3 col-lg mb-lg-0">
                                            <div class="card p-3 w-100">
                                                <h5 class="text-primary font-weight-bold p-0 m-0"><i class="fas fa-angle-right"></i> Not Included:</h5>
                                                <hr>
                                                <ul class="pl-3">
                                                    @foreach($paquetes->paquete_no_incluye as $paquetes_no_incluye)
                                                        <li>{{$paquetes_no_incluye->no_incluye->noincluye}}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="Hotels" class="pt-5">
                                    <div class="row">
                                        <div class="col">
                                            <h3 class="text-secondary h4"><strong>Hotels</strong></h3>
                                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at distinctio eos error minus, perspiciatis praesentium sint suscipit ullam voluptatum. Ab, aliquid architecto atque consequuntur expedita hic inventore non repudiandae!</p>--}}
                                            {{--<div class="alert alert-primary text-center mt-3" role="alert">|--}}
                                                {{--@foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)--}}
                                                    {{--<a href="#{{$paquete_destino->destinos->id}}-hotel" class="font-weight-bold">{{$paquete_destino->destinos->nombre}} HOTEL</a> |--}}
                                                {{--@endforeach--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                    <div class="row">
                                    @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                            <div class="col-12">
                                                <h6 class="text-secondary pt-2 m-0 font-weight-bold" id="{{$paquete_destino->destinos->id}}-hotel"><i class="fas fa-angle-right text-primary"></i> {{$paquete_destino->destinos->nombre}} HOTEL</h6>
                                                <div class="row p-2 pb-4">
                                                    @foreach($hoteles_destinos->where('iddestinos', $paquete_destino->destinos->id) as $hoteles_destino)
                                                        <div class="col-12 col-lg-4 d-flex my-3">
                                                            <div class="row">
                                                                <div class="col-auto d-none d-sm-block">
                                                                    <img src="{{$hoteles_destino->hotel->imagen}}" alt="" class=" rounded-circle" width="50" height="50">
                                                                </div>

                                                                <div class="col">
                                                                    <a href="{{$hoteles_destino->hotel->url}}" class="text-secondary font-weight-bold align-middle d-block"><i class="fas fa-h-square"></i> {{ucwords(strtolower($hoteles_destino->hotel->nombre))}}</a>
                                                                    @for($i=0; $i < $hoteles_destino->hotel->estrellas; $i++)
                                                                        <small><i class="fa fa-star text-g-yellow small"></i></small>
                                                                    @endfor
                                                                    <small class="d-block text-secondary mt-2"><i class="fa fa-map-marker-alt"></i> {{$hoteles_destino->hotel->direccion}}</small>
                                                                    {{--@php $services = explode(',', $hoteles_destino->hotel->servicios); @endphp--}}
                                                                    {{--<p class="pt-2"><b>Services:</b>--}}
                                                                    {{--@foreach($services as $service)--}}
                                                                    {{--<i class="fa fa-check text-secondary"></i> {{$service}}--}}
                                                                    {{--@endforeach--}}
                                                                    {{--</p>--}}
                                                                    {{--                                                        <a href="{{$hoteles_destino->hotel->url}}" class="btn btn-outline-secondary" target="_blank">{{$hoteles_destino->hotel->nombre}}</a>--}}
                                                                </div>
                                                            </div>
                                                            {{--<hr>--}}
                                                        </div>
                                                    @endforeach
                                                </div>

                                            </div>
                                    @endforeach
                                    </div>
                                    {{--@foreach($hoteles as $hotel)--}}
                                    {{--<div class="row py-4">--}}
                                    {{--<div class="col-3">--}}
                                    {{--<img src="{{$hotel->imagen}}" alt="" class="w-100 rounded">--}}
                                    {{--</div>--}}
                                    {{--<div class="col">--}}
                                    {{--<h3>{{$hotel->nombre}}</h3>--}}
                                    {{--@for($i=0; $i < $hotel->estrellas; $i++)--}}
                                    {{--<i class="fa fa-star text-g-yellow"></i>--}}
                                    {{--@endfor--}}
                                    {{--<p class="pt-2"><i class="fa fa-map-marker-alt"></i> {{$hotel->direccion}}</p>--}}
                                    {{--@php $services = explode(',', $hotel->servicios); @endphp--}}
                                    {{--<p class="lead"><b>Services:</b>--}}
                                    {{--@foreach($services as $service)--}}
                                    {{--<i class="fa fa-check text-secondary"></i> {{$service}}--}}
                                    {{--@endforeach--}}
                                    {{--</p>--}}
                                    {{--<a href="{{$hotel->url}}" class="btn btn-outline-secondary" target="_blank">{{$hotel->nombre}}</a>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<hr>--}}
                                    {{--@endforeach--}}
                                </div>

                                {{--<div id="Maps">--}}
                                    {{--<div class="row pt-5">--}}
                                        {{--<div class="col-12">--}}
                                            {{--<h3 class="text-secondary h4 mb-3"><strong>Maps</strong></h3>--}}
                                            {{--@php echo $paquetes->maps; @endphp--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}



                            </div>
                            <div class="col col-sm-12 col-md-5 col-lg-4 col-xl-4 d-none d-md-inline">
                                <div class="sticky-top mt-4">
                                    <div class="card p-3 bg-light">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold d-block h4">{{$paquetes->duracion}} days</span>
                                                <div class="text-center">
                                                    <small>from</small>
                                                    @foreach($paquetes->precio_paquetes->where('estrellas', 2)->sortBy('estrellas') as $precio)
                                                        @if($precio->precio_d > 0)
                                                            <span class="h1 font-weight-bold text-danger"><sup>$</sup>{{$precio->precio_d}}</span>
                                                        @else
                                                            <span class="text-danger">
                                                                Inquire
                                                            </span>
                                                        @endif
                                                    @endforeach
                                                    <small>USD</small>
                                                </div>
                                                <span class="text-secondary d-block font-weight-bold">Code: {{$paquetes->codigo}}</span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                @php $j = 0; $k = 0; @endphp
                                                @foreach($comentario->where('idpaquetes', $paquetes->id) as $comment)
                                                    @php
                                                        $k = $k + $comment->valoracion;
                                                        $j++;
                                                    @endphp
                                                @endforeach
                                                @if($j > 0)
                                                    <a href="#Reviews" class="h6 text-primary">
                                                        Comments {{$j}}
                                                        <span class="text-g-yellow">
                                                            @for ($i = 0; $i < ($k/$j); $i++)
                                                                        <i class="fas fa-star small"></i>
                                                                    @endfor
                                                        </span>
                                                        <span class="badge badge-g-dark">
                                                            {{round($k/$j, 2)}}
                                                        </span>
                                                    </a>

                                                @endif
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="row">
                                            <div class="col">
                                                <img src="{{asset('images/mapas/'.$paquetes->codigo.'.jpg')}}" alt="" class="w-100 rounded">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            {{--<div class="col">--}}
                                            {{--<a href="" class="btn btn-g-yellow btn-block">Check Availability</a>--}}
                                            {{--</div>--}}
                                            <div class="col-12 col-xl mb-xl-0 mb-2">
                                                <a href="#Inquire" class="btn btn-g-yellow btn-block font-weight-bold">INQUIRE</a>
                                            </div>
                                            {{--<div class="col-12 col-xl mb-xl-0">--}}
                                                {{--<a href="https://fareharbor.com/embeds/book/gotoperu/items/{{$paquetes->codigo_f}}/calendar/?flow=92114" class="btn btn-g-green btn-block font-weight-bold">BOOK NOW</a>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card bg-light">
                                        <div class="card-body">
                                            <h4>Destinations</h4>
                                            <hr>
                                            @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                                <a href="{{route('destinations_country_show_path', ['peru-travel', str_replace(' ', '-', strtolower($paquete_destino->destinos->nombre))])}}-tours"><img src="{{asset('images/destinations/destinations/'.str_replace(' ','-', strtolower($paquete_destino->destinos->nombre)).'')}}.jpg" alt="" width="50" height="50" class="rounded-circle" data-toggle="tooltip" data-placement="top" title="{{ucwords(strtolower($paquete_destino->destinos->nombre))}}">
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                {{--<div class="">--}}
                                    {{--<div class="row mt-3">--}}
                                        {{--<div class="col">--}}
                                            {{--<div class="card">--}}

                                            {{--<!-- FareHarbor calendar of item #106623 -->--}}
{{--                                                <script src="https://fareharbor.com/embeds/script/calendar/gotoperu/items/{{$paquetes->codigo_f}}/?fallback=simple&flow=92114"></script>--}}

                                                {{--<!-- FareHarbor book button for item #106632 -->--}}
                                                {{--<a href="https://fareharbor.com/embeds/book/gotoperu/items/{{$paquetes->codigo_f}}/calendar/?flow=92114">Book Now</a>--}}
                                                {{--<!-- FareHarbor item grid of flow #92114 -->--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="card bg-light my-4">--}}
                                    {{--<img class="card-img-top" src="..." alt="Card image cap">--}}
                                    {{--<div class="content-video-1 card-img-top">--}}
                                        {{--<div class="content-area-3">--}}
                                            {{--<div class="position-relative">--}}
                                                {{--<img src="{{asset('images/video/prom-peru.jpg')}}" alt="video promperu" class="img-fluid">--}}
                                                {{--<div class="video-btn-1">--}}
                                                    {{--<a href="https://www.youtube.com/embed/gGq_U1DYUCs" title=""><i class="fa fa-play-circle text-g-dark"></i></a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<img src="{{asset('images/prom-peru-4.jpg')}}" alt="video" class="img-fluid card-img-top" >--}}
                                    {{--<div class="card-body">--}}
                                        {{--<h4 class="card-title">Destinations</h4>--}}
                                        {{--<div class="box-route-ininerary p-0">--}}
                                            {{--@foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)--}}
                                                {{--<p class="font-weight-bold text-secondary"><i class="fa fa-check"></i> {{ucwords(strtolower($paquete_destino->destinos->nombre))}}</p>--}}
                                            {{--@endforeach--}}

                                            {{--@foreach($vuelo as $vuelos)--}}
                                                {{--{{$vuelos->origen}}--}}
                                                {{--@endforeach--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--@php--}}
                                    {{--$k=0;--}}
                                {{--@endphp--}}
                                {{--@foreach($paquete_vuelo->where('idpaquetes',$paquetes->id) as $paquete_vuelo1)--}}
                                    {{--@php--}}
                                        {{--$k++;--}}
                                    {{--@endphp--}}
                                {{--@endforeach--}}

                                {{--@if($k == 0)--}}
                                    {{--@php $vue = 'd-none'; @endphp--}}
                                {{--@else--}}
                                    {{--@php $vue = ''; @endphp--}}
                                {{--@endif--}}
                                {{--<div class="my-4 {{$vue}}">--}}
                                    {{--<h3 class="text-secondary h4"><strong>Add Internal Flights</strong></h3>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col d-flex">--}}
                                            {{--<table class="table">--}}
                                                {{--<thead class="title-header bg-light">--}}
                                                {{--<tr>--}}
                                                    {{--<th></th>--}}
                                                    {{--<th>3 Stars</th>--}}
                                                {{--</tr>--}}
                                                {{--</thead>--}}
                                                {{--<tbody>--}}
                                                {{--@foreach($paquete_vuelo->where('idpaquetes',$paquetes->id) as $paquete_vuelos)--}}
                                                    {{--<tr>--}}
                                                        {{--<td><small>{{$paquete_vuelos->vuelos->origen}} - {{$paquete_vuelos->vuelos->destino}}</small></td>--}}
                                                        {{--<td class="font-weight-bold"><sup>$</sup>{{$paquete_vuelos->vuelos->precio}}</td>--}}
                                                    {{--</tr>--}}
                                                {{--@endforeach--}}
                                                {{--</tbody>--}}
                                            {{--</table>--}}
                                        {{--</div>--}}
                                        {{--<div class="col d-flex align-items-center">--}}
                                            {{--<div class="card w-100 bg-light">--}}
                                                {{--<div class="card-body text-center p-2">--}}
                                                    {{--<h5 class="card-title m-0 text-secondary">International Flights</h5>--}}
                                                    {{--<h4 class="card-text m-0 font-weight-bold text-secondary mt-1">NOT INCLUDED</h4>--}}
                                                    {{--<small class="m-0">Contact us for a quote</small>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
            {{--@if($paquetes->descuento == 5)--}}
                {{--@php $d_book = ''; @endphp--}}
            {{--@else--}}
                {{--@php $d_book = 'd-none'; @endphp--}}
            {{--@endif--}}
            {{--<div class="row {{$d_book}}">--}}
                {{--<div class="col">--}}
                    {{--<h3 class="text-secondary pt-5 pb-4 h4 text-g-yellow"><strong>Book Now</strong></h3>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row {{$d_book}}">--}}
                {{--<div class="col-9">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-5">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col">--}}
                                    {{--<div class="row pb-2">--}}
                                        {{--<div class="col">--}}
                                            {{--<h2 class="text-secondary h5"><strong>TRAVEL DATE <span class="text-primary">*</span></strong></h2>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                    {{--<div class="row">--}}
                                        {{--<div class="col">--}}
                                            {{--<div class="input-group">--}}
                                                {{--<div class="input-group-prepend">--}}
                                                    {{--<span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>--}}
                                                {{--</div>--}}
                                                {{--<input type="text" class="form-control" id="d_date" placeholder="TRAVEL DATE" aria-label="Username" aria-describedby="basic-addon1">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row my-4">--}}
                                {{--<div class="col">--}}
                                    {{--<div class="row pb-2">--}}
                                        {{--<div class="col">--}}
                                            {{--<h2 class="text-secondary h5"><strong>NUMBER OF TRAVELERS <span class="text-primary">*</span></strong></h2>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                    {{--<div class="row">--}}
                                        {{--<div class="col">--}}
                                            {{--<div class="input-group">--}}
                                                {{--<div class="input-group-prepend">--}}
                                                    {{--<span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>--}}
                                                {{--</div>--}}
                                                {{--<input type="number" class="form-control" id="d_date" placeholder="NUMBER OF TRAVELERS" aria-label="Username" aria-describedby="basic-addon1">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row mt-4">--}}
                                {{--<div class="col">--}}
                                    {{--<div class="row pb-2">--}}
                                        {{--<div class="col">--}}
                                            {{--<h2 class="text-secondary h5"><strong>NUMBER OF ROOMS <span class="text-primary">*</span></strong></h2>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                    {{--<div class="row">--}}
                                        {{--<div class="col">--}}
                                            {{--<div class="input-group">--}}
                                                {{--<div class="input-group-prepend">--}}
                                                    {{--<span class="input-group-text" id="basic-addon1"><i class="fa fa-h-square"></i></span>--}}
                                                {{--</div>--}}
                                                {{--<input type="number" class="form-control" id="d_date" placeholder="NUMBER OF ROOMS" aria-label="Username" aria-describedby="basic-addon1">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row my-4">--}}
                                {{--<div class="col">--}}
                                    {{--<div class="row pb-2">--}}
                                        {{--<div class="col">--}}
                                            {{--<h2 class="text-secondary h5"><strong>PREFERRED CLASS <span class="text-primary">*</span></strong></h2>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                    {{--<div class="row">--}}
                                        {{--<div class="col">--}}
                                            {{--<div class="input-group input-group-lg">--}}
                                            {{--<div class="input-group-prepend">--}}
                                            {{--<span class="input-group-text" id="basic-addon1"><i class="fa fa-h-square"></i></span>--}}
                                            {{--</div>--}}
                                            {{--<input type="number" class="form-control" id="d_date" placeholder="PREFERRED CLASS" aria-label="Username" aria-describedby="basic-addon1">--}}
                                            {{--</div>--}}


                                            {{--<div class="input-group">--}}
                                                {{--<div class="input-group-prepend">--}}
                                                    {{--<label class="input-group-text" for="inputGroupSelect01"><i class="fa fa-star"></i></label>--}}
                                                {{--</div>--}}
                                                {{--<select class="custom-select" id="inputGroupSelect01">--}}
                                                    {{--<option selected>Choose...</option>--}}
                                                    {{--<option value="1">2 stars (economy)</option>--}}
                                                    {{--<option value="2">3 stars ()</option>--}}
                                                    {{--<option value="2">4 stars (superior)</option>--}}
                                                    {{--<option value="2">5 stars (luxury)</option>--}}
                                                {{--</select>--}}
                                            {{--</div>--}}


                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col">--}}

                            {{--<div class="row pb-2">--}}
                                {{--<div class="col">--}}
                                    {{--<h2 class="text-secondary h5"><strong>ACCOMMODATION DETAILS</strong></h2>--}}
                                    {{--<p>Preferred Bedding Configuration</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row">--}}
                                {{--<div class="col">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col">--}}
                                            {{--<h6>Room 1</h6>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-3">--}}
                                            {{--<div class="input-group">--}}
                                                {{--<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">--}}
                                                {{--<div class="input-group-prepend">--}}
                                                    {{--<span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-male"></i></span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col">--}}
                                            {{--<div class="btn-group btn-group-toggle" data-toggle="buttons">--}}
                                                {{--<label class="btn btn-light active">--}}
                                                    {{--<input type="radio" name="options" id="option1" autocomplete="off" checked>--}}
                                                    {{--<img src="{{asset('images/room/simple.png')}}" alt="" class="img-fluid">--}}
                                                {{--</label>--}}
                                                {{--<label class="btn btn-light">--}}
                                                    {{--<input type="radio" name="options" id="option2" autocomplete="off">--}}
                                                    {{--<img src="{{asset('images/room/doble.png')}}" alt="" class="img-fluid">--}}
                                                {{--</label>--}}
                                                {{--<label class="btn btn-light">--}}
                                                    {{--<input type="radio" name="options" id="option3" autocomplete="off">--}}
                                                    {{--<img src="{{asset('images/room/matrimonial.png')}}" alt="" class="img-fluid">--}}
                                                {{--</label>--}}
                                                {{--<label class="btn btn-light">--}}
                                                    {{--<input type="radio" name="options" id="option3" autocomplete="off">--}}
                                                    {{--<img src="{{asset('images/room/triple.png')}}" alt="" class="img-fluid">--}}
                                                {{--</label>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row">--}}
                                {{--<div class="col">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col">--}}
                                            {{--<h6>Room 2</h6>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-3">--}}
                                            {{--<div class="input-group">--}}
                                                {{--<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">--}}
                                                {{--<div class="input-group-prepend">--}}
                                                    {{--<span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-male"></i></span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col">--}}
                                            {{--<div class="btn-group btn-group-toggle" data-toggle="buttons">--}}
                                                {{--<label class="btn btn-light">--}}
                                                    {{--<input type="radio" name="options" id="option1" autocomplete="off">--}}
                                                    {{--<img src="{{asset('images/room/simple.png')}}" alt="" class="img-fluid">--}}
                                                {{--</label>--}}
                                                {{--<label class="btn btn-light">--}}
                                                    {{--<input type="radio" name="options" id="option2" autocomplete="off">--}}
                                                    {{--<img src="{{asset('images/room/doble.png')}}" alt="" class="img-fluid">--}}
                                                {{--</label>--}}
                                                {{--<label class="btn btn-light active">--}}
                                                    {{--<input type="radio" name="options" id="option3" autocomplete="off" checked>--}}
                                                    {{--<img src="{{asset('images/room/matrimonial.png')}}" alt="" class="img-fluid">--}}
                                                {{--</label>--}}
                                                {{--<label class="btn btn-light">--}}
                                                    {{--<input type="radio" name="options" id="option3" autocomplete="off">--}}
                                                    {{--<img src="{{asset('images/room/triple.png')}}" alt="" class="img-fluid">--}}
                                                {{--</label>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row">--}}
                                {{--<div class="col">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col">--}}
                                            {{--<h6>Room 1</h6>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-3">--}}
                                            {{--<input type="number" class="form-control" id="d_date" placeholder="2" aria-label="Username" aria-describedby="basic-addon1">--}}
                                            {{--<div class="input-group">--}}
                                                {{--<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">--}}
                                                {{--<div class="input-group-prepend">--}}
                                                    {{--<span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-male"></i></span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col">--}}
                                            {{--<div class="btn-group btn-group-toggle" data-toggle="buttons">--}}
                                                {{--<label class="btn btn-light">--}}
                                                    {{--<input type="radio" name="options" id="option1" autocomplete="off">--}}
                                                    {{--<img src="{{asset('images/room/simple.png')}}" alt="" class="img-fluid">--}}
                                                {{--</label>--}}
                                                {{--<label class="btn btn-light active">--}}
                                                    {{--<input type="radio" name="options" id="option2" autocomplete="off" checked>--}}
                                                    {{--<img src="{{asset('images/room/doble.png')}}" alt="" class="img-fluid">--}}
                                                {{--</label>--}}
                                                {{--<label class="btn btn-light">--}}
                                                    {{--<input type="radio" name="options" id="option3" autocomplete="off">--}}
                                                    {{--<img src="{{asset('images/room/matrimonial.png')}}" alt="" class="img-fluid">--}}
                                                {{--</label>--}}
                                                {{--<label class="btn btn-light">--}}
                                                    {{--<input type="radio" name="options" id="option3" autocomplete="off">--}}
                                                    {{--<img src="{{asset('images/room/triple.png')}}" alt="" class="img-fluid">--}}
                                                {{--</label>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row my-4">--}}
                        {{--<div class="col text-center">--}}
                            {{--<button class="btn btn-lg btn-primary">Continue</button>--}}
                            {{--<a href="{{route('information_path', [str_replace(' ','-',strtolower($paquetes->titulo)), $paquetes->duracion])}}" class="btn btn-lg btn-primary">Continue</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-3">--}}
                    {{--<div class="card bg-light sticky-top sticky-top-50">--}}
                        {{--<div class="card-body">--}}
                            {{--<div class="row align-items-center">--}}
                                {{--<div class="col border-bottom">--}}
                                    {{--<p class="py-2 m-0">Travel Date</p>--}}
                                {{--</div>--}}
                                {{--<div class="col">--}}
                                    {{--<span class="text-secondary">25 Jul 2018</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row align-items-center">--}}
                                {{--<div class="col border-bottom">--}}
                                    {{--<p class="py-2 m-0">Number of travellers</p>--}}
                                {{--</div>--}}
                                {{--<div class="col">--}}
                                    {{--<span class="text-secondary">2 <i class="fa fa-male"></i></span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row align-items-center">--}}
                                {{--<div class="col border-bottom">--}}
                                    {{--<p class="py-2 m-0">Number of rooms</p>--}}
                                {{--</div>--}}
                                {{--<div class="col">--}}
                                    {{--<span class="text-secondary">3</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row align-items-center">--}}
                                {{--<div class="col border-bottom">--}}
                                    {{--<p class="py-2 m-0">Preferred Class</p>--}}
                                {{--</div>--}}
                                {{--<div class="col">--}}
                                    {{--<span class="text-secondary">5 <i class="fa fa-star text-g-yellow"></i> (luxury)</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="card-footer bg-g-dark text-white">--}}
                            {{--<h3>Total <small>(USD)</small> <sup>$</sup>2899.00</h3>--}}
                            {{--<small>Impuestos incluidos</small>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </section>

    <section id="Inquire" class="my-5 py-5">
        <div class="container">
            <div class="row mb-3">
                <div class="col">

                    <div>

                        <div class="row justify-content-center mt-4">
                            <div class="col-3 mb-3 d-block text-center">
                                <h3 class="text-secondary h4"><strong>Inquire</strong></h3>
                                <img src="{{asset('images/logos/logo-gotoperu-ave.png')}}" alt="" class="w-100">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-10 col-lg-8 text-center">
                                <h2 class="text-secondary h1 font-weight-bold text-g-green">{{$paquetes->titulo}} {{$paquetes->duracion}} DAYS</h2>
                                {{--<h5 class="text-secondary">{{$paquetes->duracion}} Days</h5>--}}
                            </div>
                        </div>

                        <div class="row justify-content-center pt-4 ">
                            <div class="col-12 col-ms-9 col-md-8">
                                <form id="d_form" role="form">
                                    {{csrf_field()}}
                                    <div class="row pb-2">
                                        <div class="col">
                                            <h2 class="text-secondary h5"><strong>HOTEL CATEGORY</strong></h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-sm text-center">
                                            <div class="btn-group-toggle" data-toggle="buttons">
                                                <label class="col btn btn-outline-secondary text-secondary number-hover font-weight-bold bg-light shadow">
                                                    {{--<i class="fa fa-home d-block fa-2x"></i>--}}
                                                    <input type="checkbox" autocomplete="off" name="accommodation[]" value="Econômico"> Budget
                                                    <div class="d-block small">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm">
                                            <div class="btn-group-toggle" data-toggle="buttons">
                                                <label class="col btn btn-outline-secondary text-secondary number-hover font-weight-bold bg-light shadow">
                                                    {{--<i class="fa fa-home d-block fa-2x" aria-hidden="true"></i>--}}
                                                    <input type="checkbox" autocomplete="off" name="accommodation[]" value="Turista"> Best Value
                                                    <div class="d-block small">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm">
                                            <div class="btn-group-toggle" data-toggle="buttons">
                                                <label class="col btn btn-outline-secondary text-secondary number-hover font-weight-bold bg-light shadow">
                                                    {{--<i class="fa fa-building d-block fa-2x" aria-hidden="true"></i>--}}
                                                    <input type="checkbox" autocomplete="off" name="accommodation[]" value="Superior"> Superior
                                                    <div class="d-block small">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm">
                                            <div class="btn-group-toggle" data-toggle="buttons">
                                                <label class="col btn btn-outline-secondary text-secondary number-hover font-weight-bold bg-light shadow">
                                                    {{--<i class="fa fa-building d-block fa-2x" aria-hidden="true"></i>--}}
                                                    <input type="checkbox" autocomplete="off" name="accommodation[]" value="Luxo"> Luxury
                                                    <div class="d-block small">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mt-4 pb-2">
                                        <div class="col">
                                            <h2 class="text-secondary h5"><strong>NUMBER OF TRAVELERS</strong></h2>
                                        </div>
                                    </div>

                                    <div class="row no-gutters btn-group-toggle" data-toggle="buttons">
                                        <label class="btn col btn-outline-secondary number-hover font-weight-bold bg-light shadow">
                                            <input type="radio" name="number" class="number" autocomplete="off" value="1" checked> 1 <i class="fa fa-male"></i>
                                        </label>
                                        <label class="btn col mx-2 btn-outline-secondary number-hover font-weight-bold bg-light shadow">
                                            <input type="radio" name="number" class="number" autocomplete="off" value="2"> 2 <i class="fa fa-male"></i>
                                        </label>
                                        <label class="btn col btn-outline-secondary number-hover font-weight-bold bg-light shadow">
                                            <input type="radio" name="number" class="number" autocomplete="off" value="3"> 3 <i class="fa fa-male"></i>
                                        </label>
                                        <label class="btn col mx-2 btn-outline-secondary number-hover font-weight-bold bg-light shadow">
                                            <input type="radio" name="number" class="number" autocomplete="off" value="4"> 4 <i class="fa fa-male"></i>
                                        </label>
                                        <label class="btn col btn-outline-secondary number-hover font-weight-bold bg-light shadow">
                                            <input type="radio" name="number" class="number" autocomplete="off" value="5+"> 5+ <i class="fa fa-male"></i>
                                        </label>
                                        <label class="btn col ml-2 btn-outline-secondary number-hover font-weight-bold bg-light shadow">
                                            <input type="radio" name="number" class="number" autocomplete="off" value="Undecided"><small>Undecided</small>
                                        </label>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-12 col-sm">
                                            <div class="row pb-2">
                                                <div class="col">
                                                    <h2 class="text-secondary h5"><strong>TRAVEL DATE <span class="text-primary">*</span></strong></h2>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="input-group input-group-lg">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" id="d_date" placeholder="Fecha de Viaje" aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" id="d_package" value="{{$paquetes->codigo}}: {{$paquetes->titulo}} {{$paquetes->duracion}} DAYS">
                                        </div>
                                        <div class="col-12 col-sm mt-4 mt-sm-0">
                                            <div class="row pb-2">
                                                <div class="col">
                                                    <h2 class="text-secondary h5"><strong>PHONE NUMBER</strong></h2>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="input-group input-group-lg">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
                                                        </div>
                                                        <input type="tel" class="form-control" id="d_tel" placeholder="Phone number" aria-label="Phone" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 col-sm">
                                            <div class="row mt-4 pb-2">
                                                <div class="col">
                                                    <h2 class="text-secondary h5"><strong>NAME <span class="text-primary">*</span></strong></h2>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="input-group input-group-lg">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" id="d_name" placeholder="Full Name" aria-label="Full Name" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm">
                                            <div class="row mt-4 pb-2">
                                                <div class="col">
                                                    <h2 class="text-secondary h5"><strong>EMAIL <span class="text-primary">*</span></strong></h2>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="input-group input-group-lg">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                                        </div>
                                                        <input type="email" class="form-control" id="d_email" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4 pb-2">
                                        <div class="col">
                                            <h2 class="text-secondary h5"><strong>COMMENTS?</strong></h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group input-group-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-comment"></i></span>
                                                </div>
                                                <textarea class="form-control" id="d_comment" aria-label="With textarea" placeholder="How do you imagine a perfect trip to Peru, Special Requests, Questions, Comments"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center mt-2">
                                        <div class="col-4 my-3 text-center">
                                            <button class="btn btn-primary btn-lg btn-next font-weight-bold btn-block" id="d_send" type="button" onclick="inquire()">Send</button>
                                            <i class="fas fa-spinner fa-pulse fa-2x text-primary d-none" id="loader2"></i>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="alert alert-success alert-dismissible fade d-none" id="d_alert" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <b><strong>THANK YOU FOR CONTACT US</strong>, YOU WILL RECEIVE A REPLY IN LESS THAN 24 HOURS. :)</b>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col text-right">
                                <p class="font-weight-bold text-muted">info@gotoperu.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <div id="Reviews" class="pt-5">
                        <h3 class="text-secondary h4"><strong>Reviews</strong></h3>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-7 col-xl-8">



                                <div class="row">
                                    <div class="col">
                                        <div class="alert alert-primary mb-3">
                                            <h4 class="">{{ucwords(strtolower($paquetes->titulo))}} {{$paquetes->duracion}} Days</h4>
                                            <small>Leave your comment too.</small>
                                        </div>
                                    </div>
                                </div>
                                @foreach($comentario->where('idpaquetes', $paquetes->id) as $comentarios)
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



                                <div class="row mb-3">
                                    <div class="col text-right">
                                        <a href="" class="btn btn-link" data-toggle="modal" data-target="#review-modal">Add Comment <i class="fa fa-plus"></i></a>

                                        <!-- Modal -->
                                        <div class="modal fade" id="review-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    {{--<div class="modal-header">--}}
                                                    {{--<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>--}}
                                                    {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                                                    {{--<span aria-hidden="true">&times;</span>--}}
                                                    {{--</button>--}}
                                                    {{--</div>--}}
                                                    <div class="modal-body text-left">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="alert alert-primary">
                                                                    <strong>Share your experience with us.</strong>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlInput1" class="font-weight-bold">Name <span class="text-primary">*</span></label>
                                                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlInput1" class="font-weight-bold">Email address <span class="text-primary">*</span></label>
                                                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlInput1" class="font-weight-bold">Travel Date</label>
                                                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlTextarea1" class="font-weight-bold">Comment</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col text-right">
                                                                <a href="" class="btn btn-info"> Add Comment <i class="fa fa-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="row d-none" id="alert-comment">
                                                            <div class="col">
                                                                <div class="alert alert-success">
                                                                    <span><strong>Thanks</strong>, your review is very important for us, it will be posted soon.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{--<div class="modal-footer">--}}
                                                    {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                                                    {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                                                    {{--</div>--}}
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row justify-content-end">
                                    <div class="col-12 col-sm-7 col-md-12 col-lg-6">
                                        <div class="row no-gutters">
                                            <div class="col">
                                                <a href="https://www.facebook.com/GOTOPERUcom/" class="d-inline mx-1" target="_blank">
                                                    <i class="fab fa-facebook text-primary fa-2x"></i>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="https://twitter.com/GOTOPERUCOM" class="d-inline mx-1" target="_blank">
                                                    <i class="fab fa-twitter text-info fa-2x"></i>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="https://www.instagram.com/gotoperucom/" class="d-inline mx-1" target="_blank">
                                                    <i class="fab fa-instagram text-g-dark fa-2x"></i>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="https://www.youtube.com/channel/UCpfUdQBRjnSEbh6Gu3Uh_Mg" class="d-inline mx-1" target="_blank">
                                                    <i class="fab fa-youtube text-danger fa-2x"></i>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="https://plus.google.com/+Gotoperu" class="d-inline mx-1" target="_blank">
                                                    <i class="fab fa-google-plus text-danger fa-2x"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="col-12 col-md-6 col-lg-5 col-xl-4 mt-4 mt-md-0">
                                <div class="sticky-top sticky-top-50">
                                    <div class="fb-page" data-href="https://www.facebook.com/GOTOPERUcom" data-tabs="timeline" data-width="500" data-height="550" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/GOTOPERUcom" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/GOTOPERUcom">GOTOPERUcom</a></blockquote></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="alert alert-secondary alert-dismissible show m-0 elemento rounded-0 p-1" role="alert" id="aviso">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-center text-sm-left text-md-right col-sm-7 col-md-7 col-lg-auto">
                    <h5 class="m-0"><strong>{{($paquetes->titulo)}} </strong> {{($paquetes->duracion)}} DAYS TOURS | <sup>from $</sup>
                        @foreach($paquetes->precio_paquetes->where('estrellas', 2)->sortBy('estrellas') as $precio)
                            @if($precio->precio_d > 0)
                                {{$precio->precio_d}}
                            @else
                                <span class="text-danger">
                                                                Inquire
                                                            </span>
                            @endif
                        @endforeach
                        <small>USD</small></h5>
                </div>
                <div class="col-12 text-center text-sm-left text-md-right col-sm-3 col-md-3 col-lg text-right">
                    <a href="#Inquire" class="btn btn-sm btn-g-yellow font-weight-bold" onclick="ideal_trip()">INQUIRE NOW</a>
                </div>
                <div class="col-12 text-left text-sm-left text-md-right col-sm-2 col-md-2 col-lg-auto">
                    <button type="button" class="close p-0 float-left float-md-right" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @include('layouts.page.included')
    @push('scripts')


        <script>
            function inquire(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('[name="_token"]').val()
                    }
                });

                $("#d_send").attr("disabled", true);

                var filter=/^[A-Za-z][A-Za-z0-9_]*@[A-Za-z0-9_]+.[A-Za-z0-9_.]+[A-za-z]$/;



                var s_accommodation = document.getElementsByName('accommodation[]');
                var $accommodation = "";
                for (var i = 0, l = s_accommodation.length; i < l; i++) {
                    if (s_accommodation[i].checked) {
                        $accommodation += s_accommodation[i].value+' , ';
                    }
                }
                s_accommodation = $accommodation.substring(0,$accommodation.length-3);


                var s_number = $(".number:checked").val();

                var s_date = $('#d_date').val();
                var s_tel = $('#d_tel').val();
                var s_name = $('#d_name').val();
                var s_email = $('#d_email').val();
                var s_package = $('#d_package').val();


                var s_comment = $('#d_comment').val();


                if (filter.test(s_email)){
                    sendMail = "true";
                } else{
                    $('#d_email').css("border-bottom", "2px solid #FF0000");
                    sendMail = "false";
                }
                if (s_name.length == 0 ){
                    $('#d_name').css("border-bottom", "2px solid #FF0000");
                    var sendMail = "false";
                }

                if(sendMail == "true"){
                    var datos = {

                        "txt_accommodation" : s_accommodation,
                        "txt_number" : s_number,

                        "txt_date" : s_date,
                        "txt_tel" : s_tel,
                        "txt_name" : s_name,
                        "txt_email" : s_email,
                        "txt_package" : s_package,
                        "txt_comment" : s_comment

                    };
                    $.ajax({
                        data:  datos,
                        url:   "{{route('inquire_path')}}",
                        type:  'post',

                        beforeSend: function () {

                            $('#d_send').removeClass('show');
                            $("#d_send").addClass('d-none');

                            $("#loader2").removeClass('d-none');
                            $("#loader2").addClass('show');
                        },
                        success:  function (response) {
                            $('#d_form')[0].reset();
                            $('#d_send').removeClass('d-none');
                            $('#d_send').addClass('show');
                            $("#loader2").removeClass('show');
                            $("#loader2").addClass('d-none');
                            $('#d_alert').removeClass('d-none');
                            $("#d_alert").addClass('show');
                            $("#d_alert b").html(response);
                            $("#d_alert").fadeIn('slow');
                            $("#d_send").removeAttr("disabled");
                        }
                    });
                } else{
                    $("#d_send").removeAttr("disabled");
                }
            }

            $('#d_date').datepicker({
                dateFormat: 'mm-dd-y',
                changeMonth: true,
                changeYear: true
            });


            $(document).ready(function() {
                $('#aviso').hide(0);


                $(window).scroll(function(){


                    var windowHeight = $(window).scrollTop();
                    var contenido2 = $(".contenido2").offset();

                    contenido2 = contenido2.top;


                    if(windowHeight >= contenido2  ){


                        $('#aviso').fadeIn(500);

                    }else{
                        $('#aviso').fadeOut(500);

                    }


                });

            });

            function ideal_trip(){
                $("#aviso").addClass('d-none');
                window.location.href="#inquire";
            }

        </script>

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.1&appId=1712869952328301&autoLogAppEvents=1';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDf1RN8KKGNdS-iEarIgXpaqa-khw7EmZI&callback=initMap">
        </script>

        <!-- FareHarbor Lightframe API - do not remove - see: https://fareharbor.com/help/website/resources/lightframe-api/ -->
        <script src="https://fareharbor.com/embeds/api/v1/?autolightframe=yes"></script>


    @endpush

@stop
