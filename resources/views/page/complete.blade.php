@extends('layouts.page.default')
@section('content')
    <section class="d-none">
        <div class="jumbotron jumbotron-slider-1 rounded-0">
            <div class="container">
                    <h2 class="text-white my-5 h1"><strong>TITULO 6 DAYS TOURS</strong></h2>
                    <h2 class="text-white my-5 h1">Our excursions and packages depart 365 days a year</h2>
                <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
            </div>
        </div>
    </section>

    <section class="header-video d-none d-md-block">

        @include('layouts.page.header')

        <div id="overlay">
            <video class="" id="hero-vid" poster="{{asset('images/slider/package-1.jpg')}}" autoplay loop muted>
                <source src="{{asset('videos/land.mp4')}}" type="video/mp4"/>
                {{--<source src="{{asset('videos/land.m4v')}}" type="video/mp4" />--}}
                <source src="{{asset('videos/land.webm')}}" type="video/webm" />
                <source  src="{{asset('videos/land.ogv')}}" type="video/ogg" />
            </video>
            {{--<div id="state" class=""><span class="fa fa-pause"></span></div>--}}
            {{--<img id="hero-pic" class="d-none" src="http://www.markhillard.com/sandbox/media/polina.jpg" alt="">--}}
            {{----}}
        </div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row content-header-row align-items-center justify-content-between no-gutters">
                    <div class="col-2">
                        <div class="card_review_title card p-2 bg-info mb-1">
                            <div class="row align-items-center">
                                <div class="col">
                                    <b class="m-0 p-0 text-white"><span class="h5">Excellent</span> <a href="#" class="d-block small text-g-dark" data-toggle="modal" data-target="#card_review">5 comments</a></b>
                                </div>
                                <div class="col">
                                    <span class="badge badge-g-dark w-100"><b class="h1">8.9</b>
                                        <small class="d-block text-g-yellow">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </small>
                                    </span>
                                </div>
                            </div>


                            <!-- Modal -->
                            <div class="modal fade" id="card_review" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        {{--<div class="modal-header">--}}
                                            {{--<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>--}}
                                            {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                                                {{--<span aria-hidden="true">&times;</span>--}}
                                            {{--</button>--}}
                                        {{--</div>--}}
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="card p-3 bg-light mb-3">
                                                        <h4>Our Reviews</h4>
                                                        <small>Leave your comment too.</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <small class="font-italic"><i class="fas fa-user-circle"></i> Jeff G. X2 | <span class="font-weight-bold">New York Feb 2018</span></small>
                                                    <span class="d-block text-g-yellow">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    <i class="fa fa-quote-left"></i>
                                                    Our tour guide Franklin, was so knowledgeable, there was nothing we asked that he couldn't talk at length about! He was very organized and did an excellent job accommodating each and every traveller. Also in Lima our tour conductor Ivan. All of the hotels were in ideal locations in city centers, which made it easy to explore on our own without having to take a cab.
                                                    <i class="fa fa-quote-right"></i>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-3">
                                                    <small class="font-italic"><i class="fas fa-user-circle"></i> Mary J. x 4 | <span class="font-weight-bold">Chicago, Dec 2017</span></small>
                                                    <span class="d-block text-g-yellow">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    <i class="fa fa-quote-left"></i>
                                                    I went here as part of an escorted GotoPeru tour. MachuPicchu  is an awesome place... Words and photos do not do this place justice, it has to be seen to be believed.  No matter how much you see pictures, learn about it ahead of time, read reviews, nothing compares to actually climbing Machu Picchu, seeing it appear out of the mist on a foggy morning! And then, later, when it is clear - Wow!
                                                    <i class="fa fa-quote-right"></i>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-3">
                                                    <small class="font-italic"><i class="fas fa-user-circle"></i> John Anderson x3 | <span class="font-weight-bold">Austin,TX   Set 2017</span></small>
                                                    <span class="d-block text-g-yellow">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    <i class="fa fa-quote-left"></i>
                                                    We went through Gotoperu which was the first tour we’ve ever taken. We usually travel on our own. For a vacation like Peru which has a lot of area to cover and poor transportation, it was worth it. They took care of everything and the tour guides were very knowledgeable and even funny. If you have any questions at all, ask them. The tour was very safe as well if you stay with the tour. Venture off on your own risk just like anywhere else in the world.
                                                    <i class="fa fa-quote-right"></i>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-3">
                                                    <small class="font-italic"><i class="fas fa-user-circle"></i> Richard Earls x 2 | <span class="font-weight-bold">Arlington, VA   Jan 2018</span></small>
                                                    <span class="d-block text-g-yellow">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    <i class="fa fa-quote-left"></i>
                                                    Machu Picchu was more than I expected... bigger, more inspiring, breathtaking!! Do have a professional guide - it really helps. Then go back and wander on your own. If you can't manage the hike to the Sun Gate or Montana MachuPicchu, make it to the Guard House for classic photo shots... Although rules say no walking sticks, lots of people had them. Before exiting, be sure to stamp your passport for Machu Picchu! You do it yourself.
                                                    <i class="fa fa-quote-right"></i>
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="row justify-content-end">
                                                <div class="col-4">
                                                    <div class="row">
                                                        <div class="col">
                                                            <a href="https://www.facebook.com/GOTOPERUcom/" class="d-inline mx-1" target="_blank">
                                                                <img src="{{asset('images/icons/facebook.png')}}" alt="" class="img-fluid">
                                                            </a>
                                                        </div>
                                                        <div class="col">
                                                            <a href="https://twitter.com/GOTOPERUCOM" class="d-inline mx-1" target="_blank">
                                                                <img src="{{asset('images/icons/twitter.png')}}" alt="" class="img-fluid">
                                                            </a>
                                                        </div>
                                                        <div class="col">
                                                            <a href="https://www.instagram.com/gotoperucom/" class="d-inline mx-1" target="_blank">
                                                                <img src="{{asset('images/icons/instagram.png')}}" alt="" class="img-fluid">
                                                            </a>
                                                        </div>
                                                        <div class="col">
                                                            <a href="https://www.youtube.com/channel/UCpfUdQBRjnSEbh6Gu3Uh_Mg" class="d-inline mx-1" target="_blank">
                                                                <img src="{{asset('images/icons/youtube.png')}}" alt="" class="img-fluid">
                                                            </a>
                                                        </div>
                                                        <div class="col">
                                                            <a href="https://plus.google.com/+Gotoperu" class="d-inline mx-1" target="_blank">
                                                                <img src="{{asset('images/icons/google-plus.png')}}" alt="" class="img-fluid">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="card_review">
                            <p class="m-0">“Our guide Franklin was not only knowledgeable but absolutely patient and thorough with her descriptions, narrative and instructions. Machu Picchu is beyond words..you just simply must experience it..Thanks again to Gotoperu!”</p>
                        </div>
                        <div class="card_review_autor">
                            <small class="text-white font-italic">Nataly R. | <span class="font-weight-bold">Los Angeles  Oct 2017</span></small>
                        </div>
                    </div>
                    <div class="col col-md-6 col-lg-4 col-xl-4">
                        <h2 class="text-g-yellow p-2">Air & Land</h2>

                        <p class="m-0 p-2 text-white">
                            <b class="font-weight-bold">Day 1: </b> USA DEPARTURE
                        </p>
                        <p class="m-0 p-2 text-white">
                            <b class="font-weight-bold">Day 2: </b> LIMA CITY TOUR
                        </p>
                        <p class="m-0 p-2 text-white">
                            <b class="font-weight-bold">Day 3: </b> CUSCO FLIGHT & CUSCO WALKING TOUR
                        </p>
                        <p class="m-0 p-2 text-white">
                            <b class="font-weight-bold">Day 4: </b> CUSCO FREE DAY
                        </p>
                        <p class="m-0 p-2 text-white">
                            <b class="font-weight-bold">Day 5: </b> TRAIN TO MACHUPICCHU
                        </p>
                        <p class="m-0 p-2 text-white">
                            <b class="font-weight-bold">Day 6: </b> MACHUPICCHU TOUR - TRAIN BACK TO CUSCO
                        </p>
                        <p class="m-0 p-2 text-white">
                            <b class="font-weight-bold">Day 7: </b> FLIGHT TO LIMA & FLIGHT TO USA
                        </p>

                        <p class="m-0 p-2 text-white h1 text-right">
                            from <sup>$</sup>1399
                        </p>


                        <div class="pb-4 position-relative">
                            {{--@foreach($paquetes->itinerario->sortBy('dia')->take(8) as $itinerario)--}}
                                {{--<p class="m-0 p-2">--}}
                                    {{--<b class="font-weight-bold">Day {{$itinerario->dia}}: </b> {{ucwords(strtolower($itinerario->titulo))}}--}}
                                {{--</p>--}}
                            {{--@endforeach--}}
                            {{--@if($paquetes->duracion > 8)--}}
                                {{--<div class="gradient-destinations"></div>--}}
                                {{--<a href="#" class="btn-link font-weight-normal b-routes p-2" data-toggle="modal" data-target="#route-modal">Full Outline <i class="fa fa-chevron-right"></i></a>--}}
                            {{--@endif--}}
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="route-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Route</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col box-route-ininerary p-4">
                                                {{--@foreach($paquetes->itinerario->sortBy('dia') as $itinerario)--}}
                                                    {{--<p>--}}
                                                        {{--<strong>Day {{$itinerario->dia}}: </strong> {{ucwords(strtolower($itinerario->titulo))}}--}}
                                                    {{--</p>--}}
                                                {{--@endforeach--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--<div class="text-right">--}}
                        {{--<a href="" class="btn-link font-weight-normal">All Packages <i class="fa fa-chevron-right"></i></a>--}}
                        {{--</div>--}}
                    </div>
                    {{--<div class="col">--}}
                        {{--<div class="row my-4 justify-content-center">--}}
                            {{--<div class="col text-center">--}}
                                {{--<h2 class="text-g-yellow font-weight-light">--}}
                                        {{--TITULO <span class="text-white">6 DAYS TOURS</span>--}}
                                {{--</h2>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row justify-content-center">--}}
                            {{--<div class="col-6 text-center">--}}
                                {{--<a href="#Inquire" class="btn btn-lg btn-g-yellow">INQUIRE NOW</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>

            </div>
        </div>
    </section>
    @include('layouts.page.menu-2')
    <section class="d-md-none">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col">
                    <img src="{{asset('images/banners/itinerary/GTP40.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    @include('layouts.page.included')

    <section class="bg-white pt-2">
        <div class="container">
       
            <div class="row">
                <div class="col-12 col-sm-12 col-md-7">
                    <div class="row my-3">
                        <div class="col">
                            <h1 class="text-secondary font-weight-bold">7 Day Peru & Machu Picchu from USA</h1>
                            <h6 class="text-secondary">Peru Tour including flights from USA. Price is per Person, Based on Two Guests per Room.</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <!-- Swiper -->
                            <div class="swiper-container swiper-container-complete">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="{{asset('images/destinations/mapi.jpg')}}" alt="" class="w-100">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{asset('images/destinations/lima.jpg')}}" alt="" class="w-100">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{asset('images/destinations/familia.jpg')}}" alt="" class="w-100">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{asset('images/destinations/cusco.jpg')}}" alt="" class="w-100">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{asset('images/destinations/machu-picchu.jpg')}}" alt="" class="w-100">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{asset('images/destinations/sacred-valley.jpg')}}" alt="" class="w-100">
                                    </div>
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>

                    <ul class="nav nav-tabs nav-tabs-complete nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="included-tab" data-toggle="tab" href="#included" role="tab" aria-controls="included" aria-selected="true">Included</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="itinerary-tab" data-toggle="tab" href="#itinerary" role="tab" aria-controls="itinerary" aria-selected="false">Itinerary</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="how-tab" data-toggle="tab" href="#how" role="tab" aria-controls="how" aria-selected="false">How to Book</a>
                        </li>
                        <li class="nav-item small">
                            <a class="nav-link" id="know-tab" data-toggle="tab" href="#know" role="tab" aria-controls="know" aria-selected="false">Know Before You Go</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="included" role="tabpanel" aria-labelledby="included-tab">
                            <div class="row mt-3">
                                <div class="col">
                                    <h5>What's Included</h5>
                                    <p class="font-weight-normal"><i><span class="text-primary">*</span> All Flights ,Transportation,Tours, Trains, Hotels, Entrances, Taxes:</i></p>
                                    <ul>
                                        <li>International Round-trip airfare to Lima from</li>
                                        <ul>
                                            <li>Miami (MIA)</li>
                                            <li>Los Angeles (LAX)</li>
                                            <li>New York (JFK)</li>
                                            <li>Washington, D.C. (IAD)</li>
                                        </ul>
                                        <li>Internal Round-trip airfare to Cusco</li>
                                        <li>All transfers between tours</li>
                                        <li>Peru Airport shuttles</li>
                                        <li>Roundtrip bus Aguas Calientes-MachuPicchu</li>
                                        <li>Roundtrip train to Aguas Calientes</li>
                                        <li>Lima tour</li>
                                        <li>Cusco Walking Tour</li>
                                        <li>MachuPicchu Tour</li>
                                        <li>All entrances</li>
                                        <li>All breakfast</li>
                                        <li>7-day/6-night: Lima to Cusco to Lima</li>
                                        <li>2 night of accommodations at Allpa <a href="{{route('hotels_path')}}" target="_blank">Hotel</a> and Suites, Casa Andina Standard or similar in Lima</li>
                                        <li>3 nights of accommodations at Maytaq Wasin Hotel, San Agustin International Hotel  or similar in Cusco</li>
                                        <li>1 night of accommodations at Inti Punku Machu Picchu, Hatun Samay or similar in Machu Picchu</li>
                                    </ul>
                                    <h5>NOT INCLUDED</h5>
                                    <ul>
                                        <li>Lunch</li>
                                        <li>Dinner</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="itinerary" role="tabpanel" aria-labelledby="itinerary-tab">
                            <div class="row mt-3">
                                <div class="col">
                                    <h5><b>DAY 1</b>  USA DEPARTURE</h5>
                                    <p>Flight from USA to Lima – Perú, we will provide you with flight information including etickets & flight times.</p>
                                    <p>Once you arrive to Perú our representative will welcome you at the Lima Airport and you will be transfer to your Lima hotel.</p>
                                    <p class="text-primary">Night at Lima</p>

                                    <h5><b>DAY 2</b> LIMA CITY TOUR</h5>
                                    <p>The day will begin with breakfast in the hotel, your tour guide and transportation will pick you up around 9:00 am (the time will be confirmed), during your excursion you will visit the following places:</p>
                                    <ul>
                                        <li>Lima downtown</li>
                                        <li>Miraflores neighborhood</li>
                                        <li>Loving Park</li>
                                        <li>Main squeare of Lima</li>
                                        <li>San Francisco Monastery</li>
                                        <li>San Francisco catacombs</li>
                                        <li>Huaca Pucllana archeological site</li>
                                    </ul>
                                    <p class="text-primary">Night at Lima</p>

                                    <h5><b>DAY 3</b> CUSCO FLIGHT & CUSCO WALKING TOUR</h5>
                                    <p>After your breakfast our representative will pick you up from your hotel and escort you to the Lima airport . Flight to Cusco City.</p>
                                    <p>Once you arrive to Cusco your tour guide and private transportation will pick you up and take you to your downtown hotel, during the afternoon you will enjoy a walking tour to see the principal attractions of the city.</p>
                                    <ul>
                                        <li>Cusco’s main square</li>
                                        <li>San Peter local market</li>
                                        <li>San Blas neighborhood</li>
                                        <li>Temple of the Sun</li>
                                        <li>Twelve angle stone</li>
                                        <li>San Francisco square</li>
                                        <li>San Cristobal viewpoint</li>
                                    </ul>
                                    <p class="text-primary">Night at Cusco</p>

                                    <h5><b>DAY 4</b> CUSCO FREE DAY</h5>
                                    <p>The Day is yours, you can enjoy the magic of the city, including charming historical plazas, alpaca shops, cafes, museums and more!</p>
                                    <p class="text-danger">Also we offer optional day trips:</p>
                                    <ul class="text-danger">
                                        <li>Sacred Valley Tour $79 p.p</li>
                                        <li>Rainbow Mountain $79</li>
                                        <li>River Raffting in Vilcanota River $69</li>
                                        <li>Horse Riding in Saqsayhuaman Park $59</li>
                                        <li>Zip Line in the Sacred Valley  $89</li>
                                        <li>Salt Mines of Maras, Moray and Chinchero Textile Center  $79</li>
                                        <li>Humantay Lake trek  $79</li>
                                    </ul>
                                    <p class="text-primary">Night at Cusco</p>

                                    <h5><b>DAY 5</b> TRAIN TO MACHUPICCHU</h5>
                                    <p>After having a breakfast in the Hotel, we will take our transportation to Poroy Station or Ollantaytambo train Station , to enjoy an unforgettable train journey crossing the Andes to Aguas Calientes / Machu Picchu; after arrival in Aguas Calientes (the town below Machu Picchu) there will be plenty of time to relax for example you can visit the local hot natural springs!</p>
                                    <p class="text-primary">Night at Aguas Caliente ( Machu Picchu town)</p>

                                    <h5><b>DAY 6</b> MACHUPICCHU TOUR - TRAIN BACK TO CUSCO</h5>
                                    <p>Our day to visit the magnificent center of Machu Picchu will began early to take the bus to go up to Lost city of the Incas, at your arrival you will enjoy a history lesson of Machu Picchu given by a regional expert who will focus on major historic sites including the Sun Temple, Sun Stone and Room of the Three Windows, after your tour you will have time to explore the city by yourself</p>
                                    <p>You will take the comfortable train back to Cusco.</p>
                                    <p class="text-primary">Night at Cusco</p>

                                    <h5><b>DAY 7</b> FLIGHT TO LIMA & FLIGHT TO USA</h5>
                                    <p>Breakfast at your Cusco hotel and Private transportation to the Cusco Airport to take your flight to Lima and connecting flight to USA.</p>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="how" role="tabpanel" aria-labelledby="how-tab">
                            <!-- Three columns of text below the carousel -->
                            <div class="row mt-5">
                                <div class="col-lg-4 text-center">
                                    <div class="text-secondary"><i class="far fa-question-circle fa-5x"></i></div>
                                    <p class="mt-2">Check Availability.</p>
                                </div><!-- /.col-lg-4 -->
                                <div class="col-lg-4 text-center">
                                    <div class="text-secondary"><i class="fas fa-calendar-check fa-5x"></i></div>
                                    <p class="mt-2">We will confirm Availability and send you Booking Form and payment link.</p>
                                </div><!-- /.col-lg-4 -->
                                <div class="col-lg-4 text-center">
                                    <div class="text-secondary"><i class="fas fa-suitcase fa-5x"></i></div>
                                    <p class="mt-2">Enjoy Peru.</p>
                                </div><!-- /.col-lg-4 -->
                            </div><!-- /.row -->
                        </div>
                        <div class="tab-pane fade" id="know" role="tabpanel" aria-labelledby="know-tab">
                            <div class="row mt-3">
                                <div class="col">
                                    <h5>Know before you go</h5>
                                    <ul>
                                        <li>Additional taxes & fees: $200 fee to travel solo traveler (7-day) for single Room accommodation.</li>
                                        <li>A passport is required for all travel outside the U.S.</li>
                                        <li>Passports must be valid for at least six months after the date of travel, and contain at least two blank visa pages.</li>
                                        <li>Official language: Spanish</li>
                                        <li>Currency: Sol</li>
                                        <li>You don’t need a visa to enter Peru as a US citizen.</li>
                                        <li>US electrical sockets are 120 volts while those in Peru are 220 volts. While that shouldn’t make a difference for most electronics, which tend to be compatible with a range of voltages, it does still bear consideration.</li>
                                        <li>If you would like to add optional tours you add them once you receive confirmation, or once you arrive in Peru.</li>
                                    </ul>
                                    <p>Peru is a phenomenal place to travel with awe-inspiring scenery, dynamic cities and friendly people. Keep these things in mind, and your trip there is sure to be a success.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-sm-12 col-md-5 mt-4 d-md-block">
                    <div class="card bg-light sticky-top">
                        <div class="card-header bg-dark">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="text-white py-2">Book Your Trip</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="/packages/air-land/land-peru/6-days-tours/detail" role="form" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="airport" class="h5 text-secondary">Departure Airport: <small>(MIA, LAX, JFK, IAD)</small></label>
                                    <select class="form-control form-control-lg" id="airport" name="txtairport">
                                        <option value="0">Select...</option>
                                            @foreach($airport as $airports)
                                                <option value="{{$airports->id}}">{{ucwords(strtolower($airports->aeropuerto))}} <small>({{strtoupper($airports->codigo)}})</small></option>
                                            @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="airport" class="h5 text-secondary">Departure DATE:</label>
                                    <select class="form-control form-control-lg" id="price_airport" name="txtdate">
                                        <option value="0">Select...</option>
                                    </select>
                                </div>
                                <div class="row my-5">
                                    <div class="col">
                                        <h6 class="text-secondary">PRICES FROM:</h6>
                                    </div>
                                    <div class="col text-right">
                                        <p class="h1 font-weight-bold text-secondary" id="h_prices"><sup>$</sup><span>-</span></p>
                                        <small>PER PERSON</small>
                                    </div>
                                </div>
                                <div class="row my-5">
                                    <div class="col">
                                        <button type="button" class="btn btn-g-yellow btn-lg btn-block" onclick="detail_p()" id="p_price_b">CHECK AVAILABILITY</button>
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
        </div>
    </section>

    @push('scripts')
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

        </script>
        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper('.swiper-container', {
                spaceBetween: 30,
                centeredSlides: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        </script>
        <script>
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
    @endpush

@stop