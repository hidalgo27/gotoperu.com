@extends('layouts.page.default')
@section('content')
    <section>
        <div class="jumbotron jumbotron-slider-1 rounded-0">
            <div class="container">
                <h2 class="text-white my-5 h1">Our excursions and packages depart 365 days a year</h2>
                {{--<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>--}}
                {{--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>--}}
            </div>
        </div>
    </section>

    @include('layouts.page.included')

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    {{--<h1 class="text-secondary h5"><strong>PERU TRAVEL PACKAGES</strong></h1>--}}
                    <h1 class="text-g-green">South America Travel Destinations</h1>
                    <p class="lead">You are already in the "neighborhood" here are some possible multi countries travel programs for your review, rest assure we can fully customize any travel lenght and any combination of countries, we can even design a comprehensive 30 days South America escape.</p>

                    <div class="alert alert-g-yellow" role="alert">
                        <h4>We will work around your schedule and your travel interests to build together the most unique travel plans</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-6 mb-4">
                    <div class="row">
                        <div class="col">
                            <img src="https://gotoperu.com/img/maps/peru.jpg" alt="" class="w-100 rounded rounded-circle">
                        </div>
                        <div class="col">
                            <h2 class="h2 font-weight-bold font-pompiere"><a href="{{route('destinations_country_path', 'peru-travel')}}" class="text-g-dark">Peru Destinations</a></h2>
                            <p class="text-justify">At GOTOPERU we give you the opportunity to choose between Prebuilt travel programs showed below or if you would rather plan your own itinerary we’ll help you build step by step your dream vacation at the best Prices cutting the "middleman" fees companies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="row">
                        <div class="col">
                            <img src="https://gotoperu.com/img/maps/ecuador.jpg" alt="" class="w-100 rounded rounded-circle">
                        </div>
                        <div class="col">
                            <h2 class="h2 font-weight-bold font-pompiere"><a href="{{route('destinations_country_path', 'ecuador-travel')}}" class="text-g-dark">Ecuador Destinations</a></h2>
                            <p class="text-justify">This amazing country is one of the most bio-diverse countries in the world, its many destinations offer visitors a range of unique beautiful landscapes to explore from the Amazon, Andes, Coast warm beaches and the world famous Galapagos Islands ecological wonder; plus rich history and Culture specially at Colonial Quito City.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="row">
                        <div class="col">
                            <img src="https://gotoperu.com/img/maps/bolivia.jpg" alt="" class="w-100 rounded rounded-circle">
                        </div>
                        <div class="col">
                            <h2 class="h2 font-weight-bold font-pompiere"><a href="{{route('destinations_country_path', 'bolivia-travel')}}" class="text-g-dark">Bolivia Destinations</a></h2>
                            <p class="text-justify">Bolivia is s country very diverse , stretching from the majestic icebound peaks and bleak high-altitude deserts of the Andes mountains to the virgin rainforests and vast great savannahs of the Amazon , including the lake titicaca side that include the Tiawanaku templo also stark otherworldly salt pans for instance Uyuni, and ancient Inca trails.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="row">
                        <div class="col">
                            <img src="https://gotoperu.com/img/maps/brasil.jpg" alt="" class="w-100 rounded rounded-circle">
                        </div>
                        <div class="col">
                            <h2 class="h2 font-weight-bold font-pompiere"><a href="{{route('destinations_country_path', 'brasil-travel')}}" class="text-g-dark">Brasil Destinations</a></h2>
                            <p class="text-justify">At GOTOPERU we give you the opportunity to choose between Prebuilt travel programs showed below or if you would rather plan your own itinerary we’ll help you build step by step your dream vacation at the best Prices cutting the "middleman" fees companies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop