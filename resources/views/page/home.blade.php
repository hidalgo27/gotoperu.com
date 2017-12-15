@extends('layouts.page.default')

@section('content')
    <div class="d-sm-none">
        <img src="{{asset('images/slider/machupicchu.jpg')}}" alt="" class="w-100">
    </div>
    <section class="d-none d-sm-block">
        <div class="jumbotron jumbotron-slider rounded-0">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-4 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">

                        <div class="card bg-rgba-white mb-3">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col">
                                        <img src="{{asset('images/icons/include/assistances.png')}}" alt="" class="w-100" data-toggle="tooltip" data-placement="top" title="Assistances">
                                        {{--<span>Assistances</span>--}}
                                    </div>

                                    <div class="col">
                                        <img src="{{asset('images/icons/include/entrances.png')}}" alt="" class="w-100" data-toggle="tooltip" data-placement="top" title="Entrances">
                                        {{--<span>Entrances</span>--}}
                                    </div>
                                    <div class="col">
                                        <img src="{{asset('images/icons/include/transfers.png')}}" alt="" class="w-100" data-toggle="tooltip" data-placement="top" title="Transfers">
                                        {{--<span>Transfers</span>--}}
                                    </div>

                                    <div class="col">
                                        <img src="{{asset('images/icons/include/hotels.png')}}" alt="" class="w-100" data-toggle="tooltip" data-placement="top" title="Hotels">
                                        {{--<span>Hotels</span>--}}
                                    </div>
                                    <div class="col">
                                        <img src="{{asset('images/icons/include/tours.png')}}" alt="" class="w-100" data-toggle="tooltip" data-placement="top" title="Tours">
                                        {{--<span>Tours</span>--}}
                                    </div>
                                    <div class="col">
                                        <img src="{{asset('images/icons/include/trains.png')}}" alt="" class="w-100" data-toggle="tooltip" data-placement="top" title="Trains">
                                        {{--<span>Trains</span>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row no-gutters">
                                    <div class="col">
                                        <ul class="list-unstyled text-left m-0">
                                            <li>Dia 1: Lima City Tour</li>
                                            <li>Dia 2: Pachacamac</li>
                                            <li>Dia 3: Cusco City</li>
                                            <li>Dia 4: Sacred Valley</li>
                                            <li>Dia 5: Machu Picchu</li>
                                            <li>Dia 6: Maras & Maras</li>
                                            <li>Dia 7: South Valley</li>
                                            <li>Dia 8: Sun Road Tour</li>
                                            <li>Dia 9: Lake Titicaca</li>
                                            <li>Dia 10: Farewell</li>
                                        </ul>
                                    </div>
                                    <div class="col border border-top-0 border-bottom-0 border-right-0 border-secondary">
                                        <div>
                                            <h2 class="font-pompiere font-weight-bold h1">Amazing Peru</h2>
                                        </div>
                                        <div class="h1 text-g-yellow my-4">
                                            10 <span>days</span>
                                        </div>
                                        <div>
                                            <span class="h1"><sup class="h5 text-secondary">from</sup>$1499</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col">
                                        <a href="" class="text-white btn btn-block btn-g-yellow">8 days</a>
                                    </div>
                                    <div class="col">
                                        <a href="" class="text-white btn btn-block btn-g-green">12 days</a>
                                    </div>
                                    <div class="col">
                                        <a href="" class="text-white btn btn-block btn-g-dark">14 days</a>
                                    </div>
                                </div>
                                {{--<div class="col text-right my-3">--}}
                                    {{--<a href="" class="text-white">View all Specialy</a>--}}
                                {{--</div>--}}
                            </div>
                        </div>

                    </div>

                    <div class="col-3">
                        <h2 class="text-white text-center mt-5">Top recommend Travel Operator to Peru and <strong>Machu Picchu</strong></h2>
                    </div>

                    <div class="col-3 os-animation bg-rgba-dark py-2 rounded" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                        <h5 class="text-white font-weight-bold text-center">GET A FREE QUOTE</h5>

                        <form id="de_form" role="form">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col input-group-sm mb-1">
                                    <input type="text" class="form-control" id="de_name" placeholder="Full Name*">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col input-group-sm mb-1">
                                    <input type="text" class="form-control" id="de_email" placeholder="Email*">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col input-group-sm mb-1">
                                    <input type="text" class="form-control" id="de_country" placeholder="Country">
                                </div>
                                <div class="col input-group-sm mb-1">
                                    <input type="text" class="form-control" id="de_date" placeholder="Traveling Date">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col input-group-sm mb-1">
                                    <input type="number" min="1" class="form-control" id="de_numero" placeholder="Travelers">
                                </div>
                                <div class="col input-group-sm mb-1">
                                    <input type="number" min="1" class="form-control" id="de_duration" placeholder="Days">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h6 class="my-1 font-weight-bold text-g-yellow">Peru main destinations</h6>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg" data-toggle="buttons">
                                    <label class="btn btn-outline-g-green btn-block btn-sm">
                                        <input type="checkbox"  autocomplete="off" name="destinations[]" value="Cusco & Machu Picchu"> Cusco & Machu Picchu
                                    </label>
                                </div>

                                <div class="col-6 col-sm-6 col-md-6 col-lg" data-toggle="buttons">
                                    <label class="btn btn-outline-g-green btn-block btn-sm">
                                        <input type="checkbox" autocomplete="off" name="destinations[]" value="Lima"> Lima
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg" data-toggle="buttons">
                                    <label class="btn btn-outline-g-green btn-block btn-sm">
                                        <input type="checkbox" autocomplete="off" name="destinations[]" value="Puno & Lago Titicaca"> Puno & Lago titicaca
                                    </label>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg" data-toggle="buttons">
                                    <label class="btn btn-outline-g-green btn-block btn-sm">
                                        <input type="checkbox" autocomplete="off" name="destinations[]" value="Amazon"> Amazon
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg" data-toggle="buttons">
                                    <label class="btn btn-outline-g-green btn-block btn-sm">
                                        <input type="checkbox" autocomplete="off" name="destinations[]" value="Colca Canyon"> Colca Canyon
                                    </label>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg" data-toggle="buttons">
                                    <label class="btn btn-outline-g-green btn-block btn-sm">
                                        <input type="checkbox" autocomplete="off" name="destinations[]" value="Lineas de Nazca"> Nazca Lines
                                    </label>
                                </div>
                            </div>


                            {{--<div class="input-group input-group-sm mb-2">--}}
                                {{--<span class="input-group-addon" id="">Outros</span>--}}
                                {{--<input type="text" class="form-control" id="de_otros" aria-describedby="basic-addon3">--}}
                            {{--</div>--}}

                            <div class="form-group input-group-sm ">
                                <textarea class="form-control" id="de_comment" rows="2" placeholder="How do you imagine a perfect trip to Peru, Special Requests, Questions, Comments"></textarea>
                            </div>
                            {{--<button type="submit" class="btn btn-g-green btn-block">Send</button>--}}

                            <div class="row">
                                <div class="col">
                                    <div class="alert alert-success alert-dismissible fade d-none" id="de_alert" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <strong>THANK YOU FOR CONTACT US</strong>, YOU WILL RECEIVE A REPLY IN LESS THAN 24 HOURS, GURANTEED. :)
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-g-green btn-block btn-next" id="de_send" type="button" onclick="design()">Send
                                        {{--<i class="fa fa-paper-plane" aria-hidden="true"></i>--}}
                                    </button>
                                    <ul class="fa-ul pull-right d-none text-white" id="loader5">
                                        <li><i class="fa-li fa fa-spinner fa-spin"></i> <i>Sending...</i></li>
                                    </ul>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('layouts.page.included')

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="text-secondary h5"><strong>PERU TRAVEL PACKAGES</strong></h1>
                    {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                    <h2 class="text-g-green">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>
                    <p class="lead">Offering you an authentic and reliable <strong>travel experience</strong> in peru welcoming you to explore the many fully <strong>customized travel packages</strong> we have that suit every budget. let us plan your unforgettable <strong>trip</strong> to our majestic <strong>machu picchu</strong> and the rest of our  homeland… peru!</p>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-7">
                    <div class="row py-1 no-gutters">
                        <div class="col">
                            <h2 class="h5"><a href="packages/the-best-of-peru-express/9-days-tours" class="text-dark">THE HIGHLIHTS OF PERU IN 9 DAYS!</a>
                                <a href="packages/the-best-of-peru-express/9-days-tours#book-now" class="float-right btn btn-g-yellow btn-sm font-weight-bold">Check Availability</a></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{asset('images/banners/cusco.jpg')}}" alt="cusco">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3>Cusco</h3>
                                            {{--<p>...</p>--}}
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('images/banners/lake-titicaca.jpg')}}" alt="titicaca lake">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3>Lake Titicaca</h3>
                                            {{--<p>...</p>--}}
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('images/banners/lima.jpg')}}" alt="lima">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3>Lima</h3>
                                            {{--<p>...</p>--}}
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('images/banners/machupicchu.jpg')}}" alt="machu picchu">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3>Machu Picchu</h3>
                                            {{--<p>...</p>--}}
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('images/banners/nazca-lines.jpg')}}" alt="nazca lines">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3>Nazca Lines</h3>
                                            {{--<p>...</p>--}}
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('images/banners/sacred-valley.jpg')}}" alt="sacred valley">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3>Sacred Valley</h3>
                                            {{--<p>...</p>--}}
                                        </div>
                                    </div>
                                </div>
                                {{--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">--}}
                                {{--<span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
                                {{--<span class="sr-only">Previous</span>--}}
                                {{--</a>--}}
                                {{--<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">--}}
                                {{--<span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
                                {{--<span class="sr-only">Next</span>--}}
                                {{--</a>--}}
                            </div>
                        </div>
                    </div>

                    <div class="row no-gutters text-center">
                        <div class="col-6 col-sm bg-g-yellow">
                            <p class="h2">9 Days <span class="d-block h5">8 Night</span></p>
                        </div>
                        <div class="col-6 col-sm bg-g-green text-white">
                            <p class="h2 mt-2"><small class="d-block h6 m-0">starting from</small> $1449</p>
                        </div>
                        <div class="col-12 col-sm bg-g-dark text-white">
                            <p class="m-0">All Included</p>
                            <small>Hotels, Tours, Entrances, Nazca Overflight, Transfers.</small>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-9">
                            <h5 class="text-g-yellow"><strong>PERU</strong> EXPERTS ARRANGING YOUR SOON-TO-BE FAVORITE <strong>VACATION</strong></h5>
                            <p>From the moment you arrive to <strong>Peru</strong>, we will be pleased to share our passion, knowledge and experiences that we, the GOTOPERU team, have for our beloved country with you! We will make sure to make your <strong>Peru trip</strong> fulfill all the wanderlust in you…</p>
                        </div>
                        <div class="col-12 col-sm d-none d-sm-block">
                            <div class="row">
                                <!-- <img src="img/martin-paul.jpg" title="martin and paul" alt="go to peru team"> -->
                                <div class="col text-center">
                                    <div itemscope itemtype="http://data-vocabulary.org/Persona" class="vcard">
                                        <div itemscope itemtype="http://data-vocabulary.org/Persona" class="vcard">
                                            <img src="{{asset('images/firma-martin.jpg')}}" alt="martin" class="img-fluid">
                                            <span itemprop="name" class="text-8 d-block">MARTIN CATANO</span>
                                            <span itemprop="title" class="text-8 d-block">MANAGER</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-center">
                                    <div itemscope itemtype="http://data-vocabulary.org/Persona" class="vcard">
                                        <div itemscope itemtype="http://data-vocabulary.org/Persona" class="vcard">
                                            <img src="{{asset('images/firma-paul.jpg')}}" alt="paul" class="img-fluid">
                                            <span itemprop="name" class="fn text-8 d-block">PAUL CATANO</span>
                                            <span itemprop="title" class="ceo text-8 d-block">CEO</span>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <img src="img/firma-paul.jpg" class="width-gral-img" alt="firma paul catano">
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>

                </div>
                <div class="col-12 col-sm">
                    <div class="row">
                        <div class="col">
                            <div class="content-area-3">
                                <div class="position-relative">
                                    <img src="{{asset('images/video/prom-peru.jpg')}}" alt="video promperu" class="img-fluid">
                                    <div class="video-btn-1">
                                        <a href="https://www.youtube.com/embed/gGq_U1DYUCs" title=""><i class="fa fa-play-circle text-g-dark"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">

                            <div class="position-relative">
                                <img src="{{asset('images/video/gotoperu-group.jpg')}}" alt="gotoperu group" class="img-fluid">
                                <div class="video-btn-1">
                                    <a href="https://www.youtube.com/embed/AOa1ygLiapc" title=""><i class="fa fa-play-circle text-g-dark"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5 d-none d-sm-block">
        {{--<div class="">--}}
        {{--<a href="" class="">--}}
        {{--<div class="row">--}}
        {{--<div class="section-title-1 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">--}}
        {{--<h5 class="color-white"><strong>PERU TRAVEL OFFERS</strong></h5>--}}
        {{--<!-- <div class="sec-title-div-4"></div> -->--}}
        {{--<p class="color-black header-small-text-2">Various <strong>packages</strong> for all budgets with great discounts! we're all about savings, check our <strong>best packages</strong> below!</p>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</a>--}}
        {{--</div>--}}

        <div class="jumbotron jumbotron-divider-1 rounded-0">
            <div class="container">
                <div class="row justify-content-between no-gutters">
                    <div class="col text-white text-center bg-rgba-dark rounded p-4">
                        <h5 class="text-g-yellow"><strong>PERU TRAVEL OFFERS</strong></h5>
                        <!-- <div class="sec-title-div-4"></div> -->
                        <p class="m-0">Various <strong>packages</strong> for all budgets with great discounts! we're all about savings, check our <strong>best packages</strong> below!</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="my-5 d-sm-none">

            <div class="container">
                <div class="row justify-content-between no-gutters">
                    <div class="col text-white text-center bg-rgba-dark rounded p-4">
                        <h5 class="text-g-yellow"><strong>PERU TRAVEL OFFERS</strong></h5>
                        <!-- <div class="sec-title-div-4"></div> -->
                        <p class="m-0">Various <strong>packages</strong> for all budgets with great discounts! we're all about savings, check our <strong>best packages</strong> below!</p>
                    </div>
                </div>

            </div>

    </section>

    <section class="my-5">
        <div class="container">
            <div class="row pt-3">


                @foreach($paquetes->take(6) as $paquete)
                <div class="col-12 col-sm-4 d-flex mb-4">
                    <div class="card">
                        {{--<div class="card-header">--}}
                        {{--<h4 class="card-title">City tour em cusco</h4>--}}
                        {{--</div>--}}
                        <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquete->titulo)), $paquete->duracion])}}"><img class="card-img-top " src="{{asset('images/packages/'.$paquete->codigo.'.jpg')}}" alt="{{(strtolower($paquete->titulo))}}"></a>
                        <div class="card-img-overlay p-1">
                            <h5 class="card-title rounded text-dark p-2"><span class="badge badge-g-yellow mt-1">{{$paquete->duracion}} Days</span> <a href="" class="btn btn-sm btn-dark float-right" data-toggle="modal" data-target="#{{$paquete->codigo}}-modal"><i class="fa fa-search-plus"></i> View Map and Itinerary</a></h5>
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
    </section>


    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <a href="{{route('packages_path')}}" class="btn btn-lg btn-primary">VIEW FEATURED PROGRAMS</a>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5 bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                    <h4>PERU TRAVEL USEFUL INFORMATION</h4>
                    <!-- <div class="sec-title-div-4"></div> -->
                </div>
            </div>
            <div class="row">

                <div class="col">
                    <div id="currency">
                        <h3 class="text-g-yellow pt-5">Currency</h3>
                        <p>The official currency of Peru is Nuevo Sol (S/.). Banknotes are in denominations of 10, 20, 50, 100 and 200 nuevos soles. Coins are in 1,5,10,20 and 50 centimos (cents) and 1,2 and 5 nuevos soles. US currency is accepted at most places.</p>
                        <div class="row d-none d-sm-flex">
                            <div class="col"><img src="{{asset('images/guia/10-soles.jpg')}}" class="img-fluid" title="10 soles" alt="10 soles"></div>
                            <div class="col"><img src="{{asset('images/guia/20-soles.jpg')}}" class="img-fluid" title="20 soles" alt="20 soles"></div>
                            <div class="col"><img src="{{asset('images/guia/50-soles.jpg')}}" class="img-fluid" title="50 soles" alt="50 soles"></div>
                            <div class="col"><img src="{{asset('images/guia/100-soles.jpg')}}" class="img-fluid" title="100 soles" alt="100 soles"></div>
                            <div class="col"><img src="{{asset('images/guia/200-soles.jpg')}}" class="img-fluid" title="200 soles" alt="200 soles"></div>
                        </div>
                    </div>
                    <div id="about-peru">
                        <h3 class="text-g-yellow pt-5">About Peru</h3>
                        <img src="{{asset('images/guia/amazon.jpg')}}" alt="amazon" class="img-fluid">
                    </div>
                    <div id="passport-visas">
                        <h3 class="text-g-yellow pt-5">Passport & Visas</h3>
                        <div class="row">
                            <div class="col d-none d-sm-block">
                                <img src="{{asset('images/guia/passport.jpg')}}" alt="passport to peru" class="img-fluid rounded">
                            </div>
                            <div class="col">
                                <p>A passport must be valid for 6 months before departure. Tourists are permitted a 30-90 day stay stamped into passports and on a tourist card called Tarjeta Andina de Migracion (Andean Immigration Card). This card NEEDS to be returned upon exiting the country. Passports must be carried on you at all times. Be sure to make copies of your passport and immigration card and keep them in a separate place from the originals.</p>
                                <p>Bolivians, Ecuadorians, Brazilians and Chileans may enter just by presenting national identification documents.</p>
                            </div>
                        </div>
                    </div>
                    <div id="credit-cards">
                        <h3 class="text-g-yellow pt-5">Credit Cards</h3>
                        <p>Visa cards are the most widely accepted credit card. Although there are an abundance of ATMs available, many credit and debit cards do not work in Latin America. Check with your bank before departing to see if your card is compatible with local ATMs. When you purchase products or services on a credit card, a fee of 5%-10% is applied. It is best to use cash for purchases whenever possible.</p>
                        <div class="row">
                            <div class="col col-sm-8">
                                <h4>Tips</h4>
                                <ul>
                                    <li>When receiving local currency ask for billetes pequenos (small bills) as it is difficult to change large bills in smaller towns. Carry as much small change as possible for small purchases and public restroom fees.</li>
                                    <li>The best places to exchange money are the casas de cambio (foreign exchange bureaus). They are fast, have longer hours and give better rates than banks. Bank hours are Monday to Friday, 9AM-6PM and Saturday to 12PM.</li>
                                    <li>Always carry cash, an ATM card and a credit card that can be used for cash advances in case of an emergency.</li>
                                    <li>Always take more money than you expect to spend.</li>
                                    <li>Do not accept torn money as it is difficult to exchange and may not be accepted by Peruvians.</li>
                                    <li>Do not exchange money on the street as counterfeits are a problem.</li>
                                </ul>
                            </div>
                            <div class="col d-none d-sm-block">
                                <img src="{{asset('images/guia/credit-card.jpg')}}" alt="credit card" class="img-fluid rounded">
                            </div>
                        </div>
                    </div>

                    <div id="weather">
                        <h3 class="text-g-yellow pt-5">Weather</h3>
                        <h4>Peruvian Winter (June-August)</h4>
                        <p>This is the driest season and best time to travel especially if you are planning to visit the Cusco area or hike the Inca Trail to Machu Picchu.</p>

                        <h4>Peruvian Summer (December-February)</h4>
                        <p>This is the wettest season. Temperatures are high and the nights are very cool.</p>

                        <h4>Peruvian Spring (March to May and September-October)</h4>
                        <p>These are the most unpredictable seasons with varying weather patterns. There are generally fewer travelers during this time.</p>

                        <h4>Coast (La Costa) – Lima, Nasca, Trujillo, Arequipa</h4>
                        <h5 class="text-secondary">December – April</h5>
                        <p>The weather is hot and dry with temperatures reaching 25-35°C. Beaches are especially busy during January and February when they coincide with local holiday</p>

                        <h5 class="text-secondary">May-October</h5>
                        <p>The temperatures are much milder and humidity is high. The majority of the coast, including Lima, is shrouded by a gray mist called garua. Only the northern beaches are warm enough for swimming.</p>

                        <h4>Mountain Highlands (La Sierra) – Cusco, Lake Titicaca)</h4>
                        <h5 class="text-secondary">May-October</h5>
                        <p>The rain is scarce during this time. Daytime temperatures are 20-25°C and nights are near freezing, especially in June and July. May is the best month to visit with lush vegetation, temperate weather and stunning views. </p>
                        <p>Tourism is at its peak in June, July and August as it coincides with North American and European holiday times.</p>

                        <h5 class="text-secondary">December-March</h5>
                        <p>Rainfall is abundant during this time. Temperatures range from 18-20°C during the day and dropping to 15°C at night. Tourism is slower during these months, and some areas may be unobtainable due to excessive rain.</p>

                        <h5 class="text-secondary">January – February</h5>
                        <p>These two months are the wettest of the year. Mornings are generally dry, but clouds move in and produce heavy downpours in the afternoon.</p>

                        <h4>Jungle (La Selva) – Iquitos, Manu, Puerto Maldonado</h4>
                        <p>The jungle is consistently humid and tropical with significant rainfall year round. However, there are still two very distinct seasons.</p>

                        <h5 class="text-secondary">May-October</h5>
                        <p>Temperatures reach 30-38°C during the day. However, cold fronts are common where temperatures can drop to 15°C during the day and 13°C at night. This is the best time of year to visit and enjoy fewer mosquitos, more exposed beaches and better animal watching opportunities.</p>

                        <h5 class="text-secondary">November-April</h5>
                        <p>Frequent rain showers occur in short bursts, lasting only a few hours at time. The rivers swell and the humidity is exceptionally high.</p>

                        <div class="row">
                            <div class="col">
                                <img src="{{asset('images/guia/cusco-1.jpg')}}" alt="cusco" class="img-fluid rounded">
                            </div>
                            <div class="col">
                                <img src="{{asset('images/guia/cusco-2.jpg')}}" alt="cusco" class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                    <div id="safety">
                        <h3 class="text-g-yellow pt-5">Safety</h3>

                        <h4>Travel Insurance</h4>
                        <p>It is recommended to have a travel insurance policy that covers theft, loss, accidents and illness. Carry your policy card with the 24 hour toll free number on it at all times. Check the fine print on policies to make sure it includes dangerous activities including motorcycling, scuba diving and even trekking. It is advisable your policy also covers worst case scenarios such as evacuations and flights home. All losses and thefts must be reported to police with 24 hours of occurrence.</p>

                        <h4>Important Documentation</h4>
                        <p>All documentation (passports, credit cards, travel insurance policies, driver’s license etc.) should be photocopied before you depart. Leave one set of copies at home and bring the other with you on your trip.</p>

                        <h4>Government Travel Advice</h4>
                        <p>Check your government’s advice for latest travel information before departure. Pay special attention to noted safety issues.</p>

                        <h4>General Safety Tips</h4>
                        <ul>
                            <li>Leave valuables such as jewelry and watches at home or in a hotel safety deposit box.</li>
                            <li>Wear a neck wallet or money belt for the safe keeping of your passports, air tickets, credit cards, cash and other valuable items.</li>
                            <li>Never leave a bag unattended.</li>
                            <li>Use a lock on your luggage, even on bags left in hotel rooms.</li>
                            <li>Exercise extra precaution in crowded areas such as bus terminals, train stations or markets.</li>
                        </ul>
                    </div>
                    <div id="health">
                        <h3 class="text-g-yellow pt-5">Health</h3>
                        <h4>Sunburn/Dehydration</h4>
                        <p>Stay out of the midday sun, wear sunscreen and a hat. The sun is intense at high altitudes so drink plenty of fluids, avoid strenuous activity and excessive alcohol consumption.</p>

                        <h4>Altitude Sickness</h4>
                        <p>Altitude sickness may result from rapid ascents to altitudes greater than 2500m (8100 ft). Specific locations to consider this are Cusco, Machu Picchu and Lake Titicaca. Symptoms include headaches, nausea, vomiting, dizziness, malaise, insomnia and loss of appetite. Severe complications include fluid in the lungs and swelling of the brain. If symptoms persist, immediately descend 500m and see a physician. The best way to prevent altitude sickness is to spend two or more nights at each rise of 1000m. Diamox or ginkgo may be taken 24 hours before ascent to lessen symptoms. Avoid exertion, eat light meals and do not drink alcohol.</p>

                        <h4>Hypothermia</h4>
                        <p>Dress in layers, carry food and fluids. Carry an emergency space blanket. Symptoms include exhaustion, numbness, slurred speech, muscle cramps and lethargy. If any of these symptoms persist, go indoors, replace wet clothing, consume hot liquids and easily digestible foods.</p>

                        <h4>Mosquito Bites</h4>
                        <p>Wear long sleeves, long pants, hats and shoes. Use insect repellent with 25%-35% DEET. It is extremely important to prevent bites which sometimes carry disease.</p>

                        <h4>Water</h4>
                        <p>Tap water is not safe to drink. It is recommended to vigorously boil water for at least 3 minutes. Water can also be disinfected with iodine or water purification pills. The safest way to consume water is by purchasing bottled water with recognizable labels such as Evian.</p>

                        <h4>Recommended Medical Checklist</h4>
                        <ul>
                            <li>Antibiotics</li>
                            <li>Antidiarrheal drugs</li>
                            <li>Analgesics (Tylenol or Advil)</li>
                            <li>Antihistamines</li>
                            <li>Antibacterial ointment</li>
                            <li>Steroid cream</li>
                            <li>Bandages, gauze</li>
                            <li>Medical tape</li>
                            <li>Safety scissors, tweezers, pins</li>
                            <li>Thermometer</li>
                            <li>Hand sanitizer</li>
                            <li>Tissue/toilet paper</li>
                            <li>Sunscreen</li>
                            <li>Iodine tablets</li>
                            <li>Diamox</li>
                            <li>Insect repellent</li>
                        </ul>
                    </div>
                    <div id="shopping">
                        <h3 class="text-g-yellow pt-5">Shopping</h3>
                        <p>The finest and best priced crafts are found in Peru including alpaca wool scarves, hats, shawls, ponchos and other woven items. Travelers uninterested in textiles can purchase reproductions of Moche, Nasca and other ceramics instead. Most tourist-oriented shops are found in Lima and Cusco. They are generally open 7 days a week from 9AM-8PM. Bargaining is accepted and even encouraged in both stores and open markets. All items include a 19% sales tax.</p>
                    </div>
                    <div id="entertainment">
                        <h3 class="text-g-yellow pt-5">Entertainment</h3>
                        <p>Nightlife is varied throughout the country. Many good bars, pubs, discos and casinos are in the major towns and tourist resorts including Lima, Cusco, Asia and Mancora. Penas (clubs with traditional music and dancing) always serve snacks and some full service meals. Tourist bars, in popular destinations, usually include happy hours. Most of these establishments serve as cafes during the day providing “American” food and free Wi-Fi. Upscale nightclubs may require a strict dress code and high entrance fees while other standard clubs allow casual dress and free entrance. Most discos, penas, pubs and karaoke bars are open until 0300 or 0400. In smaller towns, local bars serve glasses of beer and Peruvian wine. These establishments function as restaurants during the day and in the evening often stay open later for those wishing to stay and drink. There is a culture among the younger Peruvians to go out for salchipapas (sausage and chips) as an evening out or as a prelude to further entertainment.</p>
                    </div>
                    <div id="food">
                        <h3 class="text-g-yellow pt-5">Food</h3>
                        <p>Peruvian cuisine is characterized by the diverse landscape and geography. Many dishes are a combination of indigenous traditions and food from the Spanish who came to Peru in the 16th century. Food is generally hot and spicy in nature and depends heavily on vegetables. Food on the coast includes seafood and shellfish while dishes in the highlands consist of meat, rice and potatoes. Fresh fruit is a staple in the jungle regions and chicken is popular everywhere.</p>
                        <h4>Popular dishes include:</h4>
                        <h5 class="text-secondary">Causa relleña</h5>
                        <p>Traditionally these potato cakes are served with chicken in the centre, however other variations include avocado or crabmeat.</p>

                        <h5 class="text-secondary">Cuy</h5>
                        <p>This dish is guinea pig and is considered a delicacy in various parts of Peru.</p>

                        <h5 class="text-secondary">Aji de Gallina</h5>
                        <p>This dish consists of spicy creamed chicken that is served with a sauce made from ground walnuts.  Boiled yellow potatoes and olives often accompany it.</p>

                        <h5 class="text-secondary">Ceviche</h5>
                        <p>This dish is popular on the coast and consists of raw fish and shellfish that is marinated in either lemon or lime juice, flavoured with hot chili peppers and served with raw onions, sweet potatoes and corn.</p>

                        <h5 class="text-secondary">Escabeche</h5>
                        <p>This fish dish is traditionally served with peppers, eggs, olives, onions and prawns.</p>

                        <h5 class="text-secondary">Lomo saltado</h5>
                        <p>This meal, usually eaten in the highlands, is made from strips of beef that are cooked with onions, tomatoes, peppers and potatoes and served with rice on the side.</p>

                        <h4>Food Safety</h4>
                        <p>Consume only boiled or bottled water. Avoid eating food sold on the street by vendors. Most tourists will deal with an upset stomach for the first few days of their travels. Stomach medications and ginger can remedy nausea, vomiting or diarrhea.</p>

                        <h4>Drink</h4>
                        <p>Popular Peruvian beers include Cusquena, Arequipena and Pilsen. A more traditional drink is Pisco, a white grape brandy derived from an indigenous recipes. A popular non-alcoholic drink is chica morada made from blue corn.</p>
                        <div class="row">
                            <div class="col">
                                <img src="{{asset('images/guia/cebiche-gotoperu.jpg')}}" alt="cebiche peru" class="img-fluid rounded">
                            </div>
                            <div class="col">
                                <img src="{{asset('images/guia/pisco-sour-gotoperu.jpg')}}" alt="pisco sour peru" class="img-fluid rounded">
                            </div>
                            <div class="col">
                                <img src="{{asset('images/guia/aji-de-gallina-gotoperu.jpg')}}" alt="aji de gallina peru" class="img-fluid rounded">
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-3 d-none d-sm-block">
                    <div class="sticky-top sticky-top-50">
                        <nav id="menu" class="navbar navbar-light nav-goto-side w-100">
                            <nav class="nav nav-pills flex-column w-100">
                                <a class="nav-link active" href="#currency">Currency</a>
                                {{--<nav class="nav nav-pills flex-column w-100">--}}
                                    {{--<a class="nav-link ml-3 my-1" href="#item-1-1">Item 1-1</a>--}}
                                    {{--<a class="nav-link ml-3 my-1" href="#item-1-2">Item 1-2</a>--}}
                                {{--</nav>--}}
                                <a class="nav-link" href="#about-peru">About Peru</a>
                                <a class="nav-link" href="#passport-visas">Passport & Visas</a>
                                <a class="nav-link" href="#credit-cards">Credit Cards</a>
                                <a class="nav-link" href="#weather">Weather</a>
                                <a class="nav-link" href="#safety">Safety</a>
                                <a class="nav-link" href="#health">Health</a>
                                <a class="nav-link" href="#shopping">Shopping</a>
                                <a class="nav-link" href="#entertainment">Entertainment</a>
                                <a class="nav-link" href="#food">Food</a>
                                {{--<nav class="nav nav-pills flex-column w-100">--}}
                                    {{--<a class="nav-link ml-3 my-1" href="#seccion-4">Item 3-1</a>--}}
                                    {{--<a class="nav-link ml-3 my-1" href="#item-3-2">Item 3-2</a>--}}
                                {{--</nav>--}}
                            </nav>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            //form
            function design(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('[name="_token"]').val()
                    }
                });

                $("#de_send").attr("disabled", true);

                var filter=/^[A-Za-z][A-Za-z0-9_.]*@[A-Za-z0-9_]+.[A-Za-z0-9_.]+[A-za-z]$/;


                var s_destinations = document.getElementsByName('destinations[]');
                var $destinations = "";
                for (var i = 0, l = s_destinations.length; i < l; i++) {
                    if (s_destinations[i].checked) {
                        $destinations += s_destinations[i].value+' , ';
                    }
                }
                s_destinations = $destinations.substring(0,$destinations.length-3);

//                alert(s_destinations);

                var s_name = $('#de_name').val();
                var s_email = $('#de_email').val();
                var s_country = $('#de_country').val();
                var s_date = $('#de_date').val();
                var s_number = $('#de_numero').val();
                var s_duration = $('#de_duration').val();
//                var s_other = $('#de_otros').val();
                var s_comment = $('#de_comment').val();


                if (filter.test(s_email)){
                    sendMail = "true";
                } else{
                    $('#de_email').css("border-bottom", "2px solid #FF0000");
                    sendMail = "false";
                }
                if (s_name.length == 0 ){
                    $('#de_name').css("border-bottom", "2px solid #FF0000");
                    var sendMail = "false";
                }

                if(sendMail == "true"){
                    var datos = {

                        "txt_destinations" : s_destinations,

                        "txt_name" : s_name,
                        "txt_email" : s_email,
                        "txt_country" : s_country,
                        "txt_date" : s_date,
                        "txt_number" : s_number,
                        "txt_duration" : s_duration,
                        "txt_comment" : s_comment,

                    };
                    $.ajax({
                        data:  datos,
                        url:   "{{route('design_path')}}",
                        type:  'post',

                        beforeSend: function () {

                            $('#de_send').removeClass('show');
                            $("#de_send").addClass('d-none');

                            $("#loader5").removeClass('d-none');
                            $("#loader5").addClass('show');
                        },
                        success:  function (response) {
                            $('#de_form')[0].reset();
                            $('#de_send').removeClass('d-none');
                            $('#de_send').addClass('show');
                            $("#loader5").removeClass('show');
                            $("#loader5").addClass('d-none');
                            $('#de_alert').removeClass('d-none');
                            $("#de_alert").addClass('show');
                            $("#de_alert b").html(response);
                            $("#de_alert").fadeIn('slow');
                            $("#de_send").removeAttr("disabled");
                        }


                    });
                } else{
                    $("#de_send").removeAttr("disabled");
                }
            }

            $('#de_date').datepicker({
                dateFormat: 'yy-mm-dd',
                changeMonth: true,
                changeYear: true
            });
        </script>
    @endpush

@stop