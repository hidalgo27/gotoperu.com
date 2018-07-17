@extends('layouts.page.default')
@section('content')
    <section class="d-none">
        <div class="jumbotron jumbotron-slider-1 rounded-0">
            <div class="container">
                    <h2 class="text-white my-5 h1"><strong>TITULO 6 DAYS TOURS</strong></h2>
                    <h2 class="text-white my-5 h1">Our excursions and packages depart 365 days a year</h2>
                <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
            </div>
        </div>
    </section>

    <section class="header-video d-none d-md-block">
        <div id="title" class="text-white">
            <div class="container-fluid">
                <div class="row align-items-center mt-2">
                    <div class="col-md-6 col-lg-3">
                        <a href="{{route('home_path')}}"><img src="{{asset('images/logos/logo-gotoperu-ave-w.png')}}" alt="" class="img-fluid"></a>
                    </div>
                    {{--<div class="col d-none d-xl-flex">--}}
                        {{--<i class="text-white">Top recommended Peru Travel Operator since 2006</i>--}}
                    {{--</div>--}}
                    <div class="col-md col-lg text-right sticky-top">
                        {{--<a href="tel:+2029963000" class="mx-3 h4">(202) 996-3000</a>--}}
                        <a href="#" class="mx-3 h2"  data-toggle="modal" data-target="#modal-menu"><i class="fa fa-bars"></i></a>
                        <!-- Button trigger modal -->
                    </div>
                </div>
            </div>
        </div>
        <div id="overlay">
            <video class="" id="hero-vid" poster="{{asset('images/slider/package-1.jpg')}}" autoplay loop muted>
                <source src="{{asset('videos/land.mp4')}}" />
                {{--<source src="{{asset('media/video6.m4v')}}" type="video/mp4" />--}}
                {{--<source src="{{asset('media/video6.webm')}}" type="video/webm" />--}}
                {{--<source  src="{{asset('media/video6.ogv')}}" type="video/ogg" />--}}
            </video>
            {{--<div id="state" class=""><span class="fa fa-pause"></span></div>--}}
            {{--<img id="hero-pic" class="d-none" src="http://www.markhillard.com/sandbox/media/polina.jpg" alt="">--}}
            {{----}}
        </div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row content-header-row align-items-center justify-content-end no-gutters">
                    <div class="col col-md-6 col-lg-4 col-xl-4">
                        <h2 class="text-g-yellow p-2">Air & Land</h2>

                        <p class="m-0 p-2 text-white">
                            <b class="font-weight-bold">Day 1: </b> titulo
                        </p>
                        <p class="m-0 p-2 text-white">
                            <b class="font-weight-bold">Day 2: </b> titulo
                        </p>
                        <p class="m-0 p-2 text-white">
                            <b class="font-weight-bold">Day 3: </b> titulo
                        </p>
                        <p class="m-0 p-2 text-white">
                            <b class="font-weight-bold">Day 4: </b> titulo
                        </p>
                        <p class="m-0 p-2 text-white">
                            <b class="font-weight-bold">Day 5: </b> titulo
                        </p>
                        <p class="m-0 p-2 text-white">
                            <b class="font-weight-bold">Day 6: </b> titulo
                        </p>
                        <p class="m-0 p-2 text-white">
                            <b class="font-weight-bold">Day 7: </b> titulo
                        </p>

                        <p class="m-0 p-2 text-white h1 text-right">
                            from <sup>$</sup>1399
                        </p>


                        <div class="pb-4 position-relative">
                            {{--@foreach($paquetes->itinerario->sortBy('dia')->take(8) as $itinerario)--}}
                                {{--<p class="m-0 p-2">--}}
                                    {{--<b class="font-weight-bold">Day {{$itinerario->dia}}: </b> {{ucwords(strtolower($itinerario->titulo))}}--}}
                                {{--</p>--}}
                            {{--@endforeach--}}
                            {{--@if($paquetes->duracion > 8)--}}
                                {{--<div class="gradient-destinations"></div>--}}
                                {{--<a href="#" class="btn-link font-weight-normal b-routes p-2" data-toggle="modal" data-target="#route-modal">Full Outline <i class="fa fa-chevron-right"></i></a>--}}
                            {{--@endif--}}
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="route-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Route</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col box-route-ininerary p-4">
                                                {{--@foreach($paquetes->itinerario->sortBy('dia') as $itinerario)--}}
                                                    {{--<p>--}}
                                                        {{--<strong>Day {{$itinerario->dia}}: </strong> {{ucwords(strtolower($itinerario->titulo))}}--}}
                                                    {{--</p>--}}
                                                {{--@endforeach--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--<div class="text-right">--}}
                        {{--<a href="" class="btn-link font-weight-normal">All Packages <i class="fa fa-chevron-right"></i></a>--}}
                        {{--</div>--}}
                    </div>
                    {{--<div class="col">--}}
                        {{--<div class="row my-4 justify-content-center">--}}
                            {{--<div class="col text-center">--}}
                                {{--<h2 class="text-g-yellow font-weight-light">--}}
                                        {{--TITULO <span class="text-white">6 DAYS TOURS</span>--}}
                                {{--</h2>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row justify-content-center">--}}
                            {{--<div class="col-6 text-center">--}}
                                {{--<a href="#Inquire" class="btn btn-lg btn-g-yellow">INQUIRE NOW</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>

            </div>
        </div>
    </section>
    @include('layouts.page.menu-2')
    <section class="d-md-none">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col">
                    <img src="{{asset('images/banners/itinerary/GTP40.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    @include('layouts.page.included')

    <section class="bg-white pt-2">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="row my-3">
                        <div class="col">
                            <h1 class="text-secondary font-weight-bold">7 Day Peru & Machu Picchu from USA</h1>
                            <h6 class="text-secondary">Peru Tour. Price is per Person, Based on Two Guests per Room. Buy One Voucher per Person.</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <!-- Swiper -->
                            <div class="swiper-container swiper-container-complete">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="{{asset('images/destinations/rainbow-mountain.jpg')}}" alt="" class="w-100">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{asset('images/destinations/bolivia.jpg')}}" alt="" class="w-100">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{asset('images/destinations/argentina.jpg')}}" alt="" class="w-100">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{asset('images/destinations/brazil.jpg')}}" alt="" class="w-100">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{asset('images/destinations/iguazu.jpg')}}" alt="" class="w-100">
                                    </div>
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>

                    <ul class="nav nav-tabs nav-tabs-complete nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="included-tab" data-toggle="tab" href="#included" role="tab" aria-controls="included" aria-selected="true">Included</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="itinerary-tab" data-toggle="tab" href="#itinerary" role="tab" aria-controls="itinerary" aria-selected="false">Itinerary</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="how-tab" data-toggle="tab" href="#how" role="tab" aria-controls="how" aria-selected="false">How to Book</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="know-tab" data-toggle="tab" href="#know" role="tab" aria-controls="know" aria-selected="false">Know Before You Go</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="included" role="tabpanel" aria-labelledby="included-tab">
                            <div class="row mt-3">
                                <div class="col">
                                    <h5>What's Included</h5>
                                    <ul>
                                        <li>All Flights ,Transportation,Tours, Trains, Hotels, Entrances:</li>
                                        <li>International Round-trip airfare to Lima from</li>
                                        <li>Miami (MIA)</li>
                                        <li>Los Angeles (LAX)</li>
                                        <li>New York (JFK)</li>
                                        <li>Chicago (ORD)</li>
                                        <li>Washington, D.C. (IAD)</li>
                                        <li>Internal Round-trip airfare to Cusco</li>
                                        <li>All transfers between tours</li>
                                        <li>Peru Airport shuttles</li>
                                        <li>Roundtrip bus Aguas Calientes-MachuPicchu</li>
                                        <li>Roundtrip train to Aguas Calientes</li>
                                        <li>Lima tour</li>
                                        <li>Cusco Walking Tour</li>
                                        <li>MachuPicchu Tour</li>
                                        <li>All entrances</li>
                                        <li>All breakfast</li>
                                        <li>7-day/5-night: Lima to Cusco to Lima</li>
                                        <li>1 night of accommodations at Allpa Hotel and Suites, Casa Andina Standard or similar in Lima</li>
                                        <li>3 nights of accommodations at Maytaq Wasin Hotel, San Agustin International Hotel  or similar in Cusco</li>
                                        <li>1 night of accommodations at Inti Punku Machu Picchu, Hatun Samay or similar in Machu Picchu</li>
                                    </ul>
                                    <h5>NOT INCLUDED</h5>
                                    <ul>
                                        <li>Lunch</li>
                                        <li>Dinner</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="itinerary" role="tabpanel" aria-labelledby="itinerary-tab">
                            <div class="row mt-3">
                                <div class="col">
                                    <h5><b>DAY 1</b>  LIMA ARRIVAL</h5>
                                    <p>Flight from USA to Lima – Perú, we will provide you with flight information including etickets & flight times.
                                        Once you arrive to Perú our representative will welcome you at the Lima Airport and you will be transfer to your Lima hotel.
                                        Night at Lima</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="how" role="tabpanel" aria-labelledby="how-tab">...</div>
                        <div class="tab-pane fade" id="know" role="tabpanel" aria-labelledby="know-tab">...</div>
                    </div>
                </div>
                <div class="col mt-4">
                    <div class="card bg-light">
                        <div class="card-header bg-dark">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="text-white">Book Your Trip</h6>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-g-yellow btn-lg btn-block btn-sm">BOOK NOW</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="/packages/air-land/land-peru/6-days-tours/detail" role="form" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="airport" class="h5 text-secondary">Departure Airport:</label>
                                    <select class="form-control form-control-lg" id="airport" name="txtairport">
                                        <option>SELECCIONAR...</option>
                                            @foreach($airport as $airports)
                                                <option value="{{$airports->id}}">{{ucwords(strtolower($airports->aeropuerto))}} <small>({{strtoupper($airports->codigo)}})</small></option>
                                            @endforeach~

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="airport" class="h5 text-secondary">Departure DATE:</label>
                                    <select class="form-control form-control-lg" id="price_airport" name="txtdate">
                                        <option>SELECCIONAR...</option>
                                    </select>
                                </div>
                                <div class="row my-5">
                                    <div class="col">
                                        <h6 class="text-secondary">PRICES FROM:</h6>
                                    </div>
                                    <div class="col text-right">
                                        <p class="h1 font-weight-bold text-secondary" id="h_prices"><sup>$</sup><span>-</span></p>
                                        <small>PER PERSON</small>
                                    </div>
                                </div>
                                <div class="row my-5">
                                    <div class="col">
                                        <button type="button" class="btn btn-g-yellow btn-lg btn-block" onclick="detail_p()" id="p_price_b">BOOK NOW</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p>* Vacation is round-trip, per person, based on 2 travelers. Includes air & airport taxes, transfers, hotels, tours and daily breakfast. Additional baggage charges may apply. Rates are available for 1 to 9 travelers.</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            $('#airport').change(function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('[name="_token"]').val()
                    }
                });
                var s_airport = $('#airport').val();

                var datos = {
                    "txt_airport" : s_airport
                };

                $.ajax({
                    data: datos,
                    url: "{{route('lista_precio_aero_path')}}",
                    type: 'post',
                    // success: rendeListaPrecios
                    success:  listar_precios
                });
            });

            function listar_precios(data) {
                $('#price_airport option').remove();
                var list = data == null ? [] : (data.price_air instanceof Array ? data.price_air : [data.price_air ]);
                if (list.length < 1) {
                    alert("SIN NINGÚN RESULTADO EN LA BD");
                } else {
                    $('#price_airport').append('<option value="0">SELECCIONAR...</option>');
                    $.each(list, function(index, price_air) {
                        var fecha = price_air.fecha.split('-');
                        if(fecha){
                            var meses=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
                            var f = new Date(fecha);

                            var texto=meses[f.getMonth()]+' '+f.getDate()+', '+f.getFullYear();
                            // console.log(texto);
                        }
                        $('#price_airport').append('<option value='+price_air.id+'>'+texto+'</option>');
                    });
                    $('#price_airport').focus();
                }
            }

            $('#price_airport').change(function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('[name="_token"]').val()
                    }
                });
                var s_price_airport = $('#price_airport').val();

                var datos = {
                    "txt_price_airport" : s_price_airport
                };

                $.ajax({
                    data: datos,
                    url: "{{route('precio_aero_path')}}",
                    type: 'post',
                    // success: rendeListaPrecios
                    success:  p_precios
                });
            });

            function p_precios(data) {
                $('#h_prices span').remove();
                var list = data == null ? [] : (data.price_t instanceof Array ? data.price_t : [data.price_t ]);
                if (list.length < 1) {
                    alert("SIN NINGÚN RESULTADO EN LA BD");
                } else {
                    // $('#hola b').append('<option value="0">SELECCIONAR...</option>');
                    $.each(list, function(index, price_t) {
                        $('#h_prices').append('<span>'+price_t.precio+'</span>');
                    });
                }
            }

        </script>
        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper('.swiper-container', {
                spaceBetween: 30,
                centeredSlides: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        </script>
        <script>
            function detail_p(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('[name="_token"]').val()
                    }
                });

                $("#p_price_b").attr("disabled", true);

                var s_airport = $('#airport').val();
                var s_price_airport = $('#price_airport').val();



                if (s_airport.length == 0 ){
                    $('#airport').css("border-bottom", "2px solid #FF0000");
                    var sendMail = "false";
                }

                var sendMail = "true";

                if(sendMail == "true"){
                    var datos = {
                        "txt_airport" : s_airport,
                        "txt_price_airport" : s_price_airport
                    };
                    $.ajax({
                        data:  datos,
                        url:   "{{route('inquire_detail_p_path')}}",
                        type:  'post',

                        beforeSend: function () {

                            $('#d_send').removeClass('show');
                            $("#d_send").addClass('d-none');

                            $("#loader2").removeClass('d-none');
                            $("#loader2").addClass('show');
                        },
                        success:  function (response) {
                            window.location.href = '/packages/air-land/peru-machu-picchu-from-usa/7-days-tours/detail/'+response+'';
                        }
                    });
                } else{
                    $("#d_send").removeAttr("disabled");
                }
            }

            $('#d_date').datepicker({
                dateFormat: 'mm-dd-y',
                changeMonth: true,
                changeYear: true
            });

        </script>
    @endpush

@stop