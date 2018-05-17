@extends('layouts.page.default')
@section('content')
    <section class="d-none">
        <div class="jumbotron jumbotron-slider-1 rounded-0">
            <div class="container">
                @foreach($paquete_iti as $paquetes)
                    <h2 class="text-white my-5 h1"><strong>{{($paquetes->titulo)}} {{($paquetes->duracion)}} DAYS TOURS</strong></h2>
                    <h2 class="text-white my-5 h1">Our excursions and packages depart 365 days a year</h2>
                @endforeach
                <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
            </div>
        </div>
    </section>
    <section class="d-none d-md-block pb-5">
        <div id="title" class="text-white bg-dark pb-2">
            <div class="container-fluid">
                <div class="row align-items-center mt-2">
                    <div class="col-md-6 col-lg-3">
                        <a href="{{route('home_path')}}"><img src="{{asset('images/logos/logo-gotoperu-ave-w.png')}}" alt="" class="img-fluid"></a>
                    </div>
                    <div class="col d-none d-xl-flex">
                        <i class="text-white">Top recommended Peru Travel Operator since 2006</i>
                    </div>
                    <div class="col-md col-lg text-right sticky-top">
                        <a href="tel:+2029963000" class="mx-3 h4">(202) 996-3000</a>
                        <a href="#" class="mx-3 h2"  data-toggle="modal" data-target="#modal-menu"><i class="fa fa-bars"></i></a>
                        <!-- Button trigger modal -->
                    </div>
                </div>
            </div>
        </div>
        {{--<div id="overlay">--}}
            {{--<video class="" id="hero-vid" poster="{{asset('images/slider/package-1.jpg')}}" autoplay loop muted>--}}
                {{--<source src="{{asset('media/video6.mp4')}}" />--}}
                {{--<source src="{{asset('media/video6.m4v')}}" type="video/mp4" />--}}
                {{--<source src="{{asset('media/video6.webm')}}" type="video/webm" />--}}
                {{--<source  src="{{asset('media/video6.ogv')}}" type="video/ogg" />--}}
            {{--</video>--}}
            {{--<div id="state" class=""><span class="fa fa-pause"></span></div>--}}
            {{--<img id="hero-pic" class="d-none" src="http://www.markhillard.com/sandbox/media/polina.jpg" alt="">--}}
            {{----}}
        {{--</div>--}}

    </section>

    <section class="pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col bg-light">
                    <h5 class="p-3 m-0">Paso 1</h5>
                </div>
                <div class="col bg-g-green">
                    <h5 class="p-3 m-0 text-white">Paso 2</h5>
                </div>
                <div class="col bg-light">
                    <h5 class="p-3 m-0 text-white">Paso 3</h5>
                </div>
            </div>
        </div>
    </section>

    {{--<section class="">--}}
        {{--<div class="container-fluid">--}}
            {{--<div class="row">--}}
                {{--<div class="col">--}}
                    {{--<h1>Peru Packages: Peru Explorer</h1>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    <section class="">
        <div class="container-fluid">
            <div class="row py-4">
                <div class="col text-center">
                    <h2 class="text-secondary text-g-yellow"><strong>PERU EXPLORER 3 DAYS TOURS</strong></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="card bg-light sticky-top sticky-top-50">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col border-bottom">
                                    <p class="py-2 m-0">Travel Date</p>
                                </div>
                                <div class="col">
                                    <span class="text-secondary">25 Jul 2018</span>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col border-bottom">
                                    <p class="py-2 m-0">Number of travellers</p>
                                </div>
                                <div class="col">
                                    <span class="text-secondary">2 <i class="fa fa-male"></i></span>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col border-bottom">
                                    <p class="py-2 m-0">Number of rooms</p>
                                </div>
                                <div class="col">
                                    <span class="text-secondary">3</span>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col border-bottom">
                                    <p class="py-2 m-0">Preferred Class</p>
                                </div>
                                <div class="col">
                                    <span class="text-secondary">5 <i class="fa fa-star text-g-yellow"></i> (luxury)</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-g-dark text-white">
                            <h3>Total <small>(USD)</small> <sup>$</sup>2899.00</h3>
                            <small>Impuestos incluidos</small>
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <div class="row pb-2">
                                        <div class="col">
                                            <h2 class="text-secondary h5"><strong>First Name <span class="text-primary">*</span></strong></h2>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="d_date" placeholder="First Name" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row pb-2">
                                        <div class="col">
                                            <h2 class="text-secondary h5"><strong>Last Name <span class="text-primary">*</span></strong></h2>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="d_date" placeholder="Last Name" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-4">
                                <div class="col">
                                    <div class="row pb-2">
                                        <div class="col">
                                            <h2 class="text-secondary h5"><strong>Passport <span class="text-primary">*</span></strong></h2>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-id-card"></i></span>
                                                </div>
                                                <input type="number" class="form-control" id="d_date" placeholder="Passport" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row pb-2">
                                        <div class="col">
                                            <h2 class="text-secondary h5"><strong>Email <span class="text-primary">*</span></strong></h2>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                                </div>
                                                <input type="number" class="form-control" id="d_date" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col">
                                    <div class="row pb-2">
                                        <div class="col">
                                            <h2 class="text-secondary h5"><strong>Address <span class="text-primary">*</span></strong></h2>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-address-card"></i></span>
                                                </div>
                                                <input type="number" class="form-control" id="d_date" placeholder="Address" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row pb-2">
                                        <div class="col">
                                            <h2 class="text-secondary h5"><strong>Telephone <span class="text-primary">*</span></strong></h2>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
                                                </div>
                                                <input type="number" class="form-control" id="d_date" placeholder="Telephone" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col">
                                    <div class="row pb-2">
                                        <div class="col">
                                            <h2 class="text-secondary h5"><strong>Country <span class="text-primary">*</span></strong></h2>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-globe"></i></span>
                                                </div>
                                                <input type="number" class="form-control" id="d_date" placeholder="Country" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row pb-2">
                                        <div class="col">
                                            <h2 class="text-secondary h5"><strong>State/Province <span class="text-primary">*</span></strong></h2>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-location-arrow"></i></span>
                                                </div>
                                                <input type="number" class="form-control" id="d_date" placeholder="State/Province" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col">
                                    <div class="row pb-2">
                                        <div class="col">
                                            <h2 class="text-secondary h5"><strong>Zip/Postal Code <span class="text-primary">*</span></strong></h2>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-map-pin"></i></span>
                                                </div>
                                                <input type="number" class="form-control" id="d_date" placeholder="Zip/Postal Code" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row pb-2">
                                        <div class="col">
                                            <h2 class="text-secondary h5"><strong>City <span class="text-primary">*</span></strong></h2>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-map-marker-alt"></i></span>
                                                </div>
                                                <input type="number" class="form-control" id="d_date" placeholder="City" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="row my-4">
                        <div class="col text-center">
                            {{--<button class="btn btn-lg btn-primary">Continue</button>--}}
                            <a href="{{route('payment_path', [str_replace(' ','-',strtolower($paquetes->titulo)), $paquetes->duracion])}}" class="btn btn-lg btn-primary">Continue</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop