@extends('layouts.page.default')
@section('content')

    {{--<section class="mb-4">--}}
        {{--<img src="https://gotoperu.com/img/slider/testimonials.jpg" alt="" class="w-100">--}}
    {{--</section>--}}

    <section class="header-video d-none d-md-block">
        @include('layouts.page.header')
        <div id="overlay" class="overlay-img">
            {{--<video class="" id="hero-vid" poster="{{asset('images/slider/package-1.jpg')}}" autoplay loop muted>--}}
            {{--<source src="{{asset('media/video6.mp4')}}" />--}}
            {{--<source src="{{asset('media/video6.m4v')}}" type="video/mp4" />--}}
            {{--<source src="{{asset('media/video6.webm')}}" type="video/webm" />--}}
            {{--<source  src="{{asset('media/video6.ogv')}}" type="video/ogg" />--}}
            {{--</video>--}}

            <img src="{{asset('images/testimonials.jpg')}}" alt="" id="hero-vid" class="banner-itinerary">
            {{--@include('layouts.page.menu-custom')--}}
        </div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row content-header-row align-items-center">

                    <div class="col">

                        <div class="row my-3 justify-content-center">
                            <div class="col-8 bg-rgba-white p-4 rounded">
                                <div class="row">
                                    <div class="col">
                                        <p class="lead"><i class="fa fa-quote-left"></i> I would recommend GoToPeru 100% . We just used the company in June 2017 and everything was perfectly organized and our vacation was a dream come true . All the guides were very punctual, friendly, knowledgeable and offered to take great pictures and recommended restaurants.<i class="fa fa-quote-right"></i></p>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-8">
                                        <div class="row">
                                            <div class="col">
                                                <a href=""><img data-src="{{asset('images/icons/tripadvisor.png')}}" data-srcset="{{asset('images/icons/tripadvisor.png')}}" alt="logo tripadvisor" class="w-100 lazy has-webp" data-toggle="tooltip" data-placement="top" title="" data-original-title="If you are visiting anywhere in Peru, you cannot find a better choice than www.gotoperu.com – they live there, and work there, and can sort urgent issues readily, with a quick phone call."></a>
                                            </div>
                                            <div class="col">
                                                <a href="https://www.trustpilot.com/review/gotoperu.com" target="_blank"><img data-src="{{asset('images/icons/trust.png')}}" data-srcset="{{asset('images/icons/trust.png')}}" alt="logo trust" class="w-100 lazy has-webp" data-toggle="tooltip" data-placement="top" title="" data-original-title="In summary, we had a wonderful time! We, of course, enjoyed the sights as we expected (Machu Picchu, Sacred Valley, train, Lake Titicacca), but all of the connections were on time and very comfortable. The guides (Franklin in Cusco, Nellie in Machu Picchu) were very pleasant and very knowledgeable. "></a>
                                            </div>
                                            <div class="col">
                                                <a href="https://www.yelp.com/biz/gotoperu-washington?osq=gotoperu.com" target="_blank"><img data-src="{{asset('images/icons/yelp.png')}}" data-srcset="{{asset('images/icons/yelp.png')}}" alt="logo yelp" class="w-100 lazy has-webp p-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="The arrangement of the agency since Cuzco arrival, has escort service all the way. You do not need to fear of lost. Hotel, tour guide, transfer are all excellent. "></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <strong>Trip Advisor:</strong>
                                                <a href="https://www.tripadvisor.com/ShowTopic-g294311-i818-k5867868-Has_anyone_booked_a_tour_with_GOTOPERU_www_gotoperu_org-Peru.html">Link 1</a>,
                                                <a href="https://www.tripadvisor.com/ShowTopic-g294311-i818-k6509104-Gotoperu_Travel_Agency-Peru.html">Link 2</a>,
                                                <a href="https://www.tripadvisor.com/ShowTopic-g294311-i818-k5657518-GOTOPERU_online_tour_operator-Peru.html">Link 3</a>,
                                                <a href="https://www.tripadvisor.com/ShowTopic-g294311-i818-k6934201-Trip_Report_Two_glorious_weeks_in_Peru_with_GOTOPERU_ORG-Peru.html">Link 4</a>.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--<div class="row justify-content-center">--}}
                            {{--<div class="col-6 text-center">--}}

                                {{--<a href="#content" class="text-white">--}}
                                    {{--<i class="fa fa-4x fa-chevron-circle-down font-weight-light"></i>--}}
                                {{--</a>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('layouts.page.menu')

    <section class="bg-white m-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col small font-weight-bold">
                    {{Breadcrumbs::render('testimonials')}}
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container">
            <div class="row pt-4">
                <div class="col">
                    <h1 class="text-g-green font-weight-bold text-center">GOTOPERU REVIEWS AND <span class="text-g-yellow">TESTIMONIALS</span></h1>
                    <p class="lead">We could go on and on about GOTOPERU, but we prefer to show a sample of the testimonials we receive from our value clients from around the world. Check out reviews of GOTOPERU on TripAdvisor or on our own website with over 1000+ testimonials. We want to make you another one of our satisfied clients by giving you stellar service and quality travel, which we have been providing to our customers since 2009.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-white py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-md-9 col-lg-8">
                    @foreach($testimonials as $testimonial)
                    <div class="row mb-5">
                        <div class="col">
                            <p>
                                <i class="fa fa-quote-left fa-2x float-left text-g-green pr-2"></i>
                                    {{$testimonial->contenido}}
                                <i class="fa fa-quote-right fa-2x float-right text-g-green pl-2"></i>
                            </p>
                            <i class="float-right text-g-yellow">{{$testimonial->nombre}} {{$testimonial->ciudad}}</i>
                        </div>
                    </div>
                    @endforeach
                    <div class="row">
                        <nav aria-label="Page navigation example">
                        {{ $testimonials->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.page.form-quote')

    @push('script')
        <!-- TrustBox script -->
        <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
        <!-- End Trustbox script -->
    @endpush
@stop