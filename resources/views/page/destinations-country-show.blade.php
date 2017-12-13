@extends('layouts.page.default')
@section('content')

    <section>
        <div class="jumbotron jumbotron-slider-1 rounded-0">
            <div class="container">
                <h2 class="text-white my-5 h1">Our excursions and packages depart 365 days a year</h2>
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
                    <h1 class="text-g-green">Peru Destinations</h1>
                    <p class="lead">The pride of South America is well known for being a country of congregated lands, culture, and bloods. History has perpetuated in Peru, luckily we have conserved it intact since pre-Hispanic times.</p>
                    <p class="lead">The Tahuantinsuyo, one of the greatest pre-Columbian civilizations, their wealth of treasures, architecture, elegance and art, particularly impressed the first chroniclers and still impress our visitors till date. Cusco, among other cities, is not only city that reflects the Inca standards but also a Hispanic past.</p>
                    <p class="lead">A country that portraits in its city and villages the magic of its mestizo culture, its colonial plazas, streets and churches gift us with its beauty and centenarian architecture and invite us to enjoy a hospitality of a great town.</p>
                    <p class="lead">Peru is a whole other type of adventure, only a few other countries in the world offer virtually the options of adventure sports, under the sun, Peru is ideal to experiment unique sensations. An essential part of Peru’s magical land is in its life mixture of its Andean ancestors, occidental yet Christian traditions, and its folklore – let us not forget about its rich gastronomy; these are a few of the things that make Peru a multicultural country.</p>
                    <p class="lead">The historic center has been declared by the UNESCO a cultural patrimony of humanity, whoever visits Peru distinguish the virtues of an emerging country and recognize amongst everything the friendly warmth and hospitality that Peruvians offer. The magic, the history, the astounding nature and exquisite culture Peru have waits for you…</p>

                    <div class="alert alert-g-yellow" role="alert">
                        <h5>We will work around your schedule and your travel interests to build together the most unique travel plans</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="row">
                        @php $pais_e= explode('-', $pais) @endphp
                        @foreach($destinos->unique('pais') as $destino)
                            <div class="col-12 @if($destino->pais == $pais) {{'order-first'}} @endif">
                                <h3 class="font-weight-bold text-g-green text-capitalize">{{$destino->pais}} Destinations</h3>
                                @foreach($destinos->where('pais', $destino->pais)->unique('region') as $region)
                                    @if(isset($region->region))
                                        <h5 class="text-g-yellow font-pompiere font-weight-bold"><b>Region:</b> {{$region->region}}</h5>
                                        <div class="list-group mb-3">
                                            @foreach($destinos->where('pais', $destino->pais)->where('region', $region->region) as $city)
                                                @php $j=0 @endphp
                                                @foreach($paquete_destinos->where('iddestinos', $city->id) as $paquete_destino)
                                                    @php $j++ @endphp
                                                @endforeach

                                                <a href="{{route('destinations_country_show_path', ['peru-travel', str_replace(' ', '-', strtolower($city->nombre))])}}-tours" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                                    <h6 class="text-secondary"> {{ucwords(strtolower($city->nombre))}}</h6>
                                                    <span class="badge badge-primary badge-pill">{{$j}}</span>
                                                </a>
                                                {{--                                            <a href="{{route('destinations_country_show_path', ['peru-travel', str_replace(' ', '-', strtolower($city->nombre))])}}-tours"><i class="fa fa-chevron-right my-2"></i>{{ucwords(strtolower($city->nombre))}} <span class="badge badge-g-yellow float-right mt-1">{{$j}}</span></a>--}}

                                            @endforeach
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col">
                    <h3 class="font-weight-bold text-g-green text-capitalize">{{$pais}} travel packages</h3>
                    <h5 class="text-secondary font-pompiere font-weight-bold"><b>Incluye:</b> hoteles, transporte, guia.</h5>
                    <div class="">
                        <div class="row">
                            @foreach($paquetes_de as $paquetes_des)
                                @if(isset($paquetes_des->destinos))
                                    @foreach($paquete->where('id',$paquetes_des->idpaquetes)->sortBy("duracion") as $paquetes)
                                        <div class="col-4 d-flex mb-4">
                                            <div class="card">
                                                {{--<div class="card-header">--}}
                                                {{--<h4 class="card-title">City tour em cusco</h4>--}}
                                                {{--</div>--}}
                                                <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquetes->titulo)), $paquetes->duracion])}}"><img class="card-img-top " src="{{asset('images/packages/'.$paquetes->codigo.'.jpg')}}" alt="{{strtolower($paquetes->titulo)}}"></a>
                                                <div class="card-img-overlay p-1">
                                                    <h5 class="card-title rounded text-dark p-2"><span class="badge badge-g-yellow mt-1">{{$paquetes->duracion}} Days</span> <a href="" class="btn btn-sm btn-dark float-right" data-toggle="modal" data-target="#{{$paquetes->codigo}}-modal"><i class="fa fa-search-plus"></i> Map and Itinerary</a></h5>
                                                    {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                                                    {{--<p class="card-text">Last updated 3 mins ago</p>--}}
                                                </div>
                                                <div class="card-body p-2 text-center">
                                                    <h2 class="card-title m-0 font-pompiere font-weight-bold h4"><a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquetes->titulo)), $paquetes->duracion])}}" class="text-dark">{{$paquetes->titulo}}</a></h2>
                                                    {{--<p class="text-left"><i class="fa fa-clock-o text-primary" aria-hidden="true"></i> 6 Días</p>--}}
                                                    <p class="text-left card-text"><i class="fa fa-map-marker text-g-yellow" aria-hidden="true"></i>
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
                                                    </p>
                                                    {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                                                </div>
                                                <div class="card-footer text-muted p-2">
                                                    <div class="row">
                                                        <div class="col text-left">From</div>
                                                        <div class="col text-right font-weight-bold text-primary font-montserrat">
                                                            @foreach($paquetes->precio_paquetes as $precio)
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

                                        <!-- Modal -->
                                        <div class="modal fade" id="{{$paquetes->codigo}}-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">{{$paquetes->titulo}} | {{$paquetes->duracion}} DAYS TOURS</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="{{asset('images/maps/'.$paquetes->codigo.'.jpg')}}" alt="map {{strtolower($paquetes->titulo)}}" class="img-fluid rounded">
                                                        <div class="border box-route-ininerary mt-3 rounded p-3">
                                                            @foreach($paquetes->itinerario->sortBy('dia') as $itinerario)
                                                                <p>
                                                                    <strong>Day {{$itinerario->dia}}: </strong> {{ucwords(strtolower($itinerario->titulo))}}
                                                                </p>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        {{--<button type="button" class="btn btn-primary">View Packages</button>--}}
                                                        <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquetes->titulo)), $paquetes->duracion])}}" class="btn btn-g-yellow">View Trip</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop