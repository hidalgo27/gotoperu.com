@extends('layouts.page.default')
@section('content')

    <section class="my-5 os-animation animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="0s" style="animation-delay: 0s;">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    {{--<h1 class="text-secondary h5"><strong>PERU TRAVEL PACKAGES</strong></h1>--}}
                    <h1 class="text-g-green">Getting To Peru</h1>
                    <p class="lead">A trip to Peru is an exciting adventure! There are a number of common questions first-time travelers to Peru frequently ask.</p>

                    {{--<div class="alert alert-g-yellow" role="alert">--}}
                        {{--<h4>And even multi countries travel adventures involving Brasil, Ecuador , Argentina.</h4>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </section>

    <img src="{{asset('images/slider/flights.jpg')}}" alt="getting to peru" class="img-fluid w-100 os-animation animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="0s" style="animation-delay: 0s;">

    <div class="section my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-7">
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
    </div>
{{--    @include('layouts.page.included')--}}

@stop