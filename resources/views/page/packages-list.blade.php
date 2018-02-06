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

            <img src="{{asset('images/slider/package-1.jpg')}}" alt="" id="hero-vid">

        </div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row content-header-row align-items-center">

                    <div class="col">

                        <div class="row my-3 justify-content-center">
                            <p class="text-white display-4 font-weight-light">Peru Travel Featured Packages</p>
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

    @include('layouts.page.menu')

    <section class="bg-white">
        <div class="container-fluid">
            <div class="row pt-5">
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


    <section class="bg-white py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h3 class="text-secondary h4 font-weight-bold">All Packages <span class="float-right"><a href="{{route('packages_path')}}" class="text-secondary" data-toggle="tooltip" data-placement="top" title="View as gallery"><i class="fa fa-th-large"></i></a></span></h3>
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
                                                                <td class="d-none d-lg-block">
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
                                                                {{--<td class="d-none d-lg-block">Clasico</td>--}}
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
    @include('layouts.page.form-quote')
@stop