@extends('layouts.page.default')

@section('content')
    <section class="header-video">
        <div id="title" class="text-white">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-3 mt-2">
                        <a href="{{route('home_path')}}"><img src="{{asset('images/logos/logo-gotoperu-ave-w.png')}}" alt="" class="img-fluid"></a>
                    </div>
                    {{--<div class="col text-center">--}}
                    {{--<i class="h4"></i>--}}
                    {{--</div>--}}
                    <div class="col-3 text-right pt-3 sticky-top">
                        <a href="tel:+2029963000" class="mx-3 h4">(202) 996-3000</a>
                        <a href="tel:+2029963000" class="mx-3 h2"><i class="fa fa-bars"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="overlay">
            <video class="" id="hero-vid" poster="http://www.markhillard.com/sandbox/media/polina.jpg" autoplay loop muted>
                <source src="{{asset('media/video6.mp4')}}" />
                <source src="{{asset('media/video6.m4v')}}" type="video/mp4" />
                <source src="{{asset('media/video6.webm')}}" type="video/webm" />
                <source  src="{{asset('media/video6.ogv')}}" type="video/ogg" />
            </video>
            {{--<div id="state" class=""><span class="fa fa-pause"></span></div>--}}
            {{--<img id="hero-pic" class="d-none" src="http://www.markhillard.com/sandbox/media/polina.jpg" alt="">--}}
           {{----}}
        </div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row content-header-row align-items-center">
                    <div class="col-3 col-sm-7 col-md-5 col-lg-4 col-xl-3">
                        <div class="bg-rgba-white p-2 rounded">
                            <h2 class="text-center"><b>Machu Picchu</b> <span class="d-block">Vacations</span></h2>
                            <div class="row no-gutters">
                                <div class="col">
                                    <img src="{{asset('images/icons/include/assistances.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Assistances">
                                    {{--<span>Assistances</span>--}}
                                </div>

                                <div class="col">
                                    <img src="{{asset('images/icons/include/entrances.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Entrances">
                                    {{--<span>Entrances</span>--}}
                                </div>
                                <div class="col">
                                    <img src="{{asset('images/icons/include/transfers.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Transfers">
                                    {{--<span>Transfers</span>--}}
                                </div>

                                <div class="col">
                                    <img src="{{asset('images/icons/include/hotels.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Hotels">
                                    {{--<span>Hotels</span>--}}
                                </div>
                                <div class="col">
                                    <img src="{{asset('images/icons/include/tours.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Tours">
                                    {{--<span>Tours</span>--}}
                                </div>
                                <div class="col">
                                    <img src="{{asset('images/icons/include/trains.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Trains">
                                    {{--<span>Trains</span>--}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <ol class="text-da">
                                    <li class="text-g-yellow font-weight-bold">Share your travel plans</li>
                                    <li>Receive a customize itinerary and qoute</li>
                                    <li>Discover the best of Peru with GOTOPERU</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row justify-content-center">
                            <div class="col-6">

                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-white text-center">
                                <h2 class="h2">PERU: OUR HOME, <b>YOUR ADVENTURE</b></h2>
                                <p class="h5 font-weight-light"><i><b>Peruvian Travel Operator</b> with 10+years of Experience & oustanding reviews</i></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <nav class="nav nav-pills nav-fill nav-goto navbar-expand-lg d-none d-sm-flex sticky-top">
        {{--<a class="nav-item nav-link active" href="#">Active</a>--}}
        <a class="nav-item nav-link text-light active" href="">TOURS PACKAGES</a>
        <a class="nav-item nav-link text-light" href="">DESTINATIONS</a>
        <a class="nav-item nav-link text-light" href="">ABOUT US</a>
        <a class="nav-item nav-link text-light" href="">GETTING TO PERU</a>
        <a class="nav-item nav-link text-light" href="/#contato">TESTIMONIALS</a>
        <a class="nav-item nav-link text-light bg-g-yellow rounded-0" href="/#contato">INQUIRE</a>
        {{--<a class="nav-item nav-link disabled" href="#">Disabled</a>--}}
    </nav>

    <section class="bg-light">
        <div class="container-fluid">
            <div class="row pt-5 pb-2">
                <div class="col">
                    <h1 class="text-secondary h4"><strong>PERU TRAVEL PACKAGES</strong></h1>
                    {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                    {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                    {{--<p class="h4 font-weight-light">Offering you an authentic and reliable <strong>travel experience</strong> in peru welcoming you to explore the many fully <strong>Customized Travel Packages</strong> we have that suit every budget. let us plan your unforgettable <strong>trip</strong> to our majestic <strong>Machu Picchu</strong> and the rest of our  homeland… Peru!</p>--}}
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light">
        <div class="container-fluid">
            <div class="row">
                @foreach($paquetes->take(6) as $paquete)
                    <div class="col-4 mb-3">
                        <div class="card mb-3">
                            <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquete->titulo)), $paquete->duracion])}}" class="position-relative">
                                <img class="card-img-top " src="{{asset('images/packages/'.$paquete->codigo.'.jpg')}}" alt="{{(strtolower($paquete->titulo))}}">
                                <div class="card-img-overlay bg-rgba-dark-3 p-3">
                                    <p class="text-white m-0">{{$paquete->duracion}} days <span class="text-g-yellow font-weight-bold float-right">
                                            @foreach($paquete->precio_paquetes as $precio)
                                                @if($precio->estrellas == 2)
                                                    @if($precio->precio_d > 0)
                                                        <small><sup>form $</sup></small>{{$precio->precio_d}}<small>USD</small>
                                                    @else
                                                        <span class="text-danger">Inquire</span>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </span></p>
                                </div>
                                <div class="card-img-overlay-packages">
                                    <h5 class="card-title text-white m-0">{{ucwords(strtolower($paquete->titulo))}}</h5>
                                    {{--<h2 class="card-title text-white m-0 h5"><a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquete->titulo)), $paquete->duracion])}}" class="text-dark">{{$paquete->titulo}}</a></h2>--}}
                                    <small class="text-white font-weight-light">
                                        <i class="fa fa-map-marker"></i>
                                        @php
                                            $i = 1;
                                            $num_des = count($paquete_destinos->where('idpaquetes',$paquete->id));
                                        @endphp
                                        @foreach($paquete_destinos->where('idpaquetes',$paquete->id) as $paquete_destino)
                                            @if(isset($paquete_destino->destinos->nombre))
                                                {{ucwords(strtolower($paquete_destino->destinos->nombre))}}@if($i < $num_des),@else.@endif
                                                @php $i++; @endphp
                                            @endif
                                        @endforeach
                                    </small>
                                </div>
                            </a>
                            {{--<div class="card-body">--}}
                                {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                                {{--<p class="card-text">--}}
                                    {{----}}
                                {{--</p>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row pb-4">
                <div class="col text-right">
                    <a href="" class="btn-link font-weight-normal">All Packages <i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container-fluid">
            <div class="row pt-5 pb-2">
                <div class="col">
                    <h1 class="text-secondary h4"><strong>SOUTH AMERICA TRAVEL DESTINATIONS</strong></h1>
                    {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                    {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                    {{--<p class=" font-weight-light">You are already in the "neighborhood" here are some possible multi countries travel programs for your review, rest assure we can fully customize any travel lenght and any combination of countries, we can even design a comprehensive 30 days South America escape.</p>--}}
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col d-none d-sm-block">
                                        <img src="{{asset('images/maps/peru.jpg')}}" alt="peru" class="w-100 rounded rounded-circle">
                                    </div>
                                    <div class="col">
                                        <div class="row justify-content-center mt-5">
                                            <div class="col-6">
                                                <h2 class="text-45 font-weight-light mt-5">
                                                    <a href="{{route('destinations_country_path', 'peru-travel')}}" class="text-g-dark">Peru Destinations</a>
                                                </h2>
                                                <p class="text-justify text-22 font-weight-light">At GOTOPERU we give you the opportunity to choose between Prebuilt travel programs showed below or if you would rather plan your own itinerary we’ll help you build step by step your dream vacation at the best Prices cutting the "middleman" fees companies.</p>
                                                <a href="{{route('destinations_country_path', 'peru-travel')}}" class="btn-link float-right font-weight-normal">View Peru packages <i class="fa fa-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col d-none d-sm-block">
                                        <img src="{{asset('images/maps/ecuador.jpg')}}" alt="ecuador" class="w-100 rounded rounded-circle">
                                    </div>
                                    <div class="col">
                                        <div class="row justify-content-center">
                                            <div class="col-6">
                                                <h2 class="text-45 font-weight-light mt-5">
                                                    <a href="{{route('destinations_country_path', 'ecuador-travel')}}" class="text-g-dark">Ecuador Destinations</a>
                                                </h2>
                                                <p class="text-justify text-22 font-weight-light">This amazing country is one of the most bio-diverse countries in the world, its many destinations offer visitors a range of unique beautiful landscapes to explore from the Amazon, Andes, Coast warm beaches and the world famous Galapagos Islands ecological wonder; plus rich history and Culture specially at Colonial Quito City.</p>
                                                <a href="{{route('destinations_country_path', 'ecuador-travel')}}" class="btn-link float-right font-weight-normal">View Ecuador packages <i class="fa fa-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col d-none d-sm-block">
                                        <img src="{{asset('images/maps/bolivia.jpg')}}" alt="peru" class="w-100 rounded rounded-circle">
                                    </div>
                                    <div class="col">
                                        <div class="row justify-content-center">
                                            <div class="col-6">
                                                <h2 class="text-45 font-weight-light mt-5">
                                                    <a href="{{route('destinations_country_path', 'bolivia-travel')}}" class="text-g-dark">Bolivia Destinations</a>
                                                </h2>
                                                <p class="text-justify text-22 font-weight-light">Bolivia is s country very diverse , stretching from the majestic icebound peaks and bleak high-altitude deserts of the Andes mountains to the virgin rainforests and vast great savannahs of the Amazon , including the lake titicaca side that include the Tiawanaku templo also stark otherworldly salt pans for instance Uyuni, and ancient Inca trails.</p>
                                                <a href="{{route('destinations_country_path', 'bolivia-travel')}}" class="btn-link float-right font-weight-normal">View Bolivia packages <i class="fa fa-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col d-none d-sm-block">
                                        <img src="{{asset('images/maps/brasil.jpg')}}" alt="peru" class="w-100 rounded rounded-circle">
                                    </div>
                                    <div class="col">
                                        <div class="row justify-content-center mt-5">
                                            <div class="col-6">
                                                <h2 class="text-45 font-weight-light mt-5">
                                                    <a href="{{route('destinations_country_path', 'brasil-travel')}}" class="text-g-dark">Brazil Destinations</a>
                                                </h2>
                                                <p class="text-justify text-22 font-weight-light">At GOTOPERU we give you the opportunity to choose between Prebuilt travel programs showed below or if you would rather plan your own itinerary we’ll help you build step by step your dream vacation at the best Prices cutting the "middleman" fees companies.</p>
                                                <a href="{{route('destinations_country_path', 'brasil-travel')}}" class="btn-link float-right font-weight-normal">View Brazil packages <i class="fa fa-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light">
        <div class="container-fluid">
            <div class="row py-5">
                <div class="col-3">
                    <div class="card">
                        <h2>We Care</h2>
                        <p>We promise to do the right thing all the time, every time, for our team, travelers, people and places we visit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('scripts')
        <script>
            //form
            function design(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('[name="_token"]').val()
                    }
                });

                $("#de_send").attr("disabled", true);

                var filter=/^[A-Za-z][A-Za-z0-9_.]*@[A-Za-z0-9_]+.[A-Za-z0-9_.]+[A-za-z]$/;


                var s_destinations = document.getElementsByName('destinations[]');
                var $destinations = "";
                for (var i = 0, l = s_destinations.length; i < l; i++) {
                    if (s_destinations[i].checked) {
                        $destinations += s_destinations[i].value+' , ';
                    }
                }
                s_destinations = $destinations.substring(0,$destinations.length-3);

//                alert(s_destinations);

                var s_name = $('#de_name').val();
                var s_email = $('#de_email').val();
                var s_country = $('#de_country').val();
                var s_date = $('#de_date').val();
                var s_number = $('#de_numero').val();
                var s_duration = $('#de_duration').val();
//                var s_other = $('#de_otros').val();
                var s_comment = $('#de_comment').val();


                if (filter.test(s_email)){
                    sendMail = "true";
                } else{
                    $('#de_email').css("border-bottom", "2px solid #FF0000");
                    sendMail = "false";
                }
                if (s_name.length == 0 ){
                    $('#de_name').css("border-bottom", "2px solid #FF0000");
                    var sendMail = "false";
                }

                if(sendMail == "true"){
                    var datos = {

                        "txt_destinations" : s_destinations,

                        "txt_name" : s_name,
                        "txt_email" : s_email,
                        "txt_country" : s_country,
                        "txt_date" : s_date,
                        "txt_number" : s_number,
                        "txt_duration" : s_duration,
                        "txt_comment" : s_comment,

                    };
                    $.ajax({
                        data:  datos,
                        url:   "{{route('design_path')}}",
                        type:  'post',

                        beforeSend: function () {

                            $('#de_send').removeClass('show');
                            $("#de_send").addClass('d-none');

                            $("#loader5").removeClass('d-none');
                            $("#loader5").addClass('show');
                        },
                        success:  function (response) {
                            $('#de_form')[0].reset();
                            $('#de_send').removeClass('d-none');
                            $('#de_send').addClass('show');
                            $("#loader5").removeClass('show');
                            $("#loader5").addClass('d-none');
                            $('#de_alert').removeClass('d-none');
                            $("#de_alert").addClass('show');
                            $("#de_alert b").html(response);
                            $("#de_alert").fadeIn('slow');
                            $("#de_send").removeAttr("disabled");
                        }


                    });
                } else{
                    $("#de_send").removeAttr("disabled");
                }
            }

            $('#de_date').datepicker({
                dateFormat: 'yy-mm-dd',
                changeMonth: true,
                changeYear: true
            });



            $(document).ready(function () {
                $(window).on('load scroll', function () {
                    var scrolled = $(this).scrollTop();
                    $('#title').css({
                        'transform': 'translate3d(0, ' + -(scrolled * 0.2) + 'px, 0)', // parallax (20% scroll rate)
                        'opacity': 1 - scrolled / 400 // fade out at 400px from top
                    });
                    $('#hero-vid').css('transform', 'translate3d(0, ' + -(scrolled * 0.25) + 'px, 0)'); // parallax (25% scroll rate)
                });

                // video controls
                $('#state').on('click', function () {
                    var video = $('#hero-vid').get(0);
                    var icons = $('#state > span');
                    $('#overlay').toggleClass('fade');
                    if (video.paused) {
                        video.play();
                        icons.removeClass('fa-play').addClass('fa-pause');
                    } else {
                        video.pause();
                        icons.removeClass('fa-pause').addClass('fa-play');
                    }
                });
            });

        </script>




    @endpush

@stop