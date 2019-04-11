@extends('layouts.page.default')

@section('content')
    <section class="header-video d-none d-md-block chat-mensajes">
        <div id="title" class="text-white">
            <div class="container-fluid">
                <div class="row align-items-center mt-2">
                    <div class="col-md-9 col-lg-7 col-xl">
                        <div class="row align-items-center">
                            <div class="col">
                                <a href="{{route('home_path')}}">
                                    {{--<img src="{{asset('images/logos/logo-gotoperu-ave-w.webp')}}" alt="" class="img-fluid">--}}
                                    <img class="w-100 lazy has-webp"
                                         data-src="{{asset('images/logos/logo-gotoperu-ave-w.png')}}"
                                         data-srcset="{{asset('images/logos/logo-gotoperu-ave-w.png')}}" alt="logo gotoperu">
                                </a>
                            </div>
                            <div class="col">
                                <i class="text-g-yellow">Local expertise & global partners</i>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-5 col-xl text-right">
                        <div class="row align-items-center">
                            <div class="col-3 d-md-none d-xl-inline col-xl-3">
                                {{--<img src="{{asset('images/logos/logo-expedia2.webp')}}" alt="" class="img-fluid">--}}
                                <img class="w-100 lazy has-webp"
                                     data-src="{{asset('images/logos/logo-expedia2.png')}}"
                                     data-srcset="{{asset('images/logos/logo-expedia2.png')}}" alt="logo expedia">
                            </div>
                            <div class="col-4 d-md-none d-xl-inline col-xl-4">
                                <a href="tel:+2029963000" class="mx-3 text-white h5">(202) 996-3000</a>
                            </div>
                            <div class="col-3 d-md-none d-lg-inline col-lg col-xl-3">
                                <a href="#Inquire" class="btn btn-g-yellow font-weight-bold">My ideal trip will be</a>
                                <!-- Button trigger modal -->
                            </div>
                            <div class="col-2 col-md-12 col-lg-auto col-xl-2 text-right">
                                <a href="#" class="text-white"  data-toggle="modal" data-target="#modal-menu"><i class="fa fa-bars fa-2x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="overlay" class="position-relative">
            <video class="hero-vid-home" id="hero-vid" poster="{{asset('images/slider/package-1.webp')}}" autoplay loop muted>
                <source src="{{asset('media/video6.mp4')}}" />
                <source src="{{asset('media/video6.m4v')}}" type="video/mp4" />
                <source src="{{asset('media/video6.webm')}}" type="video/webm" />
                <source  src="{{asset('media/video6.ogv')}}" type="video/ogg" />
            </video>
            {{--<div id="state" class=""><span class="fa fa-pause"></span></div>--}}
            {{--<img id="hero-pic" class="d-none" src="http://www.markhillard.com/sandbox/media/polina.jpg" alt="">--}}
           {{----}}
            {{--<div class="header-expedia-card col-md-4 col-lg-3 col-xl-2 text-white rounded bg-rgba-dark p-3 ">--}}
                {{--<div class="row">--}}
                    {{--<div class="col">--}}
                        {{--<a href="packages/andes-escape/6-days-tours">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col text-center">--}}
                                {{--<h3 class="text-g-yellow font-weight-bold m-0">Andes Escape</h3>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row no-gutters my-2 text-white">--}}
                            {{--<div class="col">--}}
                                {{--<span class="h2">6</span> <small>days</small>--}}
                            {{--</div>--}}
                            {{--<div class="col">--}}
                                {{--<span class="h2 text-info"><sup>$</sup>985</span> <small>p.p</small>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col">--}}
                                {{--<div class="row no-gutters">--}}
                                    {{--<div class="col">--}}
                                        {{--<img src="{{asset('images/icons/include/assistances.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Assistances">--}}
                                        {{--<span>Assistances</span>--}}
                                    {{--</div>--}}

                                    {{--<div class="col">--}}
                                        {{--<img src="{{asset('images/icons/include/entrances.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Entrances">--}}
                                        {{--<span>Entrances</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="col">--}}
                                        {{--<img src="{{asset('images/icons/include/transfers.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Transfers">--}}
                                        {{--<span>Transfers</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="row no-gutters">--}}
                                    {{--<div class="col">--}}
                                        {{--<img src="{{asset('images/icons/include/hotels.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Hotels">--}}
                                        {{--<span>Hotels</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="col">--}}
                                        {{--<img src="{{asset('images/icons/include/tours.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Tours">--}}
                                        {{--<span>Tours</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="col">--}}
                                        {{--<img src="{{asset('images/icons/include/trains.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Trains">--}}
                                        {{--<span>Trains</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row mt-3">--}}
                            {{--<div class="col text-white">--}}
                                {{--<small class="m-0 d-block"><i class="fa fa-angle-right"></i> MACHUPICCHU & CUSCO</small>--}}
                                {{--<small class="m-0 d-block"><i class="fa fa-angle-right"></i> LAKE TITICACA & PUNO</small>--}}
                                {{--<small class="m-0 d-block"><i class="fa fa-angle-right"></i> LIMA</small>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="header-expedia text-white p-3">As local travel operators our programs start daily</div>--}}
            @include('layouts.page.menu-custom')
        </div>
        <div class="content-header">
            <div class="container">
                <div class="row content-header-row align-items-center">
                    <div class="col text-center">
                        {{--<a href="" class="text-white"><i class="fa fa-play-circle fa-4x"></i></a>--}}

                        <div class="text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                            <div class="">
                                <div class="content-video-1 text-white">
                                    {{--<img src="images/travel/video-1.jpg" alt="video">--}}
                                    <h2 class="font-weight-light">Top Recommended Travel Company to Machu Picchu & Peru</h2>
                                    <div class="row justify-content-center">
                                        <div class="col-6">
                                            <i class="fa fa-quote-left"></i>
                                            <span class="font-weight-light small">Our tour guide Franklin, was so knowledgeable, there was nothing we asked that he couldn't talk at length about! He was very organized and did an excellent job accommodating each and every traveller. Also in Lima our tour conductor Ivan. All of the hotels were in ideal locations in city centers, which made it easy to explore on our own without having to take a cab.</span>
                                            <i class="fa fa-quote-right"></i>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6">
                                            <small class="font-italic"><i class="fas fa-user-circle"></i> Jeff G. X2 | <span class="font-weight-bold">New York Feb 2018</span></small>
                                            <span class="d-block text-g-yellow">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                        </div>
                                    </div>
                                    {{--<a href="#Inquire" class="btn btn-g-yellow btn-lg h2 font-weight-bold mt-3">My ideal trip will be</a>--}}
                                    {{--<a href="{{route('complete_path')}}" class="btn btn-success btn-lg h2 font-weight-bold mt-3 mx-2">7 days with Airfare from $1399</a>--}}
                                    {{--<div class="content-video-btn-1 mt-4">--}}
                                        {{--<a href="https://www.youtube.com/watch?v=pNe-NtXIULs"  class="html5lightbox text-white" title=""><i class="fa fa-play-circle fa-4x"></i></a>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    @include('layouts.page.menu')

    <section class="d-md-none mt-3">
        <div class="container">
            <div class="row no-gutters">
                <div class="col">
                    <img data-src="{{asset('images/family.webp')}}" data-srcset="{{asset('images/family.webp')}}" alt="" class="w-100 rounded-top lazy has-webp">

                </div>
            </div>
            {{--<div class="row no-gutters align-items-center">--}}
                {{--<div class="col">--}}
                    {{--<ul class="list-group">--}}
                        {{--<li class="list-group-item rounded-0"><span class="bg-g-green p-1 rounded-circle px-2 text-white">1</span> Share your travel plans</li>--}}
                        {{--<li class="list-group-item rounded-0"><span class="bg-g-yellow p-1 rounded-circle px-2 text-white">2</span> Receive a customize itinerary and quote</li>--}}
                        {{--<li class="list-group-item rounded-0"><span class="bg-g-dark p-1 rounded-circle px-2 text-white">3</span> Discover the best of Peru with GOTOPERU</li>--}}
                    {{--</ul>--}}

                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row mt-4">--}}
                {{--<div class="col">--}}
                    {{--<a href="{{route('complete_path')}}" class="btn btn-block btn-primary">Package Air & Land</a>--}}
                {{--</div>--}}
            {{--</div>--}}


            <div class="w-100 text-center d-md-inline">
                {{--<p class="text-white h6"><span class="bg-g-green p-1 rounded-circle px-3 text-white">1</span> Share your travel plans <span class="bg-g-yellow p-1 rounded-circle px-3 text-white ml-5">2</span> Receive a customize itinerary and quote <span class="bg-g-dark p-1 rounded-circle px-3 text-white ml-5">3</span> Discover the best of Peru with GOTOPERU</p>--}}
                <div class="row">
                    <div class="col-12 my-2 my-sm-2 mb-md-2 col-lg col-xl">
                        <a href="" class="btn btn-block btn-lg btn-g-green">
                            <span class="font-weight-normal">Peru Tours & Activities</span>
                            <hr class="my-2">
                            <span class="d-block">
                                <img data-src="{{asset('images/icons/include/tours.png')}}" data-srcset="{{asset('images/icons/include/tours.png')}}" alt="tours" class="lazy has-webp" width="35" data-toggle="tooltip" data-placement="top" title="Guide">
                                <img data-src="{{asset('images/icons/include/transfers.png')}}" data-srcset="{{asset('images/icons/include/transfers.png')}}" alt="transfers" class="lazy has-webp" width="35" data-toggle="tooltip" data-placement="top" title="Transfers">
                                <img data-src="{{asset('images/icons/include/entrances.png')}}" data-srcset="{{asset('images/icons/include/entrances.png')}}" alt="entrances" class="lazy has-webp" width="35" data-toggle="tooltip" data-placement="top" title="Entrances">
                            </span>
                        </a>
                    </div>
                    <div class="col-12 mb-2 mb-sm-2 mb-md-2 col-lg col-xl">
                        <a href="{{route('packages_path')}}" class="btn btn-block btn-lg btn-g-yellow">
                            <span class="font-weight-normal">Peru Travel Packages</span>
                            <hr class="my-2">
                            <span class="d-block">
                                <img data-src="{{asset('images/icons/include/tours.png')}}" data-srcset="{{asset('images/icons/include/tours.png')}}" alt="tours" class="lazy has-webp" width="35" data-toggle="tooltip" data-placement="top" title="Guide">
                                <img data-src="{{asset('images/icons/include/transfers.png')}}" data-srcset="{{asset('images/icons/include/transfers.png')}}" alt="transfers" class="lazy has-webp" width="35" data-toggle="tooltip" data-placement="top" title="Transfers">
                                <img data-src="{{asset('images/icons/include/entrances.png')}}" data-srcset="{{asset('images/icons/include/entrances.png')}}" alt="entrances" class="lazy has-webp" width="35" data-toggle="tooltip" data-placement="top" title="Entrances">
                                <img data-src="{{asset('images/icons/include/hotels.png')}}" data-srcset="{{asset('images/icons/include/hotels.png')}}" alt="assistances" class="lazy has-webp" width="35" data-toggle="tooltip" data-placement="top" title="Hotels">
                                <img data-src="{{asset('images/icons/include/trains.png')}}" data-srcset="{{asset('images/icons/include/trains.png')}}" alt="assistances" class="lazy has-webp" width="35" data-toggle="tooltip" data-placement="top" title="Trains">
                                <img data-src="{{asset('images/icons/include/assistances.png')}}" data-srcset="{{asset('images/icons/include/assistances.png')}}" alt="assistances" class="lazy has-webp" width="35" data-toggle="tooltip" data-placement="top" title="Assistances">
                            </span>
                        </a>
                    </div>
                    <div class="col-12 mb-2 mb-sm-2 mb-md-2 col-lg col-xl">
                        <a href="{{route('complete_path')}}" class="btn btn-block btn-lg btn-g-dark">
                            <span class="font-weight-normal">Peru Travel Packages + Air</span>
                            <hr class="my-2">
                            <span class="d-block">
                                <img data-src="{{asset('images/icons/include/tours.png')}}" data-srcset="{{asset('images/icons/include/tours.png')}}" alt="tours" class="lazy has-webp" width="35" data-toggle="tooltip" data-placement="top" title="Guide">
                                <img data-src="{{asset('images/icons/include/transfers.png')}}" data-srcset="{{asset('images/icons/include/transfers.png')}}" alt="transfers" class="lazy has-webp" width="35" data-toggle="tooltip" data-placement="top" title="Transfers">
                                <img data-src="{{asset('images/icons/include/entrances.png')}}" data-srcset="{{asset('images/icons/include/entrances.png')}}" alt="entrances" class="lazy has-webp" width="35" data-toggle="tooltip" data-placement="top" title="Entrances">
                                <img data-src="{{asset('images/icons/include/hotels.png')}}" data-srcset="{{asset('images/icons/include/hotels.png')}}" alt="hotels" class="lazy has-webp" width="35" data-toggle="tooltip" data-placement="top" title="Hotels">
                                <img data-src="{{asset('images/icons/include/trains.png')}}" data-srcset="{{asset('images/icons/include/trains.png')}}" alt="trains" class="lazy has-webp" width="35" data-toggle="tooltip" data-placement="top" title="Trains">
                                <img data-src="{{asset('images/icons/include/assistances.png')}}" data-srcset="{{asset('images/icons/include/assistances.png')}}" alt="assistances" class="lazy has-webp" width="35" data-toggle="tooltip" data-placement="top" title="Assistances">
                                <img data-src="{{asset('images/icons/include/flight.png')}}" data-srcset="{{asset('images/icons/include/flight.png')}}" alt="flight" class="lazy has-webp" width="35" data-toggle="tooltip" data-placement="top" title="Flights">
                            </span>
                        </a>
                    </div>
                    <div class="col-12 mb-2 mb-sm-2 mb-md-2 d-lg-none d-xl-inline col-xl">
                        <a href="#Inquire" class="btn btn-block btn-lg btn-secondary">
                            <span class="font-weight-normal">Customize</span>
                            <hr class="my-2">
                            We will design together...

                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="bg-light py-3 d-none d-md-block contenido2">
        <div class="container-fluid">
            <div class="col">
                <div class="row"><!--.row -->
                    <div class="col">
                        <img data-src="{{asset('images/logos/apavit.png')}}" data-srcset="{{asset('images/logos/apavit.png')}}" alt="logo apavit" class="img-fluid lazy has-webp">
                    </div>
                    <div class="col">
                        <img data-src="{{asset('images/logos/apotur.png')}}" data-srcset="{{asset('images/logos/apotur.png')}}" alt="logo apotur" class="img-fluid lazy has-webp">
                    </div>
                    <div class="col">
                        <img data-src="{{asset('images/logos/asta.png')}}" data-srcset="{{asset('images/logos/asta.png')}}" alt="logo asta" class="img-fluid lazy has-webp">
                    </div>
                    <div class="col">
                        <img data-src="{{asset('images/logos/expedia.png')}}" data-srcset="{{asset('images/logos/expedia.png')}}" alt="logo expedia" class="img-fluid lazy has-webp">
                    </div>
                    <div class="col">
                        <img data-src="{{asset('images/logos/facebook.png')}}" data-srcset="{{asset('images/logos/facebook.png')}}" alt="logo facebook" class="img-fluid lazy has-webp">
                    </div>
                    <div class="col">
                        <img data-src="{{asset('images/logos/meetup.png')}}" data-srcset="{{asset('images/logos/meetup.png')}}" alt="logo meetup" class="img-fluid lazy has-webp">
                    </div>
                    <div class="col">
                        <img data-src="{{asset('images/logos/new.png')}}" data-srcset="{{asset('images/logos/new.png')}}" alt="logo the new york times" class="img-fluid lazy has-webp">
                    </div>
                    <div class="col">
                        <img data-src="{{asset('images/logos/peru.png')}}" data-srcset="{{asset('images/logos/peru.png')}}" alt="logo marca peru" class="img-fluid lazy has-webp">
                    </div>
                    <div class="col">
                        <img data-src="{{asset('images/logos/prom-peru.png')}}" data-srcset="{{asset('images/logos/prom-peru.png')}}" alt="logo prom peru" class="img-fluid lazy has-webp">
                    </div>
                    <div class="col">
                        <img data-src="{{asset('images/logos/tripadvisor.png')}}" data-srcset="{{asset('images/logos/tripadvisor.png')}}" alt="logo tripadvisor" class="img-fluid lazy has-webp">
                    </div>
                    <div class="col">
                        <img data-src="{{asset('images/logos/yelp.png')}}" data-srcset="{{asset('images/logos/yelp.png')}}" alt="logo yelp" class="img-fluid lazy has-webp">
                    </div>
                    <div class="col">
                        <img data-src="{{asset('images/logos/youtube.png')}}" data-srcset="{{asset('images/logos/youtube.png')}}" alt="logo youtube" class="img-fluid lazy has-webp">
                    </div>
                </div><!-- /.row -->
            </div>
        </div>
    </section>


    {{--<div id="aviso"><h2>Estás haciendo scroll sobre el contenido 2</h2></div>--}}

    <div class="alert alert-primary alert-dismissible show m-0 elemento rounded-0 p-1" role="alert" id="aviso">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-center text-sm-left text-md-right col-sm-7 col-md-7 col-lg-auto">
                    <h5 class="m-0"><strong>Customizable Peru Tours </strong> by Experts</h5>
                </div>
                <div class="col-12 text-center text-sm-left text-md-right col-sm-3 col-md-3 col-lg text-right">
                    <a href="#Inquire" class="btn btn-sm btn-g-yellow font-weight-bold" onclick="ideal_trip()">My ideal trip will be</a>
                </div>
                <div class="col-12 text-center text-sm-left text-md-right col-sm-2 col-md-2 col-lg-auto">
                    <button type="button" class="close p-0" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-white py-3 py-md-5">
        <div class="container">
            <div class="row d-none d-sm-inline-flex align-items-center">
                <div class="col col-sm-12 col-md">
                    <div class="row no-gutters">
                        <div class="col">
                            <img class="w-100 rounded-bottom lazy has-webp"
                                 data-src="{{asset('images/banner-home2.jpg')}}"
                                 data-srcset="{{asset('images/banner-home2.jpg')}}">
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col">
                            <img class="w-100 rounded-bottom lazy has-webp"
                             data-src="{{asset('images/banner-home3.jpg')}}"
                             data-srcset="{{asset('images/banner-home3.jpg')}}">
                        </div>
                    </div>
                </div>
                <div class="col col-sm-12 col-md">
                    <h2 class="text-secondary h1 font-weight-bold text-g-yellow"><strong>We are <img src="{{asset('images/logos/logo-gotoperu.webp')}}" alt="" width="250"></strong></h2>
                    {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                    {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                    <p class="text-dark">Local travel experts! our local guides, drivers, representatives will love to share you the best of our country and our 12 + years of experience crafting unforgettable trips to the land of the Incas!  We have a high reputation including global partners as Expedia, Travelocity, Tripadvisor that have also recognized our efforts citing us a Top local Experts!</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-check text-g-yellow"></i> Headquarters: Cusco, Peru</li>
                        <li><i class="fa fa-check text-g-yellow"></i> Company: 25 members</li>
                        <li><i class="fa fa-check text-g-yellow"></i> Founded: 2006</li>
                        <li><i class="fa fa-check text-g-yellow"></i> Offices: Lima, Peru / New York, Usa</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



    {{--<section class="bg-light">--}}
        {{--<div class="container">--}}
            {{--<div class="row pt-5 pb-2">--}}
                {{--<div class="col">--}}
                    {{--<h2 class="text-secondary h4"><strong>TOURS AND ACTIVITIES</strong></h2>--}}
                    {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                    {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                    {{--<p class="h4 font-weight-light">Offering you an authentic and reliable <strong>travel experience</strong> in peru welcoming you to explore the many fully <strong>Customized Travel Packages</strong> we have that suit every budget. let us plan your unforgettable <strong>trip</strong> to our majestic <strong>Machu Picchu</strong> and the rest of our  homeland… Peru!</p>--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    {{--<section class="bg-light">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col">--}}
                    {{--<!-- FareHarbor item grid of flow #100236 -->--}}
                    {{--<script src="https://fareharbor.com/embeds/script/items/gotoperu/?full-items=yes&fallback=simple&flow=100236"></script>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="row pb-4">--}}
                {{--<div class="col text-right">--}}
                    {{--<a href="{{route('peru_tours_path')}}" class="btn-link font-weight-normal">View All Tours <i class="fa fa-chevron-right"></i></a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}



    <section class="bg-white">
        <div class="container">
            <div class="row pt-md-0 pt-sm-0 pt-0 pt-lg-5 pb-2">
                <div class="col">
                    <h1 class="text-secondary h4"><strong>PERU TRAVEL PACKAGES</strong> <small class="font-italic text-primary font-weight-bold">(Land Packages)</small></h1>
                    {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                    {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                    {{--<p class="h4 font-weight-light">Offering you an authentic and reliable <strong>travel experience</strong> in peru welcoming you to explore the many fully <strong>Customized Travel Packages</strong> we have that suit every budget. let us plan your unforgettable <strong>trip</strong> to our majestic <strong>Machu Picchu</strong> and the rest of our  homeland… Peru!</p>--}}

                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container">
            <div class="row">

                <div class="col-12 d-none col-sm-12 d-md-none d-lg-inline col-md-12 col-lg-4 col-xl-4">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="list-group position-relative">
                                    @foreach($paquetes->random(5) as $paquete)
                                        <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquete->titulo)), $paquete->duracion])}}" class="list-group-item list-group-item-action">
                                            <div class="media">
                                                <img data-src="{{asset('images/packages/'.$paquete->codigo.'.jpg')}}" data-srcset="{{asset('images/packages/'.$paquete->codigo.'.jpg')}}" alt="" width="60" height="60" class="rounded-circle align-self-center mr-3 lazy has-webp" data-toggle="tooltip" data-placement="top" title="{{(strtolower($paquete->titulo))}}">
                                                <div class="media-body">
                                                    <h5 class="mt-0"><span class="text-g-yellow">{{$paquete->duracion}} Days</span> {{ucwords(strtolower($paquete->titulo))}}</h5>
                                                    <small>
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
                                            </div>
                                        </a>
                                    @endforeach
                                    {{--<div class="gradient-destinations"></div>--}}
                                    {{--<div class="row">--}}
                                    {{--<div class="col text-right pt-4">--}}
                                    {{--<a href="{{route('packages_path')}}" class="btn-link font-weight-normal">All Packages <i class="fa fa-chevron-right"></i></a>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                        <!-- Add Scroll Bar -->
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>

                <div class="col col-xs-12 d-md-inline col-md-12 col-lg-8 col-xl-8">
                    <div class="row">
                        @foreach($paquetes->where('estado', 1)->sortBy('duracion')->take(4) as $paquete)
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                                <div class="card mb-3">
                                    <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquete->titulo)), $paquete->duracion])}}" class="position-relative">
                                        <img class="card-img-top lazy has-webp" data-src="{{asset('images/packages/'.$paquete->codigo.'.jpg')}}" data-srcset="{{asset('images/packages/'.$paquete->codigo.'.jpg')}}" alt="{{(strtolower($paquete->titulo))}}">

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
                                                                <span class="badge badge-g-yellow">{{round($k/$j, 2)}} <i class="fas fa-star"></i></span>
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

                                                                    <div class="row py-4">
                                                                        <div class="col text-right">
                                                                            <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquete->titulo)), $paquete->duracion])}}#Reviews" class="btn-link font-weight-normal">All Opinions <i class="fa fa-chevron-right"></i></a>
                                                                        </div>
                                                                    </div>

                                                                    {{--<div class="row justify-content-end">--}}
                                                                        {{--<div class="col-4">--}}
                                                                            {{--<div class="row">--}}
                                                                                {{--<div class="col">--}}
                                                                                    {{--<a href="https://www.facebook.com/GOTOPERUcom/" class="d-inline mx-1" target="_blank">--}}
                                                                                        {{--<img data-src="{{asset('images/icons/facebook.png')}}" data-srcset="{{asset('images/icons/facebook.png')}}" alt="logo facebook" class="img-fluid lazy has-webp">--}}
                                                                                    {{--</a>--}}
                                                                                {{--</div>--}}
                                                                                {{--<div class="col">--}}
                                                                                    {{--<a href="https://twitter.com/GOTOPERUCOM" class="d-inline mx-1" target="_blank">--}}
                                                                                        {{--<img data-src="{{asset('images/icons/twitter.png')}}" data-srcset="{{asset('images/icons/twitter.png')}}" alt="logo twitter" class="img-fluid lazy has-webp">--}}
                                                                                    {{--</a>--}}
                                                                                {{--</div>--}}
                                                                                {{--<div class="col">--}}
                                                                                    {{--<a href="https://www.instagram.com/gotoperucom/" class="d-inline mx-1" target="_blank">--}}
                                                                                        {{--<img data-src="{{asset('images/icons/instagram.png')}}" data-srcset="{{asset('images/icons/instagram.png')}}" alt="logo instagram" class="img-fluid lazy has-webp">--}}
                                                                                    {{--</a>--}}
                                                                                {{--</div>--}}
                                                                                {{--<div class="col">--}}
                                                                                    {{--<a href="https://www.youtube.com/channel/UCpfUdQBRjnSEbh6Gu3Uh_Mg" class="d-inline mx-1" target="_blank">--}}
                                                                                        {{--<img data-src="{{asset('images/icons/youtube.png')}}" data-srcset="{{asset('images/icons/youtube.png')}}" alt="logo youtube" class="img-fluid lazy has-webp">--}}
                                                                                    {{--</a>--}}
                                                                                {{--</div>--}}
                                                                                {{--<div class="col">--}}
                                                                                    {{--<a href="https://plus.google.com/+Gotoperu" class="d-inline mx-1" target="_blank">--}}
                                                                                        {{--<img data-src="{{asset('images/icons/google-plus.png')}}" data-srcset="{{asset('images/icons/google-plus.png')}}" alt="logo google plus" class="img-fluid lazy has-webp">--}}
                                                                                    {{--</a>--}}
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

            <div class="row pb-4">
                <div class="col text-right">
                    <a href="{{route('packages_path')}}" class="btn-link font-weight-normal">All Packages <i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </section>



    <section class="bg-light d-none d-md-flex">
        <div class="container">
            <div class="row pt-5 pb-2">
                <div class="col">
                    <h2 class="text-secondary h4"><strong>PERU TRAVEL PACKAGES + AIR</strong></h2>
                    {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                    {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                    {{--<p class="h4 font-weight-light">Offering you an authentic and reliable <strong>travel experience</strong> in peru welcoming you to explore the many fully <strong>Customized Travel Packages</strong> we have that suit every budget. let us plan your unforgettable <strong>trip</strong> to our majestic <strong>Machu Picchu</strong> and the rest of our  homeland… Peru!</p>--}}
                </div>
            </div>
            <div class="alert alert-secondary">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <h5 class="m-0">7 DAYS WITH AIRFARE FROM USA <a href="packages/air-land/peru-machu-picchu-from-usa/7-days-tours" class="small font-italic">(View Program)</a><small class="d-md-block "><i class="fas fa-map-marker-alt"></i> Cusco, Lima, Sacred Valley, Machu Picchu.</small></h5>
                    </div>
                    <div class="col text-right">
                        <img data-src="{{asset('images/icons/include/tours.png')}}" data-srcset="{{asset('images/icons/include/tours.png')}}" alt="tours" class="lazy has-webp" width="35" data-toggle="tooltip" data-placement="top" title="Guide">
                        <img data-src="{{asset('images/icons/include/transfers.png')}}" data-srcset="{{asset('images/icons/include/transfers.png')}}" alt="transfers" class="lazy has-webp" width="35" data-toggle="tooltip" data-placement="top" title="Transfers">
                        <img data-src="{{asset('images/icons/include/entrances.png')}}" data-srcset="{{asset('images/icons/include/entrances.png')}}" alt="entrances" class="lazy has-webp" width="35" data-toggle="tooltip" data-placement="top" title="Entrances">
                        <img data-src="{{asset('images/icons/include/hotels.png')}}" data-srcset="{{asset('images/icons/include/hotels.png')}}" alt="hotels" class="lazy has-webp" width="35" data-toggle="tooltip" data-placement="top" title="Hotels">
                        <img data-src="{{asset('images/icons/include/trains.png')}}" data-srcset="{{asset('images/icons/include/trains.png')}}" alt="trains" class="lazy has-webp" width="35" data-toggle="tooltip" data-placement="top" title="Trains">
                        <img data-src="{{asset('images/icons/include/assistances.png')}}" data-srcset="{{asset('images/icons/include/assistances.png')}}" alt="assistances" class="lazy has-webp" width="35" data-toggle="tooltip" data-placement="top" title="Assistances">
                        <img data-src="{{asset('images/icons/include/flight.png')}}" data-srcset="{{asset('images/icons/include/flight.png')}}" alt="flight" class="lazy has-webp" width="35" data-toggle="tooltip" data-placement="top" title="Flights">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-8 col-md-6 col-lg-7 col-xl-8">
                    <div class="row no-gutters">
                        <div class="col-12 col-md-12 col-xl-12 d-flex">
                            <div class="container p-0">

                                <div class="slider-containers">

                                    <!--effect #1 -->
                                    <div class="slider-container">
                                        <div class="flexbox-slider flexbox-slider-1">
                                            <div class="flexbox-slide">
                                                <img data-src="{{asset('images/banners/home/cusco.jpg')}}" data-srcset="{{asset('images/banners/home/cusco.jpg')}}" alt="Cusco" class="lazy has-webp">
                                                <div class="text-block">
                                                    <h3>Cusco</h3>
                                                    {{--<div class="text">--}}
                                                    {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>--}}
                                                    {{--</div>--}}
                                                </div>
                                            </div>
                                            <div class="flexbox-slide">
                                                <img data-src="{{asset('images/banners/home/lima.jpg')}}" data-srcset="{{asset('images/banners/home/lima.jpg')}}" alt="Lima" class="lazy has-webp">
                                                <div class="text-block">
                                                    <h3>Lima</h3>
                                                    {{--<div class="text">--}}
                                                    {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>--}}
                                                    {{--</div>--}}
                                                </div>
                                            </div>
                                            <div class="flexbox-slide">
                                                <img data-src="{{asset('images/banners/home/machupicchu.jpg')}}" data-srcset="{{asset('images/banners/home/machupicchu.jpg')}}" alt="Machu Picchu" class="lazy has-webp">
                                                <div class="text-block">
                                                    <h3>Machu Picchu</h3>
                                                    {{--<div class="text">--}}
                                                    {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>--}}
                                                    {{--</div>--}}
                                                </div>
                                            </div>
                                            <div class="flexbox-slide">
                                                <img data-src="{{asset('images/banners/home/titicaca.jpg')}}" data-srcset="{{asset('images/banners/home/titicaca.jpg')}}" alt="Titicaca" class="lazy has-webp">
                                                <div class="text-block">
                                                    <h3>Lake Titicaca</h3>
                                                    {{--<div class="text">--}}
                                                    {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>--}}
                                                    {{--</div>--}}
                                                </div>
                                            </div>
                                            <div class="flexbox-slide">
                                                <img data-src="{{asset('images/banners/home/valle.jpg')}}" data-srcset="{{asset('images/banners/home/valle.jpg')}}" alt="Sacred Valley" class="lazy has-webp">
                                                <div class="text-block">
                                                    <h3>Sacred Valley</h3>
                                                    {{--<div class="text">--}}
                                                    {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>--}}
                                                    {{--</div>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        {{--<div class="col col-md-4 col-xl-3 d-flex align-items-center bg-g-dark">--}}
                            {{--<div class="text-white p-3">--}}
                                {{--<h3 class="h1 font-weight-bold text-g-yellow">10 DAYS</h3>--}}
                                {{--<p class="lead">Cusco, Lima, Machu Picchu, Lake Titicaca, Sacred Valley.</p>--}}
                                {{--<small class="d-block text-g-yellow py-2">Hotels, tours entrances, trains, breakfast, transfer</small>--}}
                                {{--<p class="h1 text-right my-3"><sup>from</sup> $1449</p>--}}
                                {{--<a href="packages/expedition-to-peru/10-days-tours" class="btn btn-g-yellow btn-block">View More</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
                <div class="col-4 col-md-6 col-lg-5 col-xl-4">
                    <div class="card bg-light sticky-top">
                        <div class="card-header bg-dark">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="text-white">Book Your Trip</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="/packages/air-land/land-peru/6-days-tours/detail" role="form" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="airport" class="text-secondary font-weight-bold">Departure Airport: <small>(MIA, LAX, JFK, IAD)</small></label>
                                    <select class="form-control form-control-sm" id="airport" name="txtairport">
                                        <option value="0">Select...</option>
                                        @foreach($airport as $airports)
                                            <option value="{{$airports->id}}">{{ucwords(strtolower($airports->aeropuerto))}} <small>({{strtoupper($airports->codigo)}})</small></option>
                                        @endforeach~

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="airport" class="text-secondary font-weight-bold">Departure DATE:</label>
                                    <select class="form-control form-control-sm" id="price_airport" name="txtdate">
                                        <option value="0">Select...</option>
                                    </select>
                                </div>
                                <div class="row my-4">
                                    <div class="col-7">
                                        <h6 class="text-secondary">PRICES FROM:</h6>
                                        <div class="row mt-3 align-items-center">
                                            <div class="col-6">
                                                <b class="m-0 p-0 small"><span class="h6">Excellent</span> <a href="#" class="d-block small text-g-dark" data-toggle="modal" data-target="#card_review">5 comments</a></b>
                                            </div>
                                            <div class="col-6">
                                                <span class="badge badge-g-dark w-100"><b class="h4">8.9</b>
                                                    <small class="d-block text-g-yellow">
                                                        <i class="fas fa-star small"></i>
                                                        <i class="fas fa-star small"></i>
                                                        <i class="fas fa-star small"></i>
                                                        <i class="fas fa-star small"></i>
                                                        <i class="fas fa-star small"></i>
                                                    </small>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col text-right">
                                        <p class="h1 font-weight-bold text-secondary" id="h_prices"><sup>$</sup><span>-</span></p>
                                        <small>PER PERSON</small>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col">
                                        <button type="button" class="btn btn-g-yellow btn-block mb-1 font-weight-bold" onclick="detail_p()" id="p_price_b">CHECK AVAILABILITY</button>
                                    </div>
                                </div>
                                {{--<div class="row">--}}
                                {{--<div class="col">--}}
                                {{--<p>* Vacation is round-trip, per person, based on 2 travelers. Includes air & airport taxes, transfers, hotels, tours and daily breakfast. Additional baggage charges may apply. Rates are available for 1 to 9 travelers.</p>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <img data-src="{{asset('images/logos/aero/delta.png')}}" data-srcset="{{asset('images/logos/aero/delta.png')}}" alt="" class="w-100 p-4 lazy has-webp">
                </div>
                <div class="col">
                    <img data-src="{{asset('images/logos/aero/copa.png')}}" data-srcset="{{asset('images/logos/aero/copa.png')}}" alt="" class="w-100 p-4 lazy has-webp">
                </div>
                <div class="col">
                    <img data-src="{{asset('images/logos/aero/latam.png')}}" data-srcset="{{asset('images/logos/aero/latam.png')}}" alt="" class="w-100 p-4 lazy has-webp">
                </div>
                <div class="col">
                    <img data-src="{{asset('images/logos/aero/avianca.png')}}" data-srcset="{{asset('images/logos/aero/avianca.png')}}" alt="" class="w-100 p-4 lazy has-webp">
                </div>
                <div class="col">
                    <img data-src="{{asset('images/logos/aero/american.png')}}" data-srcset="{{asset('images/logos/aero/american.png')}}" alt="" class="w-100 p-4 lazy has-webp">
                </div>
            </div>

        </div>
    </section>

    <section class="bg-white d-none d-md-flex">
        <div class="container">
            <div class="row pt-5 pb-2">
                <div class="col">
                    <h4 class="text-secondary"><strong>100'S OF REVIEWS 1 COMPANY</strong></h4>
                    {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                    {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                    {{--<p class=" font-weight-light">You are already in the "neighborhood" here are some possible multi countries travel programs for your review, rest assure we can fully customize any travel lenght and any combination of countries, we can even design a comprehensive 30 days South America escape.</p>--}}
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white pb-4 d-none d-md-flex">
        <div class="container">
            <div class="row mb-4 align-items-center justify-content-center">
                <div class="col-md-8 col-lg col-xl-5">
                    <div class="rounded shadow w-100">
                        <div class="fb-page" data-href="https://www.facebook.com/GOTOPERUcom/" data-tabs="timeline" data-width="555" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/GOTOPERUcom/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/GOTOPERUcom/">GOTOPERUcom</a></blockquote></div>
                    </div>
                </div>
                <div class="col-md-12 col-lg col-xl mt-md-4">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="px-5">
                                    <p>
                                        <i class="fa fa-quote-left fa-2x float-left text-g-green pr-2"></i>
                                        Gotoperu.org is a fine organization excellent with details and truth in every dealing and statement they make to you while planning and executing the trip. All of them have very good English fluency and some of them are even excellent. Just be sure to ask for all of the optons in each trip since they have many choices and they never get tired of custom fitting to you :) Have no qualms recommending this organization to you.
                                        <i class="fa fa-quote-right fa-2x float-right text-g-green pl-2"></i>
                                    </p>
                                    <i class="float-right text-g-yellow">Jim T. New York City, New</i>
                                </div>
                            </div>

                            @foreach($testimonial as $testimonials)
                                <div class="carousel-item ">
                                    <div class="px-5">
                                        <p>
                                            <i class="fa fa-quote-left fa-2x float-left text-g-green pr-2"></i>
                                            {{$testimonials->contenido}}
                                            <i class="fa fa-quote-right fa-2x float-right text-g-green pl-2"></i>
                                        </p>
                                        <i class="float-right text-g-yellow">{{$testimonials->nombre}} {{$testimonials->ciudad}}</i>
                                    </div>
                                </div>
                            @endforeach

                            {{--<div class="carousel-item">--}}
                                {{--<div class="px-5">--}}
                                {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem cupiditate deserunt dolore doloremque enim error eveniet fugiat fugit illo impedit, labore nisi nostrum placeat quaerat similique sunt, suscipit tempora velit.--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="carousel-item">--}}
                                {{--<div class="px-5">--}}
                                {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem cupiditate deserunt dolore doloremque enim error eveniet fugiat fugit illo impedit, labore nisi nostrum placeat quaerat similique sunt, suscipit tempora velit.--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col text-md-center text-lg-left">
                            <a href="https://www.tripadvisor.com/ShowTopic-g294311-i818-k5867868-Has_anyone_booked_a_tour_with_GOTOPERU_www_gotoperu_org-Peru.html" class="btn btn-g-yellow" target="_blank">Link 1</a>
                            <a href="https://www.tripadvisor.com/ShowTopic-g294311-i818-k6509104-Gotoperu_Travel_Agency-Peru.html" class="btn btn-g-yellow" target="_blank">Link 2</a>
                            <a href="https://www.tripadvisor.com/ShowTopic-g294311-i818-k5657518-GOTOPERU_online_tour_operator-Peru.html" class="btn btn-g-yellow" target="_blank">Link 3</a>
                            <a href="https://www.tripadvisor.com/ShowTopic-g294311-i818-k6934201-Trip_Report_Two_glorious_weeks_in_Peru_with_GOTOPERU_ORG-Peru.html" class="btn btn-g-yellow" target="_blank">Link 4</a>
                            <a href="https://www.tripadvisor.co.za/ShowTopic-g294311-i818-k7362487-o10-GotoPeru_or_David_Expeditions-Peru.html" class="btn btn-g-yellow" target="_blank">Link 5</a>
                            <a href="https://www.trustpilot.com/review/gotoperu.com" class="btn btn-g-yellow" target="_blank">Link 6</a>
                            <a href="https://www.yelp.com/biz/gotoperu-washington?osq=gotoperu.com" class="btn btn-g-yellow" target="_blank">Link 7</a>
                            <a href="https://www.youtube.com/watch?v=AOa1ygLiapc" class="btn btn-g-yellow" target="_blank">Link 8</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-12">
                            <div class="row pt-4">
                                <div class="col">
                                    <a href="https://www.tripadvisor.com/ShowTopic-g294311-i818-k5867868-Has_anyone_booked_a_tour_with_GOTOPERU_www_gotoperu_org-Peru.html"><img data-src="{{asset('images/icons/tripadvisor.png')}}" data-srcset="{{asset('images/icons/tripadvisor.png')}}" alt="logo tripadvisor" class="w-100 lazy has-webp" data-toggle="tooltip" data-placement="top" title="tripadvisor" data-original-title="If you are visiting anywhere in Peru, you cannot find a better choice than www.gotoperu.com – they live there, and work there, and can sort urgent issues readily, with a quick phone call."></a>
                                </div>
                                <div class="col">
                                    <a href="https://www.trustpilot.com/review/gotoperu.com" target="_blank"><img data-src="{{asset('images/icons/trust.png')}}" data-srcset="{{asset('images/icons/trust.png')}}" alt="logo trust" class="w-100 lazy has-webp" data-toggle="tooltip" data-placement="top" title="trust" data-original-title="In summary, we had a wonderful time! We, of course, enjoyed the sights as we expected (Machu Picchu, Sacred Valley, train, Lake Titicacca), but all of the connections were on time and very comfortable. The guides (Franklin in Cusco, Nellie in Machu Picchu) were very pleasant and very knowledgeable. "></a>
                                </div>
                                <div class="col">
                                    <a href="https://www.yelp.com/biz/gotoperu-washington?osq=gotoperu.com" target="_blank"><img data-src="{{asset('images/icons/yelp.png')}}" data-srcset="{{asset('images/icons/yelp.png')}}" alt="logo yelp" class="w-100 p-4 lazy has-webp" data-toggle="tooltip" data-placement="top" title="yelp" data-original-title="The arrangement of the agency since Cuzco arrival, has escort service all the way. You do not need to fear of lost. Hotel, tour guide, transfer are all excellent. "></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col text-right">
                    <a href="{{route('testimonials_path')}}" class="btn-link font-weight-normal">View Testimonials <i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </section>





    {{--<section class="bg-white pt-5 d-none d-lg-block">--}}
        {{--<div class="container">--}}
            {{--<div class="col">--}}
                {{--<div class="row"><!--.row -->--}}
                    {{--<div class="col">--}}
                        {{--<img src="{{asset('images/logos/apavit.png')}}" alt="logo apavit" class="img-fluid">--}}
                    {{--</div>--}}
                    {{--<div class="col">--}}
                        {{--<img src="{{asset('images/logos/apotur.png')}}" alt="logo apotur" class="img-fluid">--}}
                    {{--</div>--}}
                    {{--<div class="col">--}}
                        {{--<img src="{{asset('images/logos/asta.png')}}" alt="logo asta" class="img-fluid">--}}
                    {{--</div>--}}
                    {{--<div class="col">--}}
                        {{--<img src="{{asset('images/logos/expedia.png')}}" alt="logo expedia" class="img-fluid">--}}
                    {{--</div>--}}
                    {{--<div class="col">--}}
                        {{--<img src="{{asset('images/logos/facebook.png')}}" alt="logo facebook" class="img-fluid">--}}
                    {{--</div>--}}
                    {{--<div class="col">--}}
                        {{--<img src="{{asset('images/logos/meetup.png')}}" alt="logo meetup" class="img-fluid">--}}
                    {{--</div>--}}
                    {{--<div class="col">--}}
                        {{--<img src="{{asset('images/logos/new.png')}}" alt="logo the new york times" class="img-fluid">--}}
                    {{--</div>--}}
                    {{--<div class="col">--}}
                        {{--<img src="{{asset('images/logos/peru.png')}}" alt="logo marca peru" class="img-fluid">--}}
                    {{--</div>--}}
                    {{--<div class="col">--}}
                        {{--<img src="{{asset('images/logos/prom-peru.png')}}" alt="logo prom peru" class="img-fluid">--}}
                    {{--</div>--}}
                    {{--<div class="col">--}}
                        {{--<img src="{{asset('images/logos/tripadvisor.png')}}" alt="logo tripadvisor" class="img-fluid">--}}
                    {{--</div>--}}
                    {{--<div class="col">--}}
                        {{--<img src="{{asset('images/logos/yelp.png')}}" alt="logo yelp" class="img-fluid">--}}
                    {{--</div>--}}
                    {{--<div class="col">--}}
                        {{--<img src="{{asset('images/logos/youtube.png')}}" alt="logo youtube" class="img-fluid">--}}
                    {{--</div>--}}
                {{--</div><!-- /.row -->--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}


    <section class="bg-white pt-5">
        <div class="container">
            <div class="row pb-2">
                <div class="col">
                    <h4 class="text-secondary"><strong>HOTELS</strong></h4>
                    {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                    {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                    {{--<p class=" font-weight-light">You are already in the "neighborhood" here are some possible multi countries travel programs for your review, rest assure we can fully customize any travel lenght and any combination of countries, we can even design a comprehensive 30 days South America escape.</p>--}}
                </div>
            </div>
            {{--<div class="row justify-content-center">--}}
            {{--<div class="col-1">--}}
            {{--<img src="{{asset('images/icons/include/hotels.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Hotels">--}}
            {{--</div>--}}
            {{--</div>--}}
        </div>
    </section>

    <div class="bg-white d-none d-sm-block position-relative">
        <img data-src="{{asset('images/banner-hotels.jpg')}}" data-srcset="{{asset('images/banner-hotels.jpg')}}" alt="hoteles cusco" class="w-100 lazy has-webp">
        <div class="card-img-overlay bg-rgba-dark-3">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="m-0 text-white h3 font-weight-light"><img src="{{asset('images/icons/include/hotels.webp')}}" width="50" height="50" alt="" class="p-1" data-toggle="tooltip" data-placement="top" title="Hotels"> Hand-Selected  Collection of hotels</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--        <a href="{{route('hotels_path')}}" class="btn btn-primary btn-lg">Hotels</a>--}}
    <div class="container text-center bg-white">
        <div class="row">
            <div class="col">
                <p class="pt-2">From budget accommodations to the most luxury hotels that are a destination itself, we are partners with practically every top quality hotel at every category ( 2 stars. 3 stars, 4 stars, 5 stars ) plus our volume let us offer you great Vacation packages prices as we translate our volume savings to you.</p>
                <a href="{{route('hotels_path')}}" class="btn-link float-right font-weight-normal my-2">Hotels <i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
    </div>

    <section class="bg-light">
        <div class="container">
            <div class="row pt-5 pb-2">
                <div class="col">
                    <h4 class="text-secondary"><strong>PERU DESTINATIONS</strong></h4>
                    {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                    {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                    {{--<p class=" font-weight-light">You are already in the "neighborhood" here are some possible multi countries travel programs for your review, rest assure we can fully customize any travel lenght and any combination of countries, we can even design a comprehensive 30 days South America escape.</p>--}}
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light">
        <div class="container">
            <div class="row d-flex">
                <div class="col-8 d-none d-lg-flex col-lg-8">
                    <div class="row">
                        <div class="col">
                            <div class="grid-category position-relative">
                                <a href="destinations/peru-travel/machu-picchu-tours" class="text-g-dark rounded">
                                    <img data-src="{{asset('images/destinations/destinations/machu-picchu-h.jpg')}}" data-srcset="{{asset('images/destinations/destinations/machu-picchu-h.jpg')}}" alt="Machu Picchu" class="w-100 rounded lazy has-webp">
                                    <div class="grid-box p-3 text-center">
                                        <span class="font">
                                            <i>Machu</i>
                                            <b>Picchu</b>
                                        </span>
                                        <div class="line"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="grid-category position-relative">
                                <a href="destinations/peru-travel/puno-and-lake-titicaca-tours" class="text-g-dark rounded">
                                    <img data-src="{{asset('images/destinations/destinations/lake-titicaca-h.jpg')}}" data-srcset="{{asset('images/destinations/destinations/lake-titicaca-h.jpg')}}" alt="Lake Titicaca" class="w-100 rounded lazy has-webp">
                                    <div class="grid-box p-3 text-center">
                                        <span class="font">
                                            <i>Lake</i>
                                            <b>Titicaca</b>
                                        </span>
                                        <div class="line"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col d-lg-none d-xl-block">
                            <div class="grid-category position-relative">
                                <a href="destinations/peru-travel/amazon-tours" class="text-g-dark rounded">
                                    <img data-src="{{asset('images/destinations/destinations/amazon-h.jpg')}}" data-srcset="{{asset('images/destinations/destinations/amazon-h.jpg')}}" alt="Amazon" class="w-100 rounded lazy has-webp">
                                    <div class="grid-box p-3 text-center">
                                        <span class="font">
                                            <i>Ama</i>
                                            <b>zon</b>
                                        </span>
                                        <div class="line"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4">
                    <div class="row">
                        <div class="col">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="list-group position-relative">
                                            @foreach($destinos->where('pais', 'peru')->random(6) as $destino)
                                                <a href="{{route('destinations_country_show_path', ['peru-travel', str_replace(' ', '-', strtolower($destino->nombre))])}}-tours" class="list-group-item list-group-item-action">
                                                    <div class="media">
                                                        <img data-src="{{asset('images/destinations/destinations/'.str_replace(' ','-', strtolower($destino->nombre)).'')}}.jpg" data-srcset="{{asset('images/destinations/destinations/'.str_replace(' ','-', strtolower($destino->nombre)).'')}}.jpg" alt="{{strtolower($destino->nombre)}}" width="60" height="60" class="rounded-circle align-self-center mr-3 lazy has-webp" data-toggle="tooltip" data-placement="top" title="{{ucwords(strtolower($destino->nombre))}}">
                                                        <div class="media-body">
                                                            <h5 class="mt-0">{{ucwords(strtolower($destino->nombre))}}</h5>
                                                            <p>{{ucwords(strtolower($destino->pais))}}</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            @endforeach
                                            <div class="gradient-destinations"></div>
                                            {{--<div class="row">--}}
                                            {{--<div class="col text-right pt-4">--}}
                                            {{--<a href="{{route('packages_path')}}" class="btn-link font-weight-normal">All Packages <i class="fa fa-chevron-right"></i></a>--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                </div>
                                <!-- Add Scroll Bar -->
                                <div class="swiper-scrollbar"></div>
                            </div>

                        </div>
                    </div>
                    <div class="row py-4">
                        <div class="col text-right">
                            <a href="{{route('destinations_country_path', 'peru-travel')}}" class="btn-link float-right font-weight-normal mt-2 mb-4">View Peru destinations <i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <section class="bg-white">
        <div class="container">
            <div class="row pt-5 pb-2">
                <div class="col">
                    <h4 class="text-secondary"><strong>9 Reasons To Let Our Guides Take You On An Unforgettable Adventure!</strong></h4>
                    {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                    {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                    {{--<p class=" font-weight-light">You are already in the "neighborhood" here are some possible multi countries travel programs for your review, rest assure we can fully customize any travel lenght and any combination of countries, we can even design a comprehensive 30 days South America escape.</p>--}}
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container">
            <div class="row  pb-2">
                <div class="col">


                    <div class="owl-carousel-wrap">
                        <div class="owl-carousel owl-theme">
                            <div class="item d-flex">
                                <div class="card text-white bg-dark">
                                    <div class="col media p-3">
                                        <span class="mr-3 rounded-circle px-3 text-white h1 font-weight-light bg-info">1</span>
                                        <div class="media-body">
                                            <h5 class="mt-0 text-g-yellow">We Care</h5>
                                            We promise to do the right thing all the time, every time, for our team, travelers, people and places we visit.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item d-flex">
                                <div class="card text-white bg-dark">
                                    <div class="col media p-3">
                                        <span class="mr-3 rounded-circle bg-g-green px-3 text-white h1 font-weight-light">2</span>
                                        <div class="media-body">
                                            <h5 class="mt-0 text-g-yellow">We Are Accessible</h5>
                                            You will find GoToPeru offices in Lima, Arequipa, Cusco and satellite branches in Quito and La Paz.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item d-flex">
                                <div class="card text-white bg-dark">
                                    <div class="col media p-3">
                                        <span class="mr-3 rounded-circle bg-danger px-3 text-white h1 font-weight-light">3</span>
                                        <div class="media-body">
                                            <h5 class="mt-0 text-g-yellow">We Provide The Best Team Of Experts</h5>
                                            Our expert locals make the difference. They come from all regions across Peru and bring with them unique information and a vast knowledge of main destinations.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item d-flex">
                                <div class="card text-white bg-dark">
                                    <div class="col media p-3">
                                        <span class="mr-3 rounded-circle bg-warning px-3 text-white h1 font-weight-light">4</span>
                                        <div class="media-body">
                                            <h5 class="mt-0 text-g-yellow">We Are Internationally Recognized</h5>
                                            We are rated as a high quality Travel Operator on TripAdvisor with impeccable testimonials. We are proud members of Promperu, the National Tourism Board, fully licensed and authorized by the government.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item d-flex">
                                <div class="card text-white bg-dark">
                                    <div class="col media p-3">
                                        <span class="mr-3 rounded-circle bg-g-dark px-3 text-white h1 font-weight-light">5</span>
                                        <div class="media-body">
                                            <h5 class="mt-0 text-g-yellow">We Help Our Community</h5>
                                            We aim to make positive differences in the communities where we work and live. We look for ways to improve the standards of living. It is our priority to hire local people, develop their communities and work with local supply chains.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item d-flex">
                                <div class="card text-white bg-dark">
                                    <div class="col media p-3">
                                        <span class="mr-3 rounded-circle bg-g-yellow px-3 text-white h1 font-weight-light">6</span>
                                        <div class="media-body">
                                            <h5 class="mt-0 text-g-yellow">We Think Ahead…</h5>
                                            We are aware that surprises, both good and bad, occur while traveling. We are always on top of it and ready to give reliable travel solutions to our customers.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item d-flex">
                                <div class="card text-white bg-dark">
                                    <div class="col media p-3">
                                        <span class="mr-3 rounded-circle bg-danger px-3 text-white h1 font-weight-light">7</span>
                                        <div class="media-body">
                                            <h5 class="mt-0 text-g-yellow">We Turn Good Trips Into Unforgettable Adventures</h5>
                                            We help our travelers choose the perfect trip to the land of the Incas, providing them with the most authentic life-changing adventure possible. We go out of our way to ensure a travel experience unlike anything you’ve seen.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item d-flex">
                                <div class="card text-white bg-dark">
                                    <div class="col media p-3">
                                        <span class="mr-3 rounded-circle bg-success px-3 text-white h1 font-weight-light">8</span>
                                        <div class="media-body">
                                            <h5 class="mt-0 text-g-yellow">We Aren’t Afraid To Push Our Boundaries</h5>
                                            We offer alternative extensions to the main South American destinations in Ecuador, Bolivia, Chile, Argentina, Brasil, Uruguay and Columbia.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item d-flex">
                                <div class="card text-white bg-dark">
                                    <div class="col media p-3">
                                        <span class="mr-3 rounded-circle bg-secondary px-3 text-white h1 font-weight-light">9</span>
                                        <div class="media-body">
                                            <h5 class="mt-0 text-g-yellow">We are Globally recognize</h5>
                                            With global partners as <strong>Expedia, Viator</strong> and many other travel agents who trust us as their leading Peruvian operations company.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--<div class="popup"></div>--}}
                    </div>


                </div>
            </div>

        </div>
    </section>

    <section class="bg-white d-none d-sm-block">
        <div class="container">
            <div class="row py-5">
                <div class="col col-sm">
                    <div class="row mt-5 justify-content-center">
                        <div class="col-6 col-sm-4 col-md-6 col-lg-3">
                            <img data-src="{{asset('images/icons/group.png')}}" data-srcset="{{asset('images/icons/group.png')}}" alt="icon group" class="img-fluid lazy has-webp">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <i class="font-weight-bold text-secondary">Small Groups and Private tours.</i>
                        </div>
                    </div>

                    <div class="row mt-5 justify-content-center">
                        <div class="col-6 col-sm-4 col-md-6 col-lg-3">
                            <img data-src="{{asset('images/icons/assistance.png')}}" data-srcset="{{asset('images/icons/assistance.png')}}" alt="icon assistance" class="img-fluid lazy has-webp">
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col text-center">
                            <i class="font-weight-bold text-secondary">We live here, trully a 24/7 Assistance.</i>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-6 col-sm-4 col-md-6 col-lg-3">
                            <img data-src="{{asset('images/icons/customize.png')}}" data-srcset="{{asset('images/icons/customize.png')}}" alt="icon customize" class="img-fluid lazy has-webp">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <i class="font-weight-bold text-secondary">Book Now option or Customize a dream trip!.</i>
                        </div>
                    </div>
                </div>
                <div class="col col-sm d-none d-sm-block">
                    <img data-src="{{asset('images/goto.jpg')}}" data-srcset="{{asset('images/goto.jpg')}}" alt="team gotoperu" class="w-100 lazy has-webp">
                </div>
                <div class="col-12 col-sm">
                    <div class="row mt-5 justify-content-center">
                        <div class="col-6 col-sm-4 col-md-6 col-lg-3">
                            <img data-src="{{asset('images/icons/location.png')}}" data-srcset="{{asset('images/icons/location.png')}}" alt="icon lcoation" class="img-fluid lazy has-webp">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <i class="font-weight-bold text-secondary">Cutting the middlemen, headquarters at Peru.</i>
                        </div>
                    </div>

                    <div class="row mt-5 justify-content-center">
                        <div class="col-6 col-sm-4 col-md-6 col-lg-3">
                            <img data-src="{{asset('images/icons/trip.png')}}" data-srcset="{{asset('images/icons/trip.png')}}" alt="icon tripadvisor" class="img-fluid lazy has-webp">
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col text-center">
                            <i class="font-weight-bold text-secondary">We take pride of our tripadvisor reviews!.</i>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-6 col-sm-4 col-md-6 col-lg-3">
                            <img data-src="{{asset('images/icons/departure.png')}}" data-srcset="{{asset('images/icons/departure.png')}}" alt="icon departure" class="img-fluid lazy has-webp">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <i class="font-weight-bold text-secondary">We can adapt to any arrival and departure.</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-4">
        <div class="container">
            <div class="row align-items-center no-gutters">
                <div class="col d-none d-xl-block">
                    <img data-src="{{asset('images/we-care.jpg')}}" data-srcset="{{asset('images/we-care.jpg')}}" alt="we care" class="img-fluid lazy has-webp">
                </div>
                <div class="col">
                    <div class="px-4">
                        <h3 class="display-4 font-weight-light">Because we care <i class="fa fa-heart text-danger"></i></h3>
                        <p class="">We give back to our communities</p>
                        <hr>
                        <p class="text-primary"><i>Chaullacota Locates at 15,000 feed (4500 mts) 2 hours Northwest of cusco</i></p>
                        <p class="text-justify font-weight-light">At GOTOPERU we are committed to doing business in a way that actually give back to our communities specially the one located in remote places. Our planning and execution of one of our trips involves a long supply chain: from local guides and operators to transportation providers to hotels and restaurants, we interact with a lot of different organizations on the ground, but we also know that some communities specially located on top of the Andes at 15,000+feet that due to the difficult access, dont receive the assistance they deserve, is for that reason that we organize periodically trips to this far far away communities to bring them specially sweaters and toys for children.</p>
                    </div>

                    <div class="row">
                        <div class="col">
                            <img data-src="{{asset('images/social/ninos.jpg')}}" data-srcset="{{asset('images/social/ninos.jpg')}}" alt="we care" class="img-fluid lazy has-webp pl-4" data-toggle="modal" data-target="#social-1">
                            <!-- Modal -->
                            {{--<div class="modal fade" id="social-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                                {{--<div class="modal-dialog modal-lg" role="document">--}}
                                    {{--<div class="modal-content">--}}
                                        {{--<div class="modal-body p-0">--}}
                                            {{--<img src="{{asset('images/social/ninos.jpg')}}" alt="we care" class="img-fluid rounded">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                        <div class="col">
                            <img data-src="{{asset('images/social/social.jpg')}}" data-srcset="{{asset('images/social/social.jpg')}}" alt="social" class="img-fluid pr-4 lazy has-webp" data-toggle="modal" data-target="#social-2">
                            <!-- Modal -->
                            {{--<div class="modal fade" id="social-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                                {{--<div class="modal-dialog modal-lg" role="document">--}}
                                    {{--<div class="modal-content">--}}
                                        {{--<div class="modal-body p-0">--}}
                                            {{--<img src="{{asset('images/social/social.jpg')}}" alt="" class="img-fluid rounded">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-white">
        <div class="container">
            <div class="row pt-5 pb-2">
                <div class="col">
                    <h2 class="text-secondary h4"><strong>Getting To Peru</strong></h2>
                    {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                    {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                    <p class=" font-weight-light">A trip to Peru is an exciting adventure! There are a number of common questions first-time travelers to Peru frequently ask.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img data-src="{{asset('images/slider/flights.jpg')}}" data-srcset="{{asset('images/slider/flights.jpg')}}" alt="getting to peru" class="w-100 lazy has-webp">
                    <a href="#" class="btn-link float-right font-weight-normal my-3" data-toggle="modal" data-target="#exampleModal">More Information <i class="fa fa-chevron-right"></i></a>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Jorge Chavez International Airport</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col text-justify">
                                            <p>Those unfamiliar with this airport might picture a small, rundown, subpar airport in the middle of nowhere. However, the Jorge Chavez International Airport is actually one of the most famous airports in the world. It is as modern as LAX, Dulles, or any other big-name location on the planet. In fact, it won the 2012 award for the Best Airport in South America, awarded by the World Airport Awards. And this isn’t the first time Jorge Chavez has won this category. In fact, it won four consecutive years.</p>
                                            <p>Known as LIM, the Jorge Chavez International Airport has every modern amenity you would expect a world-class terminal to have. From great food and ironclad security to an award-winning airport staff, which has also won awards (via Skytrax Research), your experience with this airport will be unique and pleasant.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="text-g-yellow">Airlines From North America, Central America & Caribbean To Peru</h4>
                                            <ul>
                                                <li>Aero Mexico</li>
                                                <li>Air Canada</li>
                                                <li>American Airlines</li>
                                                <li>Continental Airlines</li>
                                                <li>Copa Airlines</li>
                                                <li>Delta Airlines</li>
                                                <li>Lecsa</li>
                                                <li>LAN</li>
                                                <li>Spirit Airlines</li>
                                                <li>TACA</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <h4 class="text-g-yellow">Airlines From Europe To Peru</h4>
                                            <ul>
                                                <li>Air Europa</li>
                                                <li>Air France</li>
                                                <li>Alitalia</li>
                                                <li>British Airways</li>
                                                <li>Iberia</li>
                                                <li>KLM</li>
                                                <li>LAN</li>
                                                <li>Lufthansa</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <h4 class="text-g-yellow">Airlines From South America To Peru</h4>
                                            <ul>
                                                <li>Aerolineas Argentina</li>
                                                <li>Avianca</li>
                                                <li>Copa Airlines</li>
                                                <li>LAN</li>
                                                <li>Sky Airlines</li>
                                                <li>TACA</li>
                                                <li>TAM</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    {{--<section class="bg-light">--}}
        {{--<div class="container">--}}
            {{--<div class="row align-items-center">--}}
                {{--<div class="col">--}}

                    {{--<h3 class="display-4 font-weight-light">GOTOPERU PROMISES</h3>--}}
                    {{--<p class="">We take pride of our Promises, for each our travelers from solo travelers to large groups.</p>--}}
                    {{--<hr>--}}
                    {{--<h4 class="text-g-yellow">Problem-Free Travel</h4>--}}
                    {{--<p>The itineraries that GOTOPERU create will work for you and your family. Our staff will work day and night to ensure you get to your destinations without delay.</p>--}}
                    {{--<h4 class="text-g-yellow">Personalized Itineraries</h4>--}}
                    {{--<p>We want you to have the trip of a lifetime, so email and call us until it exactly where you want it to be. We will make sure that your trip is exactly as you want it.</p>--}}

                {{--</div>--}}
                {{--<div class="col">--}}
                    {{--<img src="http://machupicchu.company/images/contact.png" alt="" class="img-fluid">--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    @include('layouts.page.form-quote')
    <section class="bg-white d-none d-md-flex">
        <div class="container">
            <div class="row pt-5 pb-2">
                <div class="col">
                    <h6 class="text-secondary"><strong><a href=""><i class="fab fa-instagram"></i></a> #gotoperu check out these #gotoperu photos from past travelers. After your trip, come back and share some of your owm!</strong></h6>
                    {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                    {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                    {{--<p class=" font-weight-light">You are already in the "neighborhood" here are some possible multi countries travel programs for your review, rest assure we can fully customize any travel lenght and any combination of countries, we can even design a comprehensive 30 days South America escape.</p>--}}
                </div>
            </div>
        </div>
    </section>


    <section class="bg-white">
        <div class="container">

            <div class="row pb-2">
                <div class="col">
                    <div class="elfsight-app-ba7c9526-9468-4d5b-b378-68ec76259e00"></div>

                </div>
            </div>

            <div class="row pb-5">
                <div class="col text-right">
                    <a href="{{route('gallery_path')}}" class="btn-link font-weight-normal">View Gallery <i class="fa fa-chevron-right"></i></a>
                </div>
            </div>

        </div>
    </section>

    <section class="bg-light">
        <div class="container">
            <div class="row pt-5 pb-2">
                <div class="col">
                    <h2 class="text-secondary h4"><strong>Certificates</strong></h2>
                    {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                    {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                    <p class=" font-weight-light">GOTOPERU is fully certified by the Peruvian local government as an officially licensed tour operator on behalf of the "Ministerio de Turismo del Peru".</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light pb-5">
        <div class="container">
            <div class="row">
                <div class="col-1">
                    <img data-src="{{asset('images/cuadro-01.png')}}" data-srcset="{{asset('images/cuadro-01.png')}}" alt="border" class="w-100 lazy has-webp">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-4 mb-2">
                            <img data-src="{{asset('images/certificates/certificate-1.jpg')}}" data-srcset="{{asset('images/certificates/certificate-1.jpg')}}" alt="certificate gotoperu" class="w-100 lazy has-webp" data-toggle="modal" data-target="#certificate-1">
                            {{--<div class="modal fade" id="certificate-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                                {{--<div class="modal-dialog modal-lg" role="document">--}}
                                    {{--<div class="modal-content">--}}
                                        {{--<div class="modal-body p-0">--}}
                                            {{--<img src="{{asset('images/certificates/certificate-1.jpg')}}" alt="certificate gotoperu" class="img-fluid rounded">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 mb-2">
                            <img data-src="{{asset('images/certificates/certificate-2.jpg')}}" data-srcset="{{asset('images/certificates/certificate-2.jpg')}}" alt="certificate gotoperu" class="w-100 lazy has-webp" data-toggle="modal" data-target="#certificate-2">
                            {{--<div class="modal fade" id="certificate-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                                {{--<div class="modal-dialog modal-lg" role="document">--}}
                                    {{--<div class="modal-content">--}}
                                        {{--<div class="modal-body p-0">--}}
                                            {{--<img src="{{asset('images/certificates/certificate-2.jpg')}}" alt="certificate gotoperu" class="img-fluid rounded">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 mb-2">
                            <img data-src="{{asset('images/certificates/certificate-3.jpg')}}" data-srcset="{{asset('images/certificates/certificate-3.jpg')}}" alt="certificate gotoperu" class="w-100 lazy has-webp" data-toggle="modal" data-target="#certificate-3">
                            {{--<div class="modal fade" id="certificate-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                                {{--<div class="modal-dialog modal-lg" role="document">--}}
                                    {{--<div class="modal-content">--}}
                                        {{--<div class="modal-body p-0">--}}
                                            {{--<img src="{{asset('images/certificates/certificate-3.jpg')}}" alt="certificate gotoperu" class="img-fluid rounded">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
            </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-1">
                    <img data-src="{{asset('images/cuadro-02.png')}}" data-srcset="{{asset('images/cuadro-02.png')}}" alt="border" class="w-100 lazy has-webp">
                </div>
            </div>

        </div>
    </section>


    @push('scripts')

        <script>
            $(".owl-carousel").owlCarousel({
                // loop: true,
                // margin: 10,
                // nav: true,
                autoplay:true,
                autoplayTimeout:10000,
                autoplayHoverPause:true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });

            var topItem = 0,
                leftItem = 0,
                popupHeight = 500;

            $(".owl-carousel .item").on("click", function(e) {
                var $this = $(this),
                    $parent = $this.parents(".owl-carousel-wrap"),
                    content = $this.html(),
                    $popup = $parent.find(".popup");

                topItem = $this.offset().top - $parent.offset().top + $this.height() / 2;
                leftItem = $this.offset().left - $parent.offset().left + $this.width() / 2;

                $popup.css({
                    top: topItem,
                    left: leftItem,
                    width: 0,
                    height: 0
                });

                $popup.html(content).stop().animate(
                    {
                        top: -((popupHeight - $this.parent().outerHeight()) / 2),
                        left: 0,
                        width: "100%",
                        height: popupHeight,
                        opacity: 1
                    },
                    400
                );
            });

            $(".popup").on("click", function(e) {
                $(this).stop().animate(
                    {
                        width: 0,
                        height: 0,
                        top: topItem,
                        left: leftItem,
                        opacity: 0
                    },
                    400
                );
            });
        </script>
        {{--<script>--}}
            {{--//form--}}
            {{--function design(){--}}
                {{--$.ajaxSetup({--}}
                    {{--headers: {--}}
                        {{--'X-CSRF-TOKEN': $('[name="_token"]').val()--}}
                    {{--}--}}
                {{--});--}}

                {{--$("#de_send").attr("disabled", true);--}}

                {{--var filter=/^[A-Za-z][A-Za-z0-9_.]*@[A-Za-z0-9_]+.[A-Za-z0-9_.]+[A-za-z]$/;--}}


                {{--var s_destinations = document.getElementsByName('destinations[]');--}}
                {{--var $destinations = "";--}}
                {{--for (var i = 0, l = s_destinations.length; i < l; i++) {--}}
                    {{--if (s_destinations[i].checked) {--}}
                        {{--$destinations += s_destinations[i].value+' , ';--}}
                    {{--}--}}
                {{--}--}}
                {{--s_destinations = $destinations.substring(0,$destinations.length-3);--}}

{{--//                alert(s_destinations);--}}

                {{--var s_name = $('#de_name').val();--}}
                {{--var s_email = $('#de_email').val();--}}
                {{--var s_country = $('#de_country').val();--}}
                {{--var s_date = $('#de_date').val();--}}
                {{--var s_number = $('#de_numero').val();--}}
                {{--var s_duration = $('#de_duration').val();--}}
{{--//                var s_other = $('#de_otros').val();--}}
                {{--var s_comment = $('#de_comment').val();--}}


                {{--if (filter.test(s_email)){--}}
                    {{--sendMail = "true";--}}
                {{--} else{--}}
                    {{--$('#de_email').css("border-bottom", "2px solid #FF0000");--}}
                    {{--sendMail = "false";--}}
                {{--}--}}
                {{--if (s_name.length == 0 ){--}}
                    {{--$('#de_name').css("border-bottom", "2px solid #FF0000");--}}
                    {{--var sendMail = "false";--}}
                {{--}--}}

                {{--if(sendMail == "true"){--}}
                    {{--var datos = {--}}

                        {{--"txt_destinations" : s_destinations,--}}

                        {{--"txt_name" : s_name,--}}
                        {{--"txt_email" : s_email,--}}
                        {{--"txt_country" : s_country,--}}
                        {{--"txt_date" : s_date,--}}
                        {{--"txt_number" : s_number,--}}
                        {{--"txt_duration" : s_duration,--}}
                        {{--"txt_comment" : s_comment,--}}

                    {{--};--}}
                    {{--$.ajax({--}}
                        {{--data:  datos,--}}
                        {{--url:   "{{route('design_path')}}",--}}
                        {{--type:  'post',--}}

                        {{--beforeSend: function () {--}}

                            {{--$('#de_send').removeClass('show');--}}
                            {{--$("#de_send").addClass('d-none');--}}

                            {{--$("#loader5").removeClass('d-none');--}}
                            {{--$("#loader5").addClass('show');--}}
                        {{--},--}}
                        {{--success:  function (response) {--}}
                            {{--$('#de_form')[0].reset();--}}
                            {{--$('#de_send').removeClass('d-none');--}}
                            {{--$('#de_send').addClass('show');--}}
                            {{--$("#loader5").removeClass('show');--}}
                            {{--$("#loader5").addClass('d-none');--}}
                            {{--$('#de_alert').removeClass('d-none');--}}
                            {{--$("#de_alert").addClass('show');--}}
                            {{--$("#de_alert b").html(response);--}}
                            {{--$("#de_alert").fadeIn('slow');--}}
                            {{--$("#de_send").removeAttr("disabled");--}}
                        {{--}--}}


                    {{--});--}}
                {{--} else{--}}
                    {{--$("#de_send").removeAttr("disabled");--}}
                {{--}--}}
            {{--}--}}

            {{--$('#de_date').datepicker({--}}
                {{--dateFormat: 'yy-mm-dd',--}}
                {{--changeMonth: true,--}}
                {{--changeYear: true--}}
            {{--});--}}

        {{--</script>--}}


        <script>
            $('#airport').change(function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('[name="_token"]').val()
                    }
                });
                var s_airport = $('#airport').val();

                var datos = {
                    "txt_airport" : s_airport
                };

                $.ajax({
                    data: datos,
                    url: "{{route('lista_precio_aero_path')}}",
                    type: 'post',
                    // success: rendeListaPrecios
                    success:  listar_precios
                });
            });

            function listar_precios(data) {
                $('#price_airport option').remove();
                var list = data == null ? [] : (data.price_air instanceof Array ? data.price_air : [data.price_air ]);
                if (list.length < 1) {
                    alert("SIN NINGÚN RESULTADO EN LA BD");
                } else {
                    $('#price_airport').append('<option value="0">Select...</option>');
                    $.each(list, function(index, price_air) {
                        var fecha = price_air.fecha.split('-');
                        if(fecha){
                            var meses=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
                            var f = new Date(fecha);

                            var texto=meses[f.getMonth()]+' '+f.getDate()+', '+f.getFullYear();
                            // console.log(texto);
                        }
                        $('#price_airport').append('<option value='+price_air.id+'>'+texto+'</option>');
                    });
                    $('#price_airport').focus();
                }
            }

            $('#price_airport').change(function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('[name="_token"]').val()
                    }
                });
                var s_price_airport = $('#price_airport').val();

                var datos = {
                    "txt_price_airport" : s_price_airport
                };

                $.ajax({
                    data: datos,
                    url: "{{route('precio_aero_path')}}",
                    type: 'post',
                    // success: rendeListaPrecios
                    success:  p_precios
                });
            });

            function p_precios(data) {
                $('#h_prices span').remove();
                var list = data == null ? [] : (data.price_t instanceof Array ? data.price_t : [data.price_t ]);
                if (list.length < 1) {
                    alert("SIN NINGÚN RESULTADO EN LA BD");
                } else {
                    // $('#hola b').append('<option value="0">SELECCIONAR...</option>');
                    $.each(list, function(index, price_t) {
                        $('#h_prices').append('<span>'+price_t.precio+'</span>');
                    });
                }
            }



            //

            function detail_p(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('[name="_token"]').val()
                    }
                });

                // $("#p_price_b").attr("disabled", true);

                var s_airport = $('#airport option:selected').val();
                var s_price_airport = $('#price_airport option:selected').val();

                if (s_airport){
                    var sendMail = "true";
                }

                if (s_airport == 0){
                    $('#airport').css("border-bottom", "2px solid #FF0000");
                    var sendMail = "false";
                }

                if (s_price_airport == 0){
                    $('#price_airport').css("border-bottom", "2px solid #FF0000");
                    var sendMail = "false";
                }

                if(sendMail == "true"){
                    var datos = {
                        "txt_airport" : s_airport,
                        "txt_price_airport" : s_price_airport
                    };
                    $.ajax({
                        data:  datos,
                        url:   "{{route('inquire_detail_p_path')}}",
                        type:  'post',

                        beforeSend: function () {

                            $('#d_send').removeClass('show');
                            $("#d_send").addClass('d-none');

                            $("#loader2").removeClass('d-none');
                            $("#loader2").addClass('show');
                        },
                        success:  function (response) {
                            window.location.href = '/packages/air-land/peru-machu-picchu-from-usa/7-days-tours/detail/'+response+'';
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

        </script>

        <script>
            var swiper = new Swiper('.swiper-container', {
                direction: 'vertical',
                slidesPerView: 'auto',
                freeMode: true,
                scrollbar: {
                    el: '.swiper-scrollbar',
                },
                mousewheel: true,
            });

            // var myLazyLoad = new LazyLoad({
            //     elements_selector: ".lazy"
            // });
            // (function () {
            //     var ll = new LazyLoad({
            //         threshold: 0
            //     });
            // }());
            // (function () {
            //     var ll = new LazyLoad({
            //         threshold: 0,
            //         to_webp: true
            //     });
            // }());

        </script>
        <div id="fb-root"></div>
        <script async defer src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2&appId=1712869952328301&autoLogAppEvents=1"></script>

    @endpush

@stop