@extends('layouts.page.default')
@section('content')

    <section class="d-none d-sm-block">
        <div class="jumbotron jumbotron-slider-1 rounded-0">
            <div class="container">
                <h2 class="text-white my-5 h1">Peru Travel Featured Packages</h2>
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
                <div class="col">
                    <h3 class="font-weight-bold text-g-green">All Packages <span class="float-right"><a href="{{route('packages_path')}}" class="text-secondary" data-toggle="tooltip" data-placement="top" title="View as gallery"><i class="fa fa-th-large"></i></a></span></h3>
                    <div class="">
                        <div class="row">
                            {{--<h3 class="font-weight-bold" id="ofertas">Perú Ofertas</h3>--}}

                            <div id="accordion" role="tablist" class="col">
                                @php
                                    $i = 1;
                                @endphp
                                @foreach($paquete->unique('duracion')->sortBy('duracion') as $paquetes)
                                    @php
                                        $j = 0;
                                    @endphp
                                    @foreach($paquete->where('duracion', $paquetes->duracion) as $paq)
                                        @php $j++ @endphp
                                    @endforeach
                                    <div class="card my-3">
                                        <div class="card-header w-100" role="tab" id="headingOne">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" href="#collapse-{{$paquetes->duracion}}" aria-expanded="true" aria-controls="collapseOne" class="text-g-yellow">
                                                    {{$paquetes->duracion}} day Tours Packages <span class="badge badge-danger float-right mt-1">{{$j}}</span>
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="collapse-{{$paquetes->duracion}}" class="collapse @if($i==1) show @endif" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">

                                                    <table class="table border-0 m-0 table-hover">
                                                        <thead class="thead-inverse">
                                                        {{--<tr>--}}
                                                        {{--<th>Nombre del Paquete</th>--}}
                                                        {{--<th>Destinos</th>--}}
                                                        {{--<th>Categoria</th>--}}
                                                        {{--<th>Precios <i class="fa fa-star text-warning" aria-hidden="true"></i><i class="fa fa-star text-warning" aria-hidden="true"></i></th>--}}
                                                        {{--</tr>--}}
                                                        </thead>
                                                        <tbody>
                                                        @foreach($paquete->where('duracion', $paquetes->duracion) as $paquetes)
                                                            <tr onClick="CrearEnlace('{{route('itinerary_path', [str_replace(' ','-',strtolower($paquetes->titulo)), $paquetes->duracion])}}');" class="clickable">
                                                                <td class="text-primary">{{$paquetes->duracion}} Dias {{ucwords(strtolower($paquetes->titulo))}}</td>
                                                                <td class="d-none d-sm-block">
                                                                    @php
                                                                        $i = 1;
                                                                        $num_des = count($paquete_destinos->where('idpaquetes',$paquetes->id));
                                                                    @endphp
                                                                    @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                                                        @if(isset($paquete_destino->destinos->nombre))
                                                                            {{ucwords(strtolower($paquete_destino->destinos->nombre))}}@if($i < $num_des),@endif
                                                                            @php $i++; @endphp
                                                                        @endif
                                                                    @endforeach
                                                                </td>
                                                                <td class="d-none d-sm-block">Clasico</td>
                                                                <td class="font-montserrat text-right"><b>
                                                                        @foreach($paquetes->precio_paquetes as $precio)
                                                                            @if($precio->estrellas == 2)
                                                                                @if($precio->precio_d == 0)
                                                                                    <span class="text-danger">Inquire</span>
                                                                                @else
                                                                                    <sup>$</sup>{{$precio->precio_d}}<small>USD</small>
                                                                                @endif
                                                                            @endif
                                                                        @endforeach
                                                                    </b></td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>

                                            </div>
                                        </div>
                                    </div>
                                    @php $i++ @endphp
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop