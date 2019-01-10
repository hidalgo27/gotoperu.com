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
        @include('layouts.page.header')
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
                    <h5 class="p-3 m-0"><a href="">Paso 1</a></h5>
                </div>
                <div class="col bg-light">
                    <h5 class="p-3 m-0"><a href="">Paso 2</a></h5>
                </div>
                <div class="col bg-g-green">
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
                    <h2 class="text-g-yellow"><strong>¡YA ESTÁS CASI ESTA LISTO!</strong></h2>
                    <p>Revisa la información siguiente sobre su tour y continúa. Si hay algo que no esté bien, modifica la información haciendo clic en los pasos <i class="fa fa-arrow-up"></i>.</p>
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
                            <h3 class="text-g-green"><strong>Personal Information</strong></h3>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <div class="row pb-2">
                                        <div class="col">
                                            <h2 class="text-secondary h5"><strong>First Name</strong></h2>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <i class="fa fa-user"></i> Hidalgo Ponce
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row pb-2">
                                        <div class="col">
                                            <h2 class="text-secondary h5"><strong>Passport</strong></h2>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <i class="fa fa-id-card"></i> 545784556
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-4">

                                <div class="col">
                                    <div class="row pb-2">
                                        <div class="col">
                                            <h2 class="text-secondary h5"><strong>Email</strong></h2>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <i class="fa fa-envelope"></i> hidalgochpnce@gmail.com
                                        </div>
                                    </div>

                                </div>
                                <div class="col">
                                    <div class="row pb-2">
                                        <div class="col">
                                            <h2 class="text-secondary h5"><strong>Address</strong></h2>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <i class="fa fa-address-card"></i> Urb. Kari Grande E-14 San Sebastian
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row mt-4">

                                <div class="col">
                                    <div class="row pb-2">
                                        <div class="col">
                                            <h2 class="text-secondary h5"><strong>Telephone</strong></h2>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <i class="fa fa-phone"></i> +51 980385734
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="row pb-2">
                                        <div class="col">
                                            <h2 class="text-secondary h5"><strong>Country</strong></h2>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <i class="fa fa-globe"></i> Peru
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row mt-4">

                                <div class="col">
                                    <div class="row pb-2">
                                        <div class="col">
                                            <h2 class="text-secondary h5"><strong>State/Province <span class="text-primary">*</span></strong></h2>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <i class="fa fa-location-arrow"></i> Cusco
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
                                            <i class="fa fa-map-marker-alt"></i> Cusco
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-6">
                                    <div class="row pb-2">
                                        <div class="col">
                                            <h2 class="text-secondary h5"><strong>Zip/Postal Code <span class="text-primary">*</span></strong></h2>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <i class="fa fa-map-pin"></i> 81545
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <h3 class="text-g-green"><strong>Travel Information</strong></h3>
                            <hr>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h3 class="text-secondary pb-4 h4"><strong>Overview</strong></h3>

                            <div class="row">
                                <div class="col-2">
                                    <h5 class="text-right text-secondary">Trip</h5>
                                </div>
                                <div class="col">
                                    <h5 class="text-g-yellow"><strong>{{($paquetes->codigo)}}:</strong> {{($paquetes->titulo)}}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <h5 class="text-right text-secondary">Days</h5>
                                </div>
                                <div class="col">
                                    <h5>{{($paquetes->duracion)}}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <h5 class="text-right text-secondary">Intro</h5>
                                </div>
                                <div class="col">
                                    @php echo $paquetes->descripcion; @endphp
                                </div>
                            </div>
                            <div class="row py-3 align-items-center">
                                <div class="col-2">
                                    <h5 class="text-right text-secondary">Highlights</h5>
                                </div>
                                <div class="col">
                                    @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                        {{--<p class="font-weight-bold text-secondary"><i class="fa fa-check"></i> {{ucwords(strtolower($paquete_destino->destinos->nombre))}}</p>--}}
                                        <a href="{{route('destinations_country_show_path', ['peru-travel', str_replace(' ', '-', strtolower($paquete_destino->destinos->nombre))])}}-tours"><img src="{{asset('images/destinations/destinations/'.str_replace(' ','-', strtolower($paquete_destino->destinos->nombre)).'')}}.jpg" alt="" width="50" height="50" class="rounded-circle" data-toggle="tooltip" data-placement="top" title="{{ucwords(strtolower($paquete_destino->destinos->nombre))}}"></a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <h5 class="text-right text-secondary">Outline</h5>
                                </div>
                                <div class="col">
                                    <div class="box-route-ininerary p-2 rounded bg-light">
                                        @foreach($paquetes->itinerario->sortBy('dia') as $itinerario)
                                            <p>
                                                <strong>Day {{$itinerario->dia}}: </strong> {{ucwords(strtolower($itinerario->titulo))}}
                                            </p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <h3 class="text-g-green"><strong>Accommodation Details</strong></h3>
                            <p>Revise la distribucion de personas por habitaciones.</p>
                            <hr>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="row align-items-center">
                                <div class="col-3">
                                    1 <i class="fa fa-male"></i>
                                </div>
                                <div class="col">
                                    <img src="{{asset('images/room/simple.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row align-items-center">
                                <div class="col-3">
                                    2 <i class="fa fa-male"></i>
                                </div>
                                <div class="col">
                                    <img src="{{asset('images/room/doble.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row align-items-center">
                                <div class="col-3">
                                    1 <i class="fa fa-male"></i>
                                </div>
                                <div class="col">
                                    <img src="{{asset('images/room/matrimonial.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row align-items-center">
                                <div class="col-3">
                                    3 <i class="fa fa-male"></i>
                                </div>
                                <div class="col">
                                    <img src="{{asset('images/room/triple.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <h3 class="text-g-green"><strong>Condiciones Generales</strong></h3>
                            <p>Estas son las condiciones generales que se aplicarán a tu reserva. Léelas detenidamente, dado que tendrás la obligación de respetarlas.</p>
                            <hr>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="condition-overflow">
                                <p>By booking or participating in a tour and any related products or services (a “Tour”) with G Adventures Inc. (“G Adventures” or the “Tour Operator”), you (“you”) agree to these Terms & Conditions (the “Terms”).</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis dolorum impedit incidunt ipsum iusto molestias, nam nobis omnis sapiente ut. Ad alias autem corporis dolore obcaecati odit quasi suscipit temporibus.</p>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda consectetur est facilis illum inventore modi neque officia quia sapiente? Consequatur dolorum eum fugit labore quos rem repellat suscipit tenetur!</li>
                                </ul>
                                <h3>1. THE BOOKING CONTRACT</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid consequuntur dolorem doloribus fuga magnam magni nam nesciunt officia quasi! Aliquid architecto deleniti ea et incidunt laudantium qui. Nihil, sunt!</p>
                            </div>
                        </div>
                    </div>


                    <div class="row mt-4">
                        <div class="col">
                            <h3 class="text-g-green"><strong>Confirmar Pago</strong></h3>
                            <p>Se efectuará un cargo en tu tarjeta en la moneda del país donde se haya realizado la compra. Ten en cuenta que el pago puede tener lugar en otro país y estar sujeto a comisiones adicionales por parte del emisor de la tarjeta.</p>
                            <hr>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="card mb-3">
                                <div class="card-header text-g-yellow font-weight-bold"><i class="fa fa-lock"></i> Pago seguro</div>
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="f_name" class="font-weight-bold h5 text-secondary">Full Name</label>
                                                        <input type="text" class="form-control" id="f_name" placeholder="Full Name">
                                                        <small id="emailHelp" class="form-text text-muted">As it appears on your credit card.</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="f_card" class="font-weight-bold h5 text-secondary">Credit Card Number</label>
                                                        <input type="text" class="form-control" id="f_card" placeholder="Credit Card Number">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="f_card" class="font-weight-bold h5 text-secondary">Mont</label>
                                                        <input type="text" class="form-control" id="f_card" placeholder="Mont" value="2899.00">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="f_card" class="font-weight-bold h5 text-secondary">Year</label>
                                                        <input type="text" class="form-control" id="f_card" placeholder="Year">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="f_card" class="font-weight-bold h5 text-secondary">CVV</label>
                                                        <input type="text" class="form-control" id="f_card" placeholder="Mont">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <a href=""><i class="fa fa-question-circle"></i></a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">I accept the above terms and conditions</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col">
                                                    <button class="btn btn-lg btn-success">Pagar Ahora</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--<div class="row my-4">--}}
                        {{--<div class="col text-center">--}}
                            {{--<button class="btn btn-lg btn-primary">Continue</button>--}}
                            {{--<a href="{{route('payment_path', [str_replace(' ','-',strtolower($paquetes->titulo)), $paquetes->duracion])}}" class="btn btn-lg btn-primary">Continue</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </section>
@stop