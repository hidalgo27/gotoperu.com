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

            <img src="{{asset('images/destinations/'.str_replace(' ','-', $ciudad).'.jpg')}}" alt="" id="hero-vid" class="banner-itinerary">
            {{--@include('layouts.page.menu-custom')--}}
        </div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row content-header-row align-items-center">

                    <div class="col">
                        <div class="row my-3 justify-content-center text-white font-weight-bold h2">
                            {{ucwords($ciudad)}} Tours
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
    <section class="d-md-none">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col">
                    <img data-src="{{asset('images/destinations/'.str_replace(' ','-', $ciudad).'.jpg')}}" data-srcset="{{asset('images/destinations/'.str_replace(' ','-', $ciudad).'.jpg')}}" alt="{{$ciudad}}" class="img-fluid lazy has-webp">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white m-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col small font-weight-bold">
                    {{Breadcrumbs::render('destinations_show', $ciudad)}}
                </div>
            </div>
        </div>
    </section>

    <div class="bg-white py-2 pt-4"></div>
    <div class="sticky-top text-center py-2 bg-white">
        @foreach($destinos->where('pais',$pais)->sortBy('nombre') as $destino)
            <a href="{{route('destinations_country_show_path', ['peru-travel', str_replace(' ', '-', strtolower($destino->nombre))])}}-tours">
                <img data-src="{{asset('images/destinations/destinations/'.str_replace(' ','-', strtolower($destino->nombre)).'')}}.jpg" data-srcset="{{asset('images/destinations/destinations/'.str_replace(' ','-', strtolower($destino->nombre)).'')}}.jpg" alt="{{strtolower($destino->nombre)}}" width="60" height="60" class="rounded-circle lazy has-webp buble-destinations {{ Request::is( 'destinations/peru-travel/'.str_replace(' ', '-', strtolower($destino->nombre)).'-tours') ? 'active' : '' }}" data-toggle="tooltip" data-placement="top" title="{{ucwords(strtolower($destino->nombre))}}">
            </a>
        @endforeach
    </div>
    {{--<section class="bg-white">--}}
        {{--<div class="container-fluid">--}}
            {{--<div class="row pt-4">--}}
                {{--<div class="col">--}}
                    {{--<h1 class="text-secondary text-center text-g-green font-weight-normal"><strong>{{ucwords($ciudad)}} Tour</strong></h1>--}}
                    {{--<p class="lead">our most popular <strong>Peru and South America itineraries</strong>, these <strong>packages</strong> could be used as a reference to customize your own trip. At <strong>GOTOPERU</strong> we specialize in crafting personalize experiences based on your preferences; we invited to review these programs to have glimpse of the most important destinations for instance MachuPicchu, Lake Titicaca, Nazca and the Amazon.</p>--}}
                    {{--<div class="alert alert-g-yellow text-center m-0" role="alert">--}}
                        {{--<h4>We will work around your schedule and your travel interests to build together the most unique travel plans</h4>--}}
                    {{--</div>--}}
                    {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                    {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                    {{--<p class="h4 font-weight-light">Offering you an authentic and reliable <strong>travel experience</strong> in peru welcoming you to explore the many fully <strong>Customized Travel Packages</strong> we have that suit every budget. let us plan your unforgettable <strong>trip</strong> to our majestic <strong>Machu Picchu</strong> and the rest of our  homeland… Peru!</p>--}}


                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}


    <section class="bg-white pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-7 col-md-8 col-xl-9">
                    <div class="row pt-4" id="tours">
                        <div class="col-12 mb-4">
                            {{--<h3 class="text-g-yellow font-weight-bold">Tours</h3>--}}
                            <h1 class="text-secondary text-g-yellow font-weight-bold">{{ucwords($ciudad)}} Tour</h1>
                            @foreach($destinos->where('nombre', strtoupper($ciudad)) as $destino)
                                @php echo $destino->descripcion @endphp
                            @endforeach
                            <div class="alert alert-g-green text-center" role="alert">
                                <h5 class="font-weight-normal"> Peru Local operator : the best local guides,  charming hotels, unique tours, and friendly representatives. <span class="d-block font-weight-bold">#gotoperu #yourperuvianconnection</span></h5>
                            </div>
                        </div>
                        @foreach($paquetes_de as $paquetes_des)
                            @if(isset($paquetes_des->destinos))
                                @foreach($paquete->where('id',$paquetes_des->idpaquetes)->sortBy("duracion") as $paquetes)
                                    <div class="col-12 col-lg-6 text-decoration-none mb-5">
                                        <div class="bg-light shadow-sm rounded">
                                            <div class="row align-items-center no-gutters">
                                                <div class="col-12">
                                                    <div class="position-relative">
                                                        <img src="{{asset('images/mapas/'.$paquetes->codigo.'.jpg')}}" alt="" class="w-100 rounded-left">
                                                        <div class="position-absolute-bottom p-2 text-center">
                                                            @foreach($paquetes->paquetes_categoria as $paquetes_categorias)
                                                            <span class="small font-weight-bold badge badge-g-yellow shadow">{{$paquetes_categorias->categoria->nombre}}</span>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-center mt-2">
                                                    <div class="px-3">
                                                        <h2 class="h6 font-weight-bold">{{$paquetes->titulo}}</h2>
                                                        <small class="text-muted font-weight-bold">{{$paquetes->duracion}} days</small>
                                                        @foreach($paquetes->precio_paquetes as $precio)
                                                            @if($precio->estrellas == 2)
                                                                @if($precio->precio_d > 0)
                                                                    {{--                                                                <p class="text-info font-weight-bold m-0 h5"><small><sup>form $</sup></small>{{$precio->precio_d}}<small>USD</small></p>--}}
                                                                    <div class="display-4 font-weight-bold"><sup>$</sup>{{$precio->precio_d}}</div>
                                                                @else
                                                                    <span class="text-danger">Inquire</span>
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                        <div class="row my-3 justify-content-center">
                                                            <div class="col-6">
                                                                <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquetes->titulo)), $paquetes->duracion])}}" class="btn btn-g-yellow btn-block font-weight-bold">Inquire now</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        @endforeach
                    </div>

                    <div class="row pt-4" id="location">
                        <div class="col-12">
                            <h3 class="text-g-yellow font-weight-bold">Location</h3>
                        </div>
                        <div class="col-12">
                            @foreach($cusco->results as $cuscos)
                                @foreach($cuscos->geometry->location as  $cusco2)
                                    @php $cusco3[] = $cusco2; @endphp
                                @endforeach
                            @endforeach
                            <div id="map"></div>
                        </div>
                    </div>

                    @foreach($destinos->where('nombre', strtoupper($ciudad)) as $destino)
                        @if($destino->historia == " " OR $destino->historia == NULL)
                            @php $h_resumen = "d-none"; @endphp
                        @else
                            @php $h_resumen = " "; @endphp
                        @endif
                    @endforeach

                    <div class="row pt-4 {{$h_resumen}}" id="history">
                        <div class="col-12">
                            <h3 class="text-g-yellow font-weight-bold">History</h3>
                        </div>
                        <div class="col-12">
                            @php echo $destino->historia @endphp
                        </div>
                    </div>

                    <div class="row pt-4 {{$h_resumen}}" id="geography">
                        <div class="col-12">
                            <h3 class="text-g-yellow font-weight-bold">Geography</h3>
                        </div>
                        <div class="col-12">

                                @php echo $destino->geografia @endphp

                        </div>
                    </div>

                    <div class="row pt-5" id="hotels">

                        <div class="col-12">
                            <h3 class="text-g-yellow font-weight-bold">Hotels </h3>
                            @foreach($destinos_id as $d)

                            @endforeach
                        </div>

                        {{--@foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)--}}
                            {{--<h5 class="text-g-yellow pt-4 m-0" id="{{$paquete_destino->destinos->id}}-hotel"><i class="fa fa-check"></i> {{$paquete_destino->destinos->nombre}} HOTEL</h5>--}}
                            {{--<div class="row pt-3 pb-4">--}}
                                @foreach($hoteles_destinos->where('iddestinos', $d->id) as $hoteles_destino)
                                    <div class="col-6 d-flex my-3">
                                        <div class="row">
                                            <div class="col-auto d-none d-sm-block">
                                                <img src="{{$hoteles_destino->hotel->imagen}}" alt="hotel cusco" class=" rounded-circle" width="50" height="50">
                                            </div>
                                            <div class="col">
                                                <a href="{{$hoteles_destino->hotel->url}}" class="h5 align-middle">{{$hoteles_destino->hotel->nombre}}</a>
                                                @for($i=0; $i < $hoteles_destino->hotel->estrellas; $i++)
                                                    <small><i class="fa fa-star text-g-yellow"></i></small>
                                                @endfor
                                                <small class="d-block text-secondary"><i class="fa fa-map-marker-alt"></i> {{$hoteles_destino->hotel->direccion}}</small>
                                                @php $services = explode(',', $hoteles_destino->hotel->servicios); @endphp
                                                <p class="pt-2"><b>Services:</b>
                                                    @foreach($services as $service)
                                                        <i class="fa fa-check text-secondary"></i> {{$service}}
                                                    @endforeach
                                                </p>
                                                {{--                                                        <a href="{{$hoteles_destino->hotel->url}}" class="btn btn-outline-secondary" target="_blank">{{$hoteles_destino->hotel->nombre}}</a>--}}
                                            </div>
                                        </div>
                                        {{--<hr>--}}
                                    </div>
                                @endforeach
                            {{--</div>--}}
                        {{--@endforeach--}}

                    </div>

                    <div class="row pt-5" id="current-weather">

                            <div class="col-12">
                                <h3 class="text-g-yellow font-weight-bold">Current Weather</h3>
                            </div>
                            <div class="col-12">
                                <a class="weatherwidget-io" href="https://forecast7.com/en/n13d53n71d97/cusco/?unit=us" data-label_1="CUSCO" data-label_2="WEATHER" data-theme="original" >CUSCO WEATHER</a>
                            </div>

                    </div>

                    <div class="row" id="photos">

                    </div>

                </div>
                <div class="col-12 col-sm-5 col-md-4 col-xl-3 d-none d-sm-block">
                    <div class="sticky-top sticky-top-80 mt-5">
                        <nav id="menu" class="navbar navbar-light nav-goto-side w-100">
                            <nav class="nav nav-pills flex-column w-100">
                                <a class="nav-link active" href="#tours">{{ucwords($ciudad)}} Tours</a>
                                <a class="nav-link" href="#location">Location</a>
                                <a class="nav-link {{$h_resumen}}" href="#history">History</a>
                                <a class="nav-link {{$h_resumen}}" href="#geography">Geography</a>
                                <a class="nav-link" href="#hotels">Hotels</a>
                                <a class="nav-link" href="#current-weather">Current Weather</a>
                                {{--<a class="nav-link" href="#photos">Photos</a>--}}
                            </nav>
                        </nav>

                        <div class="row mt-4">
                            <div class="col">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <h3>QUICK FACTS</h3>

                                            @php echo $destino->resumen @endphp

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    @include('layouts.page.form-quote')
    @push('scripts')
        <script>
            function initMap() {
                var lat1 = parseFloat("{{$cusco3[0]}}");
                var lng1 = parseFloat("{{$cusco3[1]}}");
                        {{--alert (lng);--}}
                var uluru = {lat: lat1, lng: lng1};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 6,
                    center: uluru
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });
            }

            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
        </script>
    @endpush
@stop