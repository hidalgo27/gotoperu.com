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
                    <h1 class="text-g-green">Peru Destinations</h1>
                    <p class="lead">The pride of South America is well known for being a country of congregated lands, culture, and bloods. History has perpetuated in Peru, luckily we have conserved it intact since pre-Hispanic times.</p>
                    <p class="lead">The Tahuantinsuyo, one of the greatest pre-Columbian civilizations, their wealth of treasures, architecture, elegance and art, particularly impressed the first chroniclers and still impress our visitors till date. Cusco, among other cities, is not only city that reflects the Inca standards but also a Hispanic past.</p>
                    <p class="lead">A country that portraits in its city and villages the magic of its mestizo culture, its colonial plazas, streets and churches gift us with its beauty and centenarian architecture and invite us to enjoy a hospitality of a great town.</p>
                    <p class="lead">Peru is a whole other type of adventure, only a few other countries in the world offer virtually the options of adventure sports, under the sun, Peru is ideal to experiment unique sensations. An essential part of Peru’s magical land is in its life mixture of its Andean ancestors, occidental yet Christian traditions, and its folklore – let us not forget about its rich gastronomy; these are a few of the things that make Peru a multicultural country.</p>
                    <p class="lead">The historic center has been declared by the UNESCO a cultural patrimony of humanity, whoever visits Peru distinguish the virtues of an emerging country and recognize amongst everything the friendly warmth and hospitality that Peruvians offer. The magic, the history, the astounding nature and exquisite culture Peru have waits for you…</p>

                    <div class="alert alert-g-yellow" role="alert">
                        <h5>We will work around your schedule and your travel interests to build together the most unique travel plans</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <h3 class="font-weight-bold text-g-green">Peruvian Destinations</h3>
                    <h5 class="text-g-yellow font-pompiere font-weight-bold"><b>Region:</b> Sur</h5>
                    <div class="card p-1">
                        <a href="" class="bg-dark p-2 border rounded"><i class="fa fa-chevron-right"></i>Arequipa <span class="badge badge-g-yellow float-right mt-1">4</span></a>
                        </a>
                        <a href=""><i class="fa fa-chevron-right mb-2"></i>Puno and Lake Titicaca <span class="badge badge-g-yellow float-right mt-1">4</span></a>
                        </a>
                        <a href=""><i class="fa fa-chevron-right mb-2"></i>Machu Picchu <span class="badge badge-g-yellow float-right mt-1">17</span></a>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <h3 class="font-weight-bold text-g-green">Peru travel packages</h3>
                    <h5 class="text-secondary font-pompiere font-weight-bold"><b>Incluye:</b> hoteles, transporte, guia.</h5>
                    <div class="">
                        <div class="row">
                            <div class="col d-flex">
                                <div class="card">
                                    {{--<div class="card-header">--}}
                                    {{--<h4 class="card-title">City tour em cusco</h4>--}}
                                    {{--</div>--}}
                                    <a href="http://gotoperu.com.pe/paquete/peru-magico"><img class="card-img-top " src="http://www.andesviagens.com/images/packages/AV700.jpg" alt="Card image cap"></a>
                                    <div class="card-img-overlay p-1">
                                        <h5 class="card-title rounded text-dark p-2"><span class="badge badge-g-yellow mt-1">7 Days</span> <a href="" class="btn btn-sm btn-dark float-right"><i class="fa fa-search-plus"></i> Map and Itinerary</a></h5>
                                        {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                                        {{--<p class="card-text">Last updated 3 mins ago</p>--}}
                                    </div>
                                    <div class="card-body p-2 text-center">
                                        <h4 class="card-title m-0"><a href="http://gotoperu.com.pe/paquete/peru-magico" class="text-dark">Perú Magico</a></h4>
                                        {{--<p class="text-left"><i class="fa fa-clock-o text-primary" aria-hidden="true"></i> 6 Días</p>--}}
                                        <p class="text-left card-text"><i class="fa fa-map-marker text-g-yellow" aria-hidden="true"></i>
                                            Lima, Cusco, Sacred Valley, Machu Picchu
                                        </p>
                                        {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                                    </div>
                                    <div class="card-footer text-muted p-2">
                                        <div class="row">
                                            <div class="col text-left">From</div>
                                            <div class="col text-right font-weight-bold text-primary font-montserrat">
                                                <sup>$</sup> 898 <small>USD</small>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex">
                                <div class="card">
                                    {{--<div class="card-header">--}}
                                    {{--<h4 class="card-title">City tour em cusco</h4>--}}
                                    {{--</div>--}}
                                    <a href="http://gotoperu.com.pe/paquete/peru-magico"><img class="card-img-top " src="https://gotoperu.com/img/fotos/GTPE1005.jpg" alt="Card image cap"></a>
                                    <div class="card-img-overlay p-1">
                                        <h5 class="card-title rounded text-dark p-2"><span class="badge badge-g-yellow mt-1">7 Days</span> <a href="" class="btn btn-sm btn-dark float-right"><i class="fa fa-search-plus"></i> Map and Itinerary</a></h5>
                                        {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                                        {{--<p class="card-text">Last updated 3 mins ago</p>--}}
                                    </div>
                                    <div class="card-body p-2 text-center">
                                        <h4 class="card-title m-0"><a href="http://gotoperu.com.pe/paquete/peru-magico" class="text-dark">Perú Magico</a></h4>
                                        {{--<p class="text-left"><i class="fa fa-clock-o text-primary" aria-hidden="true"></i> 6 Días</p>--}}
                                        <p class="text-left card-text"><i class="fa fa-map-marker text-g-yellow" aria-hidden="true"></i>
                                            Lima, Cusco, Sacred Valley, Machu Picchu
                                        </p>
                                        {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                                    </div>
                                    <div class="card-footer text-muted p-2">
                                        <div class="row">
                                            <div class="col text-left">From</div>
                                            <div class="col text-right font-weight-bold text-primary font-montserrat">
                                                <sup>$</sup> 898 <small>USD</small>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex">
                                <div class="card">
                                    {{--<div class="card-header">--}}
                                    {{--<h4 class="card-title">City tour em cusco</h4>--}}
                                    {{--</div>--}}
                                    <a href="http://gotoperu.com.pe/paquete/peru-magico"><img class="card-img-top " src="https://gotoperu.com/img/fotos/GTLM3000.jpg" alt="Card image cap"></a>
                                    <div class="card-img-overlay p-1">
                                        <h5 class="card-title rounded text-dark p-2"><span class="badge badge-g-yellow mt-1">7 Days</span> <a href="" class="btn btn-sm btn-dark float-right"><i class="fa fa-search-plus"></i> Map and Itinerary</a></h5>
                                        {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                                        {{--<p class="card-text">Last updated 3 mins ago</p>--}}
                                    </div>
                                    <div class="card-body p-2 text-center">
                                        <h4 class="card-title m-0"><a href="http://gotoperu.com.pe/paquete/peru-magico" class="text-dark">Perú Magico</a></h4>
                                        {{--<p class="text-left"><i class="fa fa-clock-o text-primary" aria-hidden="true"></i> 6 Días</p>--}}
                                        <p class="text-left card-text"><i class="fa fa-map-marker text-g-yellow" aria-hidden="true"></i>
                                            Lima, Cusco, Sacred Valley, Machu Picchu
                                        </p>
                                        {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                                    </div>
                                    <div class="card-footer text-muted p-2">
                                        <div class="row">
                                            <div class="col text-left">From</div>
                                            <div class="col text-right font-weight-bold text-primary font-montserrat">
                                                <sup>$</sup> 898 <small>USD</small>

                                            </div>
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
@stop