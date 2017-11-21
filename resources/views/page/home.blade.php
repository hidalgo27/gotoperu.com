@extends('layouts.page.default')

@section('content')

    <section>
        <div class="jumbotron jumbotron-slider rounded-0">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-4 text-white text-center">
                        <div class="row justify-content-start">
                            <div class="col-6">
                                <img src="https://gotoperu.com/img/logos/tripadvisor_logo.png" alt="" class="w-100">
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col">
                                <img src="https://gotoperu.com/img/ico/include/assistances.png" alt="" class="w-100">
                                <span>Assistances</span>
                            </div>
                            <div class="col">
                                <img src="https://gotoperu.com/img/ico/include/breakfast.png" alt="" class="w-100">
                                <span>Breakfast</span>
                            </div>
                            <div class="col">
                                <img src="https://gotoperu.com/img/ico/include/entrances.png" alt="" class="w-100">
                                <span>Entrances</span>
                            </div>
                            <div class="col">
                                <img src="https://gotoperu.com/img/ico/include/flight.png" alt="" class="w-100">
                                <span>Flight</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <img src="https://gotoperu.com/img/ico/include/hotels.png" alt="" class="w-100">
                                <span>Hotels</span>
                            </div>
                            <div class="col">
                                <img src="https://gotoperu.com/img/ico/include/tours.png" alt="" class="w-100">
                                <span>Tours</span>
                            </div>
                            <div class="col">
                                <img src="https://gotoperu.com/img/ico/include/trains.png" alt="" class="w-100">
                                <span>Trains</span>
                            </div>
                            <div class="col">
                                <img src="https://gotoperu.com/img/ico/include/transfers.png" alt="" class="w-100">
                                <span>Transfers</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-3 os-animation bg-rgba-dark py-2 rounded" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                        <h5 class="text-white font-weight-bold text-center">GET A FREE QUOTE</h5>
                        <form>
                            <div class="row">
                                <div class="col input-group-sm mb-1">
                                    <input type="text" class="form-control" placeholder="Full Name*">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col input-group-sm mb-1">
                                    <input type="text" class="form-control" placeholder="Email*">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col input-group-sm mb-1">
                                    <input type="text" class="form-control" placeholder="Country">
                                </div>
                                <div class="col input-group-sm mb-1">
                                    <input type="text" class="form-control" placeholder="Traveling Date">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col input-group-sm mb-1">
                                    <input type="text" class="form-control" placeholder="Travelers">
                                </div>
                                <div class="col input-group-sm mb-1">
                                    <input type="text" class="form-control" placeholder="Days">
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
                                        <input type="checkbox"  autocomplete="off" name="destinations[]" value="Machu Picchu"> Machu Picchu
                                    </label>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg" data-toggle="buttons">
                                    <label class="btn btn-outline-g-green btn-block btn-sm">
                                        <input type="checkbox" autocomplete="off" name="destinations[]" value="Cusco"> Colca Canyon
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg" data-toggle="buttons">
                                    <label class="btn btn-outline-g-green btn-block btn-sm">
                                        <input type="checkbox" autocomplete="off" name="destinations[]" value="Lago Titicaca"> Puno & Lago titicaca
                                    </label>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg" data-toggle="buttons">
                                    <label class="btn btn-outline-g-green btn-block btn-sm">
                                        <input type="checkbox" autocomplete="off" name="destinations[]" value="Puno"> Amazon
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg" data-toggle="buttons">
                                    <label class="btn btn-outline-g-green btn-block btn-sm">
                                        <input type="checkbox" autocomplete="off" name="destinations[]" value="Lima"> Lima
                                    </label>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg" data-toggle="buttons">
                                    <label class="btn btn-outline-g-green btn-block btn-sm">
                                        <input type="checkbox" autocomplete="off" name="destinations[]" value="Lineas de Nazca"> Linhas de Nazca
                                    </label>
                                </div>
                            </div>


                            {{--<div class="input-group input-group-sm mb-2">--}}
                                {{--<span class="input-group-addon" id="">Outros</span>--}}
                                {{--<input type="text" class="form-control" id="d_otros" aria-describedby="basic-addon3">--}}
                            {{--</div>--}}

                            <div class="form-group input-group-sm ">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="How do you imagine a perfect trip to Peru, Special Requests, Questions, Comments"></textarea>
                            </div>
                            <button type="submit" class="btn btn-g-green btn-block">Send</button>
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
                    <h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>
                    <p class="lead">Offering you an authentic and reliable <strong>travel experience</strong> in peru welcoming you to explore the many fully <strong>customized travel packages</strong> we have that suit every budget. let us plan your unforgettable <strong>trip</strong> to our majestic <strong>machu picchu</strong> and the rest of our  homeland… peru!</p>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <div class="row py-1 no-gutters">
                        <div class="col">
                            <h2 class="h5"><a href="packages/the-best-of-peru-express-9-day-tour/" class="text-dark">THE HIGHLIHTS OF PERU IN 9 DAYS!</a>
                                <a href="" class="float-right btn btn-g-yellow btn-sm font-weight-bold">Check Availability</a></h2>
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
                                        <img class="d-block w-100" src="{{asset('images/banners/cusco.jpg')}}" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3>Cusco</h3>
                                            {{--<p>...</p>--}}
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('images/banners/lake-titicaca.jpg')}}" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3>Lake Titicaca</h3>
                                            {{--<p>...</p>--}}
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('images/banners/lima.jpg')}}" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3>Lima</h3>
                                            {{--<p>...</p>--}}
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('images/banners/machupicchu.jpg')}}" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3>Machu Picchu</h3>
                                            {{--<p>...</p>--}}
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('images/banners/nazca-lines.jpg')}}" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3>Nazca Lines</h3>
                                            {{--<p>...</p>--}}
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('images/banners/sacred-valley.jpg')}}" alt="First slide">
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
                        <div class="col bg-g-yellow">
                            <p class="h2">9 Days <span class="d-block h5">8 Night</span></p>
                        </div>
                        <div class="col bg-g-green text-white">
                            <p class="h2 mt-2"><small class="d-block h6 m-0">starting from</small> $1449</p>
                        </div>
                        <div class="col bg-g-dark text-white">
                            <p class="m-0">All Included</p>
                            <small>Hotels, Tours, Entrances, Nazca Overflight, Transfers.</small>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-9">
                            <h5 class="text-g-yellow"><strong>PERU</strong> EXPERTS ARRANGING YOUR SOON-TO-BE FAVORITE <strong>VACATION</strong></h5>
                            <p>From the moment you arrive to <strong>Peru</strong>, we will be pleased to share our passion, knowledge and experiences that we, the GOTOPERU team, have for our beloved country with you! We will make sure to make your <strong>Peru trip</strong> fulfill all the wanderlust in you…</p>
                        </div>
                        <div class="col">
                            <div class="row">
                                <!-- <img src="img/martin-paul.jpg" title="martin and paul" alt="go to peru team"> -->
                                <div class="col text-center">
                                    <div itemscope itemtype="http://data-vocabulary.org/Persona" class="vcard">
                                        <div itemscope itemtype="http://data-vocabulary.org/Persona" class="vcard">
                                            <img src="https://gotoperu.com/img/firma-martin.jpg" alt="martin" class="img-fluid">
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
                                            <img src="https://gotoperu.com/img/firma-paul.jpg" alt="paul" class="img-fluid">
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
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="content-area-3">
                                <div class="position-relative">
                                    <img src="https://gotoperu.com/img/video/prom-peru.jpg" alt="video promperu" class="img-fluid">
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
                                <img src="https://gotoperu.com/img/video/gotoperu-group.jpg" alt="gotoperu group" class="img-fluid">
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

    <section class="my-5">
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

    <section class="my-5">
        <div class="container">
            <div class="row pt-3">
                <div class="col d-flex">
                    <div class="card">
                        {{--<div class="card-header">--}}
                        {{--<h4 class="card-title">City tour em cusco</h4>--}}
                        {{--</div>--}}
                        <a href="{{route('itinerary_path', 'peru-magico')}}"><img class="card-img-top " src="http://www.andesviagens.com/images/packages/AV700.jpg" alt="Card image cap"></a>
                        <div class="card-img-overlay p-1">
                            <h5 class="card-title rounded text-dark p-2"><span class="badge badge-g-yellow mt-1">7 Days</span> <a href="" class="btn btn-sm btn-dark float-right"><i class="fa fa-search-plus"></i> View Map and Itinerary</a></h5>
                            {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                            {{--<p class="card-text">Last updated 3 mins ago</p>--}}
                        </div>
                        <div class="card-body p-2 text-center">
                            <h4 class="card-title m-0"><a href="{{route('itinerary_path', 'peru-magico')}}" class="text-dark">Perú Magico</a></h4>
                            {{--<p class="text-left"><i class="fa fa-clock-o text-primary" aria-hidden="true"></i> 6 Días</p>--}}
                            <p class="text-left card-text"><i class="fa fa-map-marker text-g-yellow" aria-hidden="true"></i>
                                Lima, Cusco, Sacred Valley, Machu Picchu
                            </p>
                            {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                        </div>
                        <div class="card-footer text-muted p-2">
                            <div class="row">
                                <div class="col text-left">From</div>
                                <div class="col text-right font-weight-bold text-primary font-montserrat">
                                    <sup>$</sup> 898 <small>USD</small>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="card">
                        {{--<div class="card-header">--}}
                        {{--<h4 class="card-title">City tour em cusco</h4>--}}
                        {{--</div>--}}
                        <a href="{{route('itinerary_path', 'peru-magico')}}"><img class="card-img-top " src="https://gotoperu.com/img/fotos/GTPE1005.jpg" alt="Card image cap"></a>
                        <div class="card-img-overlay p-1">
                            <h5 class="card-title rounded text-dark p-2"><span class="badge badge-g-yellow mt-1">7 Days</span> <a href="" class="btn btn-sm btn-dark float-right"><i class="fa fa-search-plus"></i> View Map and Itinerary</a></h5>
                            {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                            {{--<p class="card-text">Last updated 3 mins ago</p>--}}
                        </div>
                        <div class="card-body p-2 text-center">
                            <h4 class="card-title m-0"><a href="{{route('itinerary_path', 'peru-magico')}}" class="text-dark">Perú Magico</a></h4>
                            {{--<p class="text-left"><i class="fa fa-clock-o text-primary" aria-hidden="true"></i> 6 Días</p>--}}
                            <p class="text-left card-text"><i class="fa fa-map-marker text-g-yellow" aria-hidden="true"></i>
                                Lima, Cusco, Sacred Valley, Machu Picchu
                            </p>
                            {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                        </div>
                        <div class="card-footer text-muted p-2">
                            <div class="row">
                                <div class="col text-left">From</div>
                                <div class="col text-right font-weight-bold text-primary font-montserrat">
                                    <sup>$</sup> 898 <small>USD</small>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="card">
                        {{--<div class="card-header">--}}
                        {{--<h4 class="card-title">City tour em cusco</h4>--}}
                        {{--</div>--}}
                        <a href="{{route('itinerary_path', 'peru-magico')}}"><img class="card-img-top " src="https://gotoperu.com/img/fotos/GTLM3000.jpg" alt="Card image cap"></a>
                        <div class="card-img-overlay p-1">
                            <h5 class="card-title rounded text-dark p-2"><span class="badge badge-g-yellow mt-1">7 Days</span> <a href="" class="btn btn-sm btn-dark float-right"><i class="fa fa-search-plus"></i> View Map and Itinerary</a></h5>
                            {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                            {{--<p class="card-text">Last updated 3 mins ago</p>--}}
                        </div>
                        <div class="card-body p-2 text-center">
                            <h4 class="card-title m-0"><a href="{{route('itinerary_path', 'peru-magico')}}" class="text-dark">Perú Magico</a></h4>
                            {{--<p class="text-left"><i class="fa fa-clock-o text-primary" aria-hidden="true"></i> 6 Días</p>--}}
                            <p class="text-left card-text"><i class="fa fa-map-marker text-g-yellow" aria-hidden="true"></i>
                                Lima, Cusco, Sacred Valley, Machu Picchu
                            </p>
                            {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                        </div>
                        <div class="card-footer text-muted p-2">
                            <div class="row">
                                <div class="col text-left">From</div>
                                <div class="col text-right font-weight-bold text-primary font-montserrat">
                                    <sup>$</sup> 898 <small>USD</small>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <a href="" class="btn btn-lg btn-primary">VIEW FEATURED PROGRAMS</a>
                </div>
            </div>
        </div>
    </section>
@stop