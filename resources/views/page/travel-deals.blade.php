@extends('layouts.page.default')
@section('content')
    <section class="d-none d-lg-block">
        <div class="jumbotron jumbotron-slider-1 rounded-0">
            <div class="container">
                <h2 class="text-white my-5 h1">Travel Deals</h2>
                {{--<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>--}}
                {{--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>--}}
            </div>
        </div>
    </section>

    @include('layouts.page.included')

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    {{--<h1 class="text-secondary h5"><strong>PERU TRAVEL PACKAGES</strong></h1>--}}
                    <h1 class="text-g-green">Travel Deals</h1>
                    <p class="lead">"Our Monthly Top 9 Peru and Multi-countryTravel Packages deals! rest assure we can also customize them based on your preferences for example adding destinations of modifying the number of days. Contact your GOTOPERU Travel advisor today!"</p>

                    {{--<div class="alert alert-g-yellow" role="alert">--}}
                        {{--<h4>We will work around your schedule and your travel interests to build together the most unique travel plans</h4>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row">
                @foreach($paquetes->sortBy('duracion') as $paquete)
                    <div class="col-12 col-md-6 col-lg-4 d-flex my-5">
                        <div class="card">
                            @switch($paquete->descuento)
                                @case(1)
                                <img src="{{asset('images/icons/best-price.png')}}" alt="" class="position-absolute p-medalla">
                                @break

                                @case(2)
                                <img src="{{asset('images/icons/new.png')}}" alt="" class="position-absolute p-medalla">
                                @break

                                @case(3)
                                <img src="{{asset('images/icons/travel-deals.png')}}" alt="" class="position-absolute p-medalla">
                                @break

                                @default
                                <img src="{{asset('images/icons/best-price.png')}}" alt="" class="position-absolute p-medalla">
                            @endswitch
                            {{--<div class="card-header">--}}
                            {{--<h4 class="card-title">City tour em cusco</h4>--}}
                            {{--</div>--}}
                            <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquete->titulo)), $paquete->duracion])}}"><img class="card-img-top " src="{{asset('images/packages/'.$paquete->codigo.'.jpg')}}" alt="Card image cap"></a>
                            {{--<div class="card-img-overlay p-1">--}}
                                {{--<h5 class="card-title rounded text-dark p-2"><span class="badge badge-g-yellow mt-1">{{$paquete->duracion}} Days</span> <a href="" class="btn btn-sm btn-dark float-right"><i class="fa fa-search-plus"></i> Map and Itinerary</a></h5>--}}
                                {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                                {{--<p class="card-text">Last updated 3 mins ago</p>--}}
                            {{--</div>--}}
                            <div class="card-body p-2 text-center">
                                <h2 class="card-title m-0 font-pompiere font-weight-bold h4"><a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquete->titulo)), $paquete->duracion])}}" class="text-dark">{{$paquete->titulo}}</a></h2>
                                {{--<p class="text-left"><i class="fa fa-clock-o text-primary" aria-hidden="true"></i> 6 Días</p>--}}
                                <p class="text-left card-text mt-2"><i class="fa fa-clock-o text-g-yellow" aria-hidden="true"></i> <span class="badge badge-g-dark">{{$paquete->duracion}} Days</span></p>
                                <p class="text-left card-text"><i class="fa fa-map-marker text-g-yellow" aria-hidden="true"></i>
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
                                </p>
                                {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                            </div>
                            <div class="card-footer text-muted p-2">
                                <div class="row">
                                    <div class="col text-left">From</div>
                                    <div class="col text-right font-weight-bold text-primary font-montserrat">
                                        @foreach($paquete->precio_paquetes as $precio)
                                            @if($precio->estrellas == 2)
                                                @if($precio->precio_d > 0)
                                                    <sup>$</sup> {{$precio->precio_d}} <small>USD</small>
                                                @else
                                                    <span class="text-danger">Inquire</span>
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@stop