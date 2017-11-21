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
                    <h1 class="text-g-green">Peru Travel Featured Packages</h1>
                    <p class="lead">our most popular <strong>Peru and South America itineraries</strong>, these <strong>packages</strong> could be used as a reference to customize your own trip. At <strong>GOTOPERU</strong> we specialize in crafting personalize experiences based on your preferences; we invited to review these programs to have glimpse of the most important destinations for instance MachuPicchu, Lake Titicaca, Nazca and the Amazon.</p>

                    <div class="alert alert-g-yellow" role="alert">
                        <h4>And even multi countries travel adventures involving Brasil, Ecuador , Argentina.</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <h3 class="font-weight-bold text-g-green">Order By</h3>
                    <div class="card p-1">
                        <a href="" class="row">
                            <div class="col">1 days</div>
                            <div class="col"><img src="{{asset('images/divider.png')}}" alt="" class="w-100"></div>
                            <div class="col"><span class="badge badge-g-yellow float-right mt-1">4</span></div>
                        </a>
                        <a href="" class="row">
                            <div class="col">1 days</div>
                            <div class="col"><img src="{{asset('images/divider.png')}}" alt="" class="w-100"></div>
                            <div class="col"><span class="badge badge-g-yellow float-right mt-1">4</span></div>
                        </a>
                        <a href="" class="row">
                            <div class="col">30 days</div>
                            <div class="col"><img src="{{asset('images/divider.png')}}" alt="" class="w-100"></div>
                            <div class="col"><span class="badge badge-g-yellow float-right mt-1">17</span></div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <h3 class="font-weight-bold text-g-green">Order By</h3>
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