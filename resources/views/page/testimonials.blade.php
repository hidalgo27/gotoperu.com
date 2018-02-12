@extends('layouts.page.default')
@section('content')

    {{--<section class="mb-4">--}}
        {{--<img src="https://gotoperu.com/img/slider/testimonials.jpg" alt="" class="w-100">--}}
    {{--</section>--}}

    <section class="header-video d-none d-md-block">
        <div id="title" class="text-white">
            <div class="container-fluid">
                <div class="row align-items-center mt-2">
                    <div class="col-md-6 col-lg-3">
                        <a href="{{route('home_path')}}"><img src="{{asset('images/logos/logo-gotoperu-ave-w.png')}}" alt="" class="img-fluid"></a>
                    </div>
                    <div class="col d-none d-xl-flex">
                        <i class="text-white">Top recommended Peru Travel Operator since 2009</i>
                    </div>
                    <div class="col-md col-lg text-right sticky-top">
                        <a href="tel:+2029963000" class="mx-3 h4">(202) 996-3000</a>
                        <a href="#" class="mx-3 h2"  data-toggle="modal" data-target="#modal-menu"><i class="fa fa-bars"></i></a>
                        <!-- Button trigger modal -->
                    </div>
                </div>
            </div>
        </div>
        <div id="overlay" class="overlay-img">
            {{--<video class="" id="hero-vid" poster="{{asset('images/slider/package-1.jpg')}}" autoplay loop muted>--}}
            {{--<source src="{{asset('media/video6.mp4')}}" />--}}
            {{--<source src="{{asset('media/video6.m4v')}}" type="video/mp4" />--}}
            {{--<source src="{{asset('media/video6.webm')}}" type="video/webm" />--}}
            {{--<source  src="{{asset('media/video6.ogv')}}" type="video/ogg" />--}}
            {{--</video>--}}

            <img src="{{asset('images/testimonials.jpg')}}" alt="" id="hero-vid">

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
                                                <a href=""><img src="{{asset('images/icons/tripadvisor.png')}}" alt="" class="w-100" data-toggle="tooltip" data-placement="top" title="" data-original-title="100s Talking about us!"></a>
                                            </div>
                                            <div class="col">
                                                <a href="https://www.trustpilot.com/review/gotoperu.com" target="_blank"><img src="{{asset('images/icons/trust.png')}}" alt="" class="w-100" data-toggle="tooltip" data-placement="top" title="" data-original-title="Real Testimonies"></a>
                                            </div>
                                            <div class="col">
                                                <a href="https://www.yelp.com/biz/gotoperu-washington?osq=gotoperu.com" target="_blank"><img src="{{asset('images/icons/yelp.png')}}" alt="" class="w-100" data-toggle="tooltip" data-placement="top" title="" data-original-title="Yelp"></a>
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
    <section class="d-md-none">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col">
                    <img src="{{asset('images/testimonials.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white">
        <div class="container-fluid">
            <div class="row pt-5">
                <div class="col">
                    <h1 class="text-secondary h4"><strong>GOTOPERU REVIEWS AND TESTIMONIALS</strong></h1>
                    <p class="lead">We could go on and on about GOTOPERU, but we prefer to show a sample of the testimonials we receive from our value clients from around the world. Check out reviews of GOTOPERU on TripAdvisor or on our own website with over 1000+ testimonials. We want to make you another one of our satisfied clients by giving you stellar service and quality travel, which we have been providing to our customers since 2009.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-white py-5">
        <div class="container-fluid">
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