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
                    <h1 class="text-g-green text-center font-weight-bold">CONOZCA AL EQUIPO <span class="text-g-yellow">GOTOPERU</span></h1>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi eius inventore ipsa magni molestiae, officiis quidem temporibus totam vel vitae? Accusantium consequatur dolores est itaque magni optio, provident quo voluptate.</p>
{{--                    <p class="lead">GotoPeru has become a family for all of us. The best thing about working in GotoPeru is that it requires me to be permanently connected to the world of art, culture, archaeology, geography, wildlife conservation, and cuisine. For this reason, it helps me to understand more of the travel world and formulate new methods that ensure our customers’ memorable travel experience. It is also enriching to interact with different yet all amazing people from all over the globe daily as it teaches me more of their culture.</p>--}}
{{--                    <div class="alert alert-g-yellow text-center m-0" role="alert">--}}
{{--                        <h4>9 Reasons To Let Our Guides Take You On An Unforgettable Adventure!</h4>--}}
{{--                    </div>--}}
                    {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                    {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                    {{--<p class="h4 font-weight-light">Offering you an authentic and reliable <strong>travel experience</strong> in peru welcoming you to explore the many fully <strong>Customized Travel Packages</strong> we have that suit every budget. let us plan your unforgettable <strong>trip</strong> to our majestic <strong>Machu Picchu</strong> and the rest of our  homeland… Peru!</p>--}}
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container">
{{--            <div class="row">--}}
{{--                <div class="col">--}}
{{--                    <h3 class="font-weight-bold text-g-yellow">Equipo de ventas</h3>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, accusamus aperiam cumque debitis deleniti dolor eos exercitationem minus molestiae officia quod rerum soluta ut! Culpa ea excepturi officia rem ut.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="row py-5">

                <div class="col-12 col-sm-6 col-md-3">
                    <a class="venobox text-decoration-none" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=BpaXxDE2c1M">
                        <div class="position-relative">
                            {{--<img src="{{asset('images/video-tertimonio/'.$testimonio_videos->imagen.'')}}" alt="" class="w-100 shadow-sm rounded">--}}

                            <picture class="">
                                <img alt="gotoperu" class="lazy w-100 rounded-circle"
                                     data-src="{{asset('images/team/pabel.jpg')}}"
                                     data-srcset="{{asset('images/team/pabel.jpg')}}"
                                     data-sizes="100w">
                                <div class="position-absolute-bottom mb-5 text-g-yellow p-3 icon-play">
                                    <i class="fas fa-play fa-5x"></i>
                                </div>
                            </picture>

                            <div class="text-center mt-3">
                                <h5 class="font-weight-bold text-muted m-0">Pabel Paucar</h5>
                                <p><small class="text-muted font-weight-bold">Jefe Comercial</small></p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <a class="venobox text-decoration-none" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=66IOeeFkgi8">
                        <div class="position-relative">
                            {{--<img src="{{asset('images/video-tertimonio/'.$testimonio_videos->imagen.'')}}" alt="" class="w-100 shadow-sm rounded">--}}

                            <picture class="">
                                <img alt="gotoperu" class="lazy w-100 rounded-circle"
                                     data-src="{{asset('images/team/freddy.jpg')}}"
                                     data-srcset="{{asset('images/team/freddy.jpg')}}"
                                     data-sizes="100w">
                                <div class="position-absolute-bottom mb-5 text-g-yellow p-3 icon-play">
                                    <i class="fas fa-play fa-5x"></i>
                                </div>
                            </picture>

                            <div class="text-center mt-3">
                                <h5 class="font-weight-bold text-muted m-0">Freddy Silva</h5>
                                <p><small class="text-muted font-weight-bold">Jefe de Sistemas</small></p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <a class="venobox text-decoration-none" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=cUWsovwPDpY">
                        <div class="position-relative">
                            {{--<img src="{{asset('images/video-tertimonio/'.$testimonio_videos->imagen.'')}}" alt="" class="w-100 shadow-sm rounded">--}}

                            <picture class="">
                                <img alt="gotoperu" class="lazy w-100 rounded-circle"
                                     data-src="{{asset('images/team/daniel.jpg')}}"
                                     data-srcset="{{asset('images/team/daniel.jpg')}}"
                                     data-sizes="100w">
                                <div class="position-absolute-bottom mb-5 text-g-yellow p-3 icon-play">
                                    <i class="fas fa-play fa-5x"></i>
                                </div>
                            </picture>

                            <div class="text-center mt-3">
                                <h5 class="font-weight-bold text-muted m-0">Daniel Escalona</h5>
                                <p><small class="text-muted font-weight-bold">Travel Advisor</small></p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <a class="venobox text-decoration-none" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=APgTEiOERHs">
                        <div class="position-relative">
                            {{--<img src="{{asset('images/video-tertimonio/'.$testimonio_videos->imagen.'')}}" alt="" class="w-100 shadow-sm rounded">--}}

                            <picture class="">
                                <img alt="gotoperu" class="lazy w-100 rounded-circle"
                                     data-src="{{asset('images/team/marina.jpg')}}"
                                     data-srcset="{{asset('images/team/marina.jpg')}}"
                                     data-sizes="100w">
                                <div class="position-absolute-bottom mb-5 text-g-yellow p-3 icon-play">
                                    <i class="fas fa-play fa-5x"></i>
                                </div>
                            </picture>

                            <div class="text-center mt-3">
                                <h5 class="font-weight-bold text-muted m-0">Marina Melo</h5>
                                <p><small class="text-muted font-weight-bold">Contadora Junior</small></p>
                            </div>
                        </div>
                    </a>
                </div>


            </div>
        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container">
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

    <section class="py-5 bg-white">
        <div class="container">
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
        $(document).ready(function(){
            $('.venobox').venobox();
        });
    </script>
@endpush