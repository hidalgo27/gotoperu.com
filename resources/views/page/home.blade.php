@extends('layouts.page.default')

@section('content')
    <section class="header-video d-none d-md-block">
        <div id="title" class="text-white">
            <div class="container-fluid">
                <div class="row align-items-center mt-2">
                    <div class="col-md-6 col-lg-3">
                        <a href="{{route('home_path')}}"><img src="{{asset('images/logos/logo-gotoperu-ave-w.png')}}" alt="" class="img-fluid"></a>
                    </div>
                    <div class="d-none d-lg-inline col-lg">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <i class="text-g-yellow">Local expertise & global partners</i>
                            </div>
                            <div class="col-3">
                                <img src="{{asset('images/logos/logo-expedia2.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-lg-auto text-right sticky-top">
                        <a href="tel:+2029963000" class="mx-3 h4">(202) 996-3000</a>
                        <a href="#" class="mx-3 h2"  data-toggle="modal" data-target="#modal-menu"><i class="fa fa-bars"></i></a>
                        <!-- Button trigger modal -->
                    </div>
                </div>
            </div>
        </div>
        <div id="overlay" class="position-relative">
            <video class="" id="hero-vid" poster="{{asset('images/slider/package-1.jpg')}}" autoplay loop muted>
                <source src="{{asset('media/video6.mp4')}}" />
                <source src="{{asset('media/video6.m4v')}}" type="video/mp4" />
                <source src="{{asset('media/video6.webm')}}" type="video/webm" />
                <source  src="{{asset('media/video6.ogv')}}" type="video/ogg" />
            </video>
            {{--<div id="state" class=""><span class="fa fa-pause"></span></div>--}}
            {{--<img id="hero-pic" class="d-none" src="http://www.markhillard.com/sandbox/media/polina.jpg" alt="">--}}
           {{----}}
            <div class="header-expedia-card col-md-4 col-lg-3 col-xl-2 text-white rounded bg-rgba-dark p-3 d-none">
                <div class="row">
                    <div class="col">
                        <a href="packages/andes-escape/6-days-tours">
                        <div class="row">
                            <div class="col text-center">
                                <h3 class="text-g-yellow font-weight-bold m-0">Andes Escape</h3>
                            </div>
                        </div>
                        <div class="row no-gutters my-2 text-white">
                            <div class="col">
                                <span class="h2">6</span> <small>days</small>
                            </div>
                            <div class="col">
                                <span class="h2 text-info"><sup>$</sup>985</span> <small>p.p</small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row no-gutters">
                                    <div class="col">
                                        <img src="{{asset('images/icons/include/assistances.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Assistances">
                                        {{--<span>Assistances</span>--}}
                                    </div>

                                    <div class="col">
                                        <img src="{{asset('images/icons/include/entrances.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Entrances">
                                        {{--<span>Entrances</span>--}}
                                    </div>
                                    <div class="col">
                                        <img src="{{asset('images/icons/include/transfers.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Transfers">
                                        {{--<span>Transfers</span>--}}
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col">
                                        <img src="{{asset('images/icons/include/hotels.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Hotels">
                                        {{--<span>Hotels</span>--}}
                                    </div>
                                    <div class="col">
                                        <img src="{{asset('images/icons/include/tours.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Tours">
                                        {{--<span>Tours</span>--}}
                                    </div>
                                    <div class="col">
                                        <img src="{{asset('images/icons/include/trains.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Trains">
                                        {{--<span>Trains</span>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-white">
                                <small class="m-0 d-block"><i class="fa fa-angle-right"></i> MACHUPICCHU & CUSCO</small>
                                <small class="m-0 d-block"><i class="fa fa-angle-right"></i> LAKE TITICACA & PUNO</small>
                                <small class="m-0 d-block"><i class="fa fa-angle-right"></i> LIMA</small>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            {{--<div class="header-expedia text-white p-3">As local travel operators our programs start daily</div>--}}
            <div class="header-expedia p-3 w-100 text-center d-none d-lg-inline">
                <p class="text-white h6"><span class="bg-g-green p-1 rounded-circle px-3 text-white">1</span> Share your travel plans <span class="bg-g-yellow p-1 rounded-circle px-3 text-white ml-5">2</span> Receive a customize itinerary and quote <span class="bg-g-dark p-1 rounded-circle px-3 text-white ml-5">3</span> Discover the best of Peru with GOTOPERU</p>
            </div>
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
                                    <h3 class="font-weight-light">Lets design together your next Peru adventure</h3>
                                    <a href="#Inquire" class="btn btn-g-yellow btn-lg h2 font-weight-bold mt-3">My ideal trip will be</a>
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
        <div class="container p-0">
            <div class="row no-gutters">
                <div class="col">
                    <img src="{{asset('images/machu_picchu.jpg')}}" alt="" class="w-100">
                </div>
            </div>
            <div class="row no-gutters align-items-center">
                <div class="col">
                    <ul class="list-group">
                        <li class="list-group-item rounded-0"><span class="bg-g-green p-1 rounded-circle px-2 text-white">1</span> Share your travel plans</li>
                        <li class="list-group-item rounded-0"><span class="bg-g-yellow p-1 rounded-circle px-2 text-white">2</span> Receive a customize itinerary and quote</li>
                        <li class="list-group-item rounded-0"><span class="bg-g-dark p-1 rounded-circle px-2 text-white">3</span> Discover the best of Peru with GOTOPERU</li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
    <section class="bg-light py-3 d-none d-lg-block">
        <div class="container-fluid">
            <div class="col">
                <div class="row"><!--.row -->
                    <div class="col">
                        <img src="{{asset('images/logos/apavit.png')}}" alt="logo apavit" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/apotur.png')}}" alt="logo apotur" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/asta.png')}}" alt="logo asta" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/expedia.png')}}" alt="logo expedia" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/facebook.png')}}" alt="logo facebook" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/meetup.png')}}" alt="logo meetup" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/new.png')}}" alt="logo the new york times" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/peru.png')}}" alt="logo marca peru" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/prom-peru.png')}}" alt="logo prom peru" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/tripadvisor.png')}}" alt="logo tripadvisor" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/yelp.png')}}" alt="logo yelp" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/youtube.png')}}" alt="logo youtube" class="img-fluid">
                    </div>
                </div><!-- /.row -->
            </div>
        </div>
    </section>
    <section class="bg-white py-5">
        <div class="container">
            <div class="row d-none d-sm-inline-flex align-items-center">
                <div class="col col-sm-12 col-md">
                    <div class="row no-gutters">
                        <div class="col"><img src="{{asset('images/banner-home2.jpg')}}" alt="" class="w-100 rounded-top"></div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col"><img src="{{asset('images/banner-home3.jpg')}}" alt="" class="w-100 rounded-bottom"></div>
                    </div>
                </div>
                <div class="col col-sm-12 col-md">
                    <h2 class="text-secondary h1 font-weight-bold text-g-yellow"><strong>We are GOTOPERU</strong></h2>
                    {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                    {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                    <p class="text-dark">We are GOTOPERU , local travel experts! our local guides, drivers, representatives will love to share you the best of our country and our 12 + years of experience crafting unforgettable trips to the land of the Incas!  We have a high reputation including global partners as Expedia, Travelocity, Tripadvisor that have also recognized our efforts citing us a Top local Experts!</p>
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

    <section class="bg-light d-none d-md-flex">
        <div class="container">
            <div class="row pt-5 pb-2">
                <div class="col">
                    <h2 class="text-secondary h4"><strong>DEAL OF THE MONTH</strong></h2>
                    {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                    {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                    {{--<p class="h4 font-weight-light">Offering you an authentic and reliable <strong>travel experience</strong> in peru welcoming you to explore the many fully <strong>Customized Travel Packages</strong> we have that suit every budget. let us plan your unforgettable <strong>trip</strong> to our majestic <strong>Machu Picchu</strong> and the rest of our  homeland… Peru!</p>--}}
                </div>
            </div>

            <div class="row no-gutters">
                <div class="col-9 col-md-8 col-xl-9 d-flex">
                    <div class="container p-0">

                        <div class="slider-containers">

                            <!--effect #1 -->
                            <div class="slider-container">
                                <div class="flexbox-slider flexbox-slider-1">
                                    <div class="flexbox-slide">
                                        <img src="{{asset('images/banners/home/cusco.jpg')}}" alt="Cusco">
                                        <div class="text-block">
                                            <h3>Cusco</h3>
                                            {{--<div class="text">--}}
                                                {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                    <div class="flexbox-slide">
                                        <img src="{{asset('images/banners/home/lima.jpg')}}" alt="Lima">
                                        <div class="text-block">
                                            <h3>Lima</h3>
                                            {{--<div class="text">--}}
                                                {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                    <div class="flexbox-slide">
                                        <img src="{{asset('images/banners/home/machupicchu.jpg')}}" alt="Machu Picchu">
                                        <div class="text-block">
                                            <h3>Machu Picchu</h3>
                                            {{--<div class="text">--}}
                                                {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                    <div class="flexbox-slide">
                                        <img src="{{asset('images/banners/home/titicaca.jpg')}}" alt="Titicaca">
                                        <div class="text-block">
                                            <h3>Lake Titicaca</h3>
                                            {{--<div class="text">--}}
                                                {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                    <div class="flexbox-slide">
                                        <img src="{{asset('images/banners/home/valle.jpg')}}" alt="Sacred Valley">
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
                <div class="col col-md-4 col-xl-3 d-flex align-items-center bg-g-dark">
                    <div class="text-white p-3">
                        <h3 class="h1 font-weight-bold text-g-yellow">10 DAYS</h3>
                        <p class="lead">Cusco, Lima, Machu Picchu, Lake Titicaca, Sacred Valley.</p>
                        <small class="d-block text-g-yellow py-2">Hotels, tours entrances, trains, breakfast, transfer</small>
                        <p class="h1 text-right my-3"><sup>from</sup> $1449</p>
                        <a href="packages/expedition-to-peru/10-days-tours" class="btn btn-g-yellow btn-block">View More</a>
                    </div>
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
            <div class="row mb-4">
                <div class="col">
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
                <div class="col-auto">
                    <div class="row">
                        <div class="col">
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
                <div class="col-4">
                    <div class="row">
                        <div class="col">
                            <a href=""><img src="{{asset('images/icons/tripadvisor.png')}}" alt="" class="w-100" data-toggle="tooltip" data-placement="top" title="" data-original-title="If you are visiting anywhere in Peru, you cannot find a better choice than www.gotoperu.com – they live there, and work there, and can sort urgent issues readily, with a quick phone call."></a>
                        </div>
                        <div class="col">
                            <a href="https://www.trustpilot.com/review/gotoperu.com" target="_blank"><img src="{{asset('images/icons/trust.png')}}" alt="" class="w-100" data-toggle="tooltip" data-placement="top" title="" data-original-title="In summary, we had a wonderful time! We, of course, enjoyed the sights as we expected (Machu Picchu, Sacred Valley, train, Lake Titicacca), but all of the connections were on time and very comfortable. The guides (Franklin in Cusco, Nellie in Machu Picchu) were very pleasant and very knowledgeable. "></a>
                        </div>
                        <div class="col">
                            <a href="https://www.yelp.com/biz/gotoperu-washington?osq=gotoperu.com" target="_blank"><img src="{{asset('images/icons/yelp.png')}}" alt="" class="w-100 p-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="The arrangement of the agency since Cuzco arrival, has escort service all the way. You do not need to fear of lost. Hotel, tour guide, transfer are all excellent. "></a>
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

    <section class="bg-light">
        <div class="container">
            <div class="row pt-5 pb-2">
                <div class="col">
                    <h1 class="text-secondary h4"><strong>PERU TRAVEL PACKAGES</strong></h1>
                    {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                    {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                    {{--<p class="h4 font-weight-light">Offering you an authentic and reliable <strong>travel experience</strong> in peru welcoming you to explore the many fully <strong>Customized Travel Packages</strong> we have that suit every budget. let us plan your unforgettable <strong>trip</strong> to our majestic <strong>Machu Picchu</strong> and the rest of our  homeland… Peru!</p>--}}

                </div>
            </div>
        </div>
    </section>

    <section class="bg-light">
        <div class="container">
            <div class="row">

                <div class="col col-xs-12 d-md-none d-lg-inline col-md-8 col-lg-12 col-xl-8">
                    <div class="row">
                        @foreach($paquetes->where('estado', 1)->sortBy('duracion')->take(4) as $paquete)
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                                <div class="card mb-3">
                                    <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquete->titulo)), $paquete->duracion])}}" class="position-relative">
                                        <img class="card-img-top " src="{{asset('images/packages/'.$paquete->codigo.'.jpg')}}" alt="{{(strtolower($paquete->titulo))}}">

                                        <div class="card-img-overlay bg-rgba-dark-3 p-0">
                                            <div class="row justify-content-between no-gutters">
                                                <div class="col col-sm-5 p-3">
                                                    <h5 class="m-0 text-white">{{$paquete->duracion}} Days</h5>
                                                </div>
                                                <div class="col col-sm-4 bg-g-dark py-3 text-white text-center">
                                                    @foreach($paquete->precio_paquetes as $precio)
                                                        @if($precio->estrellas == 2)
                                                            @if($precio->precio_d > 0)
                                                                <p class="text-g-yellow font-weight-bold m-0 h5"><small><sup>form $</sup></small>{{$precio->precio_d}}<small>USD</small></p>
                                                            @else
                                                                <span class="text-danger">Inquire</span>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                            {{--<p class="text-white m-0">{{$paquete->duracion}} days <span class="text-g-yellow font-weight-bold float-right bg-danger">--}}
                                            {{--<small><sup>form $</sup></small>{{$precio->precio_d}}<small>USD</small>--}}
                                            {{--</span></p>--}}
                                        </div>
                                        <div class="card-img-overlay-packages bg-rgba-dark-1">
                                            <h5 class="card-title text-white m-0">{{ucwords(strtolower($paquete->titulo))}}</h5>
                                            {{--<h2 class="card-title text-white m-0 h5"><a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquete->titulo)), $paquete->duracion])}}" class="text-dark">{{$paquete->titulo}}</a></h2>--}}
                                            <small class="text-white font-weight-light">
                                                <i class="fa fa-map-marker"></i>
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
                <div class="col-12 d-sm-block col-sm-12 d-md-inline col-md-12 col-lg-12 col-xl-4">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="list-group position-relative">
                                    @foreach($paquetes->random(5) as $paquete)
                                        <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquete->titulo)), $paquete->duracion])}}" class="list-group-item list-group-item-action">
                                            <div class="media">
                                                <img src="{{asset('images/packages/'.$paquete->codigo.'.jpg')}}" alt="" width="60" height="60" class="rounded-circle align-self-center mr-3" data-toggle="tooltip" data-placement="top" title="{{(strtolower($paquete->titulo))}}">
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

            <div class="row pb-4">
                <div class="col text-right">
                    <a href="{{route('packages_path')}}" class="btn-link font-weight-normal">All Packages <i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white pt-5 d-none d-lg-block">
        <div class="container">
            <div class="col">
                <div class="row"><!--.row -->
                    <div class="col">
                        <img src="{{asset('images/logos/apavit.png')}}" alt="logo apavit" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/apotur.png')}}" alt="logo apotur" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/asta.png')}}" alt="logo asta" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/expedia.png')}}" alt="logo expedia" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/facebook.png')}}" alt="logo facebook" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/meetup.png')}}" alt="logo meetup" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/new.png')}}" alt="logo the new york times" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/peru.png')}}" alt="logo marca peru" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/prom-peru.png')}}" alt="logo prom peru" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/tripadvisor.png')}}" alt="logo tripadvisor" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/yelp.png')}}" alt="logo yelp" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('images/logos/youtube.png')}}" alt="logo youtube" class="img-fluid">
                    </div>
                </div><!-- /.row -->
            </div>
        </div>
    </section>

    <section class="bg-white">
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

    <section class="bg-white">
        <div class="container">
            <div class="row d-flex">
                <div class="col-8 d-none d-lg-flex col-lg-8">
                    <div class="row">
                        <div class="col">
                            <div class="grid-category position-relative">
                                <a href="destinations/peru-travel/machu-picchu-tours" class="text-g-dark rounded">
                                    <img src="{{asset('images/destinations/destinations/machu-picchu-h.jpg')}}" alt="Machu Picchu" class="w-100 rounded">
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
                                    <img src="{{asset('images/destinations/destinations/lake-titicaca-h.jpg')}}" alt="Lake Titicaca" class="w-100 rounded">
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
                                    <img src="{{asset('images/destinations/destinations/amazon-h.jpg')}}" alt="Amazon" class="w-100 rounded">
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
                                                        <img src="{{asset('images/destinations/destinations/'.str_replace(' ','-', strtolower($destino->nombre)).'')}}.jpg" alt="" width="60" height="60" class="rounded-circle align-self-center mr-3" data-toggle="tooltip" data-placement="top" title="{{ucwords(strtolower($destino->nombre))}}">
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

    <div class="bg-light d-none d-sm-block position-relative">
        <img src="{{asset('images/banner-hotel.jpg')}}" alt="" class="w-100">
        <div class="card-img-overlay bg-rgba-dark-3">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="m-0 text-white h3 font-weight-light"><img src="{{asset('images/icons/include/hotels.png')}}" width="50" height="50" alt="" class="p-1" data-toggle="tooltip" data-placement="top" title="Hotels"> Hand-Selected  Collection of hotels</p>
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
                    <h4 class="text-secondary"><strong>9 Reasons To Let Our Guides Take You On An Unforgettable Adventure!</strong></h4>
                    {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                    {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                    {{--<p class=" font-weight-light">You are already in the "neighborhood" here are some possible multi countries travel programs for your review, rest assure we can fully customize any travel lenght and any combination of countries, we can even design a comprehensive 30 days South America escape.</p>--}}
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light">
        <div class="container">
            <div class="row pb-5">
                <div class="col-12 col-md-6 col-xl-4 mb-3 d-flex os-animation animated fadeInLeft" data-os-animation="fadeInLeft" data-os-animation-delay="0s" style="animation-delay: 0s;">
                    <div class="card">
                        <div class="media p-3">
                            <span class="mr-3 rounded-circle px-3 text-white h1 font-weight-light bg-info">1</span>
                            <div class="media-body">
                                <h5 class="mt-0">We Care</h5>
                                We promise to do the right thing all the time, every time, for our team, travelers, people and places we visit.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 mb-3 d-flex">
                    <div class="card">
                        <div class="media p-3">
                            <span class="mr-3 rounded-circle bg-g-green px-3 text-white h1 font-weight-light">2</span>
                            <div class="media-body">
                                <h5 class="mt-0">We Are Accessible</h5>
                                You will find GoToPeru offices in Lima, Arequipa, Cusco and satellite branches in Quito and La Paz.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 mb-3 d-flex">
                    <div class="card">
                        <div class="media p-3">
                            <span class="mr-3 rounded-circle bg-danger px-3 text-white h1 font-weight-light">3</span>
                            <div class="media-body">
                                <h5 class="mt-0">We Provide The Best Team Of Experts</h5>
                                Our expert locals make the difference. They come from all regions across Peru and bring with them unique information and a vast knowledge of main destinations.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 mb-3 d-flex">
                    <div class="card">
                        <div class="media p-3">
                            <span class="mr-3 rounded-circle bg-warning px-3 text-white h1 font-weight-light">4</span>
                            <div class="media-body">
                                <h5 class="mt-0">We Are Internationally Recognized</h5>
                                We are rated as a high quality Travel Operator on TripAdvisor with impeccable testimonials. We are proud members of Promperu, the National Tourism Board, fully licensed and authorized by the government.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 mb-3 d-flex">
                    <div class="card">
                        <div class="media p-3">
                            <span class="mr-3 rounded-circle bg-g-dark px-3 text-white h1 font-weight-light">5</span>
                            <div class="media-body">
                                <h5 class="mt-0">We Help Our Community</h5>
                                We aim to make positive differences in the communities where we work and live. We look for ways to improve the standards of living. It is our priority to hire local people, develop their communities and work with local supply chains.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 mb-3 d-flex">
                    <div class="card">
                        <div class="media p-3">
                            <span class="mr-3 rounded-circle bg-g-yellow px-3 text-white h1 font-weight-light">6</span>
                            <div class="media-body">
                                <h5 class="mt-0">We Think Ahead…</h5>
                                We are aware that surprises, both good and bad, occur while traveling. We are always on top of it and ready to give reliable travel solutions to our customers.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 mb-3 d-flex">
                    <div class="card">
                        <div class="media p-3">
                            <span class="mr-3 rounded-circle bg-danger px-3 text-white h1 font-weight-light">7</span>
                            <div class="media-body">
                                <h5 class="mt-0">We Turn Good Trips Into Unforgettable Adventures</h5>
                                We help our travelers choose the perfect trip to the land of the Incas, providing them with the most authentic life-changing adventure possible. We go out of our way to ensure a travel experience unlike anything you’ve seen.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 mb-3 d-flex">
                    <div class="card">
                        <div class="media p-3">
                            <span class="mr-3 rounded-circle bg-success px-3 text-white h1 font-weight-light">8</span>
                            <div class="media-body">
                                <h5 class="mt-0">We Aren’t Afraid To Push Our Boundaries</h5>
                                We offer alternative extensions to the main South American destinations in Ecuador, Bolivia, Chile, Argentina, Brasil, Uruguay and Columbia.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 mb-3 d-flex">
                    <div class="card">
                        <div class="media p-3">
                            <span class="mr-3 rounded-circle bg-secondary px-3 text-white h1 font-weight-light">9</span>
                            <div class="media-body">
                                <h5 class="mt-0">We are Globally recognize</h5>
                                With global partners as <strong>Expedia, Viator</strong> and many other travel agents who trust us as their leading Peruvian operations company.
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
                            <img src="{{asset('images/icons/group.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <i class="font-weight-bold text-secondary">Small Groups and Private tours.</i>
                        </div>
                    </div>

                    <div class="row mt-5 justify-content-center">
                        <div class="col-6 col-sm-4 col-md-6 col-lg-3">
                            <img src="{{asset('images/icons/assistance.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col text-center">
                            <i class="font-weight-bold text-secondary">We live here, trully a 24/7 Assistance.</i>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-6 col-sm-4 col-md-6 col-lg-3">
                            <img src="{{asset('images/icons/customize.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <i class="font-weight-bold text-secondary">Book Now option or Customize a dream trip!.</i>
                        </div>
                    </div>
                </div>
                <div class="col col-sm d-none d-sm-block">
                    <img src="{{asset('images/goto.jpg')}}" alt="" class="w-100">
                </div>
                <div class="col-12 col-sm">
                    <div class="row mt-5 justify-content-center">
                        <div class="col-6 col-sm-4 col-md-6 col-lg-3">
                            <img src="{{asset('images/icons/location.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <i class="font-weight-bold text-secondary">Cutting the middlemen, headquarters at Peru.</i>
                        </div>
                    </div>

                    <div class="row mt-5 justify-content-center">
                        <div class="col-6 col-sm-4 col-md-6 col-lg-3">
                            <img src="{{asset('images/icons/trip.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col text-center">
                            <i class="font-weight-bold text-secondary">We take pride of our tripadvisor reviews!.</i>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-6 col-sm-4 col-md-6 col-lg-3">
                            <img src="{{asset('images/icons/departure.png')}}" alt="" class="img-fluid">
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
                    <img src="{{asset('images/we-care.jpg')}}" alt="" class="img-fluid">
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
                            <img src="{{asset('images/social/ninos.jpg')}}" alt="" class="img-fluid pl-4" data-toggle="modal" data-target="#social-1">
                            <!-- Modal -->
                            <div class="modal fade" id="social-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <img src="{{asset('images/social/ninos.jpg')}}" alt="" class="img-fluid rounded">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="{{asset('images/social/social.jpg')}}" alt="" class="img-fluid pr-4" data-toggle="modal" data-target="#social-2">
                            <!-- Modal -->
                            <div class="modal fade" id="social-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <img src="{{asset('images/social/social.jpg')}}" alt="" class="img-fluid rounded">
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
                    <img src="{{asset('images/slider/flights.jpg')}}" alt="" class="w-100">
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

    @push('scripts')
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




    @endpush

@stop