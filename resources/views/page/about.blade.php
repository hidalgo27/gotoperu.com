@extends('layouts.page.default')
@section('content')


    <section class="header-video d-none d-md-block">
        @include('layouts.page.header')
        <div id="overlay" class="overlay-img">
            <img src="{{asset('images/about.jpg')}}" alt="about us gotoperu" id="hero-vid" class="banner-itinerary">
        </div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row content-header-row align-items-center">
                    <div class="col">
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
                    <img data-src="{{asset('images/about.jpg')}}" data-srcset="{{asset('images/about.jpg')}}" alt="about us gotoperu" class="img-fluid lazy has-webp">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white m-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col small font-weight-bold">
                    {{Breadcrumbs::render('about')}}
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container">
            <div class="row pt-4">
                <div class="col">
                    <h1 class="text-g-green text-center font-weight-bold">PERU TRAVEL <span class="text-g-yellow">FEATURED PACKAGES</span></h1>
                    <p class="lead">GotoPeru travel agency was founded to fulfill a personal dream: “Provide first class travel experience for the international community while generating job opportunities locally”. It is extremely gratifying to employ and reward individuals who extend effort, enthusiasm and commitment to sharing the best of Peru and South America with the rest of the world.</p>
                    <p class="lead">GotoPeru has become a family for all of us. The best thing about working in GotoPeru is that it requires me to be permanently connected to the world of art, culture, archaeology, geography, wildlife conservation, and cuisine. For this reason, it helps me to understand more of the travel world and formulate new methods that ensure our customers’ memorable travel experience. It is also enriching to interact with different yet all amazing people from all over the globe daily as it teaches me more of their culture.</p>
                    <div class="alert alert-g-yellow text-center m-0" role="alert">
                        <h4>9 Reasons To Let Our Guides Take You On An Unforgettable Adventure!</h4>
                    </div>
                    {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                    {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                    {{--<p class="h4 font-weight-light">Offering you an authentic and reliable <strong>travel experience</strong> in peru welcoming you to explore the many fully <strong>Customized Travel Packages</strong> we have that suit every budget. let us plan your unforgettable <strong>trip</strong> to our majestic <strong>Machu Picchu</strong> and the rest of our  homeland… Peru!</p>--}}
                </div>
            </div>
        </div>
    </section>


    <section class="bg-white py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-sm-8">

                    <div class="row mb-4 os-animation animated fadeInLeft" data-os-animation="fadeInLeft" data-os-animation-delay="0s">
                        <div class="col-2 text-center">
                            <span class="display-3 font-weight-bold">1</span>
                        </div>
                        <div class="col">
                            <h3>We Care</h3>
                            <p>We promise to do the right thing all the time, every time, for our team, travelers, people and places we visit.</p>
                        </div>
                    </div>
                    <div class="row mb-4 os-animation animated fadeInLeft" data-os-animation="fadeInLeft" data-os-animation-delay="0s">
                        <div class="col-2 text-center">
                            <span class="display-3 font-weight-bold">2</span>
                        </div>
                        <div class="col">
                            <h3>We Are Accessible</h3>
                            <p>You will find GoToPeru offices in Lima, Arequipa, Cusco and satellite branches in Quito and La Paz.</p>
                        </div>
                    </div>
                    <div class="row mb-4 os-animation animated fadeInLeft" data-os-animation="fadeInLeft" data-os-animation-delay="0s">
                        <div class="col-2 text-center">
                            <span class="display-3 font-weight-bold">3</span>
                        </div>
                        <div class="col">
                            <h3>We Provide The Best Team Of Experts</h3>
                            <p>Our expert locals make the difference. They come from all regions across Peru and bring with them unique information and a vast knowledge of main destinations.</p>
                        </div>
                    </div>
                    <div class="row mb-4 os-animation animated fadeInLeft" data-os-animation="fadeInLeft" data-os-animation-delay="0s">
                        <div class="col-2 text-center">
                            <span class="display-3 font-weight-bold">4</span>
                        </div>
                        <div class="col">
                            <h3>We Are Internationally Recognized</h3>
                            <p>We are rated as a high quality Travel Operator on TripAdvisor with impeccable testimonials. We are proud members of Promperu, the National Tourism Board, fully licensed and authorized by the government.</p>
                        </div>
                    </div>
                    <div class="row mb-4 os-animation animated fadeInLeft" data-os-animation="fadeInLeft" data-os-animation-delay="0s">
                        <div class="col-2 text-center">
                            <span class="display-3 font-weight-bold">5</span>
                        </div>
                        <div class="col">
                            <h3>We Help Our Community</h3>
                            <p>We aim to make positive differences in the communities where we work and live. We look for ways to improve the standards of living. It is our priority to hire local people, develop their communities and work with local supply chains.</p>
                        </div>
                    </div>
                    <div class="row mb-4 os-animation animated fadeInLeft" data-os-animation="fadeInLeft" data-os-animation-delay="0s">
                        <div class="col-2 text-center">
                            <span class="display-3 font-weight-bold">6</span>
                        </div>
                        <div class="col">
                            <h3>We Think Ahead…So You Don’t Have To</h3>
                            <p>We are aware that surprises, both good and bad, occur while traveling. We are always on top of it and ready to give reliable travel solutions to our customers.</p>
                        </div>
                    </div>
                    <div class="row mb-4 os-animation animated fadeInLeft" data-os-animation="fadeInLeft" data-os-animation-delay="0s">
                        <div class="col-2 text-center">
                            <span class="display-3 font-weight-bold">7</span>
                        </div>
                        <div class="col">
                            <h3>We Turn Good Trips Into Unforgettable Adventures</h3>
                            <p>We help our travelers choose the perfect trip to the land of the Incas, providing them with the most authentic life-changing adventure possible. We go out of our way to ensure a travel experience unlike anything you’ve seen.</p>
                            <div class="row mb-4">
                                <div class="col">
                                    <img data-src="{{asset('images/team-meetup.jpg')}}" data-srcset="{{asset('images/team-meetup.jpg')}}" alt="team meetup gotoperu" class="w-100 lazy has-webp">
                                </div>
                                <div class="col">
                                    <h4>For Example:</h4>
                                    <p>We handled different organization trips</p>
                                    <img data-src="{{asset('images/logos/meetup.png')}}" data-srcset="{{asset('images/logos/meetup.png')}}" alt="logo meetup" class="w-100 lazy has-webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4 os-animation animated fadeInLeft" data-os-animation="fadeInLeft" data-os-animation-delay="0s">
                        <div class="col-2 text-center">
                            <span class="display-3 font-weight-bold">8</span>
                        </div>
                        <div class="col">
                            <h3>We Aren’t Afraid To Push Our Boundaries</h3>
                            <p>We offer alternative extensions to the main South American destinations in Ecuador, Bolivia, Chile, Argentina, Brasil, Uruguay and Columbia. In December, 2015 we will be opening a physical travel office in the USA.</p>
                        </div>
                    </div>
                    <div class="row mb-4 os-animation animated fadeInLeft" data-os-animation="fadeInLeft" data-os-animation-delay="0s">
                        <div class="col-2 text-center">
                            <span class="display-3 font-weight-bold">9</span>
                        </div>
                        <div class="col">
                            <h3>We Are Trustworthy</h3>
                            <p>We have glowing testimonials on our website and other acclaimed travel websites. We have set a standard of excellence for our customers by giving them the best Peruvian resources for a memorable journey.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--<section class="bg-light pt-5">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col text-center">--}}
                    {{--<h3>HERE ARE SOME REASONS TO TRAVEL WITH GOTOPERU</h3>--}}
                    {{--<p class="lead">With over 6 years of experience making dreams come true, GOTOPERU can create packages to Latin American and Peru that will maximize your limited travel days. We have done our research and found you the best guides, hotels, and tours available and would love to book your dream vacation today.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{----}}
            {{--<div class="row">--}}
                {{--<div class="col">--}}
                    {{--<div class="row no-gutters">--}}
                        {{--<div class="col-5">--}}
                            {{--<img src="https://gotoperu.com/img/team/team-1b.jpg" alt="" class="w-100">--}}
                        {{--</div>--}}
                        {{--<div class="col">--}}
                            {{--<div class="row no-gutters">--}}
                                {{--<div class="col">--}}
                                    {{--<img src="https://gotoperu.com/img/team/team-2b.jpg" alt="" class="w-100">--}}
                                {{--</div>--}}
                                {{--<div class="col">--}}
                                    {{--<img src="https://gotoperu.com/img/team/team-3b.jpg" alt="" class="w-100">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row">--}}
                                {{--<div class="col">--}}
                                    {{--<img src="https://gotoperu.com/img/team/team-4b.jpg" alt="" class="w-100">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col"></div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    <section class="bg-light py-5">
        <div class="container-fluid">

            <div class="row pb-5">
                <div class="col text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                    <h4 class="">TOP REASONS TO GO TO PERU</h4>
                    <!-- <div class="sec-title-div-4"></div> -->
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-6 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                    <div class="row">
                        <div class="col-1 d-none d-sm-block">
                            <i class="fa fa-angle-right fa-4x"></i>
                        </div>
                        <div class="col-11">
                            <h6 class="text-g-yellow">INCA TRAIL:</h6>
                            <p>It is important to visit our ancient Peru travel paths that our Incans created, plus they left some amazing views to enjoy.</p>
                        </div>
                    </div>
                </div><!-- /.col-md-6 col -->

                <div class="col-12 col-sm-6 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                    <div class="row">
                        <div class="col-1 d-none d-sm-block">
                            <i class="fa fa-angle-right fa-4x"></i>
                        </div>
                        <div class="col-11">
                            <h6 class="text-g-yellow">PERU CUISINE:</h6>
                            <p>Peru food is amazing and created with the most tantalizing produce available in Peru.</p>
                        </div>
                    </div>
                </div><!-- /.col-md-6 col -->

                <div class="col-12 col-sm-6 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                    <div class="row">
                        <div class="col-1 d-none d-sm-block">
                            <i class="fa fa-angle-right fa-4x"></i>
                        </div>
                        <div class="col-11">
                            <h6 class="text-g-yellow">LOCAL CULTURE:</h6>
                            <p>The flea markets and cultural festivals give you a real taste of what Peru is all about. Peruvian diversity culture is very famous!</p>
                        </div>
                    </div>
                </div><!-- /.col-md-6 col -->



                <div class="col-12 col-sm-6 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                    <div class="row">
                        <div class="col-1 d-none d-sm-block">
                            <i class="fa fa-angle-right fa-4x"></i>
                        </div>
                        <div class="col-11">
                            <h6 class="text-g-yellow">SHOPPING:</h6>
                            <p>Locals at Peru make some wonderful ceramics, hand-woven textiles and even sweaters made from baby alpaca.</p>
                        </div>
                    </div>
                </div><!-- /.col-md-6 col -->


                <div class="col-12 col-sm-6 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                    <div class="row">
                        <div class="col-1 d-none d-sm-block">
                            <i class="fa fa-angle-right fa-4x"></i>
                        </div>
                        <div class="col-11">
                            <h6 class="text-g-yellow">PERU MUSEUMS:</h6>
                            <p>The mummies, golden treasures and more can be visualized in the museums from the past.</p>
                        </div>
                    </div>
                </div><!-- /.col-md-6 col -->

                <div class="col-12 col-sm-6 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                    <div class="row">
                        <div class="col-1 d-none d-sm-block">
                            <i class="fa fa-angle-right fa-4x"></i>
                        </div>
                        <div class="col-11">
                            <h6 class="text-g-yellow">MACHU PICCHU:</h6>
                            <p>If you love culture and history, then you must visit the Incan city that has a wonderful view and incredible Peruvian history!</p>
                        </div>
                    </div>
                </div><!-- /.col-md-6 col -->

            </div><!-- /.row -->

        </div>
    </section>

    <section class="bg-white py-5">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-md-12 col-lg-3">
                    <h2 class="display-4 font-weight-bold">Because we care</h2>
                    <p>We give back to our communities</p>
                    <p class="text-info">
                        Chaullacota
                        Locates at 15,000 feed
                        (4500 mts) 2 hours
                        Northwest of cusco
                    </p>
                </div>

                <div class="col-12 col-md col-lg-2">
                    <img data-src="{{asset('images/social/responsability-1.jpg')}}" data-srcset="{{asset('images/social/responsability-1.jpg')}}" alt="gotoperu team" class="img-fluid  w-100 lazy has-webp">
                </div>
                <div class="col-12 col-md col-lg-3 d-none d-lg-inline">
                    <img data-src="{{asset('images/social/responsability.jpg')}}" data-srcset="{{asset('images/social/responsability.jpg')}}" alt="children of the community of Cusco chaullacohca" class="img-fluid  w-100 lazy has-webp">
                </div>
                <div class="col-12 col-md col-lg-2">
                    <img data-src="{{asset('images/social/responsability-2.jpg')}}" data-srcset="{{asset('images/social/responsability-2.jpg')}}" alt="GotoPeru social responibility" class="img-fluid  w-100 lazy has-webp">
                </div>
                <div class="col-12 col-md col-lg-2">
                    <img data-src="{{asset('images/social/responsability-3.jpg')}}" data-srcset="{{asset('images/social/responsability-3.jpg')}}" alt="children of the community of Cusco chaullacohca" class="img-fluid  w-100 lazy has-webp">
                </div>
                <div class="col-12 mt-2">
                    <p class="text-justify">At GOTOPERU we are committed to doing business in a way that actually give back to our communities specially the one located in remote places.  Our planning and execution of one of our trips involves a long supply chain: from local guides and operators to transportation providers to hotels and restaurants, we interact with a lot of different organizations on the ground, but we also know that some communities specially located on top of the Andes at 15,000+feet that due to the difficult access, dont receive the assistance they deserve, is for that reason that we organize periodically trips to this far far away communities to bring them specially sweaters and toys for children.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="py-5 bg-light">
        <div class="container-fluid">
            <div class="row pb-5">
                <div class="col text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                    <h3>GOTOPERU PROMISES</h3>
                    <p>We take pride of our Promises, for each our travelers from solo travelers to large groups.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-md-12 col-lg">
                    <img data-src="{{asset('images/team/team-10b.jpg')}}" data-srcset="{{asset('images/team/team-10b.jpg')}}" alt="team gotoperu" class="img-fluid w-100 rounded lazy has-webp">
                </div>
                <div class="col-12 col-md-12 col-lg">
                    <h3 class="text-g-yellow mt-2">Problem-Free Travel</h3>
                    <p>The itineraries that GOTOPERU create will work for you and your family. Our staff will work day and night to ensure you get to your destinations without delay.</p>
                    <h3 class="text-g-yellow">Personalized Itineraries</h3>
                    <p>We want you to have the trip of a lifetime, so email and call us until it exactly where you want it to be. We will make sure that your trip is exactly as you want it.</p>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.page.form-quote')
@stop
@push('scripts')
    <script>
        (function () {
            var ll = new LazyLoad({
                threshold: 0,
                elements_selector: ".lazy2"
            });
        }());
    </script>
@endpush