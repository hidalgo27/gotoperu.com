@extends('layouts.page.default')
@section('content')
    <section class="header-video d-none d-md-block">
        @include('layouts.page.header')
        <div id="overlay" class="overlay-img">
            {{--<video class="" id="hero-vid" poster="{{asset('images/slider/package-1.jpg')}}" autoplay loop muted>--}}
            {{--<source src="{{asset('media/video6.mp4')}}" />--}}
            {{--<source src="{{asset('media/video6.m4v')}}" type="video/mp4" />--}}
            {{--<source src="{{asset('media/video6.webm')}}" type="video/webm" />--}}
            {{--<source  src="{{asset('media/video6.ogv')}}" type="video/ogg" />--}}
            {{--</video>--}}

            <img src="{{asset('images/slider/package-1.jpg')}}" alt="" id="hero-vid">
            @include('layouts.page.menu-custom')
        </div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row content-header-row align-items-center">

                    <div class="col">

                        <div class="row my-3 justify-content-center">
                            <p class="text-white display-4 font-weight-light">GETTING TO PERU</p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-6 text-center">

                                <a href="#content-page" class="text-white">
                                    <i class="fas fa-chevron-down fa-4x"></i>
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
                    <img data-src="{{asset('images/slider/package-1.jpg')}}" data-srcset="{{asset('images/slider/package-1.jpg')}}" alt="getting to peru" class="img-fluid lazy has-webp">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white">
        <div class="container-fluid">
            <div class="row pt-5">
                <div class="col">
                    <h1 class="text-secondary h4"><strong>Getting To Peru</strong></h1>
                    <p class="lead">A trip to Peru is an exciting adventure! There are a number of common questions first-time travelers to Peru frequently ask.</p>
                </div>
            </div>
        </div>
    </section>


    <img data-src="{{asset('images/slider/flights.jpg')}}" data-srcset="{{asset('images/slider/flights.jpg')}}" alt="getting to peru" class="img-fluid w-100 lazy has-webp">

    <section class="bg-white py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-7">
                    <div class="row">
                        <div class="col text-justify">
                            <h3>Jorge Chavez International Airport</h3>
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
    </section>
    @include('layouts.page.form-quote')

@stop