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
                    <h1 class="text-g-green">Peru Travel Featured Packages</h1>
                    <p class="lead">our most popular <strong>Peru and South America itineraries</strong>, these <strong>packages</strong> could be used as a reference to customize your own trip. At <strong>GOTOPERU</strong> we specialize in crafting personalize experiences based on your preferences; we invited to review these programs to have glimpse of the most important destinations for instance MachuPicchu, Lake Titicaca, Nazca and the Amazon.</p>

                    <div class="alert alert-g-yellow" role="alert">
                        <h4>And even multi countries travel adventures involving Brasil, Ecuador , Argentina.</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="sticky-top sticky-top-50">
                        <h3 class="font-weight-bold text-g-green">Order By</h3>
                        <div class="list-group">
                            @foreach($paquetes_r->unique('duracion')->sortBy('duracion') as $paquete)
                                @php
                                    $j = 0;
                                @endphp
                                @foreach($paquetes_r->where('duracion', $paquete->duracion) as $paq)
                                    @php $j++ @endphp
                                @endforeach

                                <a href="{{route('packages_durations_path', $paquete->duracion)}}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center p-2">
                                    <h6 class="text-secondary">{{$paquete->duracion}} days</h6>
                                    <span class="badge badge-primary badge-pill">{{$j}}</span>
                                </a>

                            @endforeach
                        </div>


                    </div>
                </div>
                <div class="col">
                    <h3 class="font-weight-bold text-g-green">All Packages <span class="float-right"><a href="{{route('packages_list_path')}}" class="text-secondary" data-toggle="tooltip" data-placement="top" title="View as list"><i class="fa fa-th-list"></i></a></span></h3>
                    <div class="">
                        <div class="row">
                            @foreach($paquetes->sortBy('duracion') as $paquete)
                                <div class="col-4 d-flex mb-4">
                                    <div class="card">
                                        {{--<div class="card-header">--}}
                                        {{--<h4 class="card-title">City tour em cusco</h4>--}}
                                        {{--</div>--}}
                                        <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquete->titulo)), $paquete->duracion])}}"><img class="card-img-top " src="{{asset('images/packages/'.$paquete->codigo.'.jpg')}}" alt="{{strtolower($paquete->titulo)}}"></a>
                                        <div class="card-img-overlay p-1">
                                            <h5 class="card-title rounded text-dark p-2"><span class="badge badge-g-yellow mt-1">{{$paquete->duracion}} Days</span> <a href="" class="btn btn-sm btn-dark float-right" data-toggle="modal" data-target="#{{$paquete->codigo}}-modal"><i class="fa fa-search-plus"></i> Map and Itinerary</a></h5>
                                            {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                                            {{--<p class="card-text">Last updated 3 mins ago</p>--}}
                                        </div>
                                        <div class="card-body p-2 text-center">
                                            <h2 class="card-title m-0 font-pompiere font-weight-bold h4"><a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquete->titulo)), $paquete->duracion])}}" class="text-dark">{{$paquete->titulo}}</a></h2>
                                            {{--<p class="text-left"><i class="fa fa-clock-o text-primary" aria-hidden="true"></i> 6 Días</p>--}}
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

                                <!-- Modal -->
                                <div class="modal fade" id="{{$paquete->codigo}}-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">{{$paquete->titulo}} | {{$paquete->duracion}} DAYS TOURS</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{asset('images/maps/'.$paquete->codigo.'.jpg')}}" alt="map {{strtolower($paquete->titulo)}}" class="img-fluid rounded">
                                                <div class="border box-route-ininerary mt-3 rounded p-3">
                                                    @foreach($paquete->itinerario->sortBy('dia') as $itinerario)
                                                        <p>
                                                            <strong>Day {{$itinerario->dia}}: </strong> {{ucwords(strtolower($itinerario->titulo))}}
                                                        </p>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                {{--<button type="button" class="btn btn-primary">View Packages</button>--}}
                                                <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquete->titulo)), $paquete->duracion])}}" class="btn btn-g-yellow">View Trip</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop