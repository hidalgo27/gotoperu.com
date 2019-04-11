@extends('layouts.page.default')

@section('content')
    <section class="header-video d-none d-md-block chat-mensajes">
        <div id="title" class="text-white">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-between my-2">
                    <div class="col-3">
                        <a href="{{route('home_path')}}">
                            {{--<img src="{{asset('images/logos/logo-gotoperu-ave-w.webp')}}" alt="" class="img-fluid">--}}
                            <img class="w-100 lazy has-webp"
                                 data-src="{{asset('images/logos/logo-gotoperu-ave-w.png')}}"
                                 data-srcset="{{asset('images/logos/logo-gotoperu-ave-w.png')}}" alt="logo gotoperu">
                        </a>
                    </div>
                    <div class="col text-center">
                        <h5 class="font-weight-light"><b class="font-weight-bold">GO</b> with the Peruvian experts</h5>
                    </div>
                    <div class="col-3 text-right">
                        <a href="tel:+2029963000" class="mx-3 text-g-yellow font-weight-bold h5">(202) 996-3000</a>
                        <a href="#" class="text-white"  data-toggle="modal" data-target="#modal-menu"><i class="fa fa-bars fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="overlay" class="position-relative">
            <video class="hero-vid-home" id="hero-vid" poster="{{asset('images/slider/package-1.webp')}}" autoplay loop muted>
                <source src="{{asset('media/final.mp4')}}" />
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
            {{--@include('layouts.page.menu-custom')--}}
        </div>
        <div class="content-header">
            <div class="container">
                <div class="row content-header-row align-items-center mt-5">
                    <div class="col text-center">
                        {{--<a href="" class="text-white"><i class="fa fa-play-circle fa-4x"></i></a>--}}

                        <div class="text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                            <div class="">
                                <div class="content-video-1 text-white">
                                    {{--<img src="images/travel/video-1.jpg" alt="video">--}}
                                    <h2 class="font-weight-bolder">Top Recommended Travel Company to Machu Picchu & Peru</h2>

                                    <div class="row mt-5 justify-content-center">
                                        <div class="col-6">
                                            <div class="row ">
                                                <div class="col d-flex">
                                                    <div class="card bg-rgba-dark-3 w-100">
                                                        <div class="card-header bg-g-yellow">
                                                            <h5 class="m-0">CUSTOMIZED TRIP</h5>
                                                        </div>
                                                        <div class="card-body small p-1 font-weight-bold">
                                                            <a href="#" class="stretched-link text-white">Lets design together a Peru dream vacation!</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{--<div class="col-auto d-flex">--}}
                                                    {{--or--}}
                                                {{--</div>--}}
                                                <div class="col d-flex">
                                                    <div class="card bg-rgba-dark-3 w-100">
                                                        <div class="card-header bg-g-green">
                                                            <h5 class="m-0">BOOK ONLINE</h5>
                                                        </div>
                                                        <div class="card-body small p-1 font-weight-bold">
                                                            <a href="" class="stretched-link text-white">Pre-design Programs</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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

    <div class="bg-white">
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

        <section class="bg-light py-5">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2 class="display-4 font-weight-bold text-g-yellow">WE ARE <span class="text-g-green">GOTOPERU</span></h2>
                        {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                        {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                        <p class="lead font-weight-normal text-secondary m-0">Local travel experts! our local guides, drivers, representatives will love to share you the best of our country and our 12 + years of experience crafting unforgettable trips to the land of the Incas!  We have a high reputation including global partners as Expedia, Travelocity, Tripadvisor that have also recognized our efforts citing us a Top local Experts!</p>
                    </div>
                </div>
            </div>
        </section>



        <section class="bg-light pb-5">
            <div class="container-fluid">

                        <div class="row">
                            <div class="col">
                                <div class="row slider-top-home mx-4">
                                    <div class="col">
                                        <a class="venobox w-100" data-gall="myGallery" href="{{asset('images/slider-home/21.jpg')}}"><img src="{{asset('images/slider-home/thumbnail/21.jpg')}}" class="w-100" /></a>
                                    </div>
                                    <div class="col">
                                        <a class="venobox w-100" data-gall="myGallery" href="{{asset('images/slider-home/22.jpg')}}"><img src="{{asset('images/slider-home/thumbnail/22.jpg')}}" class="w-100" /></a>
                                    </div>
                                    <div class="col">
                                        <a class="venobox w-100" data-gall="myGallery" href="{{asset('images/slider-home/23.jpg')}}"><img src="{{asset('images/slider-home/thumbnail/23.jpg')}}" class="w-100" /></a>
                                    </div>
                                    <div class="col">
                                        <a class="venobox w-100" data-gall="myGallery" href="{{asset('images/slider-home/24.jpg')}}"><img src="{{asset('images/slider-home/thumbnail/24.jpg')}}" class="w-100" /></a>
                                    </div>
                                    <div class="col">
                                        <a class="venobox w-100" data-gall="myGallery" href="{{asset('images/slider-home/25.jpg')}}"><img src="{{asset('images/slider-home/thumbnail/25.jpg')}}" class="w-100" /></a>
                                    </div>
                                    <div class="col">
                                        <a class="venobox w-100" data-gall="myGallery" href="{{asset('images/slider-home/26.jpg')}}"><img src="{{asset('images/slider-home/thumbnail/26.jpg')}}" class="w-100" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>

            </div>
        </section>

        <section class="bg-white py-5">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2 class="h1 font-weight-bold text-g-yellow mb-3">BOOK ONLINE</h2>
                        <p class="lead font-weight-normal text-secondary mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad asperiores commodi consequatur deleniti deserunt dolorem ea in molestias, natus nemo perferendis praesentium quae qui rerum saepe sapiente tempore voluptate voluptatem!</p>
                    </div>
                </div>
                {{--recom--}}
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col-12">
                                <div class="nav-category-goto-yellow nav nav-pills flex-column flex-sm-row p-0" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="flex-sm-fill text-sm-center rounded-0 nav-link active" id="recommended-tab" data-toggle="pill" href="#recommended" role="tab" aria-controls="recommended" aria-selected="true">Recommended</a>
                                    <a class="flex-sm-fill text-sm-center rounded-0 nav-link" id="active-trek-tab" data-toggle="pill" href="#active-trek" role="tab" aria-controls="active-trek" aria-selected="false">Active / Trek</a>
                                    <a class="flex-sm-fill text-sm-center rounded-0 nav-link" id="luxury-tab" data-toggle="pill" href="#luxury" role="tab" aria-controls="luxury" aria-selected="false">Luxury</a>
                                    <a class="flex-sm-fill text-sm-center rounded-0 nav-link" id="cruise-tab" data-toggle="pill" href="#cruise" role="tab" aria-controls="cruise" aria-selected="false">Cruise Extension</a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="recommended" role="tabpanel" aria-labelledby="recommended-tab">
                                        <div class="row">
                                            <div class="col">
                                                <div class="position-relative">
                                                    <img src="{{asset('images/banners/cusco.jpg')}}" alt="" class="w-100">
                                                    <div class="position-absolute-bottom bg-rgba-dark-3 text-white p-2">
                                                        <p class="m-0 font-weight-bold">Ideally for familes with kids, focus on quality time and best price.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{--<div class="row slider-recommended mt-4">--}}
                                            {{--@foreach($cateoria_recommended as $cateorias_recommended)--}}
                                                {{--@if (isset($cateorias_recommended->categoria))--}}
                                                    {{--<div class="col text-decoration-none">--}}
                                                        {{--<div class="bg-light shadow-sm rounded">--}}
                                                            {{--<div class="row align-items-center no-gutters">--}}
                                                                {{--<div class="col-7">--}}
                                                                    {{--<div class="position-relative">--}}
                                                                        {{--<img src="{{asset('images/mapas/'.$cateorias_recommended->paquete->codigo.'.jpg')}}" alt="" class="w-100 rounded-left">--}}
                                                                        {{--<div class="position-absolute-bottom p-2 text-center">--}}
                                                                            {{--<span class="small font-weight-bold badge badge-g-yellow shadow">{{$cateorias_recommended->categoria->nombre}}</span>--}}
                                                                        {{--</div>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="col text-center">--}}
                                                                    {{--<div class="px-3">--}}
                                                                        {{--<div class="h5">{{$cateorias_recommended->paquete->duracion}} days</div>--}}
                                                                        {{--<div class="display-4 font-weight-bold"><sup>$</sup>899</div>--}}
                                                                        {{--<a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($cateorias_recommended->paquete->titulo)), $cateorias_recommended->paquete->duracion])}}" class="btn btn-g-yellow btn-block">Inquire</a>--}}
                                                                        {{--<a href="" class="btn btn-g-green btn-block">Book Now</a>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--@endif--}}
                                            {{--@endforeach--}}
                                        {{--</div>--}}

                                        <div class="row mt-4">
                                            @foreach($cateoria_recommended as $cateorias_recommended)
                                                <div class="col-6">
                                                    <div class="bg-light shadow-sm rounded">
                                                        <div class="row align-items-center no-gutters">
                                                            <div class="col-7">
                                                                <div class="position-relative">
                                                                    <img src="{{asset('images/mapas/'.$cateorias_recommended->paquete->codigo.'.jpg')}}" alt="" class="w-100 rounded-left">
                                                                    <div class="position-absolute-bottom p-2 text-center">
                                                                        <span class="small font-weight-bold badge badge-g-yellow shadow">{{$cateorias_recommended->categoria->nombre}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col text-center">
                                                                <div class="px-3">
                                                                    <h2 class="h6 font-weight-bold">{{$cateorias_recommended->paquete->titulo}}</h2>
                                                                    <small class="text-muted font-weight-bold">{{$cateorias_recommended->paquete->duracion}} days</small>
                                                                    <div class="display-4 font-weight-bold"><sup>$</sup>899</div>
                                                                    <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($cateorias_recommended->paquete->titulo)), $cateorias_recommended->paquete->duracion])}}" class="btn btn-g-yellow btn-block">Inquire</a>
                                                                    <a href="" class="btn btn-g-green btn-block">Book Now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>


                                    </div>
                                    <div class="tab-pane fade" id="active-trek" role="tabpanel" aria-labelledby="active-trek-tab">
                                        <div class="row">
                                            <div class="col">
                                                <div class="position-relative">
                                                    <img src="{{asset('images/banners/cusco.jpg')}}" alt="" class="w-100">
                                                    <div class="position-absolute-bottom bg-rgba-dark-3 text-white p-2">
                                                        <p class="m-0 font-weight-bold">Ideally for familes with kids, focus on quality time and best price.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            @foreach($categorias_active as $categorias_active)
                                                @if (isset($categorias_active->categoria))
                                                    <div class="col-6">
                                                        <div class="bg-light shadow-sm rounded">
                                                            <div class="row align-items-center no-gutters">
                                                                <div class="col-7">
                                                                    <div class="position-relative">
                                                                        <img src="{{asset('images/mapas/'.$categorias_active->paquete->codigo.'.jpg')}}" alt="" class="w-100 rounded-left">
                                                                        <div class="position-absolute-bottom p-2 text-center">
                                                                            <span class="small font-weight-bold badge badge-g-yellow shadow">{{$categorias_active->categoria->nombre}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col text-center">
                                                                    <div class="px-3">
                                                                        <h2 class="h6 font-weight-bold">{{$categorias_active->paquete->titulo}}</h2>
                                                                        <small class="text-muted font-weight-bold">{{$categorias_active->paquete->duracion}} days</small>
                                                                        <div class="display-4 font-weight-bold"><sup>$</sup>899</div>
                                                                        <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($categorias_active->paquete->titulo)), $categorias_active->paquete->duracion])}}" class="btn btn-g-yellow btn-block">Inquire</a>
                                                                        <a href="" class="btn btn-g-green btn-block">Book Now</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="luxury" role="tabpanel" aria-labelledby="luxury-tab">
                                        <div class="row">
                                            <div class="col">
                                                <div class="position-relative">
                                                    <img src="{{asset('images/banners/cusco.jpg')}}" alt="" class="w-100">
                                                    <div class="position-absolute-bottom bg-rgba-dark-3 text-white p-2">
                                                        <p class="m-0 font-weight-bold">Ideally for familes with kids, focus on quality time and best price.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row slider-category-3 mt-4">
                                            @foreach($categorias_luxury as $categorias_luxury)
                                                    <div class="col text-decoration-none">
                                                        <div class="bg-light shadow-sm rounded">
                                                            <div class="row align-items-center no-gutters">
                                                                <div class="col-7">
                                                                    <div class="position-relative">
                                                                        <img src="{{asset('images/mapas/'.$categorias_luxury->paquete->codigo.'.jpg')}}" alt="" class="w-100 rounded-left">
                                                                        <div class="position-absolute-bottom p-2 text-center">
                                                                            <span class="small font-weight-bold badge badge-g-yellow shadow">{{$categorias_luxury->categoria->nombre}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col text-center">
                                                                    <div class="px-3">
                                                                        <h2 class="h6 font-weight-bold">{{$categorias_luxury->paquete->titulo}}</h2>
                                                                        <small class="text-muted font-weight-bold">{{$categorias_luxury->paquete->duracion}} days</small>
                                                                        <div class="display-4 font-weight-bold"><sup>$</sup>899</div>
                                                                        <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($categorias_luxury->paquete->titulo)), $categorias_luxury->paquete->duracion])}}" class="btn btn-g-yellow btn-block">Inquire</a>
                                                                        <a href="" class="btn btn-g-green btn-block">Book Now</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="cruise" role="tabpanel" aria-labelledby="cruise-tab">
                                        <div class="row">
                                            <div class="col">
                                                <div class="position-relative">
                                                    <img src="{{asset('images/banners/cusco.jpg')}}" alt="" class="w-100">
                                                    <div class="position-absolute-bottom bg-rgba-dark-3 text-white p-2">
                                                        <p class="m-0 font-weight-bold">Ideally for familes with kids, focus on quality time and best price.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row slider-category-4 mt-4">
                                            @foreach($categorias_cruise as $categoria_cruise)
                                                <div class="col-6 text-decoration-none">
                                                    <div class="bg-light shadow-sm rounded">
                                                        <div class="row align-items-center no-gutters">
                                                            <div class="col-7">
                                                                <div class="position-relative">
                                                                    <img src="{{asset('images/mapas/'.$categoria_cruise->paquete->codigo.'.jpg')}}" alt="" class="w-100 rounded-left">
                                                                    <div class="position-absolute-bottom p-2 text-center">
                                                                        <span class="small font-weight-bold badge badge-g-yellow shadow">{{$categoria_cruise->categoria->nombre}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col text-center">
                                                                <div class="px-3">
                                                                    <h2 class="h6 font-weight-bold">{{$categoria_cruise->paquete->titulo}}</h2>
                                                                    <small class="text-muted font-weight-bold">{{$categoria_cruise->paquete->duracion}} days</small>
                                                                    <div class="display-4 font-weight-bold"><sup>$</sup>899</div>
                                                                    <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($categoria_cruise->paquete->titulo)), $categoria_cruise->paquete->duracion])}}" class="btn btn-g-yellow btn-block">Inquire</a>
                                                                    <a href="" class="btn btn-g-green btn-block">Book Now</a>
                                                                </div>
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
                    </div>
                </div>

                <hr class="my-5">
                {{--short--}}
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col-12">
                                <div class="nav-category-goto-green nav nav-pills flex-column flex-sm-row p-0" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="flex-sm-fill text-sm-center rounded-0 nav-link active" id="short-tab" data-toggle="pill" href="#short" role="tab" aria-controls="short" aria-selected="true">Short Programs</a>
                                    <a class="flex-sm-fill text-sm-center rounded-0 nav-link" id="all-tab" data-toggle="pill" href="#all" role="tab" aria-controls="all" aria-selected="false">All Included</a>
                                    <a class="flex-sm-fill text-sm-center rounded-0 nav-link" id="family-tab" data-toggle="pill" href="#family" role="tab" aria-controls="family" aria-selected="false">Family</a>
                                    <a class="flex-sm-fill text-sm-center rounded-0 nav-link" id="honeymoon-tab" data-toggle="pill" href="#honeymoon" role="tab" aria-controls="honeymoon" aria-selected="false">Honeymoon</a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="short" role="tabpanel" aria-labelledby="short-tab">

                                        <div class="row">
                                            <div class="col">
                                                <div class="position-relative">
                                                    <img src="{{asset('images/banners/cusco.jpg')}}" alt="" class="w-100">
                                                    <div class="position-absolute-bottom bg-rgba-dark-3 text-white p-2">
                                                        <p class="m-0 font-weight-bold">Ideally for familes with kids, focus on quality time and best price.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row slider-short mt-4">
                                            @foreach($categorias_short as $categoria_short)

                                                    <div class="col text-decoration-none">
                                                        <div class="bg-light shadow-sm rounded">
                                                            <div class="row align-items-center no-gutters">
                                                                <div class="col-7">
                                                                    <div class="position-relative">
                                                                        <img src="{{asset('images/mapas/'.$categoria_short->paquete->codigo.'.jpg')}}" alt="" class="w-100 rounded-left">
                                                                        <div class="position-absolute-bottom p-2 text-center">
                                                                            <span class="small font-weight-bold badge badge-g-yellow shadow">{{$categoria_short->categoria->nombre}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col text-center">
                                                                    <div class="px-3">
                                                                        <h2 class="h6 font-weight-bold">{{$categoria_short->paquete->titulo}}</h2>
                                                                        <small class="text-muted font-weight-bold">{{$categoria_short->paquete->duracion}} days</small>
                                                                        <div class="display-4 font-weight-bold"><sup>$</sup>899</div>
                                                                        <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($categoria_short->paquete->titulo)), $categoria_short->paquete->duracion])}}" class="btn btn-g-yellow btn-block">Inquire</a>
                                                                        <a href="" class="btn btn-g-green btn-block">Book Now</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="all" role="tabpanel" aria-labelledby="all-tab">
                                        <div class="row">
                                            <div class="col">
                                                <div class="position-relative">
                                                    <img src="{{asset('images/banners/cusco.jpg')}}" alt="" class="w-100">
                                                    <div class="position-absolute-bottom bg-rgba-dark-3 text-white p-2">
                                                        <p class="m-0 font-weight-bold">Ideally for familes with kids, focus on quality time and best price.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row slider-all mt-4">
                                            @foreach($categorias_all as $categoria_all)

                                                    <div class="col text-decoration-none">
                                                        <div class="bg-light shadow-sm rounded">
                                                            <div class="row align-items-center no-gutters">
                                                                <div class="col-7">
                                                                    <div class="position-relative">
                                                                        <img src="{{asset('images/mapas/'.$categoria_all->paquete->codigo.'.jpg')}}" alt="" class="w-100 rounded-left">
                                                                        <div class="position-absolute-bottom p-2 text-center">
                                                                            <span class="small font-weight-bold badge badge-g-yellow shadow">{{$categoria_all->categoria->nombre}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col text-center">
                                                                    <div class="px-3">
                                                                        <h2 class="h6 font-weight-bold">{{$categoria_all->paquete->titulo}}</h2>
                                                                        <small class="text-muted font-weight-bold">{{$categoria_all->paquete->duracion}} days</small>
                                                                        <div class="display-4 font-weight-bold"><sup>$</sup>899</div>
                                                                        <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($categoria_all->paquete->titulo)), $categoria_all->paquete->duracion])}}" class="btn btn-g-yellow btn-block">Inquire</a>
                                                                        <a href="" class="btn btn-g-green btn-block">Book Now</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="family" role="tabpanel" aria-labelledby="family-tab">
                                        <div class="row">
                                            <div class="col">
                                                <div class="position-relative">
                                                    <img src="{{asset('images/banners/cusco.jpg')}}" alt="" class="w-100">
                                                    <div class="position-absolute-bottom bg-rgba-dark-3 text-white p-2">
                                                        <p class="m-0 font-weight-bold">Ideally for familes with kids, focus on quality time and best price.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row slider-all mt-4">
                                            @foreach($categorias_family as $categoria_family)
                                                @if (isset($categoria_family->categoria))
                                                    <div class="col text-decoration-none">
                                                        <div class="bg-light shadow-sm rounded">
                                                            <div class="row align-items-center no-gutters">
                                                                <div class="col-7">
                                                                    <div class="position-relative">
                                                                        <img src="{{asset('images/mapas/'.$categoria_family->paquete->codigo.'.jpg')}}" alt="" class="w-100 rounded-left">
                                                                        <div class="position-absolute-bottom p-2 text-center">
                                                                            <span class="small font-weight-bold badge badge-g-yellow shadow">{{$categoria_family->categoria->nombre}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col text-center">
                                                                    <div class="px-3">
                                                                        <h2 class="h6 font-weight-bold">{{$categoria_family->paquete->titulo}}</h2>
                                                                        <small class="text-muted font-weight-bold">{{$categoria_family->paquete->duracion}} days</small>
                                                                        <div class="display-4 font-weight-bold"><sup>$</sup>899</div>
                                                                        <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($categoria_family->paquete->titulo)), $categoria_family->paquete->duracion])}}" class="btn btn-g-yellow btn-block">Inquire</a>
                                                                        <a href="" class="btn btn-g-green btn-block">Book Now</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="honeymoon" role="tabpanel" aria-labelledby="honeymoon-tab">
                                        <div class="row">
                                            <div class="col">
                                                <div class="position-relative">
                                                    <img src="{{asset('images/banners/cusco.jpg')}}" alt="" class="w-100">
                                                    <div class="position-absolute-bottom bg-rgba-dark-3 text-white p-2">
                                                        <p class="m-0 font-weight-bold">Ideally for familes with kids, focus on quality time and best price.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row slider-all mt-4">
                                            @foreach($categorias_honeymoon as $categoria_honeymoon)
                                                <div class="col-6 text-decoration-none">
                                                    <div class="bg-light shadow-sm rounded">
                                                        <div class="row align-items-center no-gutters">
                                                            <div class="col-7">
                                                                <div class="position-relative">
                                                                    <img src="{{asset('images/mapas/'.$categoria_honeymoon->paquete->codigo.'.jpg')}}" alt="" class="w-100 rounded-left">
                                                                    <div class="position-absolute-bottom p-2 text-center">
                                                                        <span class="small font-weight-bold badge badge-g-yellow shadow">{{$categoria_honeymoon->categoria->nombre}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col text-center">
                                                                <div class="px-3">
                                                                    <h2 class="h6 font-weight-bold">{{$categoria_honeymoon->paquete->titulo}}</h2>
                                                                    <small class="text-muted font-weight-bold">{{$categoria_honeymoon->paquete->duracion}} days</small>
                                                                    <div class="display-4 font-weight-bold"><sup>$</sup>899</div>
                                                                    <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($categoria_honeymoon->paquete->titulo)), $categoria_honeymoon->paquete->duracion])}}" class="btn btn-g-yellow btn-block">Inquire</a>
                                                                    <a href="" class="btn btn-g-green btn-block">Book Now</a>
                                                                </div>
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
                    </div>
                </div>
                <hr class="my-5">
                {{--short--}}
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col-12">
                                <div class="nav-category-goto-grey nav nav-pills flex-column flex-sm-row p-0" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="flex-sm-fill text-sm-center rounded-0 nav-link active" id="cultural-tab" data-toggle="pill" href="#cultural" role="tab" aria-controls="cultural" aria-selected="true">Cultural</a>
                                    <a class="flex-sm-fill text-sm-center rounded-0 nav-link" id="single-traveler-tab" data-toggle="pill" href="#single-traveler" role="tab" aria-controls="single-traveler" aria-selected="false">Single Traveler</a>
                                    <a class="flex-sm-fill text-sm-center rounded-0 nav-link" id="long-duration-tab" data-toggle="pill" href="#long-duration" role="tab" aria-controls="long-duration" aria-selected="false">Long Duration</a>
                                    {{--<a class="flex-sm-fill text-sm-center rounded-0 nav-link" id="amazon-tab" data-toggle="pill" href="#amazon" role="tab" aria-controls="amazon" aria-selected="false">With Amazon</a>--}}
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="cultural" role="tabpanel" aria-labelledby="cultural-tab">
                                        <div class="row">
                                            <div class="col">
                                                <div class="position-relative">
                                                    <img src="{{asset('images/banners/cusco.jpg')}}" alt="" class="w-100">
                                                    <div class="position-absolute-bottom bg-rgba-dark-3 text-white p-2">
                                                        <p class="m-0 font-weight-bold">Ideally for familes with kids, focus on quality time and best price.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row slider-all mt-4">
                                            @foreach($categorias_cultural as $categoria_cultural)

                                                    <div class="col text-decoration-none">
                                                        <div class="bg-light shadow-sm rounded">
                                                            <div class="row align-items-center no-gutters">
                                                                <div class="col-7">
                                                                    <div class="position-relative">
                                                                        <img src="{{asset('images/mapas/'.$categoria_cultural->paquete->codigo.'.jpg')}}" alt="" class="w-100 rounded-left">
                                                                        <div class="position-absolute-bottom p-2 text-center">
                                                                            <span class="small font-weight-bold badge badge-g-yellow shadow">{{$categoria_cultural->categoria->nombre}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col text-center">
                                                                    <div class="px-3">
                                                                        <h2 class="h6 font-weight-bold">{{$categoria_cultural->paquete->titulo}}</h2>
                                                                        <small class="text-muted font-weight-bold">{{$categoria_cultural->paquete->duracion}} days</small>
                                                                        <div class="display-4 font-weight-bold"><sup>$</sup>899</div>
                                                                        <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($categoria_cultural->paquete->titulo)), $categoria_cultural->paquete->duracion])}}" class="btn btn-g-yellow btn-block">Inquire</a>
                                                                        <a href="" class="btn btn-g-green btn-block">Book Now</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="single-traveler" role="tabpanel" aria-labelledby="single-traveler-tab">
                                        <div class="row">
                                            <div class="col">
                                                <div class="position-relative">
                                                    <img src="{{asset('images/banners/cusco.jpg')}}" alt="" class="w-100">
                                                    <div class="position-absolute-bottom bg-rgba-dark-3 text-white p-2">
                                                        <p class="m-0 font-weight-bold">Ideally for familes with kids, focus on quality time and best price.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row slider-all mt-4">
                                            @foreach($categorias_single as $categoria_single)

                                                    <div class="col text-decoration-none">
                                                        <div class="bg-light shadow-sm rounded">
                                                            <div class="row align-items-center no-gutters">
                                                                <div class="col-7">
                                                                    <div class="position-relative">
                                                                        <img src="{{asset('images/mapas/'.$categoria_single->paquete->codigo.'.jpg')}}" alt="" class="w-100 rounded-left">
                                                                        <div class="position-absolute-bottom p-2 text-center">
                                                                            <span class="small font-weight-bold badge badge-g-yellow shadow">{{$categoria_single->categoria->nombre}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col text-center">
                                                                    <div class="px-3">
                                                                        <h2 class="h6 font-weight-bold">{{$categoria_single->paquete->titulo}}</h2>
                                                                        <small class="text-muted font-weight-bold">{{$categoria_single->paquete->duracion}} days</small>
                                                                        <div class="display-4 font-weight-bold"><sup>$</sup>899</div>
                                                                        <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($categoria_single->paquete->titulo)), $categoria_single->paquete->duracion])}}" class="btn btn-g-yellow btn-block">Inquire</a>
                                                                        <a href="" class="btn btn-g-green btn-block">Book Now</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="long-duration" role="tabpanel" aria-labelledby="long-duration-tab">
                                        <div class="row">
                                            <div class="col">
                                                <div class="position-relative">
                                                    <img src="{{asset('images/banners/cusco.jpg')}}" alt="" class="w-100">
                                                    <div class="position-absolute-bottom bg-rgba-dark-3 text-white p-2">
                                                        <p class="m-0 font-weight-bold">Ideally for familes with kids, focus on quality time and best price.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row slider-all mt-4">
                                            @foreach($categorias_long as $categoria_long)
                                                    <div class="col-6 text-decoration-none">
                                                        <div class="bg-light shadow-sm rounded">
                                                            <div class="row align-items-center no-gutters">
                                                                <div class="col-7">
                                                                    <div class="position-relative">
                                                                        <img src="{{asset('images/mapas/'.$categoria_long->paquete->codigo.'.jpg')}}" alt="" class="w-100 rounded-left">
                                                                        <div class="position-absolute-bottom p-2 text-center">
                                                                            <span class="small font-weight-bold badge badge-g-yellow shadow">{{$categoria_long->categoria->nombre}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col text-center">
                                                                    <div class="px-3">
                                                                        <h2 class="h6 font-weight-bold">{{$categoria_long->paquete->titulo}}</h2>
                                                                        <small class="text-muted font-weight-bold">{{$categoria_long->paquete->duracion}} days</small>
                                                                        <div class="display-4 font-weight-bold"><sup>$</sup>899</div>
                                                                        <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($categoria_long->paquete->titulo)), $categoria_long->paquete->duracion])}}" class="btn btn-g-yellow btn-block">Inquire</a>
                                                                        <a href="" class="btn btn-g-green btn-block">Book Now</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    {{--<div class="tab-pane fade" id="amazon" role="tabpanel" aria-labelledby="amazon-tab">...</div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-light py-5">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2 class="display-4 font-weight-bold text-g-yellow">Testimonios <span class="text-g-green">en Video</span></h2>
                        <p class="lead font-weight-bold text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam architecto assumenda aut consectetur, consequatur cumque delectus ea est ex fuga harum laborum, minima omnis optio qui quod sint vero!</p>
                    </div>
                </div>
                <div class="row slider-video-testimonio mt-4">
                    @foreach($testimonio_video as $testimonio_videos)
                        <div class="col">
                            <a class="venobox" data-autoplay="true" data-vbtype="video" href="{{$testimonio_videos->codigo}}">
                                <div class="position-relative">
                                    <img src="{{asset('images/video-tertimonio/'.$testimonio_videos->imagen.'')}}" alt="" class="w-100 shadow-sm rounded">
                                    <div class="position-absolute-bottom text-white p-3 icon-play">
                                        <i class="fas fa-play fa-2x"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                        <a href="" class="btn btn-primary btn-lg font-weight-bold">View all video testimonials</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="d-none d-xl-block">
            <div class="jumbotron jumbotron-divider-1 rounded-0 m-0">
                <div class="container">
                    <div class="row justify-content-center no-gutters">
                        <div class="col-9 text-white text-center rounded">
                            <div class="row">
                                <div class="col">
                                    <img data-src="{{asset('images/icons/include/assistances.png')}}" data-srcset="{{asset('images/icons/include/assistances.png')}}" alt="assistances" class="w-100 lazy has-webp">
                                    <small>Assistances</small>
                                </div>
                                <div class="col">
                                    <img data-src="{{asset('images/icons/include/breakfast.png')}}" data-srcset="{{asset('images/icons/include/breakfast.png')}}" alt="breakfast" class="w-100 lazy has-webp">
                                    <small>Breakfast</small>
                                </div>
                                <div class="col">
                                    <img data-src="{{asset('images/icons/include/entrances.png')}}" data-srcset="{{asset('images/icons/include/entrances.png')}}" alt="entrances" class="w-100 lazy has-webp">
                                    <small>Entrances</small>
                                </div>
                                <div class="col">
                                    <img data-src="{{asset('images/icons/include/flight.png')}}" data-srcset="{{asset('images/icons/include/flight.png')}}" alt="flight" class="w-100 lazy has-webp">
                                    <small>Flight</small>
                                </div>

                                <div class="col">
                                    <img data-src="{{asset('images/icons/include/hotels.png')}}" data-srcset="{{asset('images/icons/include/hotels.png')}}" alt="hotels" class="w-100 lazy has-webp">
                                    <small>Hotels</small>
                                </div>
                                <div class="col">
                                    <img data-src="{{asset('images/icons/include/tours.png')}}" data-srcset="{{asset('images/icons/include/tours.png')}}" alt="tours" class="w-100 lazy has-webp">
                                    <small>Tours</small>
                                </div>
                                <div class="col">
                                    <img data-src="{{asset('images/icons/include/trains.png')}}" data-srcset="{{asset('images/icons/include/trains.png')}}" alt="trains" class="w-100 lazy has-webp">
                                    <small>Trains</small>
                                </div>
                                <div class="col">
                                    <img data-src="{{asset('images/icons/include/transfers.png')}}" data-srcset="{{asset('images/icons/include/transfers.png')}}" alt="transfers" class="w-100 lazy has-webp">
                                    <small>Transfers</small>
                                </div>
                            </div>
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
        <section class="bg-light py-5 py-md-5">
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
        <section class="bg-white py-5">
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
        <section class="bg-light pb-5 d-none d-md-flex">
            <div class="container">
                <div class="row pt-5 pb-2">
                    <div class="col">
                        <h4 class="text-secondary"><strong>100'S OF REVIEWS 1 COMPANY</strong></h4>
                        {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                        {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                        {{--<p class=" font-weight-light">You are already in the "neighborhood" here are some possible multi countries travel programs for your review, rest assure we can fully customize any travel lenght and any combination of countries, we can even design a comprehensive 30 days South America escape.</p>--}}
                    </div>
                </div>
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

        <section class="bg-white">
            <div class="container">
                <div class="row pt-5 pb-2">
                    <div class="col">
                        <h6 class="text-secondary"><strong><a href=""><i class="fab fa-instagram"></i></a> #gotoperu check out these #gotoperu photos from past travelers. After your trip, come back and share some of your owm!</strong></h6>
                        {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                        {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                        {{--<p class=" font-weight-light">You are already in the "neighborhood" here are some possible multi countries travel programs for your review, rest assure we can fully customize any travel lenght and any combination of countries, we can even design a comprehensive 30 days South America escape.</p>--}}
                    </div>
                </div>
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
        @include('layouts.page.form-quote')


        <section class="bg-light pb-5">
            <div class="container">
                <div class="row pt-5 pb-2">
                    <div class="col">
                        <h2 class="text-secondary h4"><strong>Certificates</strong></h2>
                        {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                        {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                        <p class=" font-weight-light">GOTOPERU is fully certified by the Peruvian local government as an officially licensed tour operator on behalf of the "Ministerio de Turismo del Peru".</p>
                    </div>
                </div>
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

    </div>
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

            // var $video  = $('video'),
            //     $window = $(window);
            //
            // $(window).resize(function(){
            //
            //     var height = $window.height();
            //     $video.css('height', height);
            //
            //     var videoWidth = $video.width(),
            //         windowWidth = $window.width(),
            //         marginLeftAdjust =   (windowWidth - videoWidth) / 2;
            //
            //     $video.css({
            //         'height': height,
            //         'marginLeft' : marginLeftAdjust
            //     });
            // }).resize();

            //venobox
            $(document).ready(function(){
                $('.venobox').venobox();
            });

            //slick
            $('.slider-top-home').slick({
                // dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 10000,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });

            $('.slider-video-testimonio').slick({
                // dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 10000,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        </script>
        <div id="fb-root"></div>
        <script async defer src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2&appId=1712869952328301&autoLogAppEvents=1"></script>

    @endpush

@stop
